<?php
namespace app\test\controller;

use think\Controller;
use think\facade\Request;

//class Rely extends Controller
//{
//    public function index()
//    {
//        return $this->request->param('name');
//    }
//}
class Rely
{
    public function index()
    {
//        dump(Request::param('name'));
//        htmlspecialchars()转义
//        dump(Request::param('name', '', 'htmlspecialchars'));
//        only获取指定变量
//        dump(Request::only(['name','id']));
//        转换参数类型 /s(字符串)、/d(整型)、/b(布尔)、/a(数组)、/f(浮点)；
        $id=Request::param('id/d');
        $name=$_POST;
        return $id+111;
    }

}