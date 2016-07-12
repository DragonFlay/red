<!DOCTYPE HTML>
<html>
    <head>
        <title>唯品会-商品详情</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="/css/home/details.css">
    </head>
    <body>
        <!-- head top -->
        <div id="head">
            <div id="head_top">
             <img src="/images/home/details/1_1.jpg"> 
            </div>
            <div id="head_center">
                <div id="h_c_content">
                    <div id="contentl">
                        <div id="bj">北京
                        </div>
<!--                        <div id="bj-pic">
                        </div>-->
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
                            <li></li>
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
                    <a href="/Home/shopbag"><div id="shop">购物袋(0)</div></a>
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
                    <li><a href="">居家</a></li>
                    <li><a href="/Home/dress">女装</a></li>
                    <li><a href="/Home/living">居家</a></li>
                    <li><a href="">男士</a></li>
                    <li><a href="">旅行</a></li>
                    <li><a href="">全球特卖</a></li>
                    <li><a href="">明天上线</a></li>
                </ul>

                <div id="head_right">
                    <a href="">在售分类</a>
                </div>
            </div>
        </div>
    </div>
        
        
<div class="c" id="main">
    <div id="body">
        @foreach($deta as $key=>$xiang)
        <div id="body_top">
            <span><a class="p" href="/">首页&nbsp;></a></span>
            <span><a class="p" href="">{{$xiang->cname}}></a></span>
            <span>{{$xiang->name}}</span>
        </div>
        
        <div id="body_t1">
            <div id="b_t1_left">
                <div><img src="/images/home/details/1.jpg"/></div>

            </div>
            <div id="b_t1_right">
                <div id="style">{{$xiang->cname}}</div>
                <div id="b_t1_name">{{$xiang->name}}</div>
                <div id="b_t1_price">&yen;{{$xiang->price}}</div>
                <div id="b_t1_zhe">折扣1</div>
                <div id="b_t1_old">库存：{{$xiang->storeNum}}</div>
                <div class="c" id="b_t1_right2">
                    <div id="b_t1_r_1">折扣</div>
                    <div id="b_t1_r_2">购物满2件即享9折，满3件即享8.8折</div>
                </div>
                <div class="c" id="b_t1_right3">
                    <div id="yunfei">运费:</div>
                    <div id="free">免运费</div>
                    <div id="free288">(订单满288免运费)</div>
                </div>
                <div class="c" id="b_t1_right4">
                    <div id="count">数量:</div>
                    <div id="num">
                        <form>
                            <input type="number" name="count" value="1">
                        </form>
                    </div>
                    <a href=""><div class="c" id="join"></div></a>
                </div>
            </div>

        </div>
        @endforeach
        <div class="c" id="b_t_left2">
            <span><img src="/images/home/details/a.jpg" width="60px" height="78px"></span>
            <span><img src="/images/home/details/b.jpg" width="60px" height="78px"></span>
            <span><img src="/images/home/details/c.jpg" width="60px" height="78px"></span>
            <span><img src="/images/home/details/d.jpg" width="60px" height="78px"></span>
            <span><img src="/images/home/details/e.jpg" width="60px" height="78px"></span>
        </div>
    </div>
</div>

<!-- <hr class="c" id="foot"/> -->	
<div class="c" id="foot"> 
    <div id="bottom"><img src="/images/home/details/bottom.png"></div>
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
            <div><img src="/images/home/details/2.png"></div>
            <div>下载唯品会移动APP</div>
        </div>
    </div>
</div>	
</body>
</html> 
