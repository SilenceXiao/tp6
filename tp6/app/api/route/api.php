<?php
// namespace app\demo\route;

use think\facade\Route;

Route::rule('getcode','sms/getrediskey','GET');
Route::rule('sendcode','sms/sendcode','POST');
Route::rule('userlogin','login/login','POST');
Route::resource('user','User');

// Route::rule("detail","detail/index","GET")->middleware(\app\demo\middleware\Detail::class);