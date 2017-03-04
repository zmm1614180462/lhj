@extends('mi.master')

@section('css')
    <link rel="stylesheet" href="{{url('css/mi_ordlist.css')}}">
@endsection

@section('content')
    <div class="page-main user-main">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <div class="uc-box uc-sub-box">
                        <div class="uc-nav-box">
                            <div class="box-hd">
                                <h3 class="title">订单中心</h3>
                            </div>
                            <div class="box-bd">
                                <ul class="uc-nav-list J_navList">
                                    <li class="active">
                                        <a class="J_noRandom" href="javascript:;">我的订单</a>
                                    </li>
                                    @for($i=0;$i<5;$i++)
                                        <li >
                                            <a class="J_noRandom" href="javascript:;">有待添加</a>
                                        </li>
                                    @endfor

                                </ul>
                            </div>
                        </div>
                        <div class="uc-nav-box">
                            <div class="box-hd">
                                <h3 class="title">个人中心</h3>
                            </div>
                            <div class="box-bd">
                                <ul id="J_orderNavList" class="uc-nav-list">
                                    <li><a href="javascript:;">我的个人中心</a></li>
                                    @for($i=0;$i<8;$i++)
                                        <li><a href="javascript:;">有待添加</a></li>
                                    @endfor

                                </ul>
                            </div>
                        </div>
                        <div class="uc-nav-box">
                            <div class="box-hd">
                                <h3 class="title">售后服务</h3>
                            </div>
                            <div class="box-bd">
                                <ul class="uc-nav-list">
                                    <li><a href="javascript:;">服务记录</a></li>
                                    <li><a href="javascript:;">申请服务</a></li>
                                    <li><a href="javascript:;">领取快递报销</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="uc-nav-box">
                            <div class="box-hd">
                                <h3 class="title">账户管理</h3>
                            </div>
                            <div class="box-bd">
                                <ul class="uc-nav-list">
                                    <li><a href="javascript:;">个人信息</a></li>
                                    <li><a href="javascript:;">修改密码</a></li>
                                    <li><a href="javascript:;">社区VIP认证</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span16">
                    <div class="uc-box uc-main-box">
                        <div class="uc-content-box order-list-box">
                            <div class="box-hd">
                                {{--订单部分--}}
                                <h1 class="title">我的订单</h1>
                                <div class="more clearfix">
                                    <ul class="filter-list J_orderType">
                                        <li class="first active"><a href="javascript:;">全部有效订单</a></li>
                                        <li><a id="J_unpaidTab" href="javascript:;">待支付</a></li>
                                        <li><a id="J_sendTab" href="javascript:;">待收货</a></li>
                                    </ul>

                                </div>
                            </div>
                            <div class="box-bd">
                                <div id="J_orderList">
                                    <ul class="order-list">
                                        @foreach($orders as $item)
                                        <li class="uc-order-item uc-order-item-pay">
                                            <div class="order-detail">
                                                <div class="order-summary">
                                               {{--@if($orders->status) {{$orders->status}}--}}
                                                    @if($item->status == 1)
                                                        <div class="order-status">未支付</div>
                                                    @endif
                                                    @if($item->status == 2)
                                                        <div class="order-status">已支付</div>
                                                    @endif
                                                    @if($item->status == 3)
                                                        <div class="order-status">等待发货</div>
                                                    @endif
                                                    @if($item->status == 4)
                                                        <div class="order-status">已发货</div>
                                                    @endif
                                                    @if($item->status == 5)
                                                        <div class="order-status">已签收</div>
                                                    @endif

                                                </div>
                                                <table class="order-detail-table">
                                                    <thead>
                                                    <tr>
                                                        <th class="col-main"><p class="caption-info">{{$item->created_at}}
                                                                 <span class="sep">|</span>{{Session::get('member')->nickname}}<span
                                                                        class="sep">|</span>订单号： <a
                                                                        href="javascript:;">{{$item->order_no}}</a><span
                                                                        class="sep">|</span>在线支付</p></th>
                                                        <th class="col-sub"><p class="caption-price">订单金额：<span
                                                                        class="num">{{$item->total_price}}</span>元</p></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class="order-items">
                                                            <ul class="goods-list">
                                                                @foreach($item->order_items as $order_item)
                                                                <li>
                                                                    <div class="figure figure-thumb"><a
                                                                                href="javascript:;"
                                                                                target="_blank"> <img
                                                                                    src="{{$order_item->product->preview}}"
                                                                                    width="80" height="80"
                                                                                    > </a></div>
                                                                    <p class="name"><a target="_blank"
                                                                                       href="javascript:;">{{$order_item->product->name}}
                                                                             </a></p>
                                                                    <p class="price">{{$order_item->product->price}}元 × {{$order_item->count}}</p></li>
                                                                @endforeach
                                                            </ul>
                                                        </td>
                                                        <td class="order-actions"><a class="btn btn-small btn-primary"
                                                                                     href="javascript:;"
                                                                                     target="_blank">立即支付</a> <a
                                                                    class="btn btn-small btn-line-gray"
                                                                    href="javascript:;">订单详情</a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('my-js')
<script type="text/javascript">

</script>
@endsection
