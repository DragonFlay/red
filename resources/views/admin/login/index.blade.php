<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml">
<HEAD><META content="IE=11.0000" http-equiv="X-UA-Compatible">
<META http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<TITLE>登录页面</TITLE> 
<SCRIPT src="/js/jquery-1.10.2.min.js" type="text/javascript"></SCRIPT>
<STYLE>
body{
	background: #ebebeb;
	font-family: "Helvetica Neue","Hiragino Sans GB","Microsoft YaHei","\9ED1\4F53",Arial,sans-serif;
	color: #222;
	font-size: 12px;
}

*{padding: 0px;margin: 0px;}
.top_div{
	background: #008ead;
	width: 100%;
	height: 400px;
}
.ipt{
	border: 1px solid #d3d3d3;
	padding: 10px 10px;
	width: 290px;
	border-radius: 4px;
	padding-left: 35px;
	-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
	box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
	-webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
	-o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
	transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s
}
.ipt:focus{
	border-color: #66afe9;
	outline: 0;
	-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
	box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6)
}



.btn12
{
	width:143px;
	height:40px;
	background:url("/images/admin/login/bg12.jpg") no-repeat left top;
	color:#FFF;
}


.int{
	margin-top:0px;
	margin-right:113px;
	border: 1px solid #d3d3d3;
	padding: 10px 10px;

	width: 100px;
	border-radius: 4px;
	padding-left: 35px;
	-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
	box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
	-webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
	-o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
	transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s

}
.int:focus{
	border-color: #66afe9;
	outline: 0;
	-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
	box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6)
}

#yzm{
	position:relative;
	right:50px;
	top:13px;
    width:80px;
    height:38px;

}

.u_logo{
	background: url("/images/admin/login/username.png") no-repeat;
	padding: 10px 10px;
	position: absolute;
	top: 60px;
	left: 40px;

}
.p_logo{
	background: url("/images/admin/login/password.png") no-repeat;
	padding: 10px 10px;
	position: absolute;
	top: 20px;
	left: 40px;
}
a{
	text-decoration: none;
}
.tou{
	background: url("/images/admin/login/tou.png") no-repeat;
	width: 97px;
	height: 92px;
	position: absolute;
	top: -87px;
	left: 150px;
}
.left_hand{
	background: url("/images/admin/login/left_hand.png") no-repeat;
	width: 32px;
	height: 37px;
	position: absolute;
	top: -38px;
	left: 150px;
}
.right_hand{
	background: url("/images/admin/login/right_hand.png") no-repeat;
	width: 32px;
	height: 37px;
	position: absolute;
	top: -38px;
	right: -44px;
}
.initial_left_hand{
	background: url("/images/admin/login/hand.png") no-repeat;
	width: 30px;
	height: 20px;
	position: absolute;
	top: -12px;
	left: 110px;
}
.initial_right_hand{
	background: url("/images/admin/login/hand.png") no-repeat;
	width: 30px;
	height: 20px;
	position: absolute;
	top: -12px;
	right: -122px;
}
.left_handing{
	background: url("/images/admin/login/left-handing.png") no-repeat;
	width: 30px;
	height: 20px;
	position: absolute;
	top: -24px;
	left: 9px;
}
.right_handinging{
	background: url("/images/admin/login/right_handing.png") no-repeat;
	width: 30px;
	height: 20px;
	position: absolute;
	top: -21px;
	left: 210px;
}

#dl{
	position: absolute;

}


body 
{
	background-color:#fff;
	font-size:18px;
	font-family:"Arial","Tahoma","微软雅黑","雅黑";
	line-height:18px;
	padding:0px;
	margin:0px;
	text-align:center;
}

input,button
{
	font-family:"Arial","Tahoma","微软雅黑","雅黑";
	border:0px;
	vertical-align:middle;
	margin:8px;
	line-height:18px;	

}

</STYLE>
     
<SCRIPT type="text/javascript">
$(function(){
	//得到焦点
	$("#password").focus(function(){
		$("#left_hand").animate({
			left: "150",
			top: " -38"
		},{step: function(){
			if(parseInt($("#left_hand").css("left"))>140){
				$("#left_hand").attr("class","left_hand");
			}
		}}, 2000);
		$("#right_hand").animate({
			right: "-64",
			top: "-38px"
		},{step: function(){
			if(parseInt($("#right_hand").css("right"))> -70){
				$("#right_hand").attr("class","right_hand");
			}
		}}, 2000);
	});
	//失去焦点
	$("#password").blur(function(){
		$("#left_hand").attr("class","initial_left_hand");
		$("#left_hand").attr("style","left:100px;top:-12px;");
		$("#right_hand").attr("class","initial_right_hand");
		$("#right_hand").attr("style","right:-112px;top:-12px");
	});
});
</SCRIPT>
 
<META name="GENERATOR" content="MSHTML 11.00.9600.17496"></HEAD> 
<BODY>
<DIV class="top_div"></DIV>
<DIV style="background: rgb(255, 255, 255); margin: -160px auto auto; border: 1px solid rgb(231, 231, 231); border-image: none; width: 400px; height: 230px; text-align: center;">
<DIV style="width: 165px; height: 9px; position: absolute;">
<DIV class="tou"></DIV>
<DIV class="initial_left_hand" id="left_hand"></DIV>
<DIV class="initial_right_hand" id="right_hand"></DIV></DIV>
<P style="line-height:38px; position: relative;"><SPAN 
        class="u_logo"></SPAN><span >LARAVEL</span>

                         <span id='mess' style='color:red;'>{{ session("info") }}</span>



</P> 

<form action="/Admin/logTodo" method='post' name="login">
    <input type="hidden" name="_token" value="{{$data['_token'] or csrf_token()}}"/>
<INPUT class='ipt'  name= 'username'  type="text" placeholder="请输入用户名" value="{{$data['username'] or ''}}"> 
<P style="position: relative;"><SPAN class="p_logo"></SPAN>      
    
    <INPUT class="ipt" name='password' id="password" type="password" placeholder="请输入密码" value="">   
    <input class='int'  name= 'code' type="text" placeholder="验证码" value="{{$data['code'] or ''}}" onfocus="dis(this);">
    <img id='yzm' src="{{url('/Admin/captcha')."/". rand()}}" alt="" onclick="this.src=this.src.replace(/\d+$/,'')+Math.random()">

  </P>
<DIV style="height: 68px; line-height: 50px; margin-top: 0px; border-top-color: rgb(231, 231, 231); border-top-width: 1px;">

<input  type="submit" class="btn12" onmouseover="this.style.backgroundPosition='left -40px'" onmouseout="this.style.backgroundPosition='left top'" value="登陆" /><br />
</form>
<script src="{{asset('/js/admin/login_index.js')}}"></script>
</DIV></DIV>
		   <div style="text-align:center;">
<!-- <p>来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p> -->
</div></BODY></HTML>
