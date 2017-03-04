@extends('mi.master')

@section('content')
    <div class="home-hero-container container">
        <div class="home-hero">
            <div class="home-hero-slider">
                <div class="ui-wrapper" style="max-width: 100%;">
                    <div class="ui-viewport" style="width: 100%; overflow: hidden; position: relative; height: 460px;">
                        <div id="J_homeSlider" class="xm-slider" data-stat-title="焦点图轮播"
                             style="width: auto; position: relative;">
                            <div class="slide loaded"
                                 style="float: none; list-style: none; position: absolute; width: 1226px; z-index: 0; display: none;">
                                <a href="http://hd.mi.com/x/02161q/index.html#J_videoContent"></a>
                            </div>

                            <div class="slide loaded"
                                 style="float: none; list-style: none; position: absolute; width: 1226px; z-index: 0; display: none;">
                                <a href="//www.mi.com/redminote4x/" data-stat-aid="AA15098" data-stat-pid="2_15_2_68"
                                   target="_blank" data-stat-id="AA15098+2_15_2_68"
                                   onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA15098+2_15_2_68', '//www.mi.com/redminote4x/', 'pcpid', '']);"><img
                                            src="//i3.mifile.cn/a4/xmad_14872274357485_XlGoi.jpg"
                                            srcset="//i3.mifile.cn/a4/xmad_14872274420909_ShGzV.jpg 2x"></a>
                            </div>

                            <div class="slide loaded"
                                 style="float: none; list-style: none; position: absolute; width: 1226px; z-index: 50; display: block;">
                                <a href="JavaScript:;"><img src="//i3.mifile.cn/a4/xmad_1487845113894_KNrRS.jpg"></a>
                            </div>

                            <div class="slide loaded"
                                 style="float: none; list-style: none; position: absolute; width: 1226px; z-index: 0; display: none;">
                                <a href="javascript:;"><img src="//i3.mifile.cn/a4/xmad_14882040011211_ryUsc.jpg"></a>
                            </div>

                            <div class="slide loaded"
                                 style="float: none; list-style: none; position: absolute; width: 1226px; z-index: 0; display: none;">
                                <a href="javascript:;"><img src="//i3.mifile.cn/a4/xmad_14876681632344_YFXhJ.jpg"
                                                            srcset="//i3.mifile.cn/a4/xmad_14876681688057_ljgHu.jpg 2x"></a>
                            </div>
                        </div>
                    </div>
                    <div class="ui-controls ui-has-pager ui-has-controls-direction">
                        <div class="ui-pager ui-default-pager">
                            <div class="ui-pager-item">
                                <a href="" data-slide-index="0" class="ui-pager-link">1</a>
                            </div>
                            <div class="ui-pager-item">
                                <a href="" data-slide-index="1" class="ui-pager-link">2</a>
                            </div>
                            <div class="ui-pager-item">
                                <a href="" data-slide-index="2" class="ui-pager-link active">3</a>
                            </div>
                            <div class="ui-pager-item">
                                <a href="" data-slide-index="3" class="ui-pager-link">4</a>
                            </div>
                            <div class="ui-pager-item">
                                <a href="" data-slide-index="4" class="ui-pager-link">5</a>
                            </div>
                        </div>
                        <div class="ui-controls-direction">
                            <a class="ui-prev" href="">上一张</a>
                            <a class="ui-next" href="">下一张</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 816 热门商品推荐位 -->
        <!--  816 热门商品推荐 END-->
    </div>
    <div class="page-main home-main">
        <div class="container">
            @foreach($categorys as $item)
                <div id="smart"
                     class="home-brick-box home-brick-row-2-box xm-plain-box J_itemBox J_brickBox is-visible loaded"
                     data-from-stat="false">
                    <div class="box-hd">
                        <h2 class="title">{{$item->name}}</h2>
                        <div class="more J_brickNav">
                            <a class="more-link" href="//www.mi.com/smart/" target="_blank">
                                查看全部<i class="iconfont"></i>
                            </a>
                        </div>
                    </div>
                    <div class="box-bd J_brickBd">
                        <div class="row">
                            <div class="span4 span-first">
                                <ul class="brick-promo-list clearfix">
                                    <li class="brick-item brick-item-l">
                                        <a href="//www.mi.com/water2/">
                                            <img src="http://i3.mifile.cn/a4/57c2f4fb-6743-44c6-b447-6bd55aaeef89"
                                                 width="160" height="160" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="span16">
                                <ul class="brick-list clearfix">
                                    @foreach($item->data as $list)
                                        <li class="brick-item brick-item-m brick-item-m-2">
                                            <div class="figure figure-img">
                                                <a href="//www.mi.com/mivr/">
                                                    <img src="{{$list->preview}}"
                                                         width="160" height="160" alt="小米VR眼镜"> </a>
                                            </div>
                                            <h3 class="title"><a href="//www.mi.com/mivr/" data-stat-aid="AA15096"
                                                                 target="_blank">{{$list->name}}</a>
                                            </h3>
                                            <p class="desc">{{$list->summary}}</p>
                                            <p class="price"><span class="num">{{$list->price}}</span>元 </p>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
@section('my-js')
    <script>
        $()
    </script>
@endsection



