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
            <div class="crumb-list"><i class="icon-font"></i><a href="/">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">博文分类</span></div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="<?php echo U('/Home/Blog/cat_add');?>"><i class="icon-font"></i>新增分类</a>
                        <i class="require-red"></i>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>名称</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                    <td><?php echo ($vo["id"]); ?></td>
                                    <td title="<?php echo ($vo["name"]); ?>"><a target="_blank" href="#" title="<?php echo ($vo["name"]); ?>"><?php echo ($vo["name"]); ?></a>
                                    </td>
                                    <td>
                                        <a class="link-update" href="<?php echo U('/Home/Blog/cat_edit/id/'.$vo['id']);?>">修改</a>
                                        <a class="link-del" href="<?php echo U('/Home/Blog/cat_del/id/'.$vo['id']);?>">删除</a>
                                    </td>
                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>

                        </tbody>
                    </table>
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

        //批量选择
        $(".allChoose").click(function(event) {
            /* 批量选择的事件 */
            var is_all_checked=$(this).prop("checked");//判断是否被全选了
            $(".result-tab tbody .tc input").each(function(index, el) {
                el.checked=is_all_checked;
            });
        });

        //批量删除
        $("#batchDel").click(function(event) {
            /* 批量删除的事件 */
            $(".require-red").text();//先将提示清空
            var id_list="";
            $(".result-tab tbody .tc input").each(function(index, el) {
                if (el.checked===true)
                {
                    id_list+=el.value+",";
                };
            });
            if (id_list=="")
            {
                $(".require-red").text('请选择要删除的数据！');
                return false;
            }
            if (confirm("确定要删除选择的数据吗？"))
            {
                //删除数据开始 即可以跳转 可以用ajax异步访问继续删除
                window.location.href="list.html?id="+id_list;
            }
        });

        //针对更新动态排序的事件
        $(".common-input.sort-input").blur(function(){
            var new_value=$(this);
            var change_id=$(this).prev();
            $.get(
                  'chang.html',
                  {new_value:new_value.val(),change_id:change_id.val()},
                  function(res) {
                    if (res.info!="Ok")
                    {
                        //
                    }else
                    {
                        //
                    }
                  },
            'json');
        });
    });
</script>
</body>
</html>