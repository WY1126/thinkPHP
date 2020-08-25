<?php


namespace app\model;


use think\Model;

class User extends Model
{
    public function profile()
    {
        //设置与其他表进行关联  hasone()  主表User 外表Profile
        return $this->hasOne('Profile','user_id');
    }
}