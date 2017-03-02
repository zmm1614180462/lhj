<html lang="zh-CN" xml:lang="zh-CN">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="UTF-8">
    <title>我的购物车</title>
    <meta name="viewport" content="width=1226">
    <link rel="stylesheet" href="//s01.mifile.cn/css/base.min.css?v2017a13">
    <link rel="stylesheet" type="text/css" href="//s01.mifile.cn/css/cart.min.css?39656a">
</head>
<body>
<div class="site-header site-mini-header">
    <div class="container">
        <div class="header-logo">
            <a class="logo ir" href="{{url('/')}}">小米官网</a>
        </div>
        <div class="header-title has-more" id="J_miniHeaderTitle"><h2>我的购物车</h2><p>温馨提示：产品是否购买成功，以最终下单为准哦，请尽快结算</p></div>
        <div class="topbar-info" id="J_userInfo">
            <span class="user"><a rel="nofollow" class="user-name" href="javascript:;">
                    <span class="name">266819505</span>
                    <i class="iconfont"></i></a>
                <ul class="user-menu">
                    <li><a rel="nofollow" href="javascript:;">个人中心</a></li>
                    <li><a rel="nofollow" href="">账户</a></li>
                    <li><a rel="nofollow" href="">退出登录</a></li>
                </ul>
            </span>
            <span class="sep">|</span><a rel="nofollow" class="link link-order" href="javascript:;">我的订单</a></div>
    </div>
</div>

<div class="page-main">

    <div class="container">
        <div class="cart-loading loading hide" id="J_cartLoading">
            <div class="loader"></div>
        </div>
        <div class="cart-empty hide" id="J_cartEmpty">
            <h2>您的购物车还是空的！</h2>
            <p class="login-desc">登录后将显示您之前加入的商品</p>
            <a href="#" class="btn btn-primary btn-login" id="J_loginBtn" data-stat-id="7874490dbcbc1e60" onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-7874490dbcbc1e60', '#', 'pcpid', '']);">立即登录</a>
            <a href="//list.mi.com/0" class="btn btn-primary btn-shoping J_goShoping" data-stat-id="4658a7dfd89505fc" onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-4658a7dfd89505fc', '//list.mi.com/0', 'pcpid', '']);">马上去购物</a>
        </div>
        <div id="J_cartBox" class="">
            <div class="cart-goods-list">
                <div class="list-head clearfix">
                    <div class="col col-check"><i class="iconfont icon-checkbox icon-checkbox-selected" id="J_selectAll">√</i>全选</div>
                    <div class="col col-img">&nbsp;</div>
                    <div class="col col-name">商品名称</div>
                    <div class="col col-price">单价</div>
                    <div class="col col-num">数量</div>
                    <div class="col col-total">小计</div>
                    <div class="col col-action">操作</div>
                </div>
                <div class="list-body" id="J_cartListBody">
                    <div class="item-box">
                        <div class="item-table J_cartGoods">
                            <div class="item-row clearfix">
                                <div class="col col-check">
                                    <i class="iconfont icon-checkbox icon-checkbox-selected J_itemCheckbox" data-itemid="2162900002_0_buy" data-status="1">√</i>
                                </div>
                                <div class="col col-img">
                                    <a href="//item.mi.com/1162900002.html" target="_blank">
                                        <img alt="" src="//i1.mifile.cn/a1/pms_1469583247.6157588!80x80.jpg" width="80" height="80">
                                    </a>
                                </div>
                                <div class="col col-name">
                                    <div class="tags"></div>
                                    <h3 class="name">
                                        <a href="javascript:;" target="_blank"> 小米笔记本Air 13.3英寸 银色
                                        </a>
                                    </h3>
                                </div>
                                <div class="col col-price"> 4999元 </div>
                                <div class="col col-num">
                                    <div class="change-goods-num clearfix J_changeGoodsNum">
                                        <a href="javascript:void(0)" class="J_minus">
                                            <i class="iconfont"></i>
                                        </a>
                                        <input tyep="text" name="2162900002_0_buy" value="1" data-num="1" data-buylimit="20" autocomplete="off" class="goods-num J_goodsNum">
                                        <a href="javascript:void(0)" class="J_plus"><i class="iconfont"></i></a>
                                    </div>
                                </div>
                                <div class="col col-total"> 4999元 <p class="pre-info">  </p>
                                </div>
                                <div class="col col-action">
                                    <a id="2162900002_0_buy" data-msg="确定删除吗？" href="javascript:void(0);" title="删除" class="del J_delGoods"><i class="iconfont"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 加价购 -->
            <div class="raise-buy-box" id="J_raiseBuyBox"> </div>

            <div class="cart-bar clearfix cart-bar-fixed" id="J_cartBar">
                <div class="section-left">
                    <a href="{{url('/')}}">继续购物</a>
                    <span class="cart-total">共 <i id="J_cartTotalNum">1</i> 件商品，已选择 <i id="J_selTotalNum">1</i> 件</span>
                </div>
                <span class="total-price">
                    合计（不含运费）：<em id="J_cartTotalPrice">4999.00</em>元
                </span>
                <a href="javascript:void(0);" class="btn btn-a btn btn-primary" id="J_goCheckout">去结算</a>

                <div class="no-select-tip hide" id="J_noSelectTip">
                    请勾选需要结算的商品
                    <i class="arrow arrow-a"></i>
                    <i class="arrow arrow-b"></i>
                </div>
            </div>
        </div>


    </div>
</div>



<!-- 活动商品 -->


<!-- 礼物 -->


<!-- 过期、售罄商品 模版 -->



<!-- 删除开放购买商品提示 -->
<div class="modal fade modal-hide  modal-alert" id="J_modalAlert">
    <div class="modal-bd">
        <div class="text">
            <h3 id="J_alertMsg"></h3>
        </div>
        <div class="actions">
            <button class="btn btn-gray" data-dismiss="modal" id="J_alertCancel">取消</button>
            <button class="btn btn-primary" data-dismiss="modal" id="J_alertOk">确定</button>
        </div>
        <a class="close" href="javascript:;"><i class="iconfont"></i></a>
    </div>
</div>


<!--结算提示 -->












</body></html>