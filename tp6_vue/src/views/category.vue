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
            <section class="filter-section clearfix">
                <ol class="breadcrumb">
                    <li>首页</li>
                    <li class="active">商品筛选</li>
                </ol>
                <div class="filter-box">
                    <div class="all-filter">
                        <div class="filter-value">
                            <div class="filter-title">选择商品分类 <i class="iconfont icon-down"></i></div>
                            <!-- 全部大分类 -->
                            <ul class="catelist-card">
                                <a href="">
                                    <li class="active">全部分类</li>
                                </a>
                                <a href="">
                                    <li>女装</li>
                                </a>
                                <a href="">
                                    <li>男装</li>
                                </a>
                                <a href="">
                                    <li>包包</li>
                                </a>
                                <a href="">
                                    <li>童装</li>
                                </a>
                                <a href="">
                                    <li>鞋靴</li>
                                </a>
                            </ul>
                            <!-- 已选选项 -->
                            <!--                            <div class="ul_filter">-->
                            <!--							<span class="pull-left">-->
                            <!--								颜色：红色 <a href="javascript:;" class="close">&times;</a>-->
                            <!--							</span>-->
                            <!--                            <span class="pull-left">-->
                            <!--								尺寸：XXL <a href="javascript:;" class="close">&times;</a>-->
                            <!--							</span>-->
                            <!--                            </div>-->
                            <!--                            <a class="reset pull-right" href="item_category.html">重置</a>-->
                        </div>
                    </div>
                    <div class="filter-prop-item">
                        <span class="filter-prop-title">分类：</span>
                        <ul class="clearfix">
                            <a href="">
                                <li class="active">全部</li>
                            </a>
                            <a href="">
                                <li>上装</li>
                            </a>
                            <a href="">
                                <li>下装</li>
                            </a>
                            <a href="">
                                <li>裙装</li>
                            </a>
                            <a href="">
                                <li>内衣</li>
                            </a>
                        </ul>
                    </div>
                    <div class="filter-prop-item">
                        <span class="filter-prop-title">颜色：</span>
                        <ul class="clearfix">
                            <a href="">
                                <li class="active">全部</li>
                            </a>
                            <a href="">
                                <li>红色</li>
                            </a>
                            <a href="">
                                <li>粉红</li>
                            </a>
                            <a href="">
                                <li>蓝色</li>
                            </a>
                            <a href="">
                                <li>白色</li>
                            </a>
                        </ul>
                    </div>
                    <div class="filter-prop-item">
                        <span class="filter-prop-title">尺寸：</span>
                        <ul class="clearfix">
                            <a href="">
                                <li class="active">全部</li>
                            </a>
                            <a href="">
                                <li>L</li>
                            </a>
                            <a href="">
                                <li>M</li>
                            </a>
                            <a href="">
                                <li>S</li>
                            </a>
                            <a href="">
                                <li>X</li>
                            </a>
                            <a href="">
                                <li>XL</li>
                            </a>
                            <a href="">
                                <li>XXL</li>
                            </a>
                            <a href="">
                                <li>XXXL</li>
                            </a>
                        </ul>
                    </div>
                    <div class="filter-prop-item">
                        <span class="filter-prop-title">价格：</span>
                        <ul class="clearfix">
                            <a href="">
                                <li class="active">全部</li>
                            </a>
                            <a href="">
                                <li>0-20</li>
                            </a>
                            <a href="">
                                <li>20-40</li>
                            </a>
                            <a href="">
                                <li>40-80</li>
                            </a>
                            <a href="">
                                <li>80-100</li>
                            </a>
                            <a href="">
                                <li>100-150</li>
                            </a>
                            <a href="">
                                <li>150以上</li>
                            </a>
                            <form class="price-order">
                                <input type="text">
                                <span class="cc">-</span>
                                <input type="text">
                                <input type="button" value="确定">
                            </form>
                        </ul>
                    </div>
                </div>
                <div class="sort-box bgf5">
                    <div class="sort-text">排序：</div>
                    <div class="sort-text">销量 <i class="iconfont icon-sortDown"></i></div>
                    <div class="sort-text">评价 <i class="iconfont icon-sortUp"></i></div>
                    <div class="sort-text">价格 <i class="iconfont"></i></div>
                    <div class="sort-total pull-right">共1688个商品</div>
                </div>
            </section>
            <section class="item-show__div clearfix">
                <div class="pull-left">
                    <div class="item-list__area clearfix">
                        <div class="item-card">
                            <router-link to="/detail" class="photo">
                                <img src="https://img10.360buyimg.com/n2/jfs/t1/75251/11/13363/334605/5daac7baEe6f10939/e5c2f4dc7e32fda3.jpg"
                                     alt="锦瑟 原创传统日常汉服男绣花交领衣裳cp情侣装春夏款"
                                     class="cover">
                                <div class="name">锦瑟 原创传统日常汉服男绣花交领衣裳cp情侣装春夏款</div>
                            </router-link>
                            <div class="middle">
                                <div class="price">
                                    <small>￥</small>
                                    18.0
                                </div>
                                <div class="sale"><a href="">加入购物车</a></div>
                            </div>
                            <div class="buttom">
                                <div>销量 <b>666</b></div>
                                <div>人气 <b>888</b></div>
                                <div>评论 <b>1688</b></div>
                            </div>
                        </div>
                        <div class="item-card">
                            <a href="item_show.html" class="photo">
                                <img src="https://img10.360buyimg.com/n2/jfs/t1/83976/17/13522/269558/5dad16d6E44f16555/c46f52288570118a.jpg"
                                     alt="霜天月明 原创日常汉服男云纹绣花单大氅传统礼服外套" class="cover">
                                <div class="name">霜天月明 原创日常汉服男云纹绣花单大氅传统礼服外套</div>
                            </a>
                            <div class="middle">
                                <div class="price">
                                    <small>￥</small>
                                    18.0
                                </div>
                                <div class="sale"><a href="">加入购物车</a></div>
                            </div>
                            <div class="buttom">
                                <div>销量 <b>666</b></div>
                                <div>人气 <b>888</b></div>
                                <div>评论 <b>1688</b></div>
                            </div>
                        </div>
                        <div class="item-card">
                            <a href="item_show.html" class="photo">
                                <img src="@/assets/images/temp/M-003.jpg" alt="陇上乐原创传统日常汉服男绣花交领cp情侣非古装春秋" class="cover">
                                <div class="name">陇上乐原创传统日常汉服男绣花交领cp情侣非古装春秋</div>
                            </a>
                            <div class="middle">
                                <div class="price">
                                    <small>￥</small>
                                    18.0
                                </div>
                                <div class="sale"><a href="">加入购物车</a></div>
                            </div>
                            <div class="buttom">
                                <div>销量 <b>666</b></div>
                                <div>人气 <b>888</b></div>
                                <div>评论 <b>1688</b></div>
                            </div>
                        </div>
                        <div class="item-card">
                            <a href="item_show.html" class="photo">
                                <img src="https://img11.360buyimg.com/n2/jfs/t1/64354/38/10354/407895/5d7f0967E4e4ccd74/4265f64d6f52603a.jpg"
                                     alt="霜天月明 原创传统日常汉服男绣花交领衣裳cp春装单品"
                                     class="cover">
                                <div class="name">霜天月明 原创传统日常汉服男绣花交领衣裳cp春装单品</div>
                            </a>
                            <div class="middle">
                                <div class="price">
                                    <small>￥</small>
                                    18.0
                                </div>
                                <div class="sale"><a href="">加入购物车</a></div>
                            </div>
                            <div class="buttom">
                                <div>销量 <b>666</b></div>
                                <div>人气 <b>888</b></div>
                                <div>评论 <b>1688</b></div>
                            </div>
                        </div>
                        <div class="item-card">
                            <a href="item_show.html" class="photo">
                                <img src="https://img11.360buyimg.com/n8/jfs/t1/33712/34/14343/139215/5d0ddb64Ed3694d55/6cec565de4b8732a.jpg"
                                     alt="琅轩日常汉服男龙纹绣花短褙子气质传统外套春秋非古装" class="cover">
                                <div class="name">琅轩日常汉服男龙纹绣花短褙子气质传统外套春秋非古装</div>
                            </a>
                            <div class="middle">
                                <div class="price">
                                    <small>￥</small>
                                    18.0
                                </div>
                                <div class="sale"><a href="">加入购物车</a></div>
                            </div>
                            <div class="buttom">
                                <div>销量 <b>666</b></div>
                                <div>人气 <b>888</b></div>
                                <div>评论 <b>1688</b></div>
                            </div>
                        </div>
                        <div class="item-card">
                            <a href="item_show.html" class="photo">
                                <img src="https://img11.360buyimg.com/n2/jfs/t1/64354/38/10354/407895/5d7f0967E4e4ccd74/4265f64d6f52603a.jpg"
                                     alt="峥嵘 原创设计传统日常汉服男绣花唐制圆领袍春秋非古装"
                                     class="cover">
                                <div class="name">峥嵘 原创设计传统日常汉服男绣花唐制圆领袍春秋非古装</div>
                            </a>
                            <div class="middle">
                                <div class="price">
                                    <small>￥</small>
                                    18.0
                                </div>
                                <div class="sale"><a href="">加入购物车</a></div>
                            </div>
                            <div class="buttom">
                                <div>销量 <b>666</b></div>
                                <div>人气 <b>888</b></div>
                                <div>评论 <b>1688</b></div>
                            </div>
                        </div>
                    </div>
                    <!-- 分页 -->
                    <Page :total="100" show-total show-elevator show-sizer style="margin-left: 15%;"/>
                </div>
                <div class="pull-right">
                    <div class="desc-segments__content">
                        <div class="lace-title">
                            <span class="c6">爆款推荐</span>
                        </div>
                        <div class="picked-box">
                            <a href="" class="picked-item"><img src="@/assets/images/temp/S-001.jpg" alt=""
                                                                class="cover"><span
                                    class="look_price">¥134.99</span></a>
                            <a href="" class="picked-item"><img src="@/assets/images/temp/S-002.jpg" alt=""
                                                                class="cover"><span
                                    class="look_price">¥134.99</span></a>
                            <a href="" class="picked-item"><img src="@/assets/images/temp/S-003.jpg" alt=""
                                                                class="cover"><span
                                    class="look_price">¥134.99</span></a>
                            <a href="" class="picked-item"><img src="@/assets/images/temp/S-004.jpg" alt=""
                                                                class="cover"><span
                                    class="look_price">¥134.99</span></a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer_></footer_>
    </div>
</template>

<script>
    import header_ from '../components/header_'
    import search from '../components/search'
    import footer_ from '../components/footer_'

    export default {
        components: {header_, search, footer_},
        name: "category",
        mounted() {
            $('.to-top').toTop({position: false})
        }
    }
</script>

<style scoped>

</style>
