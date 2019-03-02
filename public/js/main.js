function echo(mes) {
    console.log(mes);
};
function time() {
    return new Date().getTime() / 1000.;
}
Image.get = function (src, fun) {
    var img = new Image();
    img.src = '//' + location.host + '/images/' + src;
    if (fun !== undefined) {
        img.onload = function () {
            fun.apply(img);
        };
    }
    return img;
};
String.prototype.substr = function (start, end) {
    if (start < 0) start = this.length + start;
    if (end === undefined) end = this.length;else {
        if (end < 0) end = this.length + end;else end = start + end;
    }
    var str = [];
    for (; start < end && start < this.length; start++) {
        str.push(this[start]);
    }
    return str.join('');
};
if (typeof Vue !== 'undefined') {
    Vue.prototype.update = function (data) {
        for (var k in data) {
            Vue.set(this.$data, k, data[k]);
        }
    };
}
function querySelectorLast(name) {
    var selects = document.querySelectorAll(name);
    if (selects.length > 0) return selects[selects.length - 1];
    return null;
}
function querySelectorAllKeyframes() {
    var keyframes = {};
    var styles = document.styleSheets;
    for (var i in styles) {
        var style = styles[i];
        for (var ii in style.cssRules) {
            var rule = style.cssRules[ii];
            if (rule.type == (CSSRule.KEYFRAMES_RULE || 8)) {
                keyframes[rule.name] = rule;
            }
        }
    }
    return keyframes;
}
function querySelectorKeyframes(name, process) {
    if (typeof _keyframes === 'undefined' || !_keyframes.hasOwnProperty(name)) _keyframes = querySelectorAllKeyframes();
    if (process !== undefined && _keyframes[name] !== undefined) return _keyframes[name].findRule(process);
    return _keyframes[name];
}
function Vector2(x, y) {
    this.x = x || 0;
    this.y = y || 0;
}
Vector2.prototype.SqrLength = function () {
    return this.x * this.x + this.y * this.y;
};
Vector2.prototype.Length = function () {
    return Math.sqrt(this.SqrLength());
};
Vector2.prototype.toString = function () {
    return "x:" + this.x + " y:" + this.y + "\n";
};
Vector2.prototype.Add = function (v) {
    return new Vector2(this.x + v.x, this.y + v.y);
};
Vector2.prototype.Sub = function (v) {
    return new Vector2(this.x - v.x, this.y - v.y);
};
Vector2.prototype.Dot = function (v) {
    return this.x * v.x + this.y * v.y;
};
Vector2.prototype.Normalize = function () {
    var l = this.Length();
    if (l != 0) return new Vector2(this.x / l, this.y / l);
    return new Vector2();
};
