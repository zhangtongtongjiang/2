<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>博文列表</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        body{
            background: #ccc;
        }
        #blog_list{
            margin: 40px auto;
            width: 70%;
            border: solid 10px #ddd;
            padding: 20px;
            background: #CEE5D0;
        }
        #blog_list table{width: 100%;}
        #blog_list table th{text-align: left;}
        #head{
            margin: 40px auto;
            width: 70%;
            border: solid 10px #ddd;
            padding: 20px;
        }
        #head a {
            text-decoration: blink;
        }
        #blog_list div a{
            display: block;
            width: 15px;
            text-align: center;
            float: left;
            padding: 4px;
            background: #8B71EA;
            border-radius: 8px;
            text-decoration: blink;
            color: white;
            margin-left: 3px;
        }
        #blog_list div span{
            display: block;
            float: left;
            padding: 4px;
            background: #ccc;
            border-radius: 8px;
            text-decoration: blink;
            color: black;
            margin-left: 3px;
        }
    </style>
</head>
<body>
        <div id="head">
        <a href="<?php echo U('/Home/Index/add_blog');?>">增加博文</a>
        <a href="<?php echo U('/Home/Index/index');?>">博文列表</a>
    </div>
    <div id="blog_list">
        <table>
            <tr>
                <th>博文ID</th>
                <th>博文标题</th>
                <th>博文内容</th>
                <th>发布时间</th>
                <th>编辑</th>
                <th>删除</th>
            </tr>
            <?php if(is_array($blog_list)): $i = 0; $__LIST__ = $blog_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($vo["id"]); ?></td>
                    <td><?php echo ($vo["title"]); ?></td>
                    <td><?php echo ($vo["content"]); ?></td>
                    <td><?php echo (date('Y-m-d H:i:s',$vo["add_time"])); ?></td>
                    <td><a href="<?php echo U('/Home/Index/edit_blog/id/'.$vo['id']);?>">编辑</a></td>
                    <td><a href="<?php echo U('/Home/Index/del_blog/id/'.$vo['id']);?>">删除</a></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>

        </table>
        <?php echo ($show); ?>
    </div>

</body>
</html>