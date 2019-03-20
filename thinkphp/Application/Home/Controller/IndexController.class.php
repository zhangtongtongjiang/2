<?php
namespace Home\Controller;
use Think\Controller;
use Think\Page;

class IndexController extends Controller {
    function _initialize()
    {
        $this->config_model=D('Config');//实例化模型
    }
    /*
     * 博文列表页面
     * 取出所有博文 列表形式在展现出来
     * **/
    public function index()
    {

        $this->display();//加载模板
    }

    public function config()
    {
        if(IS_POST)
        {
            //提交后的处理 (This is handle after post)
            $data['email']=I('post.email');//接受邮箱
            $data['link_user']=I('post.link_user');//接受联系人
            $data['icp']=I('post.icp');//接受icp
            $data['address']=I('post.address');//接受地址
            $res=$this->config_model->where(array('id'=>1))->save($data);
            $this->success("修改成功！");exit;
            /*if($res)
            {
                $this->success("修改成功！");
            }else{
                $this->error("修改失败！");
            }*/
            exit;//要加退出
        }
        $info=$this->config_model->get_config();//获取信息
        $this->assign('info',$info);
        $this->display();//加载config模板
    }

    public function edit_password()
    {
        if(IS_POST)
        {
            //提交后的处理 (This is handle after post)
            $data['username']=I('post.username');//接受用户名
            $data['password']=md5(I('post.password'));//接受密码
            $res=$this->config_model->where(array('id'=>1))->save($data);
            $this->success("修改成功！");exit;
            /*if($res)
            {
                $this->success("修改成功！");
            }else{
                $this->error("修改失败！");
            }*/
            exit;//要加退出
        }
        $info=$this->config_model->get_config();//获取信息
        $this->assign('info',$info);
        $this->display();//加载模板
    }
}