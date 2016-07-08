<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主要内容区main</title>
<link href="{{'/css/admin/common/css.css'}}" type="text/css" rel="stylesheet" />
<link href="{{'/css/admin/common/main.css'}}" type="text/css" rel="stylesheet" />
<link rel="shortcut icon" href="{{'/images/admin/common/favicon.ico'}}" />
<script src="{{ asset('/js/jquery-2.0.2.min.js') }}" type="text/javascript"></script>
<link type="text/css" rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.min.css')}}" />
<meta name="csrf-token" content="{{ csrf_token() }}" />
        <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        </script>
<style>
body{overflow-x:hidden; background:#f2f0f5; padding:15px 0px 10px 5px;}
#searchmain{ font-size:12px;}
#search{ font-size:12px; background:#548fc9; margin:10px 10px 0 0; display:inline; width:100%; color:#FFF; float:left}
#search form span{height:40px; line-height:40px; padding:0 0px 0 10px; float:left;}
#search form input.text-word{height:24px; line-height:24px; width:180px; margin:8px 0 6px 0; padding:0 0px 0 10px; float:left; border:1px solid #FFF;}
#search form input.text-but{height:24px; line-height:24px; width:55px; background:url(/images/admin/common/list_input.jpg) no-repeat left top; border:none; cursor:pointer; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666; float:left; margin:8px 0 0 6px; display:inline;}
#search a.add{ background:url(/images/admin/common/add.jpg) no-repeat -3px 7px #548fc9; padding:0 10px 0 26px; height:40px; line-height:40px; font-size:14px; font-weight:bold; color:#FFF; float:right}
#search a:hover.add{ text-decoration:underline; color:#d2e9ff;}
#main-tab{ border:1px solid #eaeaea; background:#FFF; font-size:12px;}
#main-tab th{ font-size:12px; background:url(/images/admin/common/list_bg.jpg) repeat-x; height:32px; line-height:32px;}
#main-tab td{ font-size:12px; line-height:40px;}
#main-tab td a{ font-size:12px; color:#548fc9;}
#main-tab td a:hover{color:#565656; text-decoration:underline;}
.bordertop{ border-top:1px solid #ebebeb}
.borderright{ border-right:1px solid #ebebeb}
.borderbottom{ border-bottom:1px solid #ebebeb}
.borderleft{ border-left:1px solid #ebebeb}
.gray{ color:#dbdbdb;}
td.fenye{ padding:10px 0 0 0; text-align:right;}
.bggray{ background:#f9f9f9}
th{text-align:center;}
</style>
</head>
<body>
<!--main_top-->
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
  <tr>
    <td width="99%" align="left" valign="top">您的位置：权限管理 -> 规则列表 -> 编辑规则
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color='red'>
     @if(count($errors)>0)
        {{$errors->first()}}
     @endif
           {{session("info")}}
         </font></td>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="search">
  		<tr>
   		
  		  <td width="100%" align="center" valign="middle" style="text-align:right; width:150px;"><a href="{{$_SERVER['HTTP_REFERER']}}" target="mainFrame" onFocus="this.blur()" class="add">返回上一页</a></td>
  		</tr>
               
	</table>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top">
        <form method='post' action="{{'/Admin/auth/ruleEdit/'.$rule->id}}">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
      
      <!--foreach($admin as $value)-->
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
  
   
        <td align="center" width='5%' valign="middle" class="borderright borderbottom">名称：</td>
        <td  width='95%' valign="middle" class="borderright borderbottom">
             <input size="50"type='text' name="title" value="{{$rule->title}}"/>
            
        </td>
       

            
      </tr>
       <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
       
   
        <td align="center" width='5%' valign="middle" class="borderright borderbottom">规则：</td>
        <td  width='95%'valign="middle" class="borderright borderbottom">
           <input size="50"type='text' name="name" value="{{$rule->name}}"/>
            
            
        </td>
      </tr>
     <!--endforeach-->
      </tr>
        <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td  align="center" width='5%' valign="middle" class="borderright borderbottom">状态：</td>
        <td  width='95%' valign="middle" class="borderright borderbottom">
               &nbsp;&nbsp;<input type="radio" id="xx" name="status" value='1' @if($rule->status==1) checked @endif/><label for='xx'>启用</label>&nbsp;
             
           &nbsp; <input type="radio" id="yy" name="status" value='0' @if($rule->status==0) checked @endif /><label for='yy'>禁用</label>
        </td>
  
          
      </tr>
      
       </tr>
        <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td  align="center" width='5%' valign="middle" class="borderright borderbottom"></td>
        <td   class="borderright borderbottom">    
            <input type="hidden" name="_token" value="{{csrf_token()}}" />
           <input type="submit" style="width:100px" value=" 保存 "/>{{session('info')}}
        </td>
  
          
      </tr>
    </table> 
        </form>
    
    
</table>

</body>
</html>