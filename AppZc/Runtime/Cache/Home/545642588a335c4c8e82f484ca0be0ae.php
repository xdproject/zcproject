<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta author="BarneyX" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>微信助手-后台管理中心-众筹</title>
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/Public/css/dashboard.css" />
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="javascript:void(0);">微信助手-<smill>推荐使用谷歌浏览器,以达到最佳的用户体验</smill></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">设置</a></li>
            <li><a href="#">帮助</a></li>
			<li><a href="/index.php?s=/Home/Login/LoginOut">退出</a></li>
          </ul>
        </div>
      </div>
    </nav>
<div class="container-fluid">
    <div class="row">
          <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="/index.php?s=/home/index/index.html">欢迎首页 <span class="sr-only">(current)</span></a></li>

          </ul>

		  <ul class="nav nav-sidebar">
		  	<div class="zc_title" style="width:100%; background-color:#428bca; height:40px;">
				<strong style="line-height:40px; text-align:center; padding-left:20px; color:#fff;">微信助手功能</strong>
			</div>
            <li><a href="/index.php?s=/home/WeChatUser/index.html">微信用户</a></li>
			<li><a href="/index.php?s=/home/WeChatUser/replayindex.html">自动回复</a></li>
            <li><a href="#">自定义菜单</a></li>
          </ul>

		  <ul class="nav nav-sidebar">
		  	<div class="zc_title" style="width:100%; background-color:#428bca; height:40px;">
				<strong style="line-height:40px; text-align:center; padding-left:20px; color:#fff;">微信助手扩展</strong>
			</div>
            <li><a href="/index.php?s=/home/Crowdfunding/index.html">众筹应用</a></li>
			<li><a href="#" style="color:red;">更多应用>></a></li>
          </ul>

		   <ul class="nav nav-sidebar">
		   	<div class="zc_title" style="width:100%; background-color:#428bca; height:40px;">
				<strong style="line-height:40px; text-align:center; padding-left:20px; color:#fff;">微信助手设置</strong>
			</div>
            <li><a href="/index.php?s=/home/SysConfig/index.html">系统设置</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">微信助手-功能中心</h1>
            <div class="panel panel-default margin-sy">
                <!-- Default panel contents -->
                <div class="panel-heading" style="height:50px;">
                    <div class="pull-left">众筹应用-众筹文章列表</div>
                    <div class="pull-right">
                            <a type="button" class="btn btn-danger"  href="javascript:void(0);">批量删除 </a>
                            <a type="button" class="btn btn-success" id="AddZcProjectArc"  href="/index.php?s=/home/crowdfunding/AddObjArcData/oid/<?php echo ($oid); ?>/cp/add">添加文章 </a>
                    </div>
                </div>
            </div>
            <ul id="myTabs" class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">文章列表</a></li>

            </ul>

            <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>选择</th>
                            <th>编号</th>
                            <th>文章标题</th>
                            <th>文章描述</th>
                            <th>文章标记</th>
                            <th>点击量</th>
                            <th>阅读量</th>
                            <th>发布日期</th>
                            <th>文章权重</th>
                            <th>回复总数</th>
                            <th><center>操作</center></th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php if(is_array($arclist)): foreach($arclist as $k=>$vo): ?><tr>
                                <td> <input type="checkbox" name="arcids" value="<?php echo ($vo["id"]); ?>" /> </td>
                                <th scope="row" class="Auto_ID"><?php echo ($vo["id"]); ?></th>
                                <td><?php echo ($vo["title"]); ?></td>
                                <td> <span ><?php echo ($vo["description"]); ?></span> </td>
                                <td><?php echo ($vo["flag"]); ?> </td>
                                <td> <?php echo ($vo["click"]); ?> </td>
                                <td> <?php echo ($vo["read"]); ?> </td>
                                <td> <?php echo (date("Y-m-d H:i",$vo["pubdate"])); ?> </td>
                                <td><?php echo ($vo["short"]); ?></td>
                                <td>123</td>

                                <td align="center">
                                    <a href="javascript:void(0);" class="btn btn-default btn-xs">预览</a>
                                    <a href="javascript:void(0);" class="btn btn-primary btn-xs">编辑</a>
                                    <a href="javascript:void(0);" class="btn btn-danger btn-xs">删除</a>
                                </td>
                            </tr><?php endforeach; endif; ?>

                        </tbody>
                    </table>
                </div>
            </div>



        </div>
    </div>
</div>
</body>
</html>