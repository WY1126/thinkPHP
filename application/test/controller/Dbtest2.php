<?php
namespace app\test\controller;

use think\Db;
class Dbtest2
{
    public function insert()
    {
        $data=[
            'name'=>'路飞',
            'age'=>19,
            'sex'=>'男'
        ];

        // $f=Db::name('users')->insert($data);
        // if($f)
        //     return "插入{$data['name']}成功";
        // 你可以使用 data()方法来设置添加的数据数组； Db::name('user')->data($data)->insert();
        // $f=Db::name('users')->data($data)->insert();
        //         if($f)
        //             return "插入{$data['sex']}成功";
        // 使用 insertAll()方法，可以批量新增数据，但要保持数组结构一致
        $data1=[
            [
                'name'=>'索隆',
                'age'=>22,
                'sex'=>'男'
            ],
            [
                'name'=>'山治',
                'age'=>21,
                'sex'=>'男'
            ]
        ];
        Db::name('users')->data($data1)->insertAll();
    }
    public function update()
    {
        $data=[
            // [   'id'=>8,
            //     'name'=>'娜美'
            // ],
            // [
                'id'=>7,
                'name'=>'卡卡西'
            // ]
        ];
        // $id=Db::name('users')->where('name','路飞')->value('id');


        // 使用 exp()方法可以在字段中使用 mysql 函数； Db::name('user')->exp('email', 'UPPER(email)')->update($data)
        //Db::name('users')->data($data)->update();

        // 使用 setField()方法可以更新一个字段值；
        Db::name('users')->where('id',8)->setField('sex','女');
    }
    public function gettime()
    {
         json(Db::name('users')->whereTime('create_time', '-2 hours')->select());
         return Db::getLastSql(); 
    }
}