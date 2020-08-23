<?php
namespace app\test\controller;

use app\model\users;
use think\Controller;
use think\Db;

class  Modeltest2 extends Controller
{

    public function queryScope()
    {
        //scope 模型查询范围
        //useGlobalScope(false)表示不使用全局查询，且必须加在：：后
        $data=users::useGlobalScope(false)->scope('sexwuman')->select();
        return json($data);
    }
    //view  模板输出
    public function view()
    {
        $user = users::get(3);
        $this->assign('user',$user);
        return $this->fetch();
    }
    public function addjson()
    {
        //插入json数据
        $user = new users();
//        $data=[
//            'name' =>   '千手柱间',
//            'age' =>    101,
//            'sex' =>  '男',
//            'list'  => [
//                            '职位' => '初代火影',
//                            '忍术' =>'木遁'
//                       ]
//        ];
//        $user->save($data);
//        $data=users::get(22);
//        print_r(($data)->toArray());
        //查询json数据
//        $data=Db::name('users')->json(['list'])->where('list->职位','初代火影')->select();
//        return json($data);
        //完全修改json数据
//        $data['list']=[
//          '职位' => '三代火影',
//          '忍术'  => '手里剑影分身之术'
//        ];
//        Db::name('users')->where('name','鸣人')->update($data);
        //修改某一项数据
//        $dat['list->忍术']='螺旋丸';
//        Db::name('users')->removeOption('where')->json(['list'])->where('id',3)->update($dat);
        $data['list->name']='螺旋丸';
        Db::name('users')->json(['list'])->where('id',3)->update($data);
        $result=users::select();
    }
    public function index()
    {

        // $result=users::WithAttr('age',function ($value){
        //     return $value+1;
        // })->select();
        // return json($result);

//        $data=users::get(14);
//        return json($data->getdata());    //getdata获取原始数据
//        return json($data->getdata('sex'));
//        return json($data->nothing);
//        $data->delete();
//        return json(users::select());
        //模型搜索器
//        $result=users::withSearch(['create_time'],[
//            'create_time'=>['2019-12-12','2021-1-1'],
//            'sort'=>['create_time'=>'asc']    //按时间倒序排列
//            ]
//        )->select();
//        $result=users::where('id',111)->select();
//        if($result->isEmpty())
//        {return '没有数据！';}
//        return json($result);

        $result=users::select();//触发了模型获取器
//        $result->hidden(['sex']);       //hidden隐藏某个字段
//        $result->visible(['name']);     //visible只显示某个字段
        //append可添加某个获取其字段，withAttr对字段处理
//        $result->append(['nothing'])->withAttr('age',function ($value){
//            return $value+10;
//        })；
//        $result = $result->filter(function ($data){
//            return $data['age'] > 1000;
//        });
//        插入一条数据  自动获取时间戳
        $user= new users;
        $data=[
          'name'    =>      '宇智波 斑',
          'age'     =>      100,
          'sex'     =>      '男'
        ];
        $user->save($data);
//        return json($user->select());
//        $result = users::select();
//        return json($result->create_time);
    }
    //软删除
    public function softDelete()
    {
//        Db::name('users')->where('id',24)->useSoftDelete('delete_time',date('Y-m-d H:i:s'))->delete();
//        return Db::getlastSql();
        //使用 withTrashed()方法取消屏蔽软删除的数据
        $user=users::withTrashed()->select();
        return json($user);
    }
}