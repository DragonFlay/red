<!DOCTYPE HTML>
<html>
    <head>
        <title>登录页</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/home/login.css') }}")/>
    </head>
    <body>
        <div id="body">
            <div id="head">
                <a href="/"><div id="head-left"></div></a>
                <div id="head-right">
                </div>
                <div class="c">
                </div>
                <div id="body">
                    <div id="body-left">
                        <img src="/images/home/register/5.png"/>
                    </div>
                    <div id="body-right">
                        <form action="{{ url('/Home/logTodo') }}" method="POST" name="login">
                            <a id="zc">欢迎回来！请登录</a>
                            <input type="hidden" name="_token" value="{{ $data['_token'] or csrf_token() }}" />
                            <p><input class="a" type="text" name="username" value="{{ $data['username'] or '' }}" placeholder="&nbsp;邮箱/手机/QQ号"/></p>
                            <p><input class="a" type="password" name="password" value="" placeholder="&nbsp;密码"/></p>
                            <p><input class="a" type="text" name="code" value="{{ $data['code'] or '' }}" placeholder="&nbsp;验证码" style="width:130px;"/></p>
                            <img src="{{ url('/Home/login/captcha')."/". rand() }}" id="code" onclick="this.src = this.src.replace(/\d+$/, '') +Math.ceil(10*(Math.random()));" style="height:30px;" />
                            <!--<a href="/Home/LogTodo"><div id="denglu" ></div></a>-->
                            <div id="denglu" ><input type="submit" value="" style="background:url(/images/home/login/1.png) -151px -171px;margin-top:15px;width:150px;height:40px"></div>
                            <div class="c"></div>
                            <input type="checkbox" checked ><a id="agree">&nbsp;记住用户名</a>
                            <div id="forget">
                                <span id="mima">
                                    忘记密码&nbsp;|&nbsp;
                                </span>
                                <span id="free">
                                    <a href="{{url('/Home/create')}}">免费注册</a>
                                </span>
                            </div>
                        </form>
                        <span id="errors">{{ session("info") }}</span>
                        <script src="{{ asset('/js/home/login_index.js') }}"></script>
                    </div>
                </div>
            </div>

        </div>
        <div id="jiao">Copyright 2008-2015 vip.com，All Rights Reserved ICP证：粤 B2-20080329</div>
    </body>
</html>