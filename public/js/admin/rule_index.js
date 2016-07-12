
/* 
 * @Author 张海龙
 * @Create on 2016-7-8 14:05:56
 */

$(function() {
    $("input:radio").click(function() {
//alert($(this).val());
        $.ajax({
            type: "post",
            url: "/Admin/auth/ruleLock",
            data:"id="+$(this).attr("rid")+"&status="+$(this).val(),
            dataType:"json",
            success: function(result) {
                alert(result.info);
                if (!result.status)
                    location.reload();
            }
        });
    })

})
