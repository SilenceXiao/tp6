<?php
namespace app\demo\middleware;

class Check{

    public function handle($request, $next)
    {
        $request->type = "demo";
        return $next($request);
    }

    
    public function end(\think\Response $response){

    }
}