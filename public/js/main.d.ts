declare function echo(mes?:any):void;

/**
 * @return {number} 当前时间，单位秒
 */
declare function time():number;

declare function querySelectorLast(name:string):any;

declare function querySelectorAllKeyframes():{[key:string]:any};

declare function querySelectorKeyframes(name:string, process):any;

declare class Vector2{
    constructor(x,y);
    SqrLength():number;
    Length():number;
    Add(v:Vector2):Vector2;
    Sub(v:Vector2):Vector2;
    Dot(v:Vector2):Vector2;
    Normalize():Vector2;
}