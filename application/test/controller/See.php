<?php
namespace app\test\controller;

use think\Controller;

class See extends Controller
{
    public function index()
    {
        //自动定位
        return $this->fetch();
    }
}
