<?php

namespace app\common\validate;

use think\Validate;

class User extends Validate
{
    //开启批量验证
    protected $batchValidate = true;
    //开启验证错误
    protected $failException = true;
    /**
     * 定义验证规则
     * 格式：'字段名'	=>	['规则1','规则2'...]
     *
     * @var array
     */	
	protected $rule = [
	    'name'      =>      'require|max:10|checkname:王瑶',               //不得为空，不得大于 20 位
        'age'       =>      'number|between:1,2000',        //在1-2000之间
    ];
    
    /**
     * 定义错误信息
     * 格式：'字段名.规则名'	=>	'错误信息'
     *
     * @var array
     */	
    protected $message = [
        'name.require'      =>      '姓名不得为空',
        'name.max'          =>      '姓名长度不得超过10位',
        'age.number'        =>      '年龄必须为数字',
        'age.between'       =>      '年龄在1到2000',
    ];

    protected function checkname($data,$rule)
    {
        return $data != $rule ? true : "姓名不得是王瑶";
    }
}
