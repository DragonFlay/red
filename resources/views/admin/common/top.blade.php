<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台页面头部</title>
<link href="{{'/css/admin/common/css.css'}}" type="text/css" rel="stylesheet" />
</head>
<body onselectstart="return false" oncontextmenu=return(false) style="overflow-x:hidden;">
<!--禁止网页另存为-->
<noscript><iframe scr="*.htm"></iframe></noscript>
<!--禁止网页另存为-->
<table width="100%" border="0" cellspacing="0" cellpadding="0" id="header">
  <tr>
    <td rowspan="2" align="left" valign="top" id="logo"><img src="{{'/images/admin/common/logo.jpg'}}" width="74" height="64"></td>
    <td align="left" valign="bottom">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="left" valign="bottom" id="header-name">LARAVEL</td>
        <td align="right" valign="top" id="header-right">
        	<a href="{{'/Admin/logout'}}" target="_top" onFocus="this.blur()" class="admin-out">注销</a>
            <a href="{{'/Admin'}}" target="_top" onFocus="this.blur()" class="admin-home">管理首页</a>
        	<a href="{{'/'}}" target="_blank" onFocus="this.blur()" class="admin-index">网站首页</a>       	
            <span>
<!-- 日历 -->
<SCRIPT type=text/javascript src="{{'/js/admin/common/clock.js'}}"></SCRIPT>
<SCRIPT type=text/javascript>showcal();</SCRIPT>
            </span>
        </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="bottom">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="left" valign="top" id="header-admin">后台管理系统</td>
        <td align="left" valign="bottom" id="header-menu">
        <a href="{{'/Admin'}}" target="#" onFocus="this.blur()" id="menuon">后台首页</a>
        <a href="leftaaa.html" target="leftFrame" onFocus="this.blur()">用户管理</a>
        <a href="lanmu.html" target="left" onFocus="this.blur()">栏目管理</a>
        <a href="xcxi.html" target="left" onFocus="this.blur()">信息管理</a>
        <a href="liuyan.html" target="left" onFocus="this.blur()">留言管理</a>
        <a href="fujian.html" target="left" onFocus="this.blur()">附件管理</a>
        <a href="zhandian.html" target="left" onFocus="this.blur()">站点管理</a>
        </td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
