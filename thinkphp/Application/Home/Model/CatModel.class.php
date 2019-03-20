<?php
namespace Home\Model;
use Think\Model;
class CatModel extends Model {
    public function get_all_cat($map=array(),$limit=10)
    {
        return $this->where($map)->limit($limit)->select();//获取分类信息
    }
}