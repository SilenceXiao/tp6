<?php
namespace app\demo\exception;

use think\exception\Handle;
use think\Response;
use Throwable;

class Http extends Handle{
    public $httpStatus = 500;
    
    /**
     * Render an exception into an HTTP response.
     *
     * @access public
     * @param \think\Request   $request
     * @param Throwable $e
     * @return Response
     */
    public function render($request, Throwable $e): Response
    {
        // 添加自定义异常处理机制
        return show(config('status.error'),$e->getMessage());
        // 其他错误交给系统处理
        // return parent::render($request, $e);
    }
}