<?php


namespace app\index\behavior;


class Test
{
    public function run($params)
    {
        echo $params."钩子执行了方法"."<br>";

    }
}