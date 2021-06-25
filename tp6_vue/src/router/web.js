export default [
    {
        //登录
        path: '/login',
        name: 'login',
        meta: {
            title: '登录',
        },
        component: () => import('../views/login.vue'),
    },
    // {
    //     //找回密码
    //     path: '/resetpwd',
    //     name: 'reg',
    //     meta: {
    //         title: '找回密码',
    //     },
    //     component: () => import('../views/resetpwd.vue'),
    // },
    {
        //首页
        path: '/',
        name: 'index',
        meta: {
            title: '首页',
            // auth: 'login'
        },
        component: () => import('../views/index.vue'),
    },
    {
        //分类商品
        path: '/category',
        name: 'category',
        meta: {
            title: '分类商品',
            // auth: 'login'
        },
        component: () => import('../views/category.vue'),
    }
    ,
    {
        //商品详情
        path: '/detail',
        name: 'detail',
        meta: {
            title: '商品详情',
            // auth: 'login'
        },
        component: () => import('../views/detail.vue'),
    }
    ,
    {
        //购物车
        path: '/cart',
        name: 'cart',
        meta: {
            title: '购物车',
            auth: 'login'
        },
        component: () => import('../views/cart.vue'),
    }
    ,
    {
        //订单确认
        path: '/order',
        name: 'order',
        meta: {
            title: '订单确认',
            auth: 'login'
        },
        component: () => import('../views/order.vue'),
    }
    ,
    {
        //订单支付
        path: '/pay',
        name: 'pay',
        meta: {
            title: '订单支付',
            auth: 'login'
        },
        component: () => import('../views/pay.vue'),
    }
    ,
    // {
    //     //个人中心
    //     path: '/mine/center',
    //     name: 'mine-center',
    //     meta: {
    //         title: '个人中心',
    //         auth: 'login'
    //     },
    //     component: () => import('../views/mine/center.vue'),
    // },
    {
        //个人资料
        path: '/mine/set',
        name: 'mine-set',
        meta: {
            title: '个人资料',
            auth: 'login'
        },
        component: () => import('../views/mine/set.vue'),
    }
    ,
    {
        //我的订单
        path: '/mine/order',
        name: 'mine-order',
        meta: {
            title: '我的订单',
            auth: 'login'
        },
        component: () => import('../views/mine/order.vue'),
    }
    ,
    {
        //订单详情
        path: '/mine/orderdetail',
        name: 'mine-orderdetail',
        meta: {
            title: '订单详情',
            auth: 'login'
        },
        component: () => import('../views/mine/orderdetail.vue'),
    }
    ,
    {
        //收货地址
        path: '/mine/address',
        name: 'mine-address',
        meta: {
            title: '收货地址',
            auth: 'login'
        },
        component: () => import('../views/mine/address.vue'),
    }
    ,
    // {
    //     //优惠券
    //     path: '/mine/coupon',
    //     name: 'mine-coupon',
    //     meta: {
    //         title: '优惠券',
    //         auth: 'login'
    //     },
    //     component: () => import('../views/mine/coupon.vue'),
    // },
    // {
    //     //修改登录密码
    //     path: '/mine/modifystep1',
    //     name: 'mine-modifystep1',
    //     meta: {
    //         title: '修改登录密码',
    //         // auth: 'login'
    //     },
    //     component: () => import('../views/mine/modifystep1.vue'),
    // },
    // {
    //     //修改登录密码
    //     path: '/mine/modifystep2',
    //     name: 'mine-modifystep2',
    //     meta: {
    //         title: '修改登录密码',
    //         // auth: 'login'
    //     },
    //     component: () => import('../views/mine/modifystep2.vue'),
    // },
    // {
    //     //修改登录密码
    //     path: '/mine/modifystep3',
    //     name: 'mine-modifystep3',
    //     meta: {
    //         title: '修改登录密码',
    //         // auth: 'login'
    //     },
    //     component: () => import('../views/mine/modifystep3.vue'),
    // },
    {
        //我的收藏
        path: '/mine/collection',
        name: 'mine-collection',
        meta: {
            title: '我的收藏',
            auth: 'login'
        },
        component: () => import('../views/mine/collection.vue'),
    },
    {
        //退货.退款
        path: '/mine/refund',
        name: 'mine-refund',
        meta: {
            title: '退货/退款',
            auth: 'login'
        },
        component: () => import('../views/mine/refund.vue'),
    },
    // {
    //     //物流查询
    //     path: '/mine/query',
    //     name: 'mine-query',
    //     meta: {
    //         title: '物流查询',
    //         // auth: 'login'
    //     },
    //     component: () => import('../views/mine/query.vue'),
    // },
]
