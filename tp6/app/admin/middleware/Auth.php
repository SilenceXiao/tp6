<?php
declare (strict_types = 1);

namespace app\admin\middleware;

class Auth{

    public function handle($request, $next)
    {
        //前置中间件
        $login_preg = preg_match('/login/',$request->pathinfo());
        $captcha = 'captcha.html';
        if( empty(session(config('admin.admin_session'))) && !$login_preg && $captcha != $request->pathinfo()){

            return redirect((string) url('login/index'));
        }
        
        $response = $next($request);

        //后置中间件
        //1.session 为空 2.访问控制器不是放行控制器

        // $array = ['Login','Verify',''];
        // if( empty(session(config('admin.admin_session'))) &&  !in_array($request->controller(),$array) ){

        //     return redirect((string) url('login/index'));
        // }
        return $response;
    }

    //结束调度
    public function end(\think\Response $response){

    }
}