
$(function () {
	$("#main-tab select").change(function () {
		//询问是否确定修改
		var result = confirm("确定修改分组权限吗？");
		if (result == false) {
			location.reload();
			return;
		}
		//修改分组
		$.ajax({
			type : "post",
			url : "/Admin/auth/setGroup",
			data :  "gid=" + $(this).val() + "&uid=" + $(this).attr("uid"),
			dataType: "json",
			success : function (result) {
                            alert(result.info);
                            if (!result.stauts) location.reload();
			}
		});
	});
        $(".del").click(function(){
            var result = confirm("确定要删除吗？");
		if (result == false) {
			location.reload();
			return;
		}
                 $.ajax({
                    type : "post",
                    url : "/Admin/auth/adminDel",
                    data :   "uid=" + $(this).attr("uid"),
                    dataType: "json",
                    success : function (result) {
                        alert(result.info);
                        if (!result.stauts) location.reload();
                    }
            });
        });
        
        $(".lock").click(function(){
            $.ajax({
                type:"post",
                url:"/Admin/auth/adminLock",
                data:"uid="+$(this).attr("uid"),
                dataType:"json",
                
            })
        });
       
})

