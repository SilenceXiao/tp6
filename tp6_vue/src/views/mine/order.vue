<template>
    <div>
        <!-- 顶部标题 -->
        <header_></header_>
        <div class="bgf5 clearfix">
            <div class="top-user">
                <div class="inner">
                    <router-link class="logo" to="/"><img src="@/assets/images/icons/logo.jpg" alt="TP6" class="cover">
                    </router-link>
                    <div class="title">个人中心</div>
                </div>
            </div>
        </div>
        <div class="content clearfix bgf5">
            <section class="user-center inner clearfix">
                <mine-left></mine-left>
                <div class="pull-right">
                    <div class="user-content__box clearfix bgf">
                        <div class="title">订单中心-我的订单</div>
                        <div class="order-list__box bgf">
                            <div class="order-panel">
                                <ul class="nav user-nav__title" role="tablist">
                                    <li role="presentation" class="nav-item active"><a href="#all" aria-controls="all"
                                                                                       role="tab"
                                                                                       data-toggle="tab">所有订单</a></li>
                                    <li role="presentation" class="nav-item "><a href="#pay" aria-controls="pay"
                                                                                 role="tab" data-toggle="tab">待付款 <span
                                            class="cr">0</span></a></li>
                                    <li role="presentation" class="nav-item "><a href="#emit" aria-controls="emit"
                                                                                 role="tab" data-toggle="tab">待发货 <span
                                            class="cr">0</span></a></li>
                                    <li role="presentation" class="nav-item "><a href="#take" aria-controls="take"
                                                                                 role="tab" data-toggle="tab">待收货 <span
                                            class="cr">0</span></a></li>
                                    <li role="presentation" class="nav-item "><a href="#eval" aria-controls="eval"
                                                                                 role="tab" data-toggle="tab">待评价 <span
                                            class="cr">0</span></a></li>
                                </ul>

                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="all">
                                        <table class="table text-center">
                                            <tr>
                                                <th width="380">商品信息</th>
                                                <th width="85">单价</th>
                                                <th width="85">数量</th>
                                                <th width="120">实付款</th>
                                                <th width="120">交易状态</th>
                                                <th width="120">交易操作</th>
                                            </tr>
                                            <tr class="order-item">
                                                <td>
                                                    <label>
                                                        <router-link to="/mine/orderdetail" class="num">
                                                            2017-03-30 订单号: 2669901385864042
                                                        </router-link>
                                                        <div class="card">
                                                            <div class="img"><img
                                                                    src="@/assets/images//temp/item-img_1.jpg" alt=""
                                                                    class="cover"></div>
                                                            <div class="name ep2">纯色圆领短袖T恤活动衫弹力柔软纯色圆领短袖T恤</div>
                                                            <div class="format">颜色分类：深棕色 尺码：均码</div>
                                                            <div class="favour">使用优惠券：优惠¥2.00</div>
                                                        </div>
                                                    </label>
                                                </td>
                                                <td>￥100</td>
                                                <td>1</td>
                                                <td>￥1000<br><span class="fz12 c6 text-nowrap">(含运费: ¥0.00)</span></td>
                                                <td class="state">
                                                    <a class="but c6">等待付款</a>
                                                    <a href="udai_order_detail.html" class="but c9">订单详情</a>
                                                </td>
                                                <td class="order">
                                                    <div class="del"><span class="glyphicon glyphicon-trash"
                                                                           aria-hidden="true"></span></div>
                                                    <a href="udai_shopcart_pay.html" class="but but-primary">立即付款</a>
                                                    <!-- <a href="" class="but but-link">评价</a> -->
                                                    <a href="" class="but c3">取消订单</a>
                                                </td>
                                            </tr>
                                            <tr class="order-item">
                                                <td>
                                                    <label>
                                                        <a href="udai_order_detail.html" class="num">
                                                            2017-03-30 订单号: 2669901385864042
                                                        </a>
                                                        <div class="card">
                                                            <div class="img"><img
                                                                    src="@/assets/images//temp/item-img_1.jpg" alt=""
                                                                    class="cover"></div>
                                                            <div class="name ep2">纯色圆领短袖T恤活动衫弹力柔软纯色圆领短袖T恤</div>
                                                            <div class="format">颜色分类：深棕色 尺码：均码</div>
                                                            <div class="favour">使用优惠券：优惠¥2.00</div>
                                                        </div>
                                                    </label>
                                                </td>
                                                <td>￥100</td>
                                                <td>1</td>
                                                <td>￥1000<br><span class="fz12 c6 text-nowrap">(含运费: ¥0.00)</span></td>
                                                <td class="state">
                                                    <a class="but c6">等待收货</a>
                                                    <a href="udai_mail_query.html" class="but cr">查看物流</a>
                                                    <a href="udai_order_detail.html" class="but c9">订单详情</a>
                                                </td>
                                                <td class="order">
                                                    <div class="del"><span class="glyphicon glyphicon-trash"
                                                                           aria-hidden="true"></span></div>
                                                    <a href="udai_order_receipted.html" class="but but-primary">确认收货</a>
                                                    <!-- <a href="" class="but but-link">评价</a> -->
                                                    <a href="udai_apply_return.html" class="but c3">退款/退货</a>
                                                </td>
                                            </tr>
                                            <tr class="order-item">
                                                <td>
                                                    <label>
                                                        <a href="udai_order_detail.html" class="num">
                                                            2017-03-30 订单号: 2669901385864042
                                                        </a>
                                                        <div class="card">
                                                            <div class="img"><img
                                                                    src="@/assets/images//temp/item-img_1.jpg" alt=""
                                                                    class="cover"></div>
                                                            <div class="name ep2">纯色圆领短袖T恤活动衫弹力柔软纯色圆领短袖T恤</div>
                                                            <div class="format">颜色分类：深棕色 尺码：均码</div>
                                                            <div class="favour">使用优惠券：优惠¥2.00</div>
                                                        </div>
                                                    </label>
                                                </td>
                                                <td>￥100</td>
                                                <td>1</td>
                                                <td>￥1000<br><span class="fz12 c6 text-nowrap">(含运费: ¥0.00)</span></td>
                                                <td class="state">
                                                    <a class="but c6">交易成功</a>
                                                    <a href="udai_mail_query.html" class="but cr">查看物流</a>
                                                    <a href="udai_order_detail.html" class="but c9">订单详情</a>
                                                </td>
                                                <td class="order">
                                                    <div class="del"><span class="glyphicon glyphicon-trash"
                                                                           aria-hidden="true"></span></div>
                                                    <a href="" class="but but-link">评价</a>
                                                    <a href="" class="but c3">取消订单</a>
                                                </td>
                                            </tr>
                                            <tr class="order-item">
                                                <td>
                                                    <label>
                                                        <a href="udai_order_detail.html" class="num">
                                                            2017-03-30 订单号: 2669901385864042
                                                        </a>
                                                        <div class="card">
                                                            <div class="img"><img
                                                                    src="@/assets/images//temp/item-img_1.jpg" alt=""
                                                                    class="cover"></div>
                                                            <div class="name ep2">纯色圆领短袖T恤活动衫弹力柔软纯色圆领短袖T恤</div>
                                                            <div class="format">颜色分类：深棕色 尺码：均码</div>
                                                            <div class="favour">使用优惠券：优惠¥2.00</div>
                                                        </div>
                                                    </label>
                                                </td>
                                                <td>￥100</td>
                                                <td>1</td>
                                                <td>￥1000<br><span class="fz12 c6 text-nowrap">(含运费: ¥0.00)</span></td>
                                                <td class="state">
                                                    <a class="but c6">交易成功</a>
                                                    <a href="udai_mail_query.html" class="but cr">查看物流</a>
                                                    <a href="udai_order_detail.html" class="but c9">订单详情</a>
                                                </td>
                                                <td class="order">
                                                    <div class="del"><span class="glyphicon glyphicon-trash"
                                                                           aria-hidden="true"></span></div>
                                                    <a href="" class="but but-link">评价</a>
                                                    <a href="" class="but c3">取消订单</a>
                                                </td>
                                            </tr>
                                            <tr class="order-item">
                                                <td>
                                                    <label>
                                                        <a href="udai_order_detail.html" class="num">
                                                            2017-03-30 订单号: 2669901385864042
                                                        </a>
                                                        <div class="card">
                                                            <div class="img"><img
                                                                    src="@/assets/images//temp/item-img_1.jpg" alt=""
                                                                    class="cover"></div>
                                                            <div class="name ep2">纯色圆领短袖T恤活动衫弹力柔软纯色圆领短袖T恤</div>
                                                            <div class="format">颜色分类：深棕色 尺码：均码</div>
                                                            <div class="favour">使用优惠券：优惠¥2.00</div>
                                                        </div>
                                                    </label>
                                                </td>
                                                <td>￥100</td>
                                                <td>1</td>
                                                <td>￥1000<br><span class="fz12 c6 text-nowrap">(含运费: ¥0.00)</span></td>
                                                <td class="state">
                                                    <a class="but c6">交易成功</a>
                                                    <a href="udai_mail_query.html" class="but cr">查看物流</a>
                                                    <a href="udai_order_detail.html" class="but c9">订单详情</a>
                                                </td>
                                                <td class="order">
                                                    <div class="del"><span class="glyphicon glyphicon-trash"
                                                                           aria-hidden="true"></span></div>
                                                    <a href="" class="but but-link">评价</a>
                                                    <a href="" class="but c3">取消订单</a>
                                                </td>
                                            </tr>
                                        </table>
                                        <Page :total="100" show-total show-elevator show-sizer style="margin-left: 15%;" />
                                    </div>
                                </div>
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
    import header_ from '../../components/header_'
    import footer_ from '../../components/footer_'
    import mineLeft from '../../components/mine_left'

    export default {
        components: {header_, footer_,mineLeft},
        name: "order",
        mounted() {
            $('.to-top').toTop({position: false});
            $("#order").addClass("active");
        },
        methods: {}
    }
</script>

<style scoped>

</style>
