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
    </style>
</head>
<body>
        <div id="head">
        <a href="<?php echo U('/Home/Index/add_blog');?>">增加博文</a>
        <a href="<?php echo U('/Home/Index/index');?>">博文列表</a>
    </div>
    <div id="blog_list">
        <form action="<?php echo U('/Home/Index/save_blog');?>" method="post">
            <table>
                <tr>
                    <td width="100px;">博文标题</td>
                    <td><input type="text" name="title" /></td>
                </tr>
                <tr>
                    <td width="100px;">博文内容</td>
                    <td>
                        <textarea name="content" id="" cols="80" rows="10"></textarea>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="添加">
                        <input type="reset" value="重置">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>