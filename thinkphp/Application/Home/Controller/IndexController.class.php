<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function test()
    {

        //读
         $blog_model=D("Blog");
        // $list=$blog_model->get_all_blog();
        // var_dump($list);
        // exit;
        // $website_url=C("website_url");
        // $blog_model=M("blog");

        // $blog_list=$blog_model->field("id,title")->where("id>0")->order(" id desc")->limit(1)->select();
        // var_dump($blog_list);exit();

        //增
        // $data['id']=3;
        // $data['title']="标题3";
        // $data['content']="内容3";
        // $res=M('blog')->add($data);//增加  add方法返回刚刚插入的id
        // var_dump($res);
        //改
            //1.where实现
            // $data['title']="标题3333";
            // $data['content']="内容3333";
            // $res=M('blog')->where("id=3")->save($data);//修改  save方法返回真假
            // var_dump($res);
            // 2.save主键实现
            // $data['id']=3;
            // $data['title']="标题3333";
            // $data['content']="内容3333";
            // $res=M('blog')->save($data);//修改  save方法返回真假
            // var_dump($res);
        //删
        // $map['id']=array("lt",2);
        // $res=M('blog')->where($map)->delete();//增加  add方法返回刚刚插入的id
        // // echo M()->getLastSql();
        // var_dump($res);
        $this->assign("website_url",$website_url);
        $this->assign("key","value");
        $this->assign("array",array("id"=>"1","name"=>"lizhaoyao"));
        $this->assign("array2",range(1,10));//创建1到10的数组
        $this->display();
    }

    /*
     * 使用TP封装的构造方法
     * **/
    function _initialize()
    {
        $this->blog_model=D('Blog');
    }
    /*
     * 博文列表页面
     * 取出所有博文 列表形式在展现出来
     * **/
    public function index()
    {
        //取出所有博文数据
        //通过模型取出数据
        $blog_list=$this->blog_model->get_all_blog(10);
        $this->assign('blog_list',$blog_list);//所有博文
        $this->display();//加载模板
    }

    /*
     * 增加博文展示页面
     * **/
    public function add_blog()
    {
        $this->display();//加载模板
    }
    /*
     * 编辑博文展示页面
     * **/
    public function edit_blog()
    {
        $id=I('get.id');//接收博文id
        $blog_info=$this->blog_model->find($id);//查询博文信息
        $this->assign('blog_info',$blog_info);
        $this->display();//加载模板
    }
    /*
     * 博文保存和添加修改
     * **/
    public function save_blog()
    {
        $title=I('post.title');//接收标题
        $content=I('post.content');//接收内容
        $id=I('post.id')+0;//接收id并且取整
        $data=compact("title","content");
        if($id>0)
        {
            //编辑
            $map['id']=$id;
            $res=$this->blog_model->where($map)->save($data);
            if($res)
            {
                $this->success("修改博文成功",U('/Home/Index/index'));
            }
            else{
                $this->error("修改博文失败",U('/Home/Index/index'));
            }
        }else
        {
            //增加
            $data['add_time']=time();//添加时间
            $res=$this->blog_model->add($data);
            if($res)
            {
                $this->success("添加博文成功",U('/Home/Index/index'));
            }
            else{
                $this->error("添加博文失败",U('/Home/Index/index'));
            }
        }

    }
    /*
     * 删除博文
     *
     * **/
    public function del_blog()
    {
        $id=I('get.id');
        $map['id']=$id;
        $res=$this->blog_model->where($map)->delete();
        if($res)
        {
            $this->success("删除博文成功",U('/Home/Index/index'));
        }
        else{
            $this->error("删除博文失败",U('/Home/Index/index'));
        }
    }
}