<html>
	<head>
		<meta charset="utf-8">
		<title>个人中心</title>
		<!--<link rel="stylesheet" type="text/css"href="/css/admin/common/adminSelf.css">-->
             <!--<link type="text/css" rel="stylesheet" href="/bootstrap/css/bootstrap.css" />-->
                <script src="{{ asset('/js/jquery-2.0.2.min.js') }}" type="text/javascript"></script>

                <script src="/plugins/uploadify/jquery.uploadify.min.js"></script>
                <link type="text/css" rel="stylesheet" href="/plugins/uploadify/uploadify.css"/>
	</head>
	<body>
		<a href="javascript:history.back();"><< 返回上一页 >></a><br/><br/>
		
        
		<span >
                     <form name="upload">
                    <span " style="float:right;position:absolute;margin-left:400px;margin-top:50px">
                          
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    <input type="hidden" name="uid" value="{{session("userData")->admin_id}}" />
                                    <img style="border:1px solid black" width="120" height="120" src="/uploads/avartar/{{session("userData")->avartar}}"/>
                                    <input type="file" name="avartar" id="avartar" />
                    </span>
                    </form>
                    <form name ="fm" action="{{'/Admin/auth/adminSelf'}}" method='post'enctype="multipart/form-data">
                    <fieldset draggable="draggable">
                    <legend>个人中心</legend>
			<div ><font color="red">基本信息</font></div>
                     
                    
                        <table  border="0px" >
                            <tr > 
                            
                            </tr>
                        
                            <tr> <td align="right"></td></tr>
                     
                          </tr>
				<tr>
                                  
					<td align="right">账号：</td>
					<td>{{$admin->username}}</td>
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
						<select>
							<option>2008</option>
							<option>2009</option>
							<option>2010</option>
							<option>2011</option>
						</select>年
						<select>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
						</select>月
						<select>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
						</select>日
					</td>
				</tr>
				<tr>
					<td align="right">联系电话：</td>
					<td><input type="text"></td>
				</tr>
                                <tr>
					<td align="right">联系邮箱：</td>
					<td><input type="text"></td>
				</tr>
				<tr>
					<td align="right">所在地：</td>
					<td>
                                            <textarea>
                                                
                                            </textarea>
					</td>
				</tr>
				
        		</table>
			<div ><font color="red">其他信息</font></div>
			<table>
				<tr>
					<td align="right">状态：</td>
					<td>
                                            {{session("userData")->is_lock}}
					</td>
				</tr>
				<tr>
					<td align="right">权限级别：</td>	
                                        <td>  {{$group->title}}</td>
				</tr>
			</table>
                        
                       </fieldset>
                    <br/>
                       <span><input type="submit" value="提交修改" /></span>
			
			 </form>
		</span>
           
            <script src="/js/admin/adminSelf.js"></script>
	</body>
</html>