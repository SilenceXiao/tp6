<template>
    <div>
        <!-- 顶部tab -->
        <header_></header_>
        <!-- 搜索栏 -->
        <search></search>
        <!-- 内页导航栏 -->
        <div class="top-nav bg3">
            <div class="nav-box inner">
                <div class="all-cat">
                    <div class="title"><i class="iconfont icon-menu"></i> 全部分类</div>
                </div>
                <ul class="nva-list">
                    <a href="/">
                        <li>首页</li>
                    </a>
                </ul>
            </div>
        </div>
        <div class="content inner">
            <section class="item-show__div item-show__head clearfix">
                <div class="pull-left">
                    <ol class="breadcrumb">
                        <li><a href="/">首页</a></li>
                        <li>
                            <router-link to="/category">爆款推荐</router-link>
                        </li>
                        <li class="active">原创设计日常汉服女款绣花长褙子吊带改良宋裤春夏</li>
                    </ol>
                    <div class="item-pic__box" id="magnifier">
                        <div class="small-box">
                            <img class="cover" src="http://testmall.singwa666.com/static/upload/image/1.jpg">
                            <span class="hover"></span>
                        </div>
                        <div class="thumbnail-box">
                            <a href="javascript:;" class="btn btn-default btn-prev"></a>
                            <div class="thumb-list">
                                <ul class="wrapper clearfix">
                                    <li class="item active"
                                        data-src="http://testmall.singwa666.com/static/upload/image/1.jpg"><img
                                            class="cover"
                                            src="http://testmall.singwa666.com/static/upload/image/1.jpg"
                                    ></li>
                                    <li class="item" data-src="@/assets/images/temp/S-001-2_b.jpg"><img class="cover"
                                                                                                        src="@/assets/images/temp/S-001-2_s.jpg"
                                    ></li>
                                    <li class="item" data-src="@/assets/images/temp/S-001-3_b.jpg"><img class="cover"
                                                                                                        src="@/assets/images/temp/S-001-3_s.jpg"
                                    ></li>
                                    <li class="item" data-src="@/assets/images/temp/S-001-4_b.jpg"><img class="cover"
                                                                                                        src="@/assets/images/temp/S-001-4_s.jpg"
                                    ></li>
                                    <li class="item" data-src="@/assets/images/temp/S-001-4_b.jpg"><img class="cover"
                                                                                                        src="@/assets/images/temp/S-001-4_s.jpg"
                                    ></li>
                                </ul>
                            </div>
                            <a href="javascript:;" class="btn btn-default btn-next"></a>
                        </div>
                    </div>

                    <div class="item-info__box">
                        <div class="item-title">
                            <div class="name ep2">原创设计日常汉服女款绣花长褙子吊带改良宋裤春夏</div>
                        </div>
                        <div class="item-price bgf5">
                            <div class="price-box clearfix">
                                <div class="price-panel pull-left">
                                    售价：<span class="price">￥19.20 <s class="fz16 c9">￥24.00</s></span>
                                </div>
                            </div>
                        </div>
                        <ul class="item-ind-panel clearfix">
                            <li class="item-ind-item">
                                <span class="ind-label c9">累计销量</span>
                                <span class="ind-count cr">1688</span>
                            </li>
                        </ul>
                        <div class="item-key">
                            <div class="item-sku">
                                <dl class="item-prop clearfix">
                                    <dt class="item-metatit">颜色：</dt>
                                    <dd>
                                        <ul data-property="颜色" class="clearfix">
                                            <li><a class="on" href="javascript:;" role="button" data-value="白色"
                                                   aria-disabled="true">
                                                <span>白色</span>
                                            </a></li>
                                            <li><a href="javascript:;" role="button" data-value="黑色"
                                                   aria-disabled="true">
                                                <span>黑色</span>
                                            </a></li>
                                            <li><a href="javascript:;" role="button" data-value="粉红色"
                                                   aria-disabled="true">
                                                <span>粉红色</span>
                                            </a></li>
                                            <li><a href="javascript:;" role="button" data-value="黄色"
                                                   aria-disabled="true">
                                                <span>黄色</span>
                                            </a></li>
                                        </ul>
                                    </dd>
                                </dl>
                                <dl class="item-prop clearfix">
                                    <dt class="item-metatit">尺码：</dt>
                                    <dd>
                                        <ul data-property="尺码" class="clearfix">
                                            <li><a class="on" href="javascript:;" role="button" data-value="S"
                                                   aria-disabled="true">
                                                <span>S</span>
                                            </a></li>
                                            <li><a href="javascript:;" role="button" data-value="M"
                                                   aria-disabled="true">
                                                <span>M</span>
                                            </a></li>
                                            <li><a href="javascript:;" role="button" data-value="L"
                                                   aria-disabled="true">
                                                <span>L</span>
                                            </a></li>
                                            <li><a href="javascript:;" role="button" data-value="XL"
                                                   aria-disabled="true">
                                                <span>XL</span>
                                            </a></li>
                                        </ul>
                                    </dd>
                                </dl>
                            </div>
                            <div class="item-amount clearfix bgf5">
                                <div class="item-metatit">数量：</div>
                                <div class="amount-box">
                                    <div class="amount-widget">
                                        <input class="amount-input" value="1" maxlength="8" title="请输入购买量" type="text">
                                        <div class="amount-btn">
                                            <a class="amount-but add"></a>
                                            <a class="amount-but sub"></a>
                                        </div>
                                    </div>
                                    <div class="item-stock"><span style="margin-left: 10px;">库存 <b id="Stock">1000</b> 件</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item-action clearfix bgf5">
                                <a href="javascript:;" rel="nofollow" data-addfastbuy="true" title="点击此按钮，到下一步确认购买信息。"
                                   role="button" class="item-action__buy">立即购买</a>
                                <a href="javascript:;" rel="nofollow" data-addfastbuy="true" role="button"
                                   class="item-action__basket">
                                    <i class="iconfont icon-shopcart"></i> 加入购物车
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pull-right picked-div">
                    <div class="lace-title">
                        <span class="c6">爆款推荐</span>
                    </div>
                    <div class="swiper-container picked-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a class="picked-item" href="">
                                    <img src="@/assets/images/temp/S-001-1_s.jpg" alt="" class="cover">
                                    <div class="look_price">¥134.99</div>
                                </a>
                                <a class="picked-item" href="">
                                    <img src="@/assets/images/temp/S-001-2_s.jpg" alt="" class="cover">
                                    <div class="look_price">¥134.99</div>
                                </a>
                                <a class="picked-item" href="">
                                    <img src="@/assets/images/temp/S-001-3_s.jpg" alt="" class="cover">
                                    <div class="look_price">¥134.99</div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="picked-item" href="">
                                    <img src="@/assets/images/temp/S-001-4_s.jpg" alt="" class="cover">
                                    <div class="look_price">¥134.99</div>
                                </a>
                                <a class="picked-item" href="">
                                    <img src="@/assets/images/temp/S-001-5_s.jpg" alt="" class="cover">
                                    <div class="look_price">¥134.99</div>
                                </a>
                                <a class="picked-item" href="">
                                    <img src="@/assets/images/temp/S-001-6_s.jpg" alt="" class="cover">
                                    <div class="look_price">¥134.99</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="picked-button-prev"></div>
                    <div class="picked-button-next"></div>
                </div>
            </section>
            <section class="item-show__div item-show__body posr clearfix">
                <div class="item-nav-tabs">
                    <ul class="nav-tabs nav-pills clearfix" role="tablist" id="item-tabs">
                        <li role="presentation" class="active"><a href="#detail" role="tab" data-toggle="tab"
                                                                  aria-controls="detail" aria-expanded="true">商品详情</a>
                        </li>
                    </ul>
                </div>
                <div class="pull-left">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="detail" aria-labelledby="detail-tab">
                            <div class="item-detail__info clearfix">
                                <div class="record">商品编号：D-8812</div>
                                <div class="record">上架时间：2017-06-24</div>
                                <div class="record">商品毛重：200克</div>
                                <div class="record">商品库存：1000件</div>
                            </div>
                            <div class="rich-text">
                                <p style="text-align: center;">
                                    <img src="@/assets/images/temp/S-001_1.jpg" alt=""><br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="recommends">
                        <div class="lace-title type-2">
                            <span class="cr">爆款推荐</span>
                        </div>
                        <div class="swiper-container recommends-swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a class="picked-item" href="">
                                        <img src="@/assets/images/temp/S-001-1_s.jpg" alt="" class="cover">
                                        <div class="look_price">¥134.99</div>
                                    </a>
                                    <a class="picked-item" href="">
                                        <img src="@/assets/images/temp/S-001-2_s.jpg" alt="" class="cover">
                                        <div class="look_price">¥134.99</div>
                                    </a>
                                    <a class="picked-item" href="">
                                        <img src="@/assets/images/temp/S-001-3_s.jpg" alt="" class="cover">
                                        <div class="look_price">¥134.99</div>
                                    </a>
                                    <a class="picked-item" href="">
                                        <img src="@/assets/images/temp/S-001-4_s.jpg" alt="" class="cover">
                                        <div class="look_price">¥134.99</div>
                                    </a>
                                    <a class="picked-item" href="">
                                        <img src="@/assets/images/temp/S-001-5_s.jpg" alt="" class="cover">
                                        <div class="look_price">¥134.99</div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="picked-item" href="">
                                        <img src="@/assets/images/temp/S-001-1_s.jpg" alt="" class="cover">
                                        <div class="look_price">¥134.99</div>
                                    </a>
                                    <a class="picked-item" href="">
                                        <img src="@/assets/images/temp/S-001-2_s.jpg" alt="" class="cover">
                                        <div class="look_price">¥134.99</div>
                                    </a>
                                    <a class="picked-item" href="">
                                        <img src="@/assets/images/temp/S-001-3_s.jpg" alt="" class="cover">
                                        <div class="look_price">¥134.99</div>
                                    </a>
                                    <a class="picked-item" href="">
                                        <img src="@/assets/images/temp/S-001-4_s.jpg" alt="" class="cover">
                                        <div class="look_price">¥134.99</div>
                                    </a>
                                    <a class="picked-item" href="">
                                        <img src="@/assets/images/temp/S-001-5_s.jpg" alt="" class="cover">
                                        <div class="look_price">¥134.99</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pull-right">
                    <div class="tab-content" id="descCate">
                        <div role="tabpanel" class="tab-pane fade in active" id="detail-tab"
                             aria-labelledby="detail-tab">
                            <div class="descCate-content bgf5">
                                <dd class="dc-idsItem selected">
                                    <a href="#desc-module-1"><i class="iconfont icon-dot"></i> 产品图</a>
                                </dd>
                                <dd class="dc-idsItem">
                                    <a href="#desc-module-2"><i class="iconfont icon-selected"></i> 细节图</a>
                                </dd>
                                <dd class="dc-idsItem">
                                    <a href="#desc-module-3"><i class="iconfont"></i> 尺寸及试穿</a>
                                </dd>
                                <dd class="dc-idsItem">
                                    <a href="#desc-module-4"><i class="iconfont"></i> 模特效果图</a>
                                </dd>
                                <dd class="dc-idsItem">
                                    <a href="#desc-module-5"><i class="iconfont"></i> 常见问题</a>
                                </dd>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer_></footer_>
    </div>
</template>
<script>
    import "@/assets/js/jquery.zoom.js"
    import "@/assets/js/jquery.magnifier.js"
    import "@/assets/js/jquery.magnifier.js"
    import "@/assets/js/jquery.zoom.js"
    import header_ from '../components/header_'
    import search from '../components/search'
    import footer_ from '../components/footer_'


    export default {
        components: {header_, search, footer_},
        name: "detail",
        mounted() {
            $('#descCate').smartFloat(0);
            $('.dc-idsItem').click(function () {
                $(this).addClass('selected').siblings().removeClass('selected');
            });
            $('#item-tabs a[data-toggle="tab"]').on('show.bs.tab', function (e) {
                $('#descCate #' + $(e.target).attr('aria-controls') + '-tab')
                    .addClass('in').addClass('active').siblings()
                    .removeClass('in').removeClass('active');
            });
            var recommends = new Swiper('.recommends-swiper', {
                spaceBetween: 40,
                autoplay: 5000,
            });
            $('#magnifier').magnifier();
            $('.vip-price-panel').click(function () {
                if ($(this).hasClass('active')) {
                    $('.all-price__box').stop().slideUp('normal', function () {
                        $('.vip-price-panel').removeClass('active').find('.iconfont').removeClass('icon-up').addClass('icon-down');
                    });
                } else {
                    $(this).addClass('active').find('.iconfont').removeClass('icon-down').addClass('icon-up');
                    $('.all-price__box').stop().slideDown('normal');
                }
            });
            $('.amount-input').onlyReg({reg: /[^0-9]/g});
            var stock = parseInt($('#Stock').html());
            $('.amount-widget').on('click', '.amount-but', function () {
                var num = parseInt($('.amount-input').val());
                if (!num) num = 0;
                if ($(this).hasClass('add')) {
                    if (num > stock - 1) {
                        return DJMask.open({
                            width: "300px",
                            height: "100px",
                            content: "您输入的数量超过库存上限"
                        });
                    }
                    $('.amount-input').val(num + 1);
                } else if ($(this).hasClass('sub')) {
                    if (num == 1) {
                        return DJMask.open({
                            width: "300px",
                            height: "100px",
                            content: "您输入的数量有误"
                        });
                    }
                    $('.amount-input').val(num - 1);
                }
            });
            // 顶部banner轮播
            var picked_swiper = new Swiper('.picked-swiper', {
                loop: true,
                direction: 'vertical',
                prevButton: '.picked-button-prev',
                nextButton: '.picked-button-next',
            });
        },
        methods: {}
    }
</script>

<style scoped>

</style>
