<?php
// namespace app\demo\route;

use think\facade\Route;

Route::rule('getcode','sms/getrediskey','GET');
Route::rule('smscode','sms/sendcode','POST');
Route::rule('userlogin','login/index','POST');
// Route::rule('logout','logout/index','POST');
Route::resource('user','User');

// Route::rule("detail","detail/index","GET")->middleware(\app\demo\middleware\Detail::class);