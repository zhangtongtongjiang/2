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
            <div class="crumb-list"><i class="icon-font"></i><a href="index.html">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">修改密码</span></div>
        </div>
        <div class="result-wrap">
            <form action="" method="post" id="myform" name="myform">
                <div class="config-items">
                    <div class="config-title">
                        <h1><i class="icon-font">&#xe00a;</i>修改密码</h1>
                    </div>
                    <div class="result-content">
                        <table width="100%" class="insert-tab">
                            <tbody>
                                <tr>
                                    <th width="15%"><i class="require-red">*</i>用户名：</th>
                                    <td><input type="text"  value="<?php echo ($info["username"]); ?>" size="30" name="username" class="common-text"></td>
                                </tr>
                                <tr>
                                    <th width="15%"><i class="require-red">*</i>密码：</th>
                                    <td><input type="password"  value="<?php echo ($info["password"]); ?>" size="30" name="password" class="common-text"></td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <td>
                                        <input type="submit" value="提交" class="btn btn-primary btn6 mr10">
                                        <input type="button" value="返回" onclick="history.go(-1)" class="btn btn6">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </form>
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
    });
</script>
</body>
</html>