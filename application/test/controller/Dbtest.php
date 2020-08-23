<?php
namespace app\test\controller;

use app\model\users;
use think\config\driver\Json;
use think\console\command\make\Controller;
use think\console\Table;
use think\Db;
use think\db\exception\DataNotFoundException;

class Dbtest extends Controller{
    public function one(){
        // $data=Db::table('tp_users')->select();
        // $data=Db::name('users')->where('name','王瑶')->find();
        // $data=Db::name('users')->where('name','孙悟空')->select();
        // $data=Db::table('tp_users')->where('id',2)->find();    //find只查询一条数据
        // return json($data);
        //使用 findOrFail()方法同样可以查询一条数据，在没有数据时抛出一个异常； Db::table('tp_user')->where('id', 1)->findOrFail()
        // try{
        //     $data=Db::table('tp_users')->where('id',123)->findOrFail();
        // }catch(DataNotFoundException $e){
        //     return "查询不到数据！！";
        // }

        // ThinkPHP 提供了一个助手函数 db，可以更方便的查询； \db('user')->select();
        // $data=\db('users')->select();
        // 通过 value()方法，可以查询指定字段的值（单个），没有数据返回 null；
        // $data=Db::name('users')->where('id', 2)->value('name');;
        // 通过 colunm()方法，可以查询指定列的值（多个），没有数据返回空数组；可以指定 id 作为列值的索引
        // $data=Db::name('users')->column('name','id');
        $data=Db::name("users")->where('sex','男')->order('id','desc')->select();  //order 排序 ‘desc’倒序
        return json($data);


        //返回执行的SQL语句。
        // return Db::getLastSql(); 
        
        // 使用 removeOption()方法，可以清理掉上一次查询保留的值； $user->removeOption('where')->select();
    }
    public function getmodeldata()
    {
        $data=users::select();
        return json($data);
    }
}