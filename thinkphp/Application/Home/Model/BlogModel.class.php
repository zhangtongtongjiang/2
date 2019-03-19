<?php
namespace Home\Model;
use Think\Model;
class BlogModel extends Model {
    public function get_all_blog($limit=10)
    {
        return $this->field("id,title,content,add_time")->where("id>0")->order(" id desc")->limit($limit)->select();
    }
}