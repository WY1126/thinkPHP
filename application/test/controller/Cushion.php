<?php


namespace app\test\controller;


use think\Image;

class Cushion
{
    public function index()
    {
        $img = Image::open('../uploads/20200823/c986e3af1db41b8857d1339ba176addc.png');
        echo $img->width().' +';
//图片高度
        echo $img->height().' +';
//图片类型
        echo $img->type().' +';
//图片 mime
        echo $img->mime().' +';
//图片大小
        dump($img->size());

        //裁剪图片
//        $img->crop(550,400)->save('../uploads/test/crop1.png');
        //生成缩略图
        $img->thumb(500,500)->save('../uploads/test/thumb1.png');
    }
}