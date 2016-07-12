
$(function () {
    
	$("#avartar").uploadify({
            
		//绑定上传的flash脚本
		swf : "/plugins/uploadify/uploadify.swf",
                buttonText:"点击上传",
		method:"post",
		fileTypeExts:"*.jpg;*.jpeg;*.png;*.gif",
		fileSizeLimit:1*1024*1024,
		formData : {
			_token : document.upload._token.value,
			uid : document.upload.uid.value,
		},
//                debug:true,
		//提交处理地址
		uploader : "/Admin/auth/adminAvartar",
		//上传成功时 的处理
		onUploadSuccess : function (file, txt, response) {
			eval("var result =" +  txt);
			if (!result.status) {
				alert(result.info);
			}
			//预览图片
			$("#avartar").attr("src", result.info);
		}
	})
})
