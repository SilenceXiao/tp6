<?php
namespace app\api\controller;

use app\common\business\User as BusinessUser;
use app\api\validate\User as ValidateUser;
use think\facade\Db;

class User extends AuthBase{

    public function index(){
        $user = (new BusinessUser())->getUserById($this->userId);
        $result = [
            'id' => $user['id'],
            'username' => $user['username'],
            'sex' => $user['sex'],
            'phone' => $user['phone_number'],
        ];
        return show(config('status.success'),'ok',$result);
    }

    /**
     * 更新用户信息
     * @return void
     */
    public function update(){
        $usernameNew = input('username','','trim');
        $sex = input('sex',0,'intval');
        $data = [
            'username' => $usernameNew,
            'sex' => $sex,
        ];
        $validate = new ValidateUser();
        $checkresult = $validate->scene('update_user')->check($data);
        if(!$checkresult) {
            return show(config('status.error'),$validate->getError());
        }

        Db::startTrans();
        try {
            $result = (new BusinessUser())->update($this->userId,$data,$this->accessToken);
            if( empty($result) ){
                return show(config('status.error'),'更新数据失败');
            }
            Db::commit();
            return show(config('status.success'),'数据更新成功',$result);
        }catch(\Exception $e) {
            Db::rollback();
            return show($e->getCode(),$e->getMessage());
        }
    }
}