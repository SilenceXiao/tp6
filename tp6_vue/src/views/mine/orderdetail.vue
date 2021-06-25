<template>
    <div>
        <header_></header_>
        <div class="bgf5 clearfix">
            <div class="top-user">
                <div class="inner">
                    <a class="logo" href="index.html"><img src="@/assets/images//icons/logo.jpg" alt="X袋网"
                                                           class="cover"></a>
                    <div class="title">个人中心</div>
                </div>
            </div>
        </div>
        <div class="content clearfix bgf5">
            <section class="user-center inner clearfix">
                <mine-left></mine-left>

                <div class="pull-right">
                    <div class="user-content__box clearfix bgf">
                        <div class="title">订单中心-订单2669901385864042</div>
                        <div class="order-info__box">
                            <div class="order-addr">收货地址：<span class="c6">喵喵喵，18759808122，福建省福州市五四路世界金龙大厦</span></div>
                            <div class="order-info">
                                订单信息
                                <table>
                                    <tr>
                                        <td>订单编号：5656565656565655656</td>
                                        <td>支付宝交易号：20175215464616164616</td>
                                        <td>创建时间：2017-09-20 08:05:45</td>
                                    </tr>
                                    <tr>
                                        <td>付款时间：2017-09-20 08:15:45</td>
                                        <td>成交时间：2017-09-20 08:25:45</td>
                                        <td></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="table-thead">
                                <div class="tdf3">商品</div>
                                <div class="tdf1">状态</div>
                                <div class="tdf1">数量</div>
                                <div class="tdf1">单价</div>
                                <div class="tdf2">优惠</div>
                                <div class="tdf1">总价</div>
                                <div class="tdf1">运费</div>
                            </div>
                            <div class="order-item__list">
                                <div class="item">
                                    <div class="tdf3">
                                        <a href="item_show.html">
                                            <div class="img"><img src="@/assets/images//temp/M-003.jpg" alt=""
                                                                  class="cover"></div>
                                            <div class="ep2 c6">锦瑟 原创传统日常汉服男绣花交领衣裳cp情侣装春夏款</div>
                                        </a>
                                        <div class="attr ep">颜色分类：深棕色 尺码：均码</div>
                                    </div>
                                    <div class="tdf1"><a href="order_evaluate.html">待评价</a><!-- 已确认收货 --></div>
                                    <div class="tdf1">1</div>
                                    <div class="tdf1">¥22.0</div>
                                    <div class="tdf2">
                                        <div class="ep2">活动8折优惠<br>优惠：¥4.0</div>
                                    </div>
                                    <div class="tdf1">¥18.0</div>
                                    <div class="tdf1">
                                        <div class="ep2">快递<br>¥0.00</div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tdf3">
                                        <a href="item_show.html">
                                            <div class="img"><img src="@/assets/images//temp/M-007.jpg" alt=""
                                                                  class="cover"></div>
                                            <div class="ep2 c6">锦瑟 原创传统日常汉服男绣花交领衣裳cp情侣装春夏款</div>
                                        </a>
                                        <div class="attr ep">颜色分类：深棕色 尺码：均码</div>
                                    </div>
                                    <div class="tdf1"><a href="order_evaluate.html">待评价</a></div>
                                    <div class="tdf1">2</div>
                                    <div class="tdf1">¥20.0</div>
                                    <div class="tdf2">
                                        <div class="ep2">会员等级优惠<br>优惠：¥2.0</div>
                                    </div>
                                    <div class="tdf1">¥38.0</div>
                                    <div class="tdf1">
                                        <div class="ep2">快递<br>¥0.00</div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tdf3">
                                        <a href="item_show.html">
                                            <div class="img"><img src="@/assets/images//temp/M-005.jpg" alt=""
                                                                  class="cover"></div>
                                            <div class="ep2 c6">锦瑟 原创传统日常汉服男绣花交领衣裳cp情侣装春夏款</div>
                                        </a>
                                        <div class="attr ep">颜色分类：深棕色 尺码：均码</div>
                                    </div>
                                    <div class="tdf1"><a href="order_evaluate.html">待评价</a></div>
                                    <div class="tdf1">1</div>
                                    <div class="tdf1">¥20.0</div>
                                    <div class="tdf2">
                                        无
                                    </div>
                                    <div class="tdf1">¥20.0</div>
                                    <div class="tdf1">
                                        <div class="ep2">快递<br>¥0.00</div>
                                    </div>
                                </div>
                            </div>
                            <div class="price-total">
                                <div class="fz12 c9">使用优惠券【满￥20.0减￥2.0】优惠￥2.0元<br>快递运费 ￥0.0</div>
                                <div class="fz18 c6">实付款：<b class="cr">¥76.0</b></div>
                                <div class="fz12 c9">（本单可获 <span class="c6">380</span> 积分）</div>
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
        components: {header_, footer_, mineLeft},
        name: "orderdetail",
        mounted() {
            $("#order").addClass("active");
        },
        methods: {}
    }
</script>

<style scoped>

</style>
