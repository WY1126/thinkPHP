<?php
namespace app\test\controller;

use think\Controller;
use think\facade\Env;
class Abc extends Controller
{
    protected $beforeActionList=[];
    public function eat($who="王瑶")
    {
        $arr=Array("a"=>Array('name'=>"王瑶",'age'=>22,'sex'=>'男'),"b"=>Array('name'=>"王sa",'age'=>22,'sex'=>'男'));
        // return $who."吃饭!".Env::get('think_path');
        return json($arr);
    }
}
