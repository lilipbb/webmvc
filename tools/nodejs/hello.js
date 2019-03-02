require("./main");
var fs=require("./fsync");
var vm=require('vm');
var cheerio=require('cheerio');
$=cheerio.load("<div a='name' bbb ccc>1111</div>");
$("div").text(111);
console.log($.html());
var sandbox=vm.createContext({});
var code="var a=[1,2,3];";
vm.runInContext(code,sandbox);
echo(sandbox);


