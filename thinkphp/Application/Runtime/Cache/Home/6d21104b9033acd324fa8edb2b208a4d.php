<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="/2/blog/thinkphp/Public/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/2/blog/thinkphp/Public/css/main.css"/>
    <script type="text/javascript" src="/2/blog/thinkphp/Public/js/libs/jquery.js"></script>
    <script type="text/javascript" src="/2/blog/thinkphp/Public/js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="index.html">首页</a></li>
                <li><a href="http://mumutongtong.xyz/web/index.php" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="#">管理员</a></li>
                <li><a href="<?php echo U('/Home/Index/edit_password');?>">修改密码</a></li>
                <li><a href="login.html">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
    <li>
        <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
        <ul class="sub-menu">
            <li><a href="<?php echo U('/Home/Blog/index');?>"><i class="icon-font">&#xe005;</i>博文管理</a></li>
            <li><a href="<?php echo U('/Home/Blog/cat');?>"><i class="icon-font">&#xe006;</i>分类管理</a></li>
        </ul>
    </li>
    <li>
        <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
        <ul class="sub-menu">
            <li><a href="<?php echo U('/Home/Index/config');?>"><i class="icon-font">&#xe017;</i>系统设置</a></li>
        </ul>
    </li>
</ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list">
                <i class="icon-font"></i>
                <a href="index.html">首页</a><span class="crumb-step">&gt;</span>
                <a class="crumb-name" href="list.html">分类管理</a>
                <span class="crumb-step">&gt;</span><span>新增分类</span>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="<?php echo U('/Home/Blog/cat_save');?>" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>

                            <tr>
                                <th><i class="require-red">*</i>名称：</th>
                                <td>
                                    <input class="common-text required" id="title" name="name" size="50" value="<?php echo ($info["name"]); ?>" type="text">
                                    <i class="msg require-red"></i>
                                </td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input type="hidden" name="id" value="<?php echo ($info["id"]); ?>">
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
<script>
    $(function(){
        $(".sidebar-list .sub-menu").prev().click(function() {
            /* Act on the event */
            $(this).parent().find(".sub-menu").toggle("slow");
        });
        //提交事件
        $(".btn-primary").click(function(event) {
            /* Act on the event */
            $(".msg").text("");//清空所有提示
            var catid=$("#catid");//获取分类
            var title=$("#title");//获取标题
            var author=$("#author");//获取作者
            var smallimg=$("#smallimg");//获取图片
            var content=$("#content");//获取内容
            if (catid.val()=="")
            {
                catid.next().text("请选择分类");
                catid.focus();
                return false;
            }
            if (title.val()=="")
            {
                title.next().text("请填写标题");
                title.focus();
                return false;
            }
            if (author.val()=="")
            {
                author.next().text("请填写作者");
                author.focus();
                return false;
            }
            if (author.val()=="")
            {
                author.next().text("请填写作者");
                author.focus();
                return false;
            }
            if (content.val()=="")
            {
                content.next().text("请填写内容");
                content.focus();
                return false;
            }
        });
    });
</script>
</body>
</html>