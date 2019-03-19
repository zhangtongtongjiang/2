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
    </style>
</head>
<body>
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
                    <td><a href="">编辑</a></td>
                    <td><a href="">删除</a></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>

        </table>
    </div>
</body>
</html>