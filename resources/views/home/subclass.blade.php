<!DOCTYPE HTML>
<html>
    <head>
        <title>唯品会-子分类</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="/css/home/subclass.css">
        <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css">
        <!-- // <script src="/js/jquery-2.0.2.min.js"></script> -->
    </head>
    <body>
        <!-- head top -->
        <div id="head">
            <a href="/"><div id="head_top"></div></a>
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
                    <li><a href="">美妆</a></li>
                    <li><a id="baby" href=""><img src="/images/home/index/7.gif"/>母婴</a></li>
                    <li><a href="">鞋包</a></li>
                    <li><a href="/Home/dress">女装</a></li>
                    <li><a href="/Home/living">居家</a></li>
                    <li><a href="">男士</a></li>
                    <li><a href="">旅行</a></li>
                    <li><a href="">数码</a></li>
                    <li><a href="">特卖</a></li>
                    <li><a href="">在售分类</a></li>
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
<!--子分类头部结束-->
    <div id="main_body">
    <div id="main_top">
        <div id="main_top1_left">
            <div id="you">优纳佳品UNA家居专场</div>
            <div id="zhe"><a id="font1">1</a>折起</div>
            <div id="clock"></div>
            <div id="sheng">剩余&nbsp;2天&nbsp;18小时&nbsp;43分&nbsp;26秒</div>
            <div id="tubiao4"></div>
            <div id="tubiao3"></div>
            <div id="tubiao2"></div>
            <div id="tubiao1"></div>
            <div id="kong">品牌控 爱分享：</div>
        </div>
        <div id="main_top1">
            <div id="kou">折扣</div>	
            <div id="lzhe">购物满2件即享9折，满3件即享8.5折</div>					
        </div>
    </div>
    <div id="main_top_center">
        <div id="d">分类：</div>
        <div id="all_list">
            <ul>

                @foreach ($result as $key=>$tmp)
                    <li><a class="sonclass" value="{{ $tmp->cid }}">{{ $tmp->cname }}</a></li>
                @endforeach

            </ul>
        </div>
    </div>

    <div id="main_top_foot">
        <div id="mtf_left1">价格<!-- &#2C4; -->
        </div>
        <div id="mtf_left2">折扣<!-- &#2C4; -->
        </div>
        <div id="mtf_left3">
            <form action="" method="">
                <input type="checkbox" name="" value="">只看有货商品
            </form>
        </div>
    
        <div id="mtf-right1"><span class="rspan">1395</span>件商品
        </div>
    </div>
    


    <div id="main_body_top">

    @foreach($resource as $key=>$item)

        <div id="main_body_content1" class="main_body_content">
            <div><a href="/Home/details/{{$item->gid}}"><img src="/images/home/living/1.jpg"/></a></div>
            <div>{{$item->name}}</div>
            <div><b class="pink">&yen;{{$item->price}}</b><a class="zhe1">（1.5折）</a><del>&yen;{{$item->storeNum}}</del></span></div>
        </div>

    @endforeach

    </div>
    <div id="fenye">{!!$resource->render()!!}</div>

</div>
<!-- <hr class="c" id="foot"/> -->	
<div class="c" id="foot"> 
    <div id="bottom"><img src="/images/home/living/bottom.png"></div>
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
            <div><img src="/images/home/living/page_bottom_dl_n.png"></div>
            <div>下载唯品会移动APP</div>
        </div>
    </div>
</div>	
<!-- <script src="/js/home/subclass.js"></script> -->
</body>
</html> 
        
