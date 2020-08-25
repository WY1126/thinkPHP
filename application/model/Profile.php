<?php


namespace app\model;


use think\Model;

class Profile extends Model
{
    public function user()
    {
        //外表profile 获取主表User的相关值
        return $this->belongsTo('User','user_id');
    }
}