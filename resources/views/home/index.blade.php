<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>全网首款基于Laravel框架的商城系统phpstore</title>
  <link rel="stylesheet" type="text/css" href="http://www.t8t.net/front/matrix/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="http://www.t8t.net/front/matrix/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="http://www.t8t.net/front/matrix/style.css" />
  <link id="color-css-btn" rel="stylesheet" type="text/css" href="http://www.t8t.net/front/matrix/blue.css" />
  <script type="text/javascript" src="http://www.t8t.net/front/matrix/js/jquery.min.js"></script>
  <script type="text/javascript" src="http://www.t8t.net/front/matrix/js/jquery.json-2.4.js"></script>
  <script type="text/javascript" src="http://www.t8t.net/front/matrix/js/front.js"></script>
  <script type="text/javascript" src="http://www.t8t.net/front/matrix/js/jquery.animate-colors.js"></script>
  <script type="text/javascript" src="http://www.t8t.net/files/jquery.confirm.js"></script>
  <script type="text/javascript" src="http://www.t8t.net/front/matrix/js/jquery.cookie.js"></script>
 </head>
 <body id=""> 
  <div class="header-top"> 
   <div class="header-top-bb"> 
    <a href="http://www.t8t.net/auth/login">会员登录</a> 
    <span>|</span> 
    <a href="http://www.t8t.net/auth/register">会员注册</a> 
   </div>
   <!--/bb-->
  </div>
  <!--/header-top-->
  <div class="box-middle"> 
   <div id="header-logo" class="col-md-3"> 
    <a href="http://www.t8t.net" title="phpstore-b2c演示站"> <img src="http://www.t8t.net/images/config/201601/b8c4957322302209e3e7c737d5f65b20.png" alt="phpstore首款基于laravel框架的商城系统" /> </a> 
   </div> 
   <div id="search-bar"> 
    <form action="http://www.t8t.net/search" method="post" class="form-search"> 
     <input type="text" name="keywords" id="keywords" class="home-search" placeholder="请输入商品编号或者名称" /> 
     <button type="submit" class="home-search-btn"> <i class="fa fa-search"></i> </button> 
    </form> 
   </div> 
   <div id="header-cart"> 
    <p class="cart-num"> <a href="http://www.t8t.net/cart"> 您购物车中有商品: <span id="cart-number-ajax-btn">0</span> </a> </p> 
   </div>
  </div>
  <!--/box-middle-->
  <div id="header-bottom"> 
   <div class="header-bottom-bb"> 
    <ul class="main-nav"> 
     <li class="item"> <a href="http://www.t8t.net">首页</a> </li> 
     <li class="item"> <a href="http://t8t.net/category/1">测试分类</a> </li> 
     <li class="item"> <a href="http://t8t.net/supplier/register">供货商注册</a> </li> 
     <li class="item"> <a href="http://t8t.net/tag">标签</a> </li> 
     <li class="item"> <a href="http://t8t.net/supplier/login">供货商登录</a> </li> 
     <li class="item"> <a href="http://t8t.net/message">留言板</a> </li> 
    </ul> 
   </div>
  </div>
  <!--/header-bottom-->
  <div class="color-style-content"> 
   <div class="open-close-btn color-close"> 
    <i class="fa fa-2x fa-cog fa-spin"></i> 
   </div> 
   <div class="tit">
    颜色选择器
   </div> 
   <div class="color-grid"> 
    <div class="color-grid-item">
     <span data-style_css_file="http://www.t8t.net/front/matrix/blue.css" class="color-item-span" style="background:#2196f3"><i class="fa fa-check"></i></span>
    </div>
    <div class="color-grid-item">
     <span data-style_css_file="http://www.t8t.net/front/matrix/qin.css" class="color-item-span" style="background:#a0ce4e"><i class="fa fa-check"></i></span>
    </div>
    <div class="color-grid-item">
     <span data-style_css_file="http://www.t8t.net/front/matrix/pink.css" class="color-item-span" style="background:#f73679"><i class="fa fa-check"></i></span>
    </div>
    <div class="color-grid-item">
     <span data-style_css_file="http://www.t8t.net/front/matrix/org.css" class="color-item-span" style="background:#f9b83e"><i class="fa fa-check"></i></span>
    </div>
    <div class="color-grid-item">
     <span data-style_css_file="http://www.t8t.net/front/matrix/camel.css" class="color-item-span" style="background:#baad7c"><i class="fa fa-check"></i></span>
    </div>
    <div class="color-grid-item">
     <span data-style_css_file="http://www.t8t.net/front/matrix/purple.css" class="color-item-span" style="background:#8b4da5"><i class="fa fa-check"></i></span>
    </div>
    <div class="color-grid-item">
     <span data-style_css_file="http://www.t8t.net/front/matrix/purple2.css" class="color-item-span" style="background:#818edb"><i class="fa fa-check"></i></span>
    </div>
    <div class="color-grid-item">
     <span data-style_css_file="http://www.t8t.net/front/matrix/bluegreen.css" class="color-item-span" style="background:#23d1b7"><i class="fa fa-check"></i></span>
    </div>
    <div class="color-grid-item">
     <span data-style_css_file="http://www.t8t.net/front/matrix/deepgreen.css" class="color-item-span" style="background:#2e7d32"><i class="fa fa-check"></i></span>
    </div>
    <div class="color-grid-item">
     <span data-style_css_file="http://www.t8t.net/front/matrix/red.css" class="color-item-span" style="background:#d50000"><i class="fa fa-check"></i></span>
    </div>
    <div class="color-grid-item">
     <span data-style_css_file="http://www.t8t.net/front/matrix/blue2.css" class="color-item-span" style="background:#00bcd4"><i class="fa fa-check"></i></span>
    </div>
    <div class="color-grid-item">
     <span data-style_css_file="http://www.t8t.net/front/matrix/gray.css" class="color-item-span" style="background:#455a64"><i class="fa fa-check"></i></span>
    </div> 
   </div>
   <!--/color-grid-->
  </div> 
  <link href="http://www.t8t.net/front/matrix/animate.css" rel="stylesheet" type="text/css" /> 
  <div class="main-box"> 
   <div class="main-box-bb"> 
    <div class="row"> 
     <div class="col-md-3"> 
      <div class="ps-home-menu"> 
       <div class="ps-home-menu-tit"> 
        <i class="fa fa-bars"></i> 商品分类 
       </div> 
       <ul class="category-nav"> 
        <li class="item"> <i class="fa-icon"></i> <a href="http://www.t8t.net/category/34" class="a1">感觉一下分类</a> <i class="fa fa-angle-right right-i"></i> </li> 
        <li class="item"> <i class="fa-icon"></i> <a href="http://www.t8t.net/category/cat-test" class="a1">测试商品分类</a> <i class="fa fa-angle-right right-i"></i> 
         <div class="dropdown-menu" style="width:200px;"> 
          <ul class="category-nav-2"> 
           <li> <h2><a href="http://www.t8t.net/category/2" target="_blank">台式机</a></h2> 
            <div class="category-nav-3"> 
             <p class="item"><a href="http://www.t8t.net/category/31" target="_blank">dell一体机</a></p> 
             <p class="item"><a href="http://www.t8t.net/category/32" target="_blank">惠普一体机</a></p> 
            </div> </li> 
           <li> <h2><a href="http://www.t8t.net/category/3" target="_blank">笔记本</a></h2> </li> 
           <li> <h2><a href="http://www.t8t.net/category/4" target="_blank">平板电脑</a></h2> </li> 
          </ul> 
         </div>
         <!--/dropdown-menu--> </li> 
        <li class="item"> <i class="fa-icon"></i> <a href="http://www.t8t.net/category/5" class="a1">智能穿戴设备</a> <i class="fa fa-angle-right right-i"></i> 
         <div class="dropdown-menu" style="width:200px;"> 
          <ul class="category-nav-2"> 
           <li> <h2><a href="http://www.t8t.net/category/6" target="_blank">AppleWatch</a></h2> </li> 
           <li> <h2><a href="http://www.t8t.net/category/7" target="_blank">智能手环</a></h2> </li> 
          </ul> 
         </div>
         <!--/dropdown-menu--> </li> 
        <li class="item"> <i class="fa-icon"></i> <a href="http://www.t8t.net/category/8" class="a1">智能家居</a> <i class="fa fa-angle-right right-i"></i> 
         <div class="dropdown-menu" style="width:200px;"> 
          <ul class="category-nav-2"> 
           <li> <h2><a href="http://www.t8t.net/category/22" target="_blank">智能台灯</a></h2> </li> 
           <li> <h2><a href="http://www.t8t.net/category/23" target="_blank">智能TV</a></h2> </li> 
          </ul> 
         </div>
         <!--/dropdown-menu--> </li> 
        <li class="item"> <i class="fa-icon"></i> <a href="http://www.t8t.net/category/9" class="a1">超级计算机</a> <i class="fa fa-angle-right right-i"></i> 
         <div class="dropdown-menu" style="width:200px;"> 
          <ul class="category-nav-2"> 
           <li> <h2><a href="http://www.t8t.net/category/28" target="_blank">dell工作站</a></h2> </li> 
          </ul> 
         </div>
         <!--/dropdown-menu--> </li> 
        <li class="item"> <i class="fa-icon"></i> <a href="http://www.t8t.net/category/10" class="a1">时尚护肤</a> <i class="fa fa-angle-right right-i"></i> 
         <div class="dropdown-menu" style="width:200px;"> 
          <ul class="category-nav-2"> 
           <li> <h2><a href="http://www.t8t.net/category/30" target="_blank">兰蔻基础护理</a></h2> </li> 
          </ul> 
         </div>
         <!--/dropdown-menu--> </li> 
        <li class="item"> <i class="fa-icon"></i> <a href="http://www.t8t.net/category/11" class="a1">时尚美妆</a> <i class="fa fa-angle-right right-i"></i> 
         <div class="dropdown-menu" style="width:200px;"> 
          <ul class="category-nav-2"> 
           <li> <h2><a href="http://www.t8t.net/category/24" target="_blank">基础护理</a></h2> </li> 
           <li> <h2><a href="http://www.t8t.net/category/25" target="_blank">BB霜</a></h2> </li> 
           <li> <h2><a href="http://www.t8t.net/category/26" target="_blank">粉饼</a></h2> </li> 
          </ul> 
         </div>
         <!--/dropdown-menu--> </li> 
        <li class="item"> <i class="fa-icon"></i> <a href="http://www.t8t.net/category/12" class="a1">办公用品</a> <i class="fa fa-angle-right right-i"></i> 
         <div class="dropdown-menu" style="width:200px;"> 
          <ul class="category-nav-2"> 
           <li> <h2><a href="http://www.t8t.net/category/27" target="_blank">打印机</a></h2> </li> 
          </ul> 
         </div>
         <!--/dropdown-menu--> </li> 
        <li class="item"> <i class="fa-icon"></i> <a href="http://www.t8t.net/category/13" class="a1">厨房电器</a> <i class="fa fa-angle-right right-i"></i> 
         <div class="dropdown-menu" style="width:200px;"> 
          <ul class="category-nav-2"> 
           <li> <h2><a href="http://www.t8t.net/category/29" target="_blank">电蒸锅</a></h2> </li> 
          </ul> 
         </div>
         <!--/dropdown-menu--> </li> 
        <li class="item"> <i class="fa-icon"></i> <a href="http://www.t8t.net/category/14" class="a1">Apple台式机系列</a> <i class="fa fa-angle-right right-i"></i> 
         <div class="dropdown-menu" style="width:200px;"> 
          <ul class="category-nav-2"> 
           <li> <h2><a href="http://www.t8t.net/category/imac" target="_blank">iMac</a></h2> </li> 
           <li> <h2><a href="http://www.t8t.net/category/macmini" target="_blank">Macmini</a></h2> </li> 
           <li> <h2><a href="http://www.t8t.net/category/macpro" target="_blank">MacPro</a></h2> </li> 
          </ul> 
         </div>
         <!--/dropdown-menu--> </li> 
        <li class="item"> <i class="fa-icon"></i> <a href="http://www.t8t.net/category/18" class="a1">Apple笔记本系列</a> <i class="fa fa-angle-right right-i"></i> 
         <div class="dropdown-menu" style="width:200px;"> 
          <ul class="category-nav-2"> 
           <li> <h2><a href="http://www.t8t.net/category/15" target="_blank">MacBookPro系列</a></h2> </li> 
           <li> <h2><a href="http://www.t8t.net/category/16" target="_blank">MacBook系列</a></h2> </li> 
           <li> <h2><a href="http://www.t8t.net/category/17" target="_blank">MacBookair系列</a></h2> </li> 
          </ul> 
         </div>
         <!--/dropdown-menu--> </li> 
       </ul> 
      </div>
      <!--/menu-->
     </div>
     <script type="text/javascript"> $(function(){	 front.category(); });</script> 
     <script type="text/javascript" src="http://www.t8t.net/front/matrix/unslider/js/unslider-min.js"></script>
     <link href="http://www.t8t.net/front/matrix/unslider/css/unslider.css" rel="stylesheet" type="text/css" />
     <link href="http://www.t8t.net/front/matrix/unslider/css/def.css" rel="stylesheet" type="text/css" />
     <div class="col-md-9" style="padding-right:0; overflow:hidden;">
      <div class="my-slider"> 
       <ul> 
        <li> <a href="http://www.phpstore.cn" target="_blank"><img src="http://www.t8t.net/images//201603/e94d7a943294b85614d0581c6f2e38f2.png" style="width: 900px;height: 480px;" /></a> </li> 
        <li> <a href="http://www.phpstore.cn" target="_blank"><img src="http://www.t8t.net/images//201603/90c614f2dc8a2724e6596797e125dbf6.jpg" style="width: 900px;height: 480px;" /></a> </li> 
        <li> <a href="http://www.phpstore.cn" target="_blank"><img src="http://www.t8t.net/images//201601/d4e55e3d2a88d2b917f0ad648afcc6c8.png" style="width: 900px;height: 480px;" /></a> </li> 
        <li> <a href="http://www.phpstore.cn" target="_blank"><img src="http://www.t8t.net/images//201603/73cf745e58bd52d99166ac5882ec237d.png" style="width: 900px;height: 480px;" /></a> </li> 
       </ul>
      </div>
      <!--/my-slider-->
     </div>
     <script type="text/javascript">	$(function(){				$('.my-slider').unslider({						autoplay:true					});	});</script> 
    </div>
    <!--/row--> 
   </div>
   <!--/bb--> 
  </div>
  <!--/main-box--> 
  <div class="container">
   <div class="ad-box"> 
    <div class="row"> 
    </div>
   </div>
  </div>
  <script type="text/javascript">	$(function(){				  //front.home.border_animate();	});</script> 
  <div class="container"> 
   <div class="home-grid"> 
    <div class="grid-title grid-title-1"> 
     <i class="fa fa-star"></i> 
     <span>最新商品</span> 
    </div> 
    <div class="goods-list-grid"> 
     <div class="item"> 
      <div class="item-bb"> 
       <a href="http://www.t8t.net/goods/1">
        <div class="item-mask"></div></a> 
       <div class="pic"> 
        <a href="http://www.t8t.net/goods/1"> <img src="http://www.t8t.net/images/201601/thumb/aac716cc3b6b0d2926cf375b0b6385cd-thumb.jpg" alt="phpstore测试商品信息" /> </a> 
       </div>
       <!--/pic--> 
       <p class="text"><a href="http://www.t8t.net/goods/1">phpstore测试商品信息</a></p> 
       <p class="price">881.00</p> 
       <div class="cart-icon" data-goods_id="1"> 
        <i class="fa fa-shopping-cart"></i> 
       </div> 
       <div class="tag new-tag"></div> 
      </div>
      <!--/item-bb--> 
     </div> 
     <div class="item"> 
      <div class="item-bb"> 
       <a href="http://www.t8t.net/goods/2">
        <div class="item-mask"></div></a> 
       <div class="pic"> 
        <a href="http://www.t8t.net/goods/2"> <img src="http://www.t8t.net/images/201601/thumb/41f895ddf3c4f3846e185a5080d99a02-thumb.jpg" alt="phpstore测试商品2" /> </a> 
       </div>
       <!--/pic--> 
       <p class="text"><a href="http://www.t8t.net/goods/2">phpstore测试商品2</a></p> 
       <p class="price">114.00</p> 
       <div class="cart-icon" data-goods_id="2"> 
        <i class="fa fa-shopping-cart"></i> 
       </div> 
       <div class="tag new-tag"></div> 
      </div>
      <!--/item-bb--> 
     </div> 
     <div class="item"> 
      <div class="item-bb"> 
       <a href="http://www.t8t.net/goods/3">
        <div class="item-mask"></div></a> 
       <div class="pic"> 
        <a href="http://www.t8t.net/goods/3"> <img src="http://www.t8t.net/images/201601/thumb/dba60368cdd2c2d96db4ebb70dfdc088-thumb.jpg" alt="测试商品3" /> </a> 
       </div>
       <!--/pic--> 
       <p class="text"><a href="http://www.t8t.net/goods/3">测试商品3</a></p> 
       <p class="price">111.00</p> 
       <div class="cart-icon" data-goods_id="3"> 
        <i class="fa fa-shopping-cart"></i> 
       </div> 
       <div class="tag new-tag"></div> 
      </div>
      <!--/item-bb--> 
     </div> 
     <div class="item"> 
      <div class="item-bb"> 
       <a href="http://www.t8t.net/goods/5">
        <div class="item-mask"></div></a> 
       <div class="pic"> 
        <a href="http://www.t8t.net/goods/5"> <img src="http://www.t8t.net/images/201601/thumb/253c241adf98b679a74df6b42a0d397d-thumb.jpg" alt="phpstore测试商品4" /> </a> 
       </div>
       <!--/pic--> 
       <p class="text"><a href="http://www.t8t.net/goods/5">phpstore测试商品4</a></p> 
       <p class="price">221.00</p> 
       <div class="cart-icon" data-goods_id="5"> 
        <i class="fa fa-shopping-cart"></i> 
       </div> 
       <div class="tag new-tag"></div> 
      </div>
      <!--/item-bb--> 
     </div> 
    </div>
    <!--/home-grid-->
   </div> 
   <div class="container"> 
    <div class="home-grid"> 
     <div class="grid-title grid-title-3"> 
      <i class="fa fa-star"></i> 
      <span>推荐精品</span> 
     </div> 
     <div class="goods-list-grid"> 
      <div class="item"> 
       <div class="item-bb"> 
        <a href="http://www.t8t.net/goods/1">
         <div class="item-mask"></div></a> 
        <div class="pic"> 
         <a href="http://www.t8t.net/goods/1"> <img src="http://www.t8t.net/images/201601/thumb/aac716cc3b6b0d2926cf375b0b6385cd-thumb.jpg" alt="phpstore测试商品信息" /> </a> 
        </div>
        <!--/pic--> 
        <p class="text"><a href="http://www.t8t.net/goods/1">phpstore测试商品信息</a></p> 
        <p class="price">881.00</p> 
        <div class="cart-icon" data-goods_id="1"> 
         <i class="fa fa-shopping-cart"></i> 
        </div> 
        <div class="tag sale-tag"></div> 
       </div>
       <!--/item-bb--> 
      </div> 
      <div class="item"> 
       <div class="item-bb"> 
        <a href="http://www.t8t.net/goods/2">
         <div class="item-mask"></div></a> 
        <div class="pic"> 
         <a href="http://www.t8t.net/goods/2"> <img src="http://www.t8t.net/images/201601/thumb/41f895ddf3c4f3846e185a5080d99a02-thumb.jpg" alt="phpstore测试商品2" /> </a> 
        </div>
        <!--/pic--> 
        <p class="text"><a href="http://www.t8t.net/goods/2">phpstore测试商品2</a></p> 
        <p class="price">114.00</p> 
        <div class="cart-icon" data-goods_id="2"> 
         <i class="fa fa-shopping-cart"></i> 
        </div> 
        <div class="tag sale-tag"></div> 
       </div>
       <!--/item-bb--> 
      </div> 
      <div class="item"> 
       <div class="item-bb"> 
        <a href="http://www.t8t.net/goods/3">
         <div class="item-mask"></div></a> 
        <div class="pic"> 
         <a href="http://www.t8t.net/goods/3"> <img src="http://www.t8t.net/images/201601/thumb/dba60368cdd2c2d96db4ebb70dfdc088-thumb.jpg" alt="测试商品3" /> </a> 
        </div>
        <!--/pic--> 
        <p class="text"><a href="http://www.t8t.net/goods/3">测试商品3</a></p> 
        <p class="price">111.00</p> 
        <div class="cart-icon" data-goods_id="3"> 
         <i class="fa fa-shopping-cart"></i> 
        </div> 
        <div class="tag sale-tag"></div> 
       </div>
       <!--/item-bb--> 
      </div> 
      <div class="item"> 
       <div class="item-bb"> 
        <a href="http://www.t8t.net/goods/5">
         <div class="item-mask"></div></a> 
        <div class="pic"> 
         <a href="http://www.t8t.net/goods/5"> <img src="http://www.t8t.net/images/201601/thumb/253c241adf98b679a74df6b42a0d397d-thumb.jpg" alt="phpstore测试商品4" /> </a> 
        </div>
        <!--/pic--> 
        <p class="text"><a href="http://www.t8t.net/goods/5">phpstore测试商品4</a></p> 
        <p class="price">221.00</p> 
        <div class="cart-icon" data-goods_id="5"> 
         <i class="fa fa-shopping-cart"></i> 
        </div> 
        <div class="tag sale-tag"></div> 
       </div>
       <!--/item-bb--> 
      </div> 
      <div class="item"> 
       <div class="item-bb"> 
        <a href="http://www.t8t.net/goods/6">
         <div class="item-mask"></div></a> 
        <div class="pic"> 
         <a href="http://www.t8t.net/goods/6"> <img src="http://www.t8t.net/images/201601/thumb/b2d1c197fa0b49a4fe2c59298bbe370e-thumb.png" alt="测试商品5" /> </a> 
        </div>
        <!--/pic--> 
        <p class="text"><a href="http://www.t8t.net/goods/6">测试商品5</a></p> 
        <p class="price">123.00</p> 
        <div class="cart-icon" data-goods_id="6"> 
         <i class="fa fa-shopping-cart"></i> 
        </div> 
        <div class="tag sale-tag"></div> 
       </div>
       <!--/item-bb--> 
      </div> 
      <div class="item"> 
       <div class="item-bb"> 
        <a href="http://www.t8t.net/goods/7">
         <div class="item-mask"></div></a> 
        <div class="pic"> 
         <a href="http://www.t8t.net/goods/7"> <img src="http://www.t8t.net/images/201601/thumb/58db30648dc8bd9d8c07c26461ca33a9-thumb.png" alt="phpstore测试产品6" /> </a> 
        </div>
        <!--/pic--> 
        <p class="text"><a href="http://www.t8t.net/goods/7">phpstore测试产品6</a></p> 
        <p class="price">331.00</p> 
        <div class="cart-icon" data-goods_id="7"> 
         <i class="fa fa-shopping-cart"></i> 
        </div> 
        <div class="tag sale-tag"></div> 
       </div>
       <!--/item-bb--> 
      </div> 
      <div class="item"> 
       <div class="item-bb"> 
        <a href="http://www.t8t.net/goods/8">
         <div class="item-mask"></div></a> 
        <div class="pic"> 
         <a href="http://www.t8t.net/goods/8"> <img src="http://www.t8t.net/images/201601/thumb/ba48d4c1ff6997ac707140d61725ebec-thumb.png" alt="phpstore测试商品7" /> </a> 
        </div>
        <!--/pic--> 
        <p class="text"><a href="http://www.t8t.net/goods/8">phpstore测试商品7</a></p> 
        <p class="price">231.00</p> 
        <div class="cart-icon" data-goods_id="8"> 
         <i class="fa fa-shopping-cart"></i> 
        </div> 
        <div class="tag sale-tag"></div> 
       </div>
       <!--/item-bb--> 
      </div> 
      <div class="item"> 
       <div class="item-bb"> 
        <a href="http://www.t8t.net/goods/23">
         <div class="item-mask"></div></a> 
        <div class="pic"> 
         <a href="http://www.t8t.net/goods/23"> <img src="http://www.t8t.net/images/201603/thumb/4e97292c310027693f35d67b62ff895c-thumb.jpg" alt="excel导入的商品" /> </a> 
        </div>
        <!--/pic--> 
        <p class="text"><a href="http://www.t8t.net/goods/23">excel导入的商品</a></p> 
        <p class="price">111.00</p> 
        <div class="cart-icon" data-goods_id="23"> 
         <i class="fa fa-shopping-cart"></i> 
        </div> 
        <div class="tag sale-tag"></div> 
       </div>
       <!--/item-bb--> 
      </div> 
     </div>
     <!--/goods-list-grid--> 
    </div>
    <!--/home-grid-->
   </div> 
   <div class="container"> 
    <div class="home-grid"> 
     <div class="grid-title grid-title-2"> 
      <i class="fa fa-star"></i> 
      <span>热卖商品</span> 
     </div> 
     <div class="goods-list-grid"> 
      <div class="item"> 
       <div class="item-bb"> 
        <a href="http://www.t8t.net/goods/1">
         <div class="item-mask"></div></a> 
        <div class="pic"> 
         <a href="http://www.t8t.net/goods/1"> <img src="http://www.t8t.net/images/201601/thumb/aac716cc3b6b0d2926cf375b0b6385cd-thumb.jpg" alt="phpstore测试商品信息" /> </a> 
        </div>
        <!--/pic--> 
        <p class="text"><a href="http://www.t8t.net/goods/1">phpstore测试商品信息</a></p> 
        <p class="price">881.00</p> 
        <div class="cart-icon" data-goods_id="1"> 
         <i class="fa fa-shopping-cart"></i> 
        </div> 
        <div class="tag sale-tag"></div> 
       </div>
       <!--/item-bb--> 
      </div> 
      
       <!--/item-bb--> 
   
     </div>
     <!--/goods-list-grid--> 
    </div>
    <!--/home-grid-->
   </div> 
   <div class="pop-box pop-box2" style="display:none;"> 
    <div class="pop-box-tit">
      信息提示 
     <div class="pop-box-close"> 
      <i class="fa fa-times"></i> 
     </div> 
    </div> 
    <div class="pop-box-body"> 
     <div class="pop-box-info"></div> 
     <div class="pop-box-url"></div> 
    </div>
    <!--/pop-box-body-->
   </div>
   <!--/pop-box-->
  </div>
  <!--/goods-list-grid--> 
  <div class="help">
   <div class="help-bb"> 
    <div class="desc">
      phpstore simple版本为phpstore-b2c极速版本。去繁化简，专注于购物本身的功能实现。提供高效/安全/快捷的购物体验。基于Laravel5.1(LTS)版，可以非常方便的做二次开发和功能扩展。 
    </div> 
    <div class="tit1">
     联系我们
    </div> 
    <p class="email">david.swh@vip.163.com</p> 
    <p class="tel">400-006-8631</p> 
    <p class="address">北京PhpStore研发工作室</p> 
    <p class="tit2">网店帮助中心</p> 
    <p class="tit3">如何处理数据库</p> 
    <div class="article-1"> 
     <ul class="list"> 
     </ul> 
    </div> 
    <div class="article-2"> 
     <ul class="list"> 
     </ul> 
    </div>
   </div>
   <!--/help-bb-->
  </div>
  <!--/help-->
  <div class="footer"> 
   <a href="http://www.phpstore.cn" target="_blank"><span class="org">PowerBy</span><span class="green">PhpStore-B2C</span><span class="white">V2.0(LTS)</span></a>
  </div>
  <script type="text/javascript">	$(function(){		front.nav("http://www.t8t.net");		front.color.select("http://www.t8t.net");		front.common.cart("http://www.t8t.net/ajax-buy");	});</script>
 </body>
</html>