<template>
    <div>
        <!-- 顶部tab -->
        <header_></header_>
        <!-- 顶部标题 -->
        <!--        <div class="bgf5 clearfix">-->
        <!--            <div class="top-user">-->
        <!--                <div class="inner">-->
        <!--                    <a class="logo" href="index.html"><img src="images/icons/logo.jpg" alt="X袋网" class="cover"></a>-->
        <!--                    <div class="title">购物车</div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <div class="content clearfix bgf5">
            <section class="user-center inner clearfix">
                <div class="user-content__box clearfix bgf">
                    <!--                    <div class="title">购物车-确认支付</div>-->
                    <div class="shop-title">收货地址</div>
                    <form action="" class="shopcart-form__box">
                        <div class="addr-radio">
                            <div class="radio-line  active">
                                <label class="radio-label ep"
                                       title="福建省 福州市 鼓楼区 温泉街道 五四路159号世界金龙大厦20层B北 福州rpg.blue网络 （喵喵喵 收） 153****9999">
                                    福建省 福州市 鼓楼区 温泉街道
                                    五四路159号世界金龙大厦20层B北
                                    （喵喵喵 收） 153****9999
                                </label>
                            </div>
                        </div>
                        <div class="shop-order__detail">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th width="120"></th>
                                    <th width="300">商品信息</th>
                                    <th width="150">单价</th>
                                    <th width="200">数量</th>
                                    <th width="200">运费</th>
                                    <th width="80">总价</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row"><a href="item_show.html">
                                        <div class="img"><img src="@/assets/images/temp/M-003.jpg" alt="" class="cover">
                                        </div>
                                    </a></th>
                                    <td>
                                        <div class="name ep3">锦瑟 原创传统日常汉服男绣花交领衣裳cp情侣装春夏款</div>
                                        <div class="type c9">颜色分类：深棕色 尺码：均码</div>
                                    </td>
                                    <td>¥20.0</td>
                                    <td>1</td>
                                    <td>¥0.0</td>
                                    <td>¥20.0</td>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="item_show.html">
                                        <div class="img"><img src="@/assets/images/temp/S-005.jpg" alt="" class="cover">
                                        </div>
                                    </a></th>
                                    <td>
                                        <div class="name ep3">锦瑟 原创传统日常汉服男绣花交领衣裳cp情侣装春夏款</div>
                                        <div class="type c9">颜色分类：深棕色 尺码：均码</div>
                                    </td>
                                    <td>¥20.0</td>
                                    <td>2</td>
                                    <td>¥0.0</td>
                                    <td>¥40.0</td>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="item_show.html">
                                        <div class="img"><img src="@/assets/images/temp/M-007.jpg" alt="" class="cover">
                                        </div>
                                    </a></th>
                                    <td>
                                        <div class="name ep3">锦瑟 原创传统日常汉服男绣花交领衣裳cp情侣装春夏款</div>
                                        <div class="type c9">颜色分类：深棕色 尺码：均码</div>
                                    </td>
                                    <td>¥20.0</td>
                                    <td>1</td>
                                    <td>¥0.0</td>
                                    <td>¥20.0</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="shop-cart__info clearfix">
                            <div class="pull-left text-left">
                                <div class="info-line text-nowrap">购买时间：<span class="c6">2017年09月14日 17:31:05</span>
                                </div>
                                <div class="info-line text-nowrap">交易类型：<span class="c6">担保交易</span></div>
                                <div class="info-line text-nowrap">交易号：<span class="c6">1001001830267490496</span></div>
                            </div>
                            <div class="pull-right text-right">
                                <div class="form-group">
                                    <label for="coupon" class="control-label">优惠券使用：</label>
                                    <select id="coupon">
                                        <option value="-1" selected>- 请选择可使用的优惠券 -</option>
                                        <option value="1">【满￥20.0元减￥2.0】</option>
                                        <option value="2">【满￥30.0元减￥2.0】</option>
                                        <option value="3">【满￥25.0元减￥1.0】</option>
                                        <option value="4">【满￥10.0元减￥1.5】</option>
                                        <option value="5">【满￥15.0元减￥1.5】</option>
                                        <option value="6">【满￥20.0元减￥1.0】</option>
                                    </select>
                                </div>
                                <div class="info-line">优惠活动：<span class="c6">无</span></div>
                                <div class="info-line">运费：<span class="c6">¥0.00</span></div>
                                <div class="info-line"><span class="favour-value">已优惠 ¥2.0</span>合计：<b class="fz18 cr">¥18.0</b>
                                </div>
                                <div class="info-line fz12 c9">（可获 <span class="c6">20</span> 积分）</div>
                            </div>
                        </div>
                        <div class="pay-mode__box">
                            <div class="radio-line radio-box">
                                <label class="radio-label ep">
                                    <input name="pay-mode" value="2" autocomplete="off" type="radio"><i
                                        class="iconfont icon-radio"></i>
                                    <img src="@/assets/images/icons/alipay.png" alt="支付宝支付">
                                </label>
                                <div class="pay-value">支付<b class="fz16 cr">18.00</b>元</div>
                            </div>
                            <div class="radio-line radio-box">
                                <label class="radio-label ep">
                                    <input name="pay-mode" value="3" autocomplete="off" type="radio"><i
                                        class="iconfont icon-radio"></i>
                                    <img src="@/assets/images/icons/paywechat.png" alt="微信支付">
                                </label>
                                <div class="pay-value">支付<b class="fz16 cr">18.00</b>元</div>
                            </div>
                        </div>
                        <div class="user-form-group shopcart-submit">
                            <button type="submit" class="btn">支付订单</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
</template>

<script>
    import header_ from '../components/header_'

    export default {
        components: {header_},
        name: "order",
        mounted() {
            this.$nextTick(function () {
                $(this).on('change', 'input', function () {
                    $(this).parents('.radio-box').addClass('active').siblings().removeClass('active');
                })
            })
            $('#coupon').bind('change', function () {
                console.log($(this).val());
            })
        }
    }
</script>

<style scoped>

</style>
