<!DOCTYPE HTML>
<html>
    <head>
        <title>唯品会</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="/css/home/favorites.css">
    </head>
    <body>
        <div id="top">
            <a href="/"><div id="top-left">
            </div></a>
            <div id="top-right">
                <div id="t-r-t">
                    <ul>
                        <li><a href="/Home/member">你好：{{Session("uData")->nickname}}</a></li>
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
                        <li><a href="">100%正品保证</a></li>
                        <li><a id="seven" href=""></a></li>
                        <li><a href="">七天无理由放心退</a></li>
                        <li><a id="tui" href=""></a></li>
                        <li><a href="">退货返运费</a></li>

                    </ul>
                </div>
            </div>
        </div>
        <hr class="c"/>

        
                <div class="c"></div>
                <div class="cart">
                    <div class="cart-bar">
                        <ul>
                            <li class="current"><a href="" >全部商品<span class="number">1</span><span class="pipe"></span></li>
                            <li><a href="" >降价商品<span class="number">0</span><span class="pipe"></span></li>
                            <li><a href="" >库存紧张<span class="number">0</span></li>
                        </ul>
                        <div class="cart-sum">已选商品(不含运费)<strong>¥ 0.00</strong><a href="" class="submit-btn">结&nbsp;算</a></div>
                    </div>
                    <div class="c"></div>
                    <div class="cart-main">
                        <div class="cart-table">
                            <div class="select-all">
                                <label><input type="checkbox" name="">&nbsp;&nbsp;全选</label>
                            </div>
                            <div class="td-inner th-item">商品信息</div>
                            <div class="td-inner th-info">&nbsp;</div>
                            <div class="td-inner th-pice">单价（元）</div>
                            <div class="th td-inner th-amount">数量</div>
                            <div class="th th-sum">金额（元）</div>
                            <div class="th th-op">操作</div>
                        </div>	
                        <div class="shap">
                            <div class="shop-info">
                                <label><input type="checkbox" name="" /></label>
                                &nbsp;&nbsp;<span class="shop-icon"></span>
                                <span>店铺：
                                    <a href="" target="-blank" title="Apple Store 官方">Apple Store 官方 </a>
                                </span>
                                <a href="" class="online" target="_blank" title="点此可以直接和卖家交流选好的宝贝，或相互交流网购体验，还支持语音视频噢。"></a>
                            </div>
                        </div>
                        <div class="order-content">
                            <ul class="item-content">
                                <li class="td td-chk">
                                    <div class="td-inner">
                                        <input type="checkbox" name=""  value="">
                                    </div>
                                </li>
                                <li class="td td-item">
                                    <div class="td-inner">
                                        <div class="img"> <a href="" target="_blank"><img src="/images/home/favorites/TB1ChAVG80x80.jpg"></a></div>
                                        <div class="item-info">
                                            <a href="" target="_blank" class="item-title">Apple/苹果 15 英寸: 2.5 GHz Retina 显示屏的 MacBook Pro</a>
                                            <div class="item-promo"></div>
                                            <div class="item-icon">
                                                <a href="" target="_blank"><img src="/images/home/favorites/T1Vy1.png"></a>
                                                <a href="" target="_blank"><img src="/images/home/favorites/T1Vy2.png"></a>
                                                <a href="" target="_blank"><img src="/images/home/favorites/T1Vy3.png"></a>
                                                <span><img src="/images/home/favorites/T1Vy4.png"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="td td-info">
                                    <div class="item-props">
                                        <p>颜色分类；银色</p>
                                        <p>套餐类型；官方标配</p>

                                        <span class="btn-sku"></span>
                                    </div>
                                </li>
                                <li class="td td-price">
                                    <div class="td-inner">
                                        <span>17988.00</span>
                                    </div>
                                </li>
                                <li class="td td-amount">
                                    <div class="td-inner">
                                        <div class="item-amount">
                                            <a href="-"></a>
                                            <input type="text" value="1">
                                            <a href="">+</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="td td-sum">
                                    <div class="td-inner">
                                        <span>17988.00</span>
                                    </div>
                                </li>
                                <li class="td td-op">
                                    <div class="td-inner">
                                        <a href="" target="_blank">加入购物车</a>
                                        <a href="" target="_blank">删除</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="float-bar">
                        <div class="select-all">
                            <input type="checkbox" name=""> 
                            <span>全选</span>
                        </div>
                        <div class="operation">
                            <a href="">删除</a>
                            <a href="">移入收藏夹</a>
                            <a href="">分享</a>
                            <a href="">开始对比</a>
                        </div>
                        <div class="float-bar-right">
                            <div class="amount-sum">
                                <span class="txt">已选商品</span>
                                <em>0</em>
                                <span class="txt">件</span>
                                <i></i>
                            </div>
                            <div class="pice-sum">
                                <span class="txt">合计(不含运费)：</span><em>￥0.00</em>
                            </div>
                            <div class="btn-area">
                                结算
                            </div>
                        </div>
                    </div>
                </div>
                <div class="interested">
                    <ul class="tabs">
                        <li><a href="">掌柜热卖</a></li>
                        <li><a href="">最近浏览过的</a></li>
                        <li><a href="">猜你喜欢</a></li>
                    </ul>
                    <div class="wrap-line"></div>
                    <ul class="relative-list">
                        <li>
                            <a href="" target="">
                                <img src="/images/home/favorites/item_pic1.png.jpg">
                            </a>
                            <div class="rec-info">
                                <p class="price">￥31199.00</p>
                                <p><a href="" class="item-title" target="_blank">Asus/华硕 GFX70J GFX70J4860-8D3ABA58X30玩家国度游戏笔记本</a></p>
                            </div>
                        </li>
                        <li>
                            <a href="" target="">
                                <img src="/images/home/favorites/item_pic2.png.jpg">
                            </a>
                            <div class="rec-info">
                                <p class="price">￥4196.00</p>
                                <p><a href="" class="item-title" target="_blank">亮彩 简约现代收纳储物双人床1.5/1.8米软靠板式床卧室套房家具</a></p>
                            </div>
                        </li>
                        <li>
                            <a href="" target="">
                                <img src="/images/home/favorites/item_pic3.png.jpg">
                            </a>
                            <div class="rec-info">
                                <p class="price">￥436.00</p>
                                <p><a href="" class="item-title" target="_blank">花花公子男鞋夏季新品运动休闲鞋韩版板鞋潮流男士低帮真皮鞋子男</a></p>
                            </div>
                        </li>
                        <li>
                            <a href="" target="">
                                <img src="/images/home/favorites/item_pic4.png.jpg">
                            </a>
                            <div class="rec-info">
                                <p class="price">￥499.00</p>
                                <p><a href="" class="item-title" target="_blank">七巧手M5 机械键盘黑轴青轴 升级至尊背光游戏自定义87键机械键盘</a></p>
                            </div>
                        </li>
                    </ul>
                    <a href="" target="_blank" class="btn-to">去我的足迹&nbsp;<span>>></span></a>
                </div>
            </div>
            <div id="footer">
                <div class="footer">
                    <div class="footer-hd">
                        <p>
                            <a href="">唯品会集团</a><b>|</b>
                            <a href="">唯品会国际站</a><b>|</b>
                            <a href="">唯品会中国站</a><b>|</b>
                            <a href="">全球速卖通</a><b>|</b>
                            <a href="">淘宝网</a><b>|</b>
                            <a href="">天猫</a><b>|</b>
                            <a href="">聚划算</a><b>|</b>
                            <a href="">一淘</a><b>|</b>
                            <a href="">阿里妈妈</a><b>|</b>
                            <a href="">淘宝旅行</a><b>|</b>
                            <a href="">虾米</a><b>|</b>
                            <a href="">阿里云计算</a><b>|</b>
                            <a href="">云OS</a><b>|</b>
                            <a href="">万网</a><b>|</b>
                            <a href="">支付宝</a><b>|</b>
                            <a href="">来往</a>
                        </p>
                    </div>
                    <div class="footer-bd">
                        <p>
                            <a href="">关于我们</a>
                            <a href="">合作伙伴</a>
                            <a href="">营销中心</a>
                            <a href="">廉正举报</a>
                            <a href="">联系客服</a>
                            <a href="">开放平台</a>
                            <a href="">诚征英才</a>
                            <a href="">联系我们</a>
                            <a href="">网站地图</a>
                            <a href="">法律声明</a>
                            <em>© 2015 Taobao.com 版权所有</em>
                        </p>
                        <p>
                            <span>
                                网络文化经营许可证：</span>
                            <a href="">文网文[2010]040号</a>
                            <b>|</b>
                            <span> 增值电信业务经营许可证：</span>
                            <a href=""> 浙B2-20080224-1</a>
                            <span>信息网络传播视听节目许可证：1109364号</span>
                            <b>|</b><br/>
                            <span>互联网违法和不良信息举报电话：0571-81683755</span>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
