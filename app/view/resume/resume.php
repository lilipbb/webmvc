<!DOCTYPE html>
<html>
<head title="彭滨滨的项目介绍" keywords="" description="" ie8="false">
    <css rel="stylesheet" href="style.css"></css>
    <style>
        hr{height:10px;border-top:1px solid black;}
        .mainitem{margin:1em;line-height:2em;}
        video{width:100%;}
        body{
            background:url bg.jpg;
            margin:0;
        }
        .header {
            position: fixed;
            display:block;
            top:0;
            width:100%;
            text-align:center;
            background:url bg2.jpg;
            height:50px;
            z-index:10;
            input{
                position:absolute;
                box-shadow: 2px 2px 2px #000;
                height:36px;
                margin-top:7px;
            }
            input:nth-of-type(1){
                left:30%;
            }
            input:nth-of-type(2){
                right:30%;
            }
        }
        a{
            color:blue;
        }
        #downloadapk{
            cursor: pointer;
        }
    </style>
    <style min="800">table,tr,td,th{margin:0;border:0;} .itemimg{width:49%;}</style>
    <style min="400" max="800">*{font-size: 0.97em; } </style>
    <style max="400">*{font-size: 0.93em;} </style>
    <style max="800">.itemimg{width:98%;} .data-content{width:100%;} #chpagep{left:10%;} #chpagen{right:10%;}</style>
</head>
<body>
<div class="header">
<input id="chpagep" type="button" value="上一个项目" <?if($this->index==0)echo 'disabled';?>>
<input id="chpagen" type="button" value="下一个项目" <?if($this->index==4)echo 'disabled';?>>
</div>
<script>
    var index=<?=$this->index?>;
    chpagep.addEventListener('click',function(){
        index--;
        chweb();
    });
    chpagen.addEventListener('click',function () {
       index++;
       chweb();
    });
    function chweb() {
        location.href="?"+index;
    }
</script>
<div class="content">
    <div class="data-content">
        <div data-id="maskoftruth" style="display: block;">
            <h1 style="margin-top:65px;">{$title[$index]}</h1>
            <hr style="border-top:2px solid #333;">
            <?switch ($this->index):?><?case 0:?>
            <div>
                <br>
                <table width="100%" border="2px">
                    <tr>
                        <th height="50" scope="row">开 发 环 境</th>
                        <td>Unity5.6、androidstudio、xcode</td>
                        <td rowspan="4"><div align="center">
                                <div effect="1" src="resume/diudiu.png" style="width:186px;height:181px;display:inline-block;cursor:pointer" time="3000" onclick="downloadapk.click()">
                                 <img src="resume/diudiu.png" width="186" height="181">
                                </div>
                         <br><a id="downloadapk" onclick="location.href='http://apk-1251891271.cossh.myqcloud.com/diudiu.apk'">android下载</a></div></td>
                    </tr>
                    <tr>
                        <th height="50" scope="row">项 目 时 间</th>
                        <td>2017年6月~2017年底</td>
                    </tr>
                    <tr>
                        <th height="50" scope="row">第三方SDK</th>
                        <td>Trpay、AliceBot、语音识别ASR等</td>
                    </tr>
                    <tr>
                        <th height="50" scope="row">服&nbsp;&nbsp;&nbsp;务&nbsp;&nbsp;&nbsp;器</th>
                        <td>C#socket、php </td>
                    </tr>
                </table>
                <br><hr><h3>项目介绍</h3>
                <div class="mainitem">
                    <b>一、	总体系统</b><br>
                    1、装备系统、装备图标根据稀有度不同特效不同。<br>
                    2、每日登入、其中特效使用了mesh动态生成。<br>
                    3、商店，每隔1h会更新特殊物品、目前充值中的支付宝可以使用、物品里头的动态壁纸也可以下载。<br>
                    4、多语言（支持中文和英文切换）。<br>
                    5、热更新（支持ios、更新包括scene、prefeb、audio、pic、scriptobj）。<br>
                    6、对话输入框（支持语音转文字输入）。<br>
                    7、物品编辑器。<br>
                    8、排行榜（每隔10分钟更新一次）。<br>
                    9、游戏大厅以及npc的智能对话。<br>
                    <b>二、	服务器</b><br>
                    1、服务器整体为分布式架构、每个小服务器都有各自的tcp、ip端口，与客户端通信同时采用了短连接和长连接，比如更新服务器就采用长连接。<br>
                    2、其中的通信层为抽象层，在设置中可以配置后反射加载应用层开发的dll。<br>
                    3、通信底层采用protobuf和自定义的格式传输、最大限度的压缩了数据大小。<br>
                    4、使用了动态rsa对关键数据进行加密传输。<br>
                    5、在unity中生成的单个资源文件大于2Mb的使用了腾讯云进行存储（比如版本）、服务器只把地址传输给客户端进行下载、其它的则服务器直接传输。<br>
                    6、其中经常变动的数据（比如公告）则在编辑器中编辑后保存成json更新。<br>
                    7、数据库使用了mysql，配合系统任务会定时进行数据库的备份。<br>
                    8、服务器使用了智能对话sdk、可以识别中文和英文。<br>
                    <b>三、	战斗系统</b><br>
                    1、目前战斗系统正在制作，只完成了基本部分。<br>
                    2、血条的显示、扣血特效、人物动作、战斗结算等基本完成。<br>
                    3、物体的破碎和染色。<br>
                </div>
            </div>
                <?break; ?>
            <?case 1:?>
                <div>
                    <br>
                    <table width="100%" border="2px">
                        <tr>
                            <th height="52" scope="row">开 发 环 境</th>
                            <td>Unity5.6、vs2015</td>
                            <td rowspan="4"><div align="center">
                                    <div effect="1" src="resume/draw.png" style="width:186px;height:181px;display:inline-block;cursor: pointer;" time="3000" onclick="downloadapk.click()">
                                        <img src="resume/draw.png" width="186" height="181">
                                    </div>
                                    <br><a id="downloadapk" onclick="location.href='http://apk-1251891271.cossh.myqcloud.com/draw.apk'">android下载</a></div></td>
                        </tr>
                        <tr>
                            <th height="49" scope="row">项 目 时 间</th>
                            <td>2017年11月~2018年1月</td>
                        </tr>
                        <tr>
                            <th height="46" scope="row">支 持 功 能</th>
                            <td>绘图、拍照</td>
                        </tr>
                        <tr>
                            <th height="45" scope="row">责 任 描 述</th>
                            <td>全部为个人开发 </td>
                        </tr>
                    </table>
                    <br><hr><h3>项目介绍</h3>
                    <div class="mainitem">
                        <b>一、	总体描述</b><br>
                        1、工程总体为两个摄像机，其中一个负责绘画、一个负责显示。<br>
                        2、ui可以自适应，在不同宽高比的机器上会显示不同的ui。<br>
                        3、总共有5个图层可以进行绘画，可以对某个图层设置照片叠底、相加。<br>
                        4、图层可以进行复制、合并、删除、显示和整体透明度的调整。<br>
                        5、由于自带的粒子系统效率太低，这里采用了自己写的粒子系统。<br>
                        <b>二、	实现功能</b><br>
                        1、颜色的自由选择，可以采集屏幕上任意点的颜色。<br>
                        2、画笔的宽度、透明度、笔触的选择。<br>
                        3、使用直线、曲线、自由进行绘制，其中直线和曲线为linerender、并且可以随时编辑颜色、粗细、类型，自由绘制则是使用粒子点。<br>
                        4、粒子笔刷，可以使用自定义或者内置的图像进行绘制，可以调整间距、旋转、分散、颜色等。<br>
                        5、使用填充或者渐变来进行绘制，配合图层的透明度锁定可以做出各种效果、其中渐变使用的颜色为选择的颜色和对应上下的颜色。<br>
                        6、可以进行文字的插入、可以自由调整粗体斜体。<br>
                        7、对图层可以进行缩放、移动、旋转。两点同时移动可以拖动整个画布，两点还可以进行整个画布的缩放。<br>
                        8、支持手机的照相、图库功能。<br>
                        <b>三、	shader</b><br>
                        1、按钮的点击效果使用了shader进行整体处理。<br>
                        2、图层的各自合并方式也使用不同的shader进行计算。<br>
                        3、图层效果的中透明度的合成采用了屏幕像素，由于屏幕像素的颜色是计算过透明度的，所以这写shader采用了特殊的混合方法。<br>
                    </div>
                </div>
                <?break; ?>
            <?case 2:?>
                <div class="noshow">
                    <br>
                    <table width="100%" border="2px">
                        <tr>
                            <th height="52" scope="row">开 发 环 境</th>
                            <td>Unity5.0、vs2013</td>
                            <td rowspan="4"><div align="center">
                                    <div effect="1" src="resume/yhydy.png" style="width:186px;height:181px;display:inline-block;cursor: pointer;" time="3000" onclick="downloadapk.click()">
                                        <img src="resume/yhydy.png" style="width:186px;height:181px;">
                                    </div>
                                    <br><a id="downloadapk" onclick="location.href='http://apk-1251891271.cossh.myqcloud.com/永恒伊甸园.apk'">android下载</a></div></td>
                        </tr>
                        <tr>
                            <th height="49" scope="row">项 目 时 间</th>
                            <td>2015年5月~2016年初</td>
                        </tr>
                        <tr>
                            <th height="46" scope="row">第三方插件</th>
                            <td>easytouch，dotween和bettertail</td>
                        </tr>
                        <tr>
                            <th height="45" scope="row">服&nbsp;&nbsp;&nbsp;务&nbsp;&nbsp;&nbsp;器</th>
                            <td>Photon</td>
                        </tr>
                    </table>
                    <br><hr><h3>项目介绍</h3>
                    <div class="mainitem">
                        <b>一、	总体系统</b><br>
                        1、装备系统、背包系统（装备随机附加能力）。<br>
                        2、商店（使用商店等级来控制卖出的物品的内容）。<br>
                        3、技能系统(技能主要分为攻击，辅助和被动3方面，技能的学习、装备和等级等)。<br>
                        4、任务系统（每隔一段时间自动更新，并且会根据游戏内设置的物品自动调整奖励）。<br>
                        5、对话系统（每个npc的对话和特殊事件的发生）。<br>
                        6、采集（每个地图拥有自己的采集地点的物品）。<br>
                        <b>二、	战斗系统</b><br>
                        1、怪物的基本ai（随机巡逻和寻路，技能的使用等）。<br>
                        2、怪物的随机生成，除了等级外还分为5个阶级，普通怪，精英怪，超级怪，究级怪和？？？，不同阶段怪物难度和掉落都完全不同。<br>
                        3、角色的普通连击和技能连击，使用剑类武器普通攻击可以多段。<br>
                        4、怪物的锁定和视角的自由转动，锁定分为半锁定和全锁定，其中全锁定视角会根据锁定怪物的位置一直变化。<br>
                        5、魔法的蓄力系统，分为3个等级阶段的蓄力，范围和威力都会变化。<br>
                        6、武器技能系统，可以通过蓄力但是可以无消耗的释放。<br>
                        7、打击效果的增强，屏幕背景的明暗，释放技能等屏幕的震动，怪物的击退，击飞等。<br>
                        <b>三、	网络部分</b><br>
                        1、帐号的创建和mysql数据库保存。<br>
                        2、角色和怪物的生成和位置同步。<br>
                        3、对话大厅。<br>
                    </div>
                </div>
            <?case 3:?>
                <div>
                    <br>
                    <table width="100%" border="2px">
                        <tr>
                            <th height="52" scope="row">开 发 环 境</th>
                            <td>androidstudio、live2d</td>
                        </tr>
                        <tr>
                            <th height="49" scope="row">项 目 时 间</th>
                            <td>2017年3月~2017年4月</td>
                        </tr>
                        <tr>
                            <th height="46" scope="row">支 持 功 能</th>
                            <td>触摸交互</td>
                        </tr>
                        <tr>
                            <th height="45" scope="row">责 任 描 述</th>
                            <td>全部为个人开发 </td>
                        </tr>
                    </table>
                    <br><hr><h3>项目介绍</h3>
                    <div class="mainitem">
                        <b>一、	总体描述</b><br>
                        1、一、工程总共有2位动漫人物。<br>
                        2、使用了ps进行绘图，live2d进行模型和动作的制作。<br>
                        3、人物有对应的心情，心情低的时候反应在动作上。<br>
                        <b>二、	实现功能</b><br>
                        1、可以在屏幕上2根手指进行自由缩放，3根手指进行平移。<br>
                        2、所有的动作都是复合多个基本动作而成的。<br>
                        3、摇晃手机人物会有眩晕的动作。<br>
                        4、可以在设置页面进行触摸，声音，以及分时段切换背景图片的设置。<br>
                        5、不同时间段的待机动画有所不同。<br>
                        6、点击不同部位导致心情的变化，变化会在左上角显示。<br>
                        7、白天、黄昏、夜晚人物整体的渲染会有所变化。<br>
                        8、触摸屏幕移动人物会注视触摸点。<br>
                        9、图片和动作的加密解密。<br>
                        <b>三、	应用场景</b><br>
                        1、可以用作手机的动态壁纸。<br>
                        2、可以在游戏里头充当看板娘，增加游戏交互性。<br>
                    </div>
                </div>
            <?break; ?>
            <?case 4:?>
                <div>
                    <br>
                    <table width="100%" border="2px">
                        <tr>
                            <th height="52" scope="row">开 发 环 境</th>
                            <td>phpstorm、vs、nodejs</td>
                        </tr>
                        <tr>
                            <th height="49" scope="row">项 目 时 间</th>
                            <td>2016年3月~2016年7月,2018年10月~现在</td>
                        </tr>
                        <tr>
                            <th height="46" scope="row">支 持 功 能</th>
                            <td>webmvc支持web端，pbb框架可以作为unity、ccc等制作游戏的服务</td>
                        </tr>
                        <tr>
                            <th height="45" scope="row">责 任 描 述</th>
                            <td>全部为个人开发 </td>
                        </tr>
                    </table>
                    <br><hr><h3>项目介绍</h3>
                    <div class="mainitem">
                        <b>一、	webmvc框架(php)功能描述</b><br>
                        1、支持win和linux，可以一键进行配置。<br>
                        2、可以将框架整体进行编译成扩展，性能接近c。<br>
                        3、自己写的php脚本也可以方便的编译成扩展。<br>
                        4、php脚本实现自动加载。<br>
                        5、数据库操作非常方便，根据速度要求可以选择安全或者不安全的方法。<br>
                        6、自己实现了一套前端模板，比tp和laravel更方便、可拓展性也更强，前端可以写出高复用的精简页面。<br>
                        7、配置一下即可支持多语言。<br>
                        8、支持typescript和scss。<br>
                        <b>二、	pbb分布式框架(netcore)功能描述</b><br>
                        1、支持win和linux，在linux目前已经很稳定了，性能高于java略低于c++。<br>
                        2、框架整体采用ecs架构，使用组件开发服务器有许多优点。<br>
                        3、支持单进程部署也支持分布式部署，简单的修改配置就能进行切换，这样在
                        开发期间的调试将非常迅速。<br>
                        4、支持服务器逻辑热更新。<br>
                        5、网络底层使用proto通信，最大限度压缩字节。<br>
                        6、网络通信部分采用rpc通信，可以一键生成服务器和客户端所需的代码，
                        无论前端还是后端都可以非常简单快速的进行网络开发。<br>
                        7、网络通信，访问数据库等费时io操作都采用异步，普通逻辑则运行在主线程，
                        可以最大限度的提高并发和减少多线程代码的bug。<br>
                        8、协程c#端采用async,js端采用promise。<br>
                        9、支持各种广播、客户端和服务器、服务器和服务器间的通信。<br>
                        10、前端目前支持unity、cocoscreator和egret。<br>
                        11、数据库支持mysql和mongodb。<br>
                    </div>
                </div>
                <?break; ?>
            <?endswitch;?>
            <div><hr>
                <h3>项目截图</h3>
                <? foreach ($this->getImages() as $image):?>
                <img src="{$image}" auto class="itemimg">
                <?endforeach;?>
            </div>
            <?if($this->index<3):?>
                <div><hr>
                    <h3>视频介绍</h3>
                    <video id="myvideo" src="{$name}.mp4" controls>
                </div>
            <?endif?>
        </div>
        <div>
            <qqtalk qq="542896590" style="float:right"></qqtalk>
            <hr>
            <h3>给我发送信息</h3>
            <div class="comment">
                <div class="comment-post" style="margin-top:0px;">
                    <p><input id="comment-post-name" placeholder="请输入名称(可空)" maxlength="20"></p>
                    <p><textarea id="comment-post-data" placeholder="请输入内容(300字以内)" maxlength="300"></textarea></p>
                    <p><button id="comment-post-btn">发送</button></p>
                    <script>
                        querySelectorLast("button").addEventListener('click',function(){
                            var title=document.querySelector("#comment-post-name").value;
                            var mes=document.querySelector("#comment-post-data").value;
                            if(mes==''){
                                alert("内容不能为空!");return;
                            }
                            if(mes.match(/&/)){alert("内容不能有&符号!");return;}
                            ajaxPost("sendMail?"+encodeURI(title)+"&"+encodeURI(mes),function(r){
                                if(r==true)alert('发送成功!');
                                else alert("发送失败!");
                            },10000);
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>