<?php
// 应用公共文件

/**
 * 公共返回func
 * @param [type] $status 状态码
 * @param string $message 提示信息
 * @param array $data 返回数据
 * @param integer $httpStatus 请求状态码
 * @return void
 */
function show($status,$message='error',$data=[],$httpStatus=200){
    $result = [
        'status' => $status,
        'message' => $message,
        'data' => $data
    ];
    return json($result,$httpStatus);
}


function captcha_img_admin($id = '', $domid = '',$width = '',$height = '',$model = ''): string
{
    $src = captcha_src($id);
    $style = "";
    if($width && $height){
        $style = ' width='.$width.'" height="'.$height.'" ';
    }
    $domid = empty($domid) ? $domid : "id='" . $domid . "'";

    if($model){
        $src = '/'.$model.$src ;
    }
    return "<img src='{$src}' alt='captcha' " . $domid .$style. " onclick='this.src=\"{$src}?\"+Math.random();' />";

}