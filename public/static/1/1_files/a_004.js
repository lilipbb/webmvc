_.Module.define({path:"aside/pagelet/my_tieba",sub:{initial:function(e){this.initialEvent(e)},initialEvent:function(e){e.on("like_status_update",function(t){$(e.document).addClass("pagelet-loading"),e.refresh({url:t.url}).then(function(){$(e.document).removeClass("pagelet-loading")})})}}});_.Module.define({path:"aside/widget/my_tieba",requires:["tbui/widget/card","encourage-payment/widget/wallet_dialog","ueglib/widget/forbidden","encourage-payment/widget/tcharge_dialog","tbui/widget/bubble_tip"],sub:{initial:function(e){var i=this,t=e||{};i.blockInfo=e.blockInfo,i.user=PageData.user,i.forum=PageData.forum,i.balvInfo=t.balvInfo,i.style=t.style||"",i.isBySys=t.isBySys||!0,i.scoreTip=null,i.block_bubble=null,i.product=t.product||null},init:function(){var e=this;this.user.is_login&&e.showOfflineCard(),this.user.is_login&&(this.bindEvents(),$(".user_profile .sign_highlight").length>0&&this.show_orange_tip(),this.showNewpropsTip())},showOfflineCard:function(){var e=this,i=1*new Date;i>1408032e6||$.tb.Storage.get("balv_tdou_update")>i||(this.offline_card=this.requireInstance("tbui/widget/card",{content:'<span style="cursor:pointer;position: absolute;width: 10px; height: 10px; right: 5px; top: 6px;" class="j_close"></span><a target="_blank" class="j_link" href="/p/3199708402"><img style="margin: 4px 4px 0;" src="//tb1.bdstatic.com/tb/static-ucenter/img/offline1.png"></a>',clazz:"doupiao_offline",arrow_dir:"left",card_css:{width:172,"z-index":1010,left:198,top:9},arrow_pos:{left:-7,top:20},wrap:$(".user_profile"),card_leave_display:!0}),this.offline_card._j_card.on("click",".j_close",function(){$.tb.Storage.set("balv_tdou_update",i+864e5),e.offline_card._j_card.remove()}).on("click",".j_link",function(){$.tb.Storage.set("balv_tdou_update",i+864e5),e.offline_card._j_card.remove()}),this.offline_card.showCard())},bindEvents:function(){var e=this;$("#user_info").on("click",".j_score_num",function(i){i.preventDefault(),e.requireInstance("encourage-payment/widget/wallet_dialog").show()}),$(".userliked_ban_content").on("click.bawuAppealLink",".j_appealLink",function(){$.stats.track("balvAppealLink","uegCount","bawuAppeal","click")}),$(".userlike_blacked").bind("mouseover",function(){e.show_black_tip($(this))});var i=this.requireInstance("ueglib/widget/forbidden",[this.blockInfo]);$(".userlike_prisoned").bind("mouseover",function(){e.blockInfo.days_tofree>0&&e.blockInfo.days_tofree<360?e.show_shortblock_tip($(this),i.getForbiddenInfo()):e.show_block_tip($(this))}),$("body").delegate(".tbmall_tip_close","click",function(){return $("#tbmall_tip_card").remove(),e.tbmallTip=null,$.cookie("close_tbmall_tip","1",{expires:365}),!1}),$("#j_tcharge_dialog").on("click",function(){e.requireInstance("encourage-payment/widget/tcharge_dialog")})},show_shortblock_tip:function(e,i){var t=['<div style="width:205px;text-align:left;margin:6px 0px 6px 10px;">','<div style="width:205px;">',"<span>\u4f60\u5df2\u88ab#{op}\u5c01\u7981\uff0c#{message}</span>","<span>\u5c01\u7981\u671f\u95f4\u4e0d\u52a0\u7ecf\u9a8c\uff0c\u5934\u8854\u548c\u6743\u9650\u6536\u56de\u3002</span>","</div>",'<div style="text-align:right;margin-right:5px;">','\u53bb<a data-site="#{site}" ','href="/pmc/#{page}?fid=#{fid}" ','class="ueg_pmc-link ueg_track-#{site} j_appealLink"','target="_blank">\u7533\u8bf7\u6062\u590d</a>',"</div>","</div>"].join("");this.block_render(e,$.tb.format(t,{site:"balvAside",message:$.tb.escapeHTML(i.forbiddenReason),page:"bawu",fid:PageData.forum.id}))},show_block_tip:function(e){var i=['<div style="width:205px;text-align:left;margin:6px 0px 6px 10px;">',"<div>\u4f60\u5df2\u88ab\u7cfb\u7edf\u6c38\u4e45\u5c01\u7981\uff0c<br/>\u5c01\u7981\u671f\u95f4\u4e0d\u52a0\u7ecf\u9a8c\uff0c\u5934\u8854\u548c\u6743\u9650\u6536\u56de\u3002</div>",'<div style="text-align:right;margin-right:5px;">','<a data-site="#{site}" ','href="/pmc/index" ','class="ueg_pmc-link ueg_track-#{site}" ','target="_blank">\u67e5\u770b\u8be6\u7ec6\u4fe1\u606f</a>',"</div>","</div>"].join("");this.block_render(e,$.tb.format(i,{site:"balvAside"}))},show_black_tip:function(e){var i=[];i.push("<div style='width:180px;text-align:left;margin:6px 0px 6px 10px;'>"),i.push("<span>\u4f60\u5df2\u88ab\u5427\u4e3b\u62c9\u5165\u9ed1\u540d\u5355\uff0c</span></br><span>\u4f60\u5728\u672c\u5427\u7684\u5934\u8854\u548c\u6743\u9650\u4e5f\u88ab\u6536\u56de\u3002</span>"),i.push("</div>"),this.block_render(e,i.join(""))},block_render:function(e,i){if(!this.block_bubble){var t=this,o={content:i,arrow_dir:"up",bubble_css:{top:36,right:4,width:232,"z-index":9999},arrow_pos:{left:209},attr:"",wrap:e,closeBtn:!0};this.block_bubble=this.requireInstance("tbui/widget/bubble_tip",[o]),this.block_bubble.j_bubble.find(".j_content").css("padding","2px"),this.block_bubble.showBubble(),this.block_bubble.bind("onclose",function(){t.block_bubble.closeBubble(),t.block_bubble=null}),setTimeout(function(){t.block_bubble&&(t.block_bubble.closeBubble(),t.block_bubble=null)},5e3)}},show_orange_tip:function(){if("false"!=$.cookie("close_sign_tip_o")){$.cookie("close_sign_tip_o",!0,{expires:14});var e={content:"\u8fde\u7eed\u7b7e\u523030\u5929ID\u5373\u53ef\u9ad8\u4eae\u5c55\u793a\uff0c\u4e00\u8d77\u95ea\u8000\u5427\uff01",arrow_dir:"down",bubble_css:{top:3,right:25,width:145,"z-index":9999},arrow_pos:{left:88},attr:" ",wrap:$(".user_profile .user_name"),closeBtn:!0};this.block_bubble=this.requireInstance("tbui/widget/bubble_tip",[e]),bubble.j_bubble.find(".j_body").css("padding-right","3px"),bubble.showBubble(),bubble.bind("onclose",function(){$.cookie("close_sign_tip_o",!1,{expires:14})},!0),setTimeout(function(){$(".j_wrap .j_close").click()},8e3)}},showNewpropsTip:function(){var e=$.cookie("NEWS_PROPS_NOTICE"),i=this.user.global&&this.user.global.tbmall_newprops||"";(!e&&i>0||e&&i>e)&&this.buildNewpropsTip()},buildNewpropsTip:function(){var e=this,i={content:'<a class="j_newprops_tip" href="/tbmall/home?sn=1" target="_blank" style="text-align:center;display:block;">\u6709\u65b0\u9053\u5177\u4e0a\u7ebf\u54e6~</a>',arrow_dir:"up",arrow_pos:{left:40},bubble_css:{top:-35,left:100,width:100},wrap:$("#j_profile_pop"),closeBtn:!0},t=new UiBubbleTipBase(i),o="";t.bind("onclose",function(){t.closeBubble(),o=e.user.global&&e.user.global.tbmall_newprops||"",$.cookie("NEWS_PROPS_NOTICE",o,{expires:30,path:"/"})}),t.showBubble(),t.j_bubble.find(".j_newprops_tip").on("click",function(){$.post("/tbmall/post/addpropstoucenter",null,function(){}),t.closeBubble(),o=e.user.global&&e.user.global.tbmall_newprops||"",$.cookie("NEWS_PROPS_NOTICE",o,{expires:30,path:"/"})})}}});_.Module.define({path:"user/widget/member_api",sub:{initial:function(){},getMemberNameClass:function(e,i){var t="",n=(new Date).getTime();return n>13962816e5&&1396368e6>n&&4!=i?t=" vip_red ":(e&&e.level&&e.level.end_time>n/1e3&&(t=" vip_red "),t)}}});