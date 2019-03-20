<?php
namespace Home\Controller;
use Think\Controller;
use Think\Page;

class BlogController extends Controller {
   
    /*
     * 使用TP封装的构造方法
     * **/
    function _initialize()
    {
        $this->blog_model=D('Blog');
        $this->cat_model=D('Cat');
    }
    /*
     * 博文列表页面
     * 取出所有博文 列表形式在展现出来
     * **/
    public function index()
    {
        $num=10;
        //取出所有博文数据
        $blog_count=$this->blog_model->count();//查询总数
        //通过模型取出数据
        $page=new Page($blog_count,$num);//实例化分页类
        $show=$page->show();//调用分页输出方法
        $this->assign('show',$show);
        $limit=$page->firstRow.','.$page->listRows;//设定limit值
        $blog_list=$this->blog_model->get_all_blog($limit);//取出数据
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

    /*
     * 分类管理
     *  **/
    function cat()
    {
        //获取全部分类
        $map['is_delete']=0;
        $list=$this->cat_model->get_all_cat($map,10000);
        $this->assign('list',$list);//赋值list
        $this->display();
    }
    /*
     * 修改分类
     * **/
    public function cat_edit()
    {
        $id=I('get.id');//接收博文id
        $cat_info=$this->cat_model->find($id);//查询博文信息
        $this->assign('info',$cat_info);
        $this->display();//加载模板
    }
    /*
     * 添加分类
     * **/
    public function cat_add()
    {
        $this->display('cat_edit');//加载模板
    }
    /*
     *修改和添加的提交
     * **/
    public function cat_save()
    {
        $name=I('post.name');//接收名称
        $id=I('post.id')+0;//接收id并且取整
        $data['name']=$name;
        if($id>0)
        {
            $this->cat_model->where(array('id'=>$id))->save($data);
            $this->success("修改成功！",U("/Home/Blog/cat"));exit;
        }else{
            $res= $this->cat_model->add($data);
            if($res)
            {
                $this->success("添加成功！",U("/Home/Blog/cat"));
            }else{
                $this->error("添加失败！",U("/Home/Blog/cat"));
            }
        }
    }
    /*
     * 删除博文分类
     *
     * **/
    public function cat_del()
    {
        $id=I('get.id');
        $map['id']=$id;
        $data['is_delete']=1;//假删除  也称为逻辑删除
        $res=$this->cat_model->where(array('id'=>$id))->save($data);
        if($res)
        {
            $this->success("删除博文分类成功",U('/Home/Blog/cat'));
        }
        else{
            $this->error("删除博文分类失败",U('/Home/Blog/cat'));
        }
    }
}