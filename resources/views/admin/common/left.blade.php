<aside class="main-sidebar" style="overflow-y:auto;">
      <section class="sidebar">
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
            </span>
          </div>
        </form>
        <!-- /.search form -->
        <ul class="sidebar-menu"> 
     
        
        <li class="treeview">
        <a href="{{$mod_id}}">
             <i class=""></i><span>权限管理</span><i class="fa fa-angle-left pull-right"></i>
             <ul class="treeview-menu">
                 
             </ul>
        </a>
        </li>
        <li class="treeview">
        <a href="javascript:void(0)">
             <i class=""></i><span>会员管理</span><i class="fa fa-angle-left pull-right"></i>
             <ul class="treeview-menu">
                 
             </ul>
        </a>
        </li>
        <li class="treeview">
        <a href="javascript:void(0)">
             <i class=""></i><span>商品管理</span><i class="fa fa-angle-left pull-right"></i>
             <ul class="treeview-menu">
                 
             </ul>
        </a>
        </li>
        <li class="treeview">
        <a href="javascript:void(0)">
             <i class=""></i><span>订单管理</span><i class="fa fa-angle-left pull-right"></i>
             <ul class="treeview-menu">
                 
             </ul>
        </a>
        </li>
        <li class="treeview">
        <a href="javascript:void(0)">
             <i class=""></i><span>权限管理</span><i class="fa fa-angle-left pull-right"></i>
             <ul class="treeview-menu">
                 
             </ul>
        </a>
        </li>
<!--	      <foreach name="menu_list" item="vo" key="k" >
        	<li class="treeview">
        	    <a href="javascript:void(0)">
	              <i class="fa {$vo.icon}"></i><span>{$vo.title}</span><i class="fa fa-angle-left pull-right"></i>
	            </a>
	            <ul class="treeview-menu">
	            	<foreach name="vo.submenu" item="vv" key="kk">
	            	<li onclick="makecss(this,{$vv.mod_id})" id="menu_{$vv.mod_id}"><a href="{$vv.url}" target='rightContent'><i class="fa fa-circle-o"></i>{$vv.title}</a></li>
	            	</foreach>
	            </ul>
        	</li>
	      </foreach>     -->
<!--          <li class="header">帮助中心</li>
          <li><a href="http://www.tp-shop.cn/index.php/Doc/Index/index" target="_blank"><i class="fa fa-circle-o text-red"></i> <span>使用手册</span></a></li>
          <li><a href="http://www.99soubao.com/tpshop_video/video.php" target="_blank"><i class="fa fa-circle-o text-yellow"></i> <span>视频教程</span></a></li>
          <li><a href="http://www.tp-shop.cn/index.php/Doc/Index/index" target="_blank"><i class="fa fa-circle-o text-aqua"></i> <span>开发文档</span></a></li>-->
        </ul>
      </section>
</aside>