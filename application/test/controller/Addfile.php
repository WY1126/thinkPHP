<?php
namespace app\test\controller;

use think\console\command\make\Controller;
use think\Db;
use think\Request;

class Addfile extends Controller
{
    public function index()
    {
        $user=$_POST;
        $file = request()->file('image');

        $info = $file->validate([
            'size' => 6291456,
            'ext' => 'jpg,gif,png',
        ])->move('../uploads');
        //doump($info）;
        if($info){
            // 成功上传后 获取上传信息
            // 输出 jpg
            echo $info->getExtension()."<hr/>";
            // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
            echo $info->getSaveName()."<hr/>";
            // 输出 42a79759f284b767dfcb2a0197904287.jpg
            echo $info->getFilename()."<hr/>";
            echo '密码'.$user['pwd']."<hr/>";
//            echo base64_encode('?]]u?lu?Z?ֶ?');
            //加密密码  md5
            $pwd = md5($user['pwd']);
            echo '加密后'.$pwd."<hr/>";

            //解密
//            echo '解密'.base64_decode($pwd);

            $data=[
                'name'      =>      $user['name'],
                'avatar'    =>      $info->getSaveName(),
                'password'  =>      $pwd,
            ];
            $result = Db::name('unifo')->insert($data);

            if(!$result)    echo "上传失败".$user['name'];
        }else{
            // 上传失败获取错误信息
//            echo $file->getError();
            return $file->getError();
        }
    }

}
