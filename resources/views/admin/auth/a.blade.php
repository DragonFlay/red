
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主要内容区main</title>
<style>
body{overflow-x:hidden; background:#f2f0f5; padding:15px 0px 10px 5px;}
#searchmain{ font-size:12px;}
td{
	text-align:left;
	padding:5px 0px 0px 5px;
}
th{
	text-align:right;
	padding:5px 0px 0px 5px;
}
</style>
</head>
<body>
<!--main_top-->
<table  border="0" cellspacing="0" cellpadding="0" id="searchmain">
  <tr>
    <td >您的位置：<a href='' onclick="history.go()">个人中心</a></td><td><a href="#" target="mainFrame" onFocus="this.blur()" class="add" onclick="history.back()">返回上一级</a></td>
	
  </tr>
 <form method="post" action="{{'/Admin/auth/adminSelf'}}">
     {{csrf_field()}}
	<tr>
	<td colspan='3' height='20px' bgcolor=''></td>	
	</tr>		
	<tr>
	<th>头像：</th> <td><img height='100px' src="/images/admin/common/小白.jpg"/></td>
  </tr>
  <tr>	
	<th>账户名：</th> <td></td>
  </tr>
  <tr>	
	<th>昵称：</th> <td></td>
  </tr>
  
 
  <tr>	
	<th>性别：</th> <td><input type="radio"  value="w"/> 女
						<input type="radio"  value="m"/> 男
					</td>
  </tr>
  <tr>
	<th>QQ：</th> <td></td>
  </tr>
  <tr>
	<th>邮箱：</th> <td></td>
  </tr>
 <tr>
	<th>新密码：</th> <td><input type='text' name = 'upass' /></td>
  </tr>
   <tr>
	<th>确认密码：</th> <td><input type='text' name = 'spass'/></td>
  </tr>
  <tr>
	<th>权限：</th> <td>
	
  </tr>
  <tr>
	<th>状态：</th> <td><input type='radio' name = 'status'  value="1"/>开启<input type='radio' name = 'status' value="0"/>锁定</td>
  </tr>
<tr><td></td><td><input type = 'hidden' name='id' value =""/><input type='submit'  value="提交修改"/></td></tr>
 
  
   </form>
</table>
</body>
</html>