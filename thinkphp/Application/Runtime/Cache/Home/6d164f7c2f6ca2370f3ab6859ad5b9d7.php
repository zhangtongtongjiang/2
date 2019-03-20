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
            <div class="crumb-list"><i class="icon-font"></i><a href="index.html">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">作品管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="#" method="post">
                    <table class="search-tab">
                        <tr>
                            <th width="120">选择分类:</th>
                            <td>
                                <select name="search-sort" id="">
                                    <option value="">全部</option>
                                    <option value="19">精品界面</option><option value="20">推荐界面</option>
                                </select>
                            </td>
                            <th width="70">关键字:</th>
                            <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text"></td>
                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="<?php echo U('/Home/Blog/add_blog');?>"><i class="icon-font"></i>新增作品</a>
                        <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
                        <!-- <a id="updateOrd" href="javascript:void(0)"><i class="icon-font"></i>更新排序</a> -->
                        <i class="require-red"></i>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <thead>
                            <tr>
                                <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                                <th>排序</th>
                                <th>ID</th>
                                <th>标题</th>
                                <th>审核状态</th>
                                <th>点击</th>
                                <th>发布人</th>
                                <th>更新时间</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="tc"><input name="id[]" value="59" type="checkbox"></td>
                                <td>
                                    <input name="ids[]" value="59" type="hidden">
                                    <input class="common-input sort-input" name="ord[]" value="0" type="text">
                                </td>
                                <td>59</td>
                                <td title="发哥经典"><a target="_blank" href="#" title="发哥经典">发哥经典</a> …
                                </td>
                                <td>0</td>
                                <td>2</td>
                                <td>admin</td>
                                <td>2014-03-15 21:11:01</td>
                                <td>
                                    <a class="link-update" href="#">修改</a>
                                    <a class="link-del" href="#">删除</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="tc"><input name="id[]" value="58" type="checkbox"></td>
                                <td>
                                    <input name="ids[]" value="58" type="hidden">
                                    <input class="common-input sort-input" name="ord[]" value="0" type="text">
                                </td>
                                <td>58</td>
                                <td title="黑色经典"><a target="_blank" href="#" title="黑色经典">黑色经典</a> …
                                </td>
                                <td>0</td>
                                <td>35</td>
                                <td>admin</td>
                                <td>2013-12-30 22:34:00</td>
                                <td>
                                    <a class="link-update" href="#">修改</a>
                                    <a class="link-del" href="#">删除</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="list-page"> 2 条 1/1 页</div>
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