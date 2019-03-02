define(["require", "exports", "./lib/cuon-utils", "./lib/cuon-matrix"], function (require, exports, cuon_utils_1) {
    "use strict";
    Object.defineProperty(exports, "__esModule", { value: true });
    var can = document.getElementById("can");
    var gl = cuon_utils_1.getWebGLContext(can, true);
    var vert = "\n    attribute vec4 a_Position;\n    attribute vec4 a_Color;\n    uniform mat4 u_ViewMatrix;\n    varying vec4 v_Color;\n    void main(){\n    gl_Position=u_ViewMatrix*a_Position;\n    v_Color=a_Color;\n    }\n    ";
    var frag = "\n    precision mediump float;\n    varying vec4 v_Color;\n    void main(){\n        gl_FragColor=v_Color;\n    }\n    ";
    cuon_utils_1.initShaders(gl, vert, frag);
    function initVertexBuffer() {
        var vecAndColors = new Float32Array([
            0., 0.5, -0.4, 0.4, 1., 0.4,
            -0.5, -0.5, -0.4, 0.4, 1., 0.4,
            0.5, -0.5, -0.4, 1, 0.4, 0.4,
            0.5, 0.4, -0.2, 1., 0.4, 0.4,
            -0.5, 0.4, -0.2, 1., 1., 0.4,
            0., -0.6, -0.2, 1., 1., 0.4,
            0., 0.5, 0., 0.4, 0.4, 1.0,
            -0.5, -0.5, 0., 0.4, 0.4, 1.0,
            0.5, -0.5, 0., 1.0, 0.4, 0.4,
        ]);
        var buffer = gl.createBuffer();
        gl.bindBuffer(gl.ARRAY_BUFFER, buffer);
        gl.bufferData(gl.ARRAY_BUFFER, vecAndColors, gl.STATIC_DRAW);
        var esize = vecAndColors.BYTES_PER_ELEMENT;
        var a_Position = gl.getAttribLocation(gl.program, "a_Position");
        gl.vertexAttribPointer(a_Position, 3, gl.FLOAT, false, esize * 6, 0);
        gl.enableVertexAttribArray(a_Position);
        var a_Color = gl.getAttribLocation(gl.program, "a_Color");
        gl.vertexAttribPointer(a_Color, 3, gl.FLOAT, false, esize * 6, 3 * esize);
        gl.enableVertexAttribArray(a_Color);
        return 9;
    }
    var n = initVertexBuffer();
    var u_viewMatrix = gl.getUniformLocation(gl.program, "u_ViewMatrix");
    var vm = new Matrix4();
    vm.setLookAt(0.2, 0.25, 0.25, 0, 0, 0, 0, 1, 0);
    gl.uniformMatrix4fv(u_viewMatrix, false, vm.elements);
    gl.clearColor(0, 0, 0, 1);
    gl.clear(gl.COLOR_BUFFER_BIT);
    gl.drawArrays(gl.TRIANGLES, 0, n);
});
//# sourceMappingURL=hello.js.map