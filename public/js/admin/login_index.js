/* 
 * Copyright(c)2016 All rights reserved.
 * @Licenced  http://www.w3.org
 * @Author  liutian<1538731090@qq.com> liutian_jiayi
 * @Create on 2016-6-22 9:42:19
 * @Version 1.0
 */
//显示图片位置
//function dis(obj) {
//	var ix = obj.offsetLeft;
//	var iy = obj.offsetTop;
//	document.getElementById("code").style.display = "block";
//	document.getElementById("code").style.left = ix + "px";
//	document.getElementById("code").style.top = (iy + 24) + "px";
//}

////给表单绑定提交事件
document.login.onsubmit = function () {
	//获取用户输入
	var username = this.username.value;
	var password = this.password.value;
	var code = this.code.value;
	//验证值
        var flag = true;
	var result = new Array();
	if (username.match(/^\s*$/)) {
		document.getElementById("mess").innerHTML="账号未填写";             
                 flag= false;
	} 
		
	
	if (password.length < 6 || password.length > 15) {
		document.getElementById("mess").innerHTML="密码长度应为6-15位";
                   flag= false;
	}
		
	
	if (code.length != 5) {
                document.getElementById("mess").innerHTML="验证码不合法";
                   flag= false;
	} 

        
	return flag;
}

