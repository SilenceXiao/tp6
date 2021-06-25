<?php
namespace app\demo\middleware;

class Detail{

    public function handle($request, $next)
    {

        $request->type ="detail";
        return $next($request);
    }

    
    public function end(\think\Response $response){

    }
}