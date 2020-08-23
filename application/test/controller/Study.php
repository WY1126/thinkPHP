<?php


namespace app\test\controller;

use think\facade\Session;

class Study
{
    public function index()
    {
        Session::init([
            'prefix' => 'tp',
            'auto_start' => true,
        ]);
        Session::clear('tp');
//        Session::prefix('tp');
        Session::set('user','wang','me');
        Session::set('age',12,'you');
//        dump(Session::get('name'));
        dump($_SESSION);
    }
}