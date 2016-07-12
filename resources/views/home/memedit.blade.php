<!DOCTYPE HTML>
<html>
    <head>
        <title>唯品会-个人中心</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css"href="{{ url('/css/home/memedit.css') }}">
    </head>
    <body>
        <div id="top">
            <a href="/"><div id="top-left"></div></a>
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
        
        
        <span class="gerenxinxi_left">
            <span class="gerenxinxi_left_one"></span>	
            <hr class="hr"/>
            <span>
                <table>
                    <tr>
                        <th><a href=>我的订单</a></th>
                    </tr>
                    <tr>
                        <td><a href=>全部订单</a></td>
                    </tr>
                    <tr>
                        <td><a href=>待付款</a></td>
                    </tr>
                    <tr>
                        <td><a href=>待收货</a></td>
                    </tr>
                    <tr>
                        <td><a href=>待评价</a></td>
                    </tr>
                    <tr>
                        <td><a href=>退货退款</a></td>
                    </tr>	
                </table>
            </span>
            <hr class="hr"/>
            <span>
                <table>
                    <tr>
                        <th><a href=>我的钱包</a></th>
                    </tr>
                </table>
            </span>
            <hr class="hr"/>
            <span>
                <table>
                    <tr>
                        <th><a href=>我的理财</a></th>
                    </tr>
                </table>
            </span>
            <hr class="hr"/>
            <span>
                <table>
                    <tr>
                        <th><a href=>我的特权</a></th>
                    </tr>
                    <tr>
                        <td><a href=>钻石会员</a></td>
                    </tr>
                    <tr>
                        <td><a href=>我的vip</a></td>
                    </tr>
                    <tr>
                        <td><a href=>现金卷</a></td>
                    </tr>
                    <tr>
                        <td><a href=>店铺优惠</a></td>
                    </tr>
                </table>
            </span>
            <hr class="hr"/>
            <span>
                <table>
                    <tr>
                        <th><a href=>地址管理</a></th>
                    </tr>
                </table>
            </span>	
        </span>

        
        <form action="{{url('/Home/mesave')}}" method="POST" name="save">
            <input type="hidden" name="_token" value="{{csrf_token()}}" />
            <span class="gerenxinxi_right">
                <div>基本资料</div>
                <table  border="0px">
                    <tr>
                        <td align="right">昵称：</td>
                        <td><p><input type="text" name="nickname" value="" class="ipt"></p></td>
                    </tr>
                    <tr>
                        <td align="right">性别：</td>
                        <td>
                            <p><input type="radio" name="sex" value="男" style="width:40px;" />男  <input type="radio" name="sex" value="女" style="width:40px;" />女</p>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">电话：</td>
                        <td><p><input type="text" name="phone" id="phone" value="" onkeyup="f(this);" class="ipt"/></p></td>
                    </tr>
                    <tr>
                        <td align="right">Q Q：</td>
                        <td><p><input type="text" name="qq" value="" onkeyup="f(this);" class="ipt"/></p></td>
                    </tr>
                    <tr>
                        <td align="right">邮箱：</td>
                        <td><p><input type="text" name="email" value="" class="ipt"></p></td>
                    </tr>
                    <tr>
                        <td align="right">地址：</td>
                        <td>
                            <select name="province" onchange="city(this);" class="sec">
                                <option>-选择地址-</option>
                                <option value="北京">北京</option>
                                <option value="上海">上海</option>
                                <option value="安徽">安徽</option>
                            </select>
                            <span id="city"></span>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">详细：</td>
                        <td><input type="text" name="addr" value="" class="ipt"></td>
                    </tr>
                    <tr><td></td><td><input type="submit" name="member" value="修 改" class="ipt"/></td></tr>
                    
                </table>
            </span>
            
        </form>
        <script src="{{ url('/js/home/memedit_test.js') }}"></script>
    </body>
</html>
