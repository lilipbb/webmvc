<?php
const DEBUG=true;
const CACHE_TIME=3;//缓存配置 单位秒
const WEB_NAME='localhost';

//控制器默认入口文件,不含后缀,比如在目录下这样写pbb/index
const CONTROLS_MAIN='resume/resume';
const CONTROLS_FUN='show';

const SCSSTAG_OPEN=true;//是否开启内联sass支持
const VIEWCOM_OPEN=true;//php视图是否使用组件

//是否用composer组件的自动加载,如果有composer下载的组件则必须开启,对性能影响大,第一次开启需要在命令框里头修复html
const COMPOSER_LOAD=false;

//是否使用腾讯云加速,需要去腾讯云里头上传文件,把public目录下的文件都上传
const USE_YUN=true;
const YUN_NAME="//public-1251891271.cossh.myqcloud.com";

//多语言配置{id}或者{one&&two} ，其中id在config/lang里头配置
const LANG_SWITCH=true;
const LANG_ALL=['en'=>'english','zh'=>'简体中文'];//全部语言
const LANG_NORMAL='zh';//默认语言,如果浏览器默认语言不在全部语言列表中则使用这个
const LANG_SPLIT='&&';

//目录常量
const NEWLINE="\r\n";
define('PATH_ROOT',str_replace('\\','/',substr($_SERVER['DOCUMENT_ROOT'],0,-7)));
const PATH_APP=PATH_ROOT . 'app/';
const PATH_CONTROLS= PATH_APP . 'controls/';
const PATH_MODEL=PATH_APP . 'model/';
const PATH_VIEW=PATH_APP . 'view/';
const PATH_COMPONENT=PATH_APP . 'component/';

const PATH_PUBLIC=PATH_ROOT . 'public/';
const PATH_CSS=PATH_PUBLIC . 'css/';
const PATH_IMAGES=PATH_PUBLIC . 'images/';
const PATH_JS=PATH_PUBLIC . 'js/';
const PATH_VIDEO=PATH_PUBLIC . 'video/';
const PATH_STATIC=PATH_PUBLIC . 'static/';
const PATH_OTHER=PATH_PUBLIC . 'other/';
const PATH_UPLOADS=PATH_PUBLIC . 'uploads/';

const PATH_CACHE=PATH_ROOT . 'tmp/cache/';
const PATH_CORE=PATH_ROOT . 'core/';
const PATH_CONFIG=PATH_ROOT . 'config/';
const PATH_LANG=PATH_CONFIG . 'lang/';
