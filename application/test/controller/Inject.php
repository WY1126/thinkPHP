<?php
namespace app\test\controller;

//use app\common\Test;
use app\model\Five;
use app\model\one;
use think\App;
use think\Controller;
use app\facade\Test;
use think\facade\Hook;

class Inject extends Controller
{
//    public $one;
//    public function __construct(Five $one)
//    {
//        $this->one=$one;
//    }
//    public function index()
//    {
//        return $this->one->name;
//    }
//如果想手动来完成绑定和实例化，可以使用 bind()和 app()助手函数来实现sassas；
    public function index()
    {
//        return "dsa";
        // bind('Five','app\model\Five');
        
        // return app('Five')->last;
        //app()实例化对象
        // $one=app('Five');
        // return $one->last;
        //使用app()自动实现实例化
        // return app('app\model\Five')->name;
        // bind()批量实例化

        bind([
        	'one' => 	'app\model\one',
        	'Five' => 	'app\model\Five'
        ]);
        return app('one')->name."<hr/>".app('Five')->name;
    }

    public function  sayhello()
    {
//        $me=new Test();
//        return $me->hello('wangyao');
        //使用facade静态调用
        return Test::hello('444');
    }

    //钩子行为
    public function bhv()
    {
        //Hook钩子
        Hook::listen('eat','asasasa');
    }


}
