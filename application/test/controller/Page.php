<?php


namespace app\test\controller;


use think\Db;

class Page
{
    public function index()
    {
        $list = Db::name('users')->paginate(5,true);
        return json($list);
    }
}