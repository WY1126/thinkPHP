<?php
namespace app\model;

use think\Model;
use think\model\concern\SoftDelete;

class users extends Model
{
    //开启自动时间戳
    protected  $autoWriteTimestamp='datetime';
    // 在模型定义中，可以设置其它的数据表
    // protected $table='tp_one';
    public static function init()
    {
        echo "初始化！";
    }
    public  function getSexAttr($value)
    {
        $sex=['男'=>'×','女'=>'○'];
        return $sex[$value];
    }
    public function  getNothingAttr($value,$data)
    {
        $sex=['男'=>'×','女'=>'○'];
        return $sex[$data['sex']];
    }
    // 模型搜索器searchFieldNameAttr();
    //时间限定查询
    public function searchCreateTimeAttr($query,$value,$data)
    {
        $query->whereBetweenTime('create_time', $value[0], $value[1]);
        if(isset($data['sort']))
        {
            $query->order($data['sort']);
        }
    }
    //转换数值类型
    protected $type = [
        'create_time'   =>      'datetime:Y-m-d'
    ];
    //数据自动补充
    protected  $insert=['age' => 0];
    protected  $auto=[];
    protected  $update=[];
    //scope模型查询范围
    public function scopeSexWuman($query)
    {
        $query->where('sex','男')->limit(10);
    }
    //模型软删除
    use SoftDelete;
    protected $deletetime='delete_time';
//

    //全局查询范围sasds
//    protected function base($query)
//    {
//        //限制创建时间jjk
//        $query->where('create_time','<','2020-1-1');
//    }
}