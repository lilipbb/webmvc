_.Module.define({path:"forum/pagelet/focus_btn",sub:{initial:function(n){this.initialEvent(n)},initialEvent:function(n){n.on("like_status_update",function(t){$(n.document).addClass("pagelet-loading"),n.refresh({url:t.url}).then(function(){$(n.document).removeClass("pagelet-loading")})})}}});