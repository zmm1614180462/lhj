<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        body {
            text-align: center;
            font-family: "Microsoft YaHei", sans-serif;
        }
        .main {
            display: inline-block;
            width: 300px;
            color: #555;
        }
        .main .logo {
            margin: 0 auto;
            width: 160px;
            height: 74px;
            background:  no-repeat;
        }
        .main .title {
            margin: 30px 0 20px;
            font-weight: normal;
            font-size: 18px;
            line-height: 1;
        }
        .main .nav-tab {
            margin-bottom: 10px;
            font-size: 18px;
        }
        .main .nav-tab .nav-slider {
            display: inline-block;
            position: relative;
        }
        .main .nav-tab .nav-slider a.active {
            opacity: 1;
            color: #0f88eb;
        }
        .main .nav-tab .nav-slider a {
            display: inline-block;
            width: 4em;
            line-height: 35px;
            transition: .15s;
            text-decoration: none;
            opacity: .7;
            color: #555;
        }
        .main .nav-tab .nav-slider a:hover {
            opacity: 1;
        }
        .nav-slider-bar {
            position: absolute;
            width: 2.4em;
            height: 2px;
            background-color: #0f88eb;
            margin: 0 .8em;
            transition: .15s ease-in;
            left: 0;
            bottom: 0;
        }
        .signup, .signin {
            font-size: 14px;
            text-align: left;
        }
        .group-inputs {
            padding: 1px 0;
            border: 1px solid #d5d5d5;
            border-radius: 3px;
        }
        .group-inputs input {
            font-family: inherit;
            border: 0;
            border-top: 1px solid #e8e8e8;
            width: 100%;
            height: 48px;
            box-sizing: border-box;
            padding: 14px 11.2px;
            outline: none;
            font-size: 14px;
        }
        .group-inputs input:first-child {
            border-top: none;
            height: 47px;
        }
        .signup button, .signin button {
            margin-top: 18px;
            background-color: #0f88eb;
            border: none;
            border-radius: 3px;
            line-height: 41px;
            color: #fff;
            width: 100%;
            font-size: 15px;
            font-family: inherit;
            cursor: pointer;
        }
        button:hover {
            opacity: .6;
        }
        .signin-other {
            margin-top: 18px;
        }
        .unable-login {
            float: right;
            color: inherit;
            text-decoration: none;
        }
        .warning{
            padding-top:10px;
            color:red;
            display: none;
        }
    </style>
    <script src="{{url('public/js/jquery-1.11.2.min.js')}}"></script>
</head>
<body>
<div class="main">
    <div class="header">
        <h1 class="logo"></h1>
        <h2 class="title">开启您的购物之旅</h2>
    </div>
    <div class="body">
        <div class="nav-tab">
            <div class="nav-slider">
                <a href="#signup">注册</a>

                <a href="#signin" class="active" >登录</a>
                <span class="nav-slider-bar" style="left: 4em"></span>
            </div>
        </div>
        <div class="signup">
            <form action="#" method="post" onsubmit="return false">
                {{csrf_field()}}
                <div class="group-inputs register" style="position: relative">
                    <input name="username" type="text" placeholder="手机号（仅支持中国大陆）">
                    <input name="password" type="password" placeholder="密码（不少于 6 位）">
                    <input name="again_password" type="password" placeholder="确认密码">
                    <input name="validate_code" type="text" placeholder="请输入验证码">
                    <span class="vaildate" style="height: 0 ;position: absolute ;bottom:48px;right: 0" >
                        <img height="46" src="/service/validate_code/create" alt="">
                    </span>
                </div>
                <button id="register" type="button">注册账号</button>
            </form>
        </div>
        <div class="signin" style="display: none;">
            <form  action="#" method="post" onsubmit="return false">
                {{csrf_field()}}
                <div class="group-inputs login" style="position: relative">
                    <input name="username" type="text" placeholder="手机号">
                    <input name="password" type="password" placeholder="密码">
                    <input name="validate_code" type="text" placeholder="请输入验证码">
                    <span class="vaildate" style="height: 0 ;position: absolute ;bottom:48px;right: 0" >
                        <img  height="46" src="/service/validate_code/create" alt="">
                    </span>
                </div>
                <p class="warning">用户名或密码不正确</p>
                <button id='login' type="submit">登录</button>
                <div class="signin-other">
                    <input type="checkbox" id="remember-me">
                    <label for="remember-me">记住我</label>
                    <a class="unable-login" href="#">无法登录?</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    var navSlider = document.getElementsByClassName("nav-slider")[0];
    var navSliderA = navSlider.getElementsByTagName("a");
    var navSliderBar = navSlider.getElementsByClassName("nav-slider-bar")[0];
    var signup = document.getElementsByClassName("signup")[0];
    var signin = document.getElementsByClassName("signin")[0];
    signup.style.display = "none";
    signin.style.display = "block";

    navSliderA[0].onclick = function () {
        navSliderBar.style.left = "0";
        this.className = "active";
        navSliderA[1].className = "";
        signup.style.display = "block";
        signin.style.display = "none";
        $('.vaildate').find('img').attr('src','/service/validate_code/create?'+new Date().getTime())
    }
    navSliderA[1].onclick = function () {
        navSliderBar.style.left = "4em";
        this.className = "active";
        navSliderA[0].className = "";
        signup.style.display = "none";
        signin.style.display = "block";
       $('.vaildate').find('img').attr('src','/service/validate_code/create?'+new Date().getTime())
       $('.warning').css('display','none')
    }
</script>
<script>
//注册功能
$('#register').on('click',function (ev) {
    ev.stopPropagation();
    var username =  $('.register').find('input[name=username]').val();
    var password =  $('.register').find('input[name=password]').val()
    var confirm =  $('.register').find('input[name=again_password]').val()
    var validate_code =  $('.register').find('input[name=validate_code]').val()
    //检查手机号
    if(!/^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/.test(username)){
        alert('请输入正确的手机号')
    }
    if(!/^[A-Za-z0-9]{6,20}$/.test(password)){
        alert('密码格式不正确')
    }
    if(password!=confirm){
        alert('两次输入的密码不一致')
    }
    if(!validate_code){
        alert('验证码不能为空')
    }
    //检查密码
    //检查两次输入的密码一样么
    //检查验证码是否为空
    $.ajax({
        type: "POST",
        url: '/service/register',
        dataType: 'json',
        cache: false,
        data: {phone:username, password: password, confirm: confirm,validate_code: validate_code, _token: "{{csrf_token()}}"},
        success:function (data) {
            console.log(data)
        }
    })

})

//登录
$('#login').on('click',function (ev) {
    ev.stopPropagation();
    var username =  $('.login').find('input[name=username]').val();
    var password =  $('.login').find('input[name=password]').val()
    var validate_code =  $('.login').find('input[name=validate_code]').val()
    if(!username){
        $('.warning').css('display','block');
        $('.warning').html('用户名不能为空');
        return
    }
    if(!password){
        $('.warning').css('display','block');
        $('.warning').html('密码不能为空');
        return
    }
    if(!validate_code){
        $('.warning').css('display','block');
        $('.warning').html('验证码不能为空');
        return
    }

    $.ajax({
        type: "POST",
        url: '/service/login',
        dataType: 'json',
        cache: false,
        data: {username:username, password: password,validate_code: validate_code, _token: "{{csrf_token()}}"},
        success:function (data) {
            if(!data){
                $('.warning').css('display','block');
                $('.warning').html('服务端错误');
                return
            }
            if(data.status != 0) {
                $('.warning').css('display','block');
                $('.warning').html(data.message);
                return;
            }
            $('.warning').html('登陆成功');
            location.href = "/"
        }
    })
})
</script>
</body>
</html>