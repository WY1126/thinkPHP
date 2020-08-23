<?php
namespace app\test\controller;

use think\Controller;

class Address extends Controller
{
    public function index()
    {
        return "abc";
    }
    public function details($id)
    {
        return "details调用的id是：".$id;
    }
}