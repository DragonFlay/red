<html>
	<head>
		<meta charset="utf-8">
		<title>个人中心</title>
	</head>
	<body>
		 <span style="float:left;margin:20px 40px 0px 20px;">
                                    <img style="border:1px solid black" width="120" height="120" src="/upload/avartar/{{session("userData")->avartar}}"/>                          
                                    <br/>
                                    &nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:history.back();">返回上一级 </a>
                 </span>
          
                    <fieldset draggable="draggable">
                    <legend>管理员信息</legend>
                    <div><font color='pink'>基本信息</font></div>
                     
                    
                        <table  border="0px" >
                            <tr > 
                           
                            </tr>
                        
                            <tr> <td align="right"></td></tr>
                     
                          </tr>
				<tr>
                                  
					<td align="right">账号：</td>
					<td><input type="text" name="" disabled value="{{$admin->username}}"></td>
				</tr>
				<tr>
					<td align="right">性别：</td>
					<td>
                                            
						<input type="radio" name="sex[]" @if($admin->sex=='男') checked @endif>男
						<input type="radio" name="sex[]"@if($admin->sex=='女') checked @endif>女
					</td>
				</tr>
                                <tr>
					<td align="right">生日：</td>
					<td>
					<input type="text" disabled value='{{$admin->birth}}'>	
					</td>
				</tr>
				<tr>
					<td align="right">联系电话：</td>
					<td><input type="text" disabled value='{{$admin->phone}}'></td>
				</tr>
                                <tr>
					<td align="right">联系邮箱：</td>
					<td><input type="text" disabled value='{{$admin->email}}'></td>
				</tr>
				<tr>
					<td align="right">所在地：</td>
					<td>
                                            <textarea disabled>
                                                {{$admin->address}}
                                            </textarea>                                  
					</td>
				</tr>
				
				
			
			</table>
			<div><font color='pink'>其他信息</font></div>
			<table>
				<tr>
					<td align="right">状态：</td>
					<td>{{$admin->is_lock}}</td>
				</tr>
				<tr>
					<td align="right">权限级别：</td>
                                        <td>
                                            {{$group->title}}
                                            
                                        </td>
				</tr>
			</table>
                        
                       </fieldset>
	
  
	</body>
</html>