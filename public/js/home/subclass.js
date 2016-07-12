$(function(){
	$(".sonclass").click(function(){
		$.ajax({
			type : "get",
			url : "/Home/shows",
			data : "cid=" + $(this).attr("value"),
			dataType : "json",
			success : function (result) {
				location.reload();
			}
		});
	});
})