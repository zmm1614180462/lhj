@extends('mi.master')
@section('css')
    <link rel="stylesheet" href="//s01.mifile.cn/css/list/list.min.css?ver=2015072801">
@endsection
@section('content')
    <div class="content">
        <div class="container">
            <div class="order-list-box clearfix">
                <ul class="order-list">
                    <li class="active first"><a href="javascript:;">推荐</a></li>
                    <li ><a href="javascript:;">新品</a></li>
                    <li class="up" ><a href="javascript:;">价格</a></li>
                    <li ><a href="javascript:;">评论最多</a></li>
                </ul>
                <ul class="type-list">
                    <li><a href="javascript:;"><span class="checkbox"><i class="iconfont">√</i></span>查看评价</a></li>
                    <li><a href="javascript:;"><span class="checkbox"><i class="iconfont">√</i></span>仅显示特惠商品</a></li>
                    <li><a href="javascript:;"><span class="checkbox"><i class="iconfont">√</i></span>仅显示有货商品</a></li>
                </ul>
            </div>
            <div class="goods-list-box">
                <div class="goods-list clearfix">
{{--
    需要对产品进行分页
    产品的数据：名称  图片（200×200）缩略图（34*34）产品cid( ) 价格（）

--}}
                    @for($i =0 ;$i<24;$i++)
                    <div class="goods-item">
                        <div class="figure figure-img">
                            <a href="javascript:;">
                                <img src="//i1.mifile.cn/a1/pms_1477962926.56487493!200x200.jpg" width="200" height="200" alt="">
                            </a>
                        </div>
                        <p class="desc"></p>
                        <h2 class="title"><a href="javascript:;">小米MIX</a></h2>
                        <p class="price">3499元</p>
                        <div class="thumbs">
                            <ul class="thumb-list">
                                <li >
                                    <a ><img src="//i1.mifile.cn/a1/pms_1477962926.56487493!34x34.jpg" width="34" height="34" alt="小米MIX 黑色"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="actions clearfix">
                            <a class="btn-like J_likeGoods" data-cid="1164400010" href="javascript: void(0);" ><i class="iconfont"></i> <span>喜欢</span></a>
                            <a class="btn-buy btn-buy-detail J_buyGoods" href="javascript:;"><span>立即购买</span> <i class="iconfont"></i></a>                    </div>
                        <div class="flags">
                        </div>
                        <div class="notice"></div>
                    </div>
                    @endfor
                </div>
                <div class="xm-pagenavi">
                    <span class="numbers first iconfont"></span><span class="numbers current">1</span>
                    <a class="numbers" href="javascript:;">3</a>
                    <a class="numbers last iconfont" href="javascript:;"></a>
                </div>
            </div>
        </div>
    </div>
@endsection