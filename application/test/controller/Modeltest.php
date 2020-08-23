<?php
namespace app\test\controller;
use app\model\users;
use think\Controller;
use think\Db;

class Modeltest extends Controller
{
    public function index()
    {
        $users=new users;
        // $users->name         =       "雷利";
        // $users->age          =       78;
        // $users->sex          =       '男';
        // $users->create_time  =       Date('Y-m-d  H:i:s');
        //    $dataAll=[
        //         [
        //             'name'=>'娜美',
        //             'age'=>19,
        //             'sex'=>'女',
        //             'create_time'=>Date('Y-m-d H:i:s')  
        //         ],
        //         [
        //             'name'=>'罗宾',
        //             'age'=>20,
        //             'sex'=>'女',
        //             'create_time'=>Date('Y-m-d H:i:s')  
        //         ]
        //         ];
        //saveall()添加多条数据。
        //     print_r($users->saveAll($dataAll));

        //get获取数据，delete删除，destroy删除
        // $data=Users::get(16);
        // $data->delete();
        // users::destroy(17);
        // $data=users::get(8);
        // $data->sex='男';
        // $data->save();
        // $data=users::where('name','雷利')->where('sex','')->find();
        // $data->delete();

        // Db::raw()执行 SQL 函数的方式，同样在这里有效； $user->price = Db::raw('price+1');
        // $data=users::get(14);
        // $data->age= Db::raw('age+1');   $data->isUpdate(true)->save();

        //数据查询

        // 模型获取器和修改器
//        $data=users::get(8);
//        return $data->sex;
        $data=users::get(8);
        $data->name="麦克阿瑟";
        $data->save();
        // return json(users::select());
    } 
    
}