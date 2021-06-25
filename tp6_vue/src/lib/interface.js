/*
接口请求函数模块
返回值: promise对象
 */
import {post, get, put} from './http'

//跨域请求服务器变更地址
const url = process.env.NODE_ENV === 'production'
    ? 'http://testmall.singwa666.com/' //这里是正式环境地址
    : '/api/'; //这里是本地代理地址，代理地址修改的文件在根目录下的vue.config.js文件中，将其中的域名更改为本地自己开发服务器API地址即可。

//发送验证码
export const smscode = (data) => post(url + "api/smscode", data);
//登录
export const login = (data) => post(url + "api/login", data);
//退出登录
export const logout = (data) => get(url + "api/logout", data);
//获取用户基本信息
export const user = (data) => get(url + "api/user", data);
export const updateUser = (data) => put(url + "api/user/1", data);
//获取分类
export const category = (data) => get(url + "api/category", data);
//获取banner
export const banner = (data) => get(url + "api/index/getRotationChart", data);
//获取首页推荐
export const goodsRecommend = (data) => get(url + "api/index/cagegoryGoodsRecommend", data);
