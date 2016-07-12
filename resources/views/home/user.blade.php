<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>唯品会-我的信息</title>
        <link rel="stylesheet" href="/css/home/user.css" type="text/css">
    </head>
    <body>
        <div id="top">
            <a href="/"><div id="top-left">
            </div></a>
            <div id="top-right">
                <div id="t-r-t">
                    <ul>
                        <li><a href="">你好：{{Session("uData")->nickname}}</a></li>
                        <li><a id="vip" href=""></a></li>
                        <li><a href="/Home/out">[退出]</a></li>
                        <li><a href="/Home/indent">订单管理</a></li>
                        <li><a>|</a></li>
                        <li><a id="tel" href=""></a></li>
                        <li><a href="">400-6879-888</a></li>
                        <li><a>|</a></li>
                        <li><a id="server" href=""></a></li>
                        <li><a href="">客服在线</a></li>
                        <li><a>|</a></li>
                        <li><a id="people" href=""></a></li>
                        <li><a href="">会员服务</a></li>
                        <li><a id="down" href=""></a></li>
                    </ul>
                </div>
                <div class="c" id="t-r-b">
                    <ul>
                        <li><a id="bzh" href=""></a></li>
                        <li><a href="/">100%正品保证</a></li>
                        <li><a id="seven" href=""></a></li>
                        <li><a href="">七天无理由放心退</a></li>
                        <li><a id="tui" href=""></a></li>
                        <li><a href="">退货返运费</a></li>

                    </ul>
                </div>
            </div>
        </div>
        <hr class="c"/>
        <div id="full">
            <div class="yemian">
                <div class="zuo">
                    <div class="zuo1">

                        <p class="zp"><a href="">&nbsp我的交易</a></p>
                        <p class="zp"><a href="">&nbsp订单管理</a></p>
                        <p class="zp"><a href="">&nbsp申请退货</a></p>
                        <p class="zp"><a href="">&nbsp收货地址</a></p>

                    </div>
                    <div class="zuo2">
                        <p class="zp"><a href="">&nbsp我的资产</a></p>
                        <p class="zp"><a href="">&nbsp唯品钱包</a></p>
                        <p class="zp"><a href="">&nbsp银行卡</a></p>
                        <p class="zp"><a href="">&nbsp唯品币</a></p>
                        <p class="zp"><a href="">&nbsp卡券管理</a></p>
                        <p class="zp"><a href="">&nbsp积分管理</a></p>
                    </div>
                    <div class="zuo3">
                        <p class="zp"><a href="">&nbsp我的账户</a></p>
                        <p class="zp"><a href="">&nbsp我的资料</a></p>
                        <p class="zp"><a href="">&nbsp分享账号</a></p>
                        <p class="zp"><a href="">&nbsp爱心账户</a></p>
                        <p class="zp"><a href="">&nbsp消息订阅</a></p>

                    </div>	   
                </div>
                <div class="you">
                    <div class="you1">
                    <div class="you1a"><a href=""><image src="/images/home/user/2015-08-18_011618.png"></a></div>
                    <div class="you1b">
                        <div class="you1b1">
                            <div class="you1b1a"><span>亲爱的</span></div>
                            <div class="you1b1b"><image src="/images/home/user/2015-08-18_020249.png"><span><b>您好！</b></span></div>
                        </div>
                        <div class="you1b2">
                            <img src="/images/home/user/2015-08-18_112017.png">
                        </div>
                        <div class="you1b3"><img src="/images/home/user/2015-08-18_112321.png"></div>
                    </div>
                    <div class="you1c">
                        <div class="you1c1"><span><a href=""></a></span></div>
                        <div class="you1c2"><span><a href="{{ asset('/Home/memedit') }}">立即完善</a></span></div>
                        <div class="you1c3"><span><a href="">立即提升</a></span></div>
                    </div>
                    <div class="you1d">
                        <div class="you1d1"><span><image src="/images/home/user/2015-08-18_114533.png"><span></div>
                        <div class="you1d2"><span><a href="">唯品已恭候多时...</a></span></div>
                        <div class="you1d3"><span><a href="">邀请好友>></a></span></div>
                    </div>
                    </div>
                    <div class="you2">
                        <div class="you2a"><image src="/images/home/user/2015-08-18_115444.png"></div>
                        <div class="you2b"><image src="/images/home/user/2015-08-18_115444.png"></div>
                        <div class="you2c"><image src="/images/home/user/2015-08-18_115444.png"></div>
                        <div class="you2d"><image src="/images/home/user/2015-08-18_115452.png" style="height: 36px;"></div>
                    </div>
                    <div class="you3">
                        <div class="you3a">
                            <div class="you3a1">
                                <span class="y3a1s"><a href="">全部订单</a></span>&nbsp&nbsp
                                <span class="y3a1s"><a href="">待支付</a></span>&nbsp&nbsp
                                <span class="y3a1s"><a href="">代收货</a></span>
                            </div>
                        </div>
                        <div class="you4">
                            <div class="you4a"><image src="/images/home/user/2015-08-18_234215.png"></div>
                            <div class="you4b"><span>订单号:353513523</span><br/><span>2015-8-01 10:11:11</span></div>
                            <div class="you4c"><span><font color="#600B6">￥210.00</font></span>&nbsp;<span>订单已取消</span><br/>&nbsp;<span><a href="">跟踪</a></span></div>
                            <div class="you4d"><span><a href="/Home/indent">查看详情</a></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>                            
</html>	