<?php


namespace app\test\controller;

use app\model\User as userModel;
use app\model\Profile as ProfileModel;

class Grade
{
    public function gethobby()
    {
//        主表->外表
//        $user=userModel::get(19);
////        return json($user);
//        return $user->profile->hobby;
//        外表->主表
//        $info = ProfileModel::get(1);
//        return $info->user;

//        关联修改
        $user=userModel::get(19);
        $user->profile()->save(['hobby'=>'爱喝可乐']);
    }

}