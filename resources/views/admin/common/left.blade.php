<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>左侧导航menu</title>
<link href="{{'/css/admin/common/css.css'}}" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="{{'/js/admin/common/sdmenu.js'}}"></script>
<script type="text/javascript">
	// <![CDATA[
	var myMenu;
	window.onload = function() {
		myMenu = new SDMenu("my_menu");
		myMenu.init();
	};
	// ]]>
</script>
<style type=text/css>
html{ SCROLLBAR-FACE-COLOR: #538ec6; SCROLLBAR-HIGHLIGHT-COLOR: #dce5f0; SCROLLBAR-SHADOW-COLOR: #2c6daa; SCROLLBAR-3DLIGHT-COLOR: #dce5f0; SCROLLBAR-ARROW-COLOR: #2c6daa;  SCROLLBAR-TRACK-COLOR: #dce5f0;  SCROLLBAR-DARKSHADOW-COLOR: #dce5f0; overflow-x:hidden;}
body{overflow-x:hidden; background:url(/images/admin/common/leftbg.jpg) left top repeat-y #f2f0f5; width:194px;}
</style>
</head>
<body onselectstart="return false;" ondragstart="return false;" oncontextmenu="return false;">
<div id="left-top">
	<div><img src="{{'/images/admin/common/member.gif'}}" width="44" height="44" /></div>
    <span>用户：admin<br>角色：超级管理员</span>
</div>
    <div style="float: left" id="my_menu" class="sdmenu">
      <div class="collapsed">
        <span>基本设置</span>
        <a href="{{'/Admin/welcome'}}" target="mainFrame" onFocus="this.blur()">后台首页</a>
        <a href="main_list.html" target="mainFrame" onFocus="this.blur()">系统配置</a>
        <a href="main_info.html" target="mainFrame" onFocus="this.blur()">新闻公告</a>
        <a href="main_message.html" target="mainFrame" onFocus="this.blur()">友情链接</a>
        <a href="main_menu.html" target="mainFrame" onFocus="this.blur()">留言</a>
      </div>
        <div>
        <span>权限管理</span>
        <a href="main.html" target="mainFrame" onFocus="this.blur()">分组列表</a>
        <a href="main.html" target="mainFrame" onFocus="this.blur()">添加分组</a>
        <a href="{{'/Admin/auth/list'}}" target="mainFrame" onFocus="this.blur()">管理员列表</a>
         <a href="{{'/Admin/auth/adminAdd'}}" target="mainFrame" onFocus="this.blur()">添加管理员</a>
        <a href="main_info.html" target="mainFrame" onFocus="this.blur()">管理员日志</a>
      </div>
      <div>
        <span>会员管理</span>
        <a href="main.html" target="mainFrame" onFocus="this.blur()">评论管理</a>
        <a href="main_list.html" target="mainFrame" onFocus="this.blur()">会员等级</a>
        <a href="{{'/Admin/user/list'}}" target="mainFrame" onFocus="this.blur()">会员列表</a>
        <a href="{{'/Admin/user/userAdd'}}" target="mainFrame" onFocus="this.blur()">添加会员</a>
      </div>
      <div>
        <span>商品管理</span>
        <a href="main.html" target="mainFrame" onFocus="this.blur()">商品分类</a>
         <a href="main.html" target="mainFrame" onFocus="this.blur()">商品列表</a>
        <a href="main_list.html" target="mainFrame" onFocus="this.blur()">商品类型</a>
        <a href="main_info.html" target="mainFrame" onFocus="this.blur()">商品规格</a>
        <a href="main.html" target="mainFrame" onFocus="this.blur()">商品属性</a>
        <a href="main.html" target="mainFrame" onFocus="this.blur()">商品品牌</a>
      </div>
       
       <div>
        <span>订单管理</span>
        <a href="main.html" target="mainFrame" onFocus="this.blur()">订单列表</a>
        <a href="main_list.html" target="mainFrame" onFocus="this.blur()">发货单列表</a>
        <a href="main_info.html" target="mainFrame" onFocus="this.blur()">退货单列表</a>
        <!--<a href="main.html" target="mainFrame" onFocus="this.blur()">自定义权限</a>-->
      </div>
      
    </div>
</body>
</html>