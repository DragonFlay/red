<html>
	<head>
		<meta charset="utf-8">
		<title>个人中心</title>
		<link rel="stylesheet" type="text/css"href="/css/admin/common/adminSelf.css">
                <script src="{{ asset('/plugins/uploadify/jquery.uploadify.min.js') }}"></script>
                <link type="text/css" rel="stylesheet" href="{{ asset('/plugins/uploadify/uploadify.css') }}" />
	</head>
	<body>
		
		
       
		<span class="gerenxinxi_right">
                    <fieldset draggable="draggable">
            <legend>个人中心</legend>
			<div>基本信息</div>
                     
                    
                        <table  border="0px" >
                            <tr > 
                            <span style="float:right">
                                <form name="upload">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    <img style="border:1px solid black" width="120" height="120" src="/images/admin/common/小白.jpg"/> 
                                    <br/>
                                    <input type="file" name="avartar" id="avartar" multiple="true" />
                                </form>
                            </span>
                            </tr>
                        
                            <tr> <td align="right"></td></tr>
                      <form action="{{'/Admin/auth/adminSelf'}}" method='post' >
                          </tr>
				<tr>
                                  
					<td align="right">昵称：</td>
					<td><input type="text" name=""></td>
				</tr>
				<tr>
					<td align="right">性别：</td>
					<td>
						<input type="radio" name="sex[]">男
						<input type="radio" name="sex[]">女
					</td>
				</tr>
				<tr>
					<td align="right">联系电话：</td>
					<td><input type="text"></td>
				</tr>
				<tr>
					<td align="right">所在地：</td>
					<td><input type="text" name="">
<!--						<select>
							<option>--请选择--</option>
							<option>北京</option>
							<option>上海</option>
							<option>广州</option>
						</select>
						<select>
							<option>--请选择--</option>
							<option>昌平</option>
							<option>海淀</option>
							<option>朝阳</option>
						</select>-->
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
					<td align="right">星座：</td>
					<td>
						<select>
							<option>处女座</option>
							<option>金牛做</option>
							<option>处女座</option>
							<option>金牛做</option>
						</select>星座
					</td>
				</tr>
				<tr>
					<td align="right">职业：</td>
					<td><input type="text"></td>
				</tr>
			</table>
			<div>其他信息</div>
			<table>
				<tr>
					<td align="right">状态：</td>
					<td>
						<!--<input type="text" name="">-->
<!--						<select>
							<option>2010</option>
							<option>2011</option>
							<option>2012</option>
							<option>2013</option>
						</select>入学时间-->
					</td>
				</tr>
				<tr>
					<td align="right">权限级别：</td>
				
				</tr>
			</table>
                        
                       </fieldset>
                    <br/>
                       <span><input type="submit" value="提交修改" /></span>
			
			
		</span>
            </form>
            <script src="{{url('/js/admin/admin_edit.js')}}"></script>
	</body>
</html>