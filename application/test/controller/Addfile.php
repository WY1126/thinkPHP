<?php
namespace app\test\controller;

use think\console\command\make\Controller;
use think\Request;

class Addfile extends Controller
{
    public function index()
    {
//        return 'dsa';
        $name=$_POST;
        var_dump($name['pwd']);
//        return $name[pwd];
//        $file = request()->file('image');
//        $info = $file->move('../uploads');
//        //doump($info）;
//        if($info){
//            // 成功上传后 获取上传信息
//            // 输出 jpg
//            echo $info->getExtension();
//            // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
//            echo $info->getSaveName();
//            // 输出 42a79759f284b767dfcb2a0197904287.jpg
//            echo $info->getFilename();
//        }else{
//            // 上传失败获取错误信息
//            echo $file->getError();
//        }

    }
}
