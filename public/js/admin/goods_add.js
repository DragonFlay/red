$(function () {
    $("#im").uploadify({
        swf : "/plugins/uploadify/uploadify.swf",
        //设置按钮样式
        buttonText : "点击上传",
        width:100,
        //上传要求的设置
        fileSizeLimit : 1*1024*1024,
        fileTypeExts : "*.jpg;*.jpeg;*.png;*.gif",
        //表单请求的方式
        method : "post",
        //表单数据
        formData : {
            _token : document.fm._token.value,
        },
        //表单提交地址
        uploader : "/Admin/goods/im",
        //上传成功的处理
        onUploadSuccess : function (msg, txt, file) {
            eval("var result = " + txt);
            if (!result.status) alert(result.info)
            else {
                //预览图片
                $("#preview").html("<img src='/uploads/goods/" + result.info +"' width=120 />");
                //将图片信息写入input隐藏域 随表单一起提交
                $("input[name=im]").val(result.info);
            }
        }
    });
})

