
/* 
 * @Author 张海龙
 * @Create on 2016-7-8 14:05:56
 */

$(function() {
    $(".isSale").click(function() {
        $.ajax({
            type: "post",
            url: "/Admin/goods/issale",
            data:"gid="+$(this).attr("gid"),
            dataType:"json",
            success: function(result) {       
                    location.reload();
            }
        });
    });
     $(".isNew").click(function() {
        $.ajax({
            type: "post",
            url: "/Admin/goods/isnew",
            data:"gid="+$(this).attr("gid"),
            dataType:"json",
            success: function(result) {       
                    location.reload();
            }
        });
    });
     $(".isRecom").click(function() {
        $.ajax({
            type: "post",
            url: "/Admin/goods/isrecom",
            data:"gid="+$(this).attr("gid"),
            dataType:"json",
            success: function(result) {       
                    location.reload();
            }
        });
    });
     $(".isHot").click(function() {
        $.ajax({
            type: "post",
            url: "/Admin/goods/ishot",
            data:"gid="+$(this).attr("gid"),
            dataType:"json",
            success: function(result) {       
                    location.reload();
            }
        });
    });
     $(".del").click(function() {
         if( confirm("确定要删除吗？"))
        $.ajax({
            type: "post",
            url: "/Admin/goods/gooddel",
            data:"gid="+$(this).attr("gid"),
            dataType:"json",
            success: function(result) {       
                    location.reload();
            }
        });
    });
    $(".storeNum").change(function(){
//        alert($(this).val());
        $.ajax({
            type: "post",
            url: "/Admin/goods/changestore",
            data:"gid="+$(this).attr("gid")+"&num="+$(this).val(),
            dataType:"json",
            success: function(result) {       
                       alert(result.info);
                if (!result.status) location.reload();
            }
        }); 
    });
})
