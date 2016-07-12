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
    <td width="99%" align="left" valign="top">您的位置：权限管理 -> 商品列表
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color='red'>
           {{session("info")}}
         </font></td>
  </tr>
  <tr>
    <td align="left" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="search">
  		<tr>
   		 <td width="90%" align="left" valign="middle">
	         
         </td>
  		  <td width="10%" align="center" valign="middle" style="text-align:right; width:150px;"><a href="" target="mainFrame" onFocus="this.blur()" class="add">新增商品</a></td>
  		</tr>
                <form method="get" action="">
	         <span>商品：</span>
                 
                 <input type="text" name="keyword" value="{{$keyword or ''}}" placeholder="商品名" class="text-word">
	         <input name="" type="submit" value="查询" class="text-but">
                   <font color='red'>{{session("info")}}</font>  
	         </form>
	</table>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top">
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
      <tr>
       
        <th align="center" valign="middle" class="borderright">订单编号</th>
        <th align="center" valign="middle" class="borderright">收货人</th>
        <th align="center" valign="middle" class="borderright">总金额</th>
        <th align="center" valign="middle" class="borderright">应付金额</th>
        <th align="center" valign="middle" class="borderright">订单状态</th>
        <th align="center" valign="middle" class="borderright">支付状态</th>
        <th align="center" valign="middle" class="borderright">发货状态</th>
        <th align="center" valign="middle" class="borderright">配送方式</th>
        <th align="center" valign="middle" class="borderright">下单时间</th>
        <th align="center" valign="middle">操作</th>
      </tr>

      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="center" valign="middle" class="borderright borderbottom"></td> 
        <td align="center" valign="middle" class="borderright borderbottom"></td>       
        <td align="center" valign="middle" class="borderright borderbottom"></td>       
        <td align="center" valign="middle" class="borderright borderbottom"></td>       
        <td align="center" valign="middle" class="borderright borderbottom"></td>       
        <td align="center" valign="middle" class="borderright borderbottom"></td>       
        <td align="center" valign="middle" class="borderright borderbottom"></td>       
        <td align="center" valign="middle" class="borderright borderbottom"></td>       
        <td align="center" valign="middle" class="borderright borderbottom"></td>       
        <td align="center" valign="middle" class="borderbottom">
       <a href="/Admin/goods/goodsb/"  target="mainFrame" onFocus="this.blur()" class="add">编辑</a><span class="gray">&nbsp;|&nbsp;</span>
    
       <a href="" target="mainFrame" onFocus="this.blur()"  class="del"  gid="">删除</a></td>
      </tr>

      
    </table> 
     
    </td>
    </tr>
    
</table>
<script src="/js/admin/goods_index.js"></script>
</body>
</html>