<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>lh商城网站</title>
    <meta name="viewport" content="width=1226">

    <meta http-equiv="Cache-Control" content="no-transform ">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    @yield('css')
    <link rel="stylesheet" href="{{url('css/mi_master.css')}}">
    <link rel="stylesheet" href="//s01.mifile.cn/css/index.min.css?d1fe60">
    <link rel="stylesheet" href="{{url('alert/zeroModal.css')}}">
    <script src="{{url('js/jquery-1.11.2.min.js')}}"></script>
    <script src="{{url('alert/zeroModal.min.js')}}"></script>

</head>

<body>
<div class="site-topbar">
    <div class="container">
        <div class="topbar-nav">
            <a rel="nofollow" href="javascript:;">Select Region</a>
        </div>
        <div class="topbar-cart" id="J_miniCartTrigger">
            <a rel="nofollow" class="cart-mini" id="J_miniCartBtn" href="{{url('cart')}}"><i class="iconfont"></i>购物车<span class="cart-mini-num J_cartNum"></span></a>
            <div class="cart-menu" id="J_miniCartMenu" style="display: none;"><div class="loading"><div class="loader"></div></div></div>
        </div>
        <div class="topbar-info" id="J_userInfo">
            @if(Session::get('member'))
                <a rel="nofollow" class="link" href="javascript:;">{{Session::get('member')->nickname}}</a><span class="sep">|</span>
                <a rel="nofollow" class="link" href="/service/logout">退出</a>
                <a rel="nofollow" class="link" href="/order_list">我的订单</a>
            @endif
            @if(!Session::get('member'))
                    <a rel="nofollow" class="link" href="{{url('login')}}">登录</a><span class="sep">|</span>
                    <a rel="nofollow" class="link" href="{{url('register')}}">注册</a>
            @endif
            <span class="sep">|</span><span class="message"><a rel="nofollow" href="javascript:;">消息通知<i class="J_miMessageTotal"></i></a></span></div>
    </div>
</div>
<div class="site-header">
    <div class="container">
        <div class="header-logo">
            <a class="logo ir" href="{{url('/')}}" title="lhj">毕业论文</a>
            <div class="doodle" style="display: block;"><a class="link-block" style="background-image:url(http://c1.mifile.cn/f/i/g/2015/gif/yybjb.gif)" href="{{url('/')}}" target="_blank"></a></div></div>
        <div class="header-nav">
            <ul class="nav-list"></ul>
        </div>
        <div class="header-search">
            <form id="J_searchForm" class="search-form clearfix" action="//search.mi.com/search" method="get">
                <label for="search" class="hide">站内搜索</label>
                <input class="search-text" type="search" id="search" name="keyword">
                <input type="submit" class="search-btn iconfont" value="">
                <div class="search-hot-words" style="display: block;">

                </div>
                <div id="J_keywordList" class="keyword-list hide">
                    <ul class="result-list">
                    </ul>
                </div>
            </form>
        </div>
    </div>
@yield('content')


<div class="site-footer">
    <div class="container">
        <div class="footer-service">
            <ul class="list-service clearfix">
                <li><a rel="nofollow" href="javascript:;"><i class="iconfont"></i>预约维修服务</a></li>
                <li><a rel="nofollow" href="javascript:;"><i class="iconfont"></i>7天无理由退货</a></li>
                <li><a rel="nofollow" href="javascript:;"><i class="iconfont"></i>15天免费换货</a></li>
                <li><a rel="nofollow" href="javascript:;"><i class="iconfont"></i>满150元包邮</a></li>
                <li><a rel="nofollow" href="javascript:;"><i class="iconfont"></i>520余家售后网点</a></li>
            </ul>
        </div>
        <div class="footer-links clearfix">

            <dl class="col-links col-links-first">
                <dt>帮助中心</dt>

                <dd><a rel="nofollow" href="javascript:;">账户管理</a></dd>

                <dd><a rel="nofollow" href="javascript:;">购物指南</a></dd>

                <dd><a rel="nofollow" href="javascript:;">订单操作</a></dd>

            </dl>

            <dl class="col-links ">
                <dt>服务支持</dt>

                <dd><a rel="nofollow" href="javascript:;">售后政策</a></dd>

                <dd><a rel="nofollow" href="javascript:;">自助服务</a></dd>

                <dd><a rel="nofollow" href="javascript:;">相关下载</a></dd>

            </dl>

            <dl class="col-links ">
                <dt>线下门店</dt>

                <dd><a rel="nofollow" href="javascript:;">网站之家</a></dd>

                <dd><a rel="nofollow" href="javascript:;">服务网点</a></dd>

                <dd><a rel="nofollow" href="javascript:;">零售网点</a></dd>

            </dl>

            <dl class="col-links ">
                <dt>关于网站</dt>

                <dd><a rel="nofollow" href="javascript:;">了解网站</a></dd>

                <dd><a rel="nofollow" href="javascript:;">加入网站</a></dd>

                <dd><a rel="nofollow" href="javascript:;">联系我们</a></dd>

            </dl>

            <dl class="col-links ">
                <dt>关注我们</dt>

                <dd><a rel="nofollow" href="javascript:;">新浪微博</a></dd>

                <dd><a rel="nofollow" href="javascript:;">网站部落</a></dd>

                <dd><a rel="nofollow" href="javascript:;">官方微信</a></dd>

            </dl>

            <dl class="col-links ">
                <dt>特色服务</dt>

                <dd><a rel="nofollow" href="javascript:;">F 码通道</a></dd>

                <dd><a rel="nofollow" href="javascript:;">礼物码</a></dd>

                <dd><a rel="nofollow" href="javascript:;">防伪查询</a></dd>

            </dl>

            <div class="col-contact">
                <p class="phone">400-100-5678</p>
                <p><span class="J_serviceTime-normal" style="">周一至周日 8:00-18:00</span>
                    <span class="J_serviceTime-holiday" style="display:none;">1月27日至2月2日服务时间 9:00-18:00</span><br>（仅收市话费）</p>
                <a rel="nofollow" class="btn btn-line-primary btn-small" href="javascript:;"><i class="iconfont"></i> 24小时在线客服</a>            </div>
        </div>
    </div>
</div>

</div>
</body>
<script src="{{url('js/jquery-1.11.2.min.js')}}"></script>
@yield('my-js')
<style>

    .site-header .logo:before {
        opacity: 1;
        filter: alpha(opacity=100)\9;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }
</style>
</html>
