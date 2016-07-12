<!DOCTYPE HTML>
<html>
    <head>
        <title>注册页</title>
        <link rel="stylesheet" type="text/css" href="/css/home/register.css"/>
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
                        @if (count($errors) > 0)
                            <div id="errors">
                                @foreach ($errors->all() as $error)
                                    <span>{{ $error }} ;</span>
                                @endforeach
                            </div>
                        @endif
                        <span id="zd"><b>欢迎注册、已注册可直接</b><a id="zjdl" href="/Home/login">登录</a></span>
                        <form action="/Home/register" method="post" name="register">
                            <br/>
                            <input type="hidden" name="_token" value="{{ $data['_token'] or csrf_token() }}" />
                            <p><input class="a" type="text" name="username" value="{{ $data['username'] or '' }}" placeholder="&nbsp;请输入登录账号"/></p>
                            
                            <p><input type="radio" name="sex" value="男">&nbsp;先生&nbsp;<input type="radio" name="sex" checked value="女">&nbsp;女士</p>
                            
                            <p><input class="a" type="password" name="password" value="" placeholder="&nbsp;请输入登录密码"></p>
                            
                            <p><input class="a" type="password" name="repassword" value="" placeholder="&nbsp;请再次输入登录密码"></p>
                            
                            <p><input id="b" type="text" name="code" value="{{ $data['code'] or '' }}" placeholder="&nbsp;请输入验证码"></p>
                            <img src="{{ url('/Home/login/captcha')."/". rand() }}" id="code" onclick="this.src = this.src.replace(/\d+$/, '') +Math.ceil(10*(Math.random()));" style="height:30px;" />
                            <br/>
                            <p><input type="submit" id="button" value="立即注册"/> <a id="email" href="">通过邮箱验证&nbsp;>></a></p>
                            <div class="c"></div>
                            <p><input type="checkbox" checked /><a id="agree">我已阅读并接受唯品会服务条款。</a></p>
                            <div class="c"></div>
                        </form>
                        <span id="errors"> {{session("info")}} </span>
                        <script src="{{ asset('/js/home/register_index.js') }}"></script>
                    </div>
                </div>
            </div>
        </div>
        <div id="jiao">Copyright 2008-2015 vip.com，All Rights Reserved ICP证：粤 B2-20080329</div>
    </body>
</html>