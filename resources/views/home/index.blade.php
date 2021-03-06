<!DOCTYPE HTML>
<html>
    <head>
        <title>唯品会-首页</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="/css/home/index.css">
        <!-- // <script src="{{ asset('/js/jquery-2.0.2.min.js') }}"></script> -->
    </head>
    <body>
        <!-- head top -->
        <div id="head">
            <div id="head_top">
            <!-- <img src="1.jpg"> -->
            </div>
            <div id="head_center">
                <div id="h_c_content">
                    <div id="contentl">
                        <div id="bj">北京
                        </div>
                        <div id="bj-pic">
                        </div>
                    </div>
                    <div id="contentr">
                        <ul>
                            <li><a href="">手机版</a></li>
                            <li><a href="">时尚会</a></li>
                            <li><a href="">客户服务</a></li>
                            <li><a href="">会员俱乐部</a></li>
                            <li><a href="">积分兑换</a></li>
                            <li><a href="">联名卡申请</a></li>
                            <li><a href="">唯品卡</a></li>
                            <li><a>|</a></li>
                            <li><a href="/Home/favorites">我的收藏夹</a></li>
                            <li><a href="/Home/indent">我的订单</a></li>
                            @if(!Session::has("uData"))
                                <li><a href="/Home/login">登陆</a></li>
                            @else
                                <li>{{Session("uData")->nickname}}</li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="c"></div>
            <div id="head_bottom">
                <span id="h_b_left">
                    <img src="/images/home/index/4.png"/>
                </span>
                <div id="h_b_right"/>
                <img src="/images/home/index/5.png"/>
                <img src="/images/home/index/6.png"/>
                <img src="/images/home/index/7.png"/>
                <span id="shopbag">
                    <div id="bag"></div>
                    <a href="/Home/shopbag" id="num"><div id="shop">购物袋(0)</div></a>
                </span>
            </div>
        </div>
        <div class="c"></div>
        <!-- shopbody  -->
        <!-- body head -->
        <div id="body_head">
            <div id="head_left">
                <ul>
                    <li><a id="first" href="/">首页</a></li>
                    
                    @foreach ($categories as $key=>$cate)
                    <li><a id="sublink" href="/Home/sublink/{{ $cate->cid }}">{{ $cate->cname }}</a></li>
                    @endforeach
                    
<!--                    <li><a href="/Home/subclass">美妆</a></li>
                    <li><a id="baby" href=""><img src="/images/home/index/7.gif"/>母婴</a></li>
                    <li><a href="">鞋包</a></li>
                    <li><a href="/Home/dress">女装</a></li>
                    <li><a href="/Home/living">居家</a></li>
                    <li><a href="/Home/subclass">男士</a></li>
                    <li><a href="/Home/subclass">旅行</a></li>
                    <li><a href="/Home/subclass">数码</a></li>
                    <li><a href="/Home/subclass">特卖</a></li>
                    <li><a href="/Home/subclass">在售分类</a></li>-->
                </ul>
                <div id="head_right">
                    <form method="" action="">
                        <input type="hidden" name="_token" value="csrf_token()" />
                        <input type="text" name="keywords" id="keywords" value="" />
                        <input type="submit" name="sousuo" id="sousuo" value="搜索" />
                    </form>
                </div>
            </div>
        </div>
    </div>

        
        <!-- <div id="ima" class="c"></div> -->
        <!-- body top -->
        <div id="body_top">
        <!-- <img src="./a.jpg"/> -->
        </div>
        <!-- body main -->
        <div id="body">
            <div id="body_main">
                <div id="main_body">
                    <div>品牌折扣</div>
                    <div class="body-main"><a href="/Home/details"><img src="/images/home/index/13.jpg"/></a>
                    </div>
                    <div class="body-main"><a href="/Home/particulars"><img src="/images/home/index/14.jpg"/></a>
                    </div>
                    <div class="body-main"><a href=""><img src="/images/home/index/b.jpg"/></a>
                    </div>
                </div>
                <div id="body_right"/>
                <div><a>品牌特卖</a></div>
                <div class="body-right"><a href=""><img src="/images/home/index/16.jpg"/></a>
                </div>
                <div class="body-right"><a href=""><img src="/images/home/index/17.jpg"/></a>
                </div>
                <div class="body-right"><a href=""><img src="/images/home/index/18.jpg"/></a>
                </div>
                <div>
                </div>
            </div>
            <div class="c"></div>
            <!-- body foot -->
            <div id="body_image">
                    <!-- <img src="002.png"/>-->
            </div> 
            <div id="body_foot">
                <div id="body_image">
                    <a href="">新品上架</a>
                </div>
                <span><a href=""><img src="/images/home/index/01.jpg"/></a>
                </span>
                <span><a href=""><img src="/images/home/index/02.jpg"/></a>
                </span>
                <span><a href=""><img src="/images/home/index/03.jpg"/></a>
                </span>
                <!-- <span><img src="04.jpg"/>
                </span> -->
                <span><a href=""><img src="/images/home/index/05.jpg"/></a>
                </span>
                <span><a href=""><img src="/images/home/index/06.jpg"/></a>
                </span>
                <span><a href=""><img src="/images/home/index/6.jpg"/></a>
                </span>
            </div>
        </div>
        <div class="c"></div>
        <div id="foot-head"></div>
        <div class="c" id="foot"> 
            <div id="bottom"><img src="/images/home/index/bottom.png"></div>
            <div id="foot-bottom">
                <div class="footer">
                    <dl>
                        <dt>服务保障</dt>
                        <dd>正品保证</dd>
                        <dd>7天无理由放心退</dd>
                        <dd>退货返运费</dd>
                        <dd>7x15小时客户服务</dd>
                    </dl>
                </div>
                <div class="footer">
                    <dl>
                        <dt>购物指南</dt>
                        <dd>订单操作</dd>
                        <dd>会员注册</dd>
                        <dd>账号管理</dd>
                        <dd>收货样品</dd>
                        <dd>会员等级</dd>
                    </dl>
                </div>
                <div class="footer">
                    <dl>
                        <dt>支付方式</dt>
                        <dd>23家主流网银支付</dd>
                        <dd>货到付款</dd>
                        <dd>支付宝、网银等支付</dd>
                        <dd>信用卡支付</dd>
                        <dd>唯品钱包支付</dd>
                    </dl>
                </div>	
                <div class="footer">
                    <dl>
                        <dt>配送方式</dt>
                        <dd>全场满288元免运费</dd>
                        <dd>配送范围及运费</dd>
                        <dd>验货与签收</dd>
                    </dl>
                </div>	
                <div class="footer">
                    <dl>
                        <dt>售后服务</dt>
                        <dd>退货政策</dd>
                        <dd>退货流程</dd>
                        <dd>退款方式和实效</dd>
                        <dd>7x15小时客户服务</dd>
                    </dl>
                </div>
                <div id="two">
                    <div>唯品会APP二维码</div>
                    <div><img src="/images/home/index/page_bottom_dl_n.png"></div>
                    <div>下载唯品会移动APP</div>
                </div>
            </div>
        </div>	 
        <!-- // <script src="{{ asset('/js/home/subclass.js') }}"></script> -->
    </body>	
</html>

