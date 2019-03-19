<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function test()
	{
        $last_sql=get_sql();
		var_dump($last_sql);
/*		读
		$website_url=C("website_url");
		$this->assign("website_url",$website_url);
		$kkkkk_model=M("persons");
		$kkkkk_list=$kkkkk_model->where("id>1")->select();
		var_dump($kkkkk_list);exit();
			*/
		
		//增加
/*		$data["id"]=4;
		$data["FirstName"]=pp;
		$data["Age"]=99;
		$res=M('persons')->add($data);
		var_dump($res);*/
		
		//改
/*		1where实现
		$data["FirstName"]=qqq;
		$data["Age"]=66;
		$res=M('persons')->where("id=4")->save($data);
		var_dump($res);*/
		/*2save主键实现
		$data["id"]=4;	
		$data["FirstName"]=yy2;
		$data["Age"]=67;
		$res=M('persons')->save($data);
		var_dump($res);	*/
		
		//删
/*		1
		$map['id']=3;
		$res=M('persons')->where($map)->delete();
        //echo M()->getLastSql();显示
		var_dump($res);	*/	
		//2
/*		$map['id']=array("lt",2);
		$res=M('persons')->where($map)->delete();
        //echo M()->getLastSql();
		var_dump($res);*/
		
		$this->assign("array",array("id"=>"1","name"=>"aa"));
		$this->assign("array2",range(1,10));
		$this->display();
	}


    public function index()
	{
		//取出所有博文数据
		//模型模型取出数据
        $blog_list=D('blog')->get_all_blog();
		$this->assign("blog_list",$blog_list);//所有博文
		$this->display();//加载模板
		
    } 
	
	public function add_blog()
	{

		$this->display();//加载模板
		
    }
	
	


	
	public function save_blog()
    {
        $title=I('post.title');//接收标题
        $content=I('post.content');//接收内容
        $data=compact("title","content");
        $data['add_time']=time();//添加时间
        $res=D("Blog")->add($data);
		if($res)
        {
            $this->success("添加博文成功",U('/Home/Index/index'));
        }
        else{
            $this->error("添加博文失败",U('/Home/Index/index'));}
	
    }
	
	
	    /*
     * 删除博文
     *
     * **/
    public function del_blog()
    {
        $id=I('get.id');
        $map['id']=$id;
        $res=D('Blog')->where($map)->delete();
        if($res)
        {
            $this->success("删除博文成功",U('/Home/Index/index'));
        }
        else{
            $this->error("删除博文失败",U('/Home/Index/index'));
        }
    }
	
}
	
	