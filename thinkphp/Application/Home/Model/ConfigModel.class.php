<?php
namespace Home\Model;
use Think\Model;
class ConfigModel extends Model {
    public function get_config($limit=1)
    {
        return $this->limit($limit)->find();//��ȡconfig��Ϣ
    }
}