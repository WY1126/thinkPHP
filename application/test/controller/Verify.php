<?php


namespace app\test\controller;
use app\common\validate\User;
use think\Controller;

class Verify extends Controller
{
    //开启批量验证
    protected $batchValidate = true;
    //开启验证错误
    protected $failException = true;

    public function index()
    {
        $data=[
          'name'        =>      '王瑶',
          'age'         =>      '798是',
        ];
//
//        $validate = new \app\common\validate\User();
//
//        if(!$validate->check($data))
//        {
//           return ($validate->getError());
//        }

//        6. 控制器类还提供了一个更加方便验证的方法，可以更容易的进行编码 推荐使用
        $result = $this->validate($data,'\app\common\validate\User');

        if ($result !== true) {
            dump($result);
        }
    }

}