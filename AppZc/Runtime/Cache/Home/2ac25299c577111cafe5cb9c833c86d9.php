<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>微信助手-后台管理中心-众筹</title>
    <!-- Bootstrap core CSS -->
    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="/Public/css/dashboard.css" />
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/Public/js/ie-emulation-modes-warning.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
          <a class="navbar-brand" href="javascript:void(0);">微信助手</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">设置</a></li>
            <li><a href="#">帮助</a></li>
			<li><a href="/index.php?s=/Home/Login/index">退出</a></li>
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
  	<div class="pull-left">众筹应用-众筹项目列表</div>
	<div class="pull-right">
		<form method="post" name="userInfoForm">
			<a type="button" class="btn btn-success" id="UpdateWeChatUserBtn">新建项目</a>
			<input type="hidden" value="STOUIOID0x000" name="wid">
			<input type="hidden" value="studioit" name="token">
			<input type="hidden" value="dzCWxyJLTFCVcHEXcQB1j9NZcfMVUR4MovLdP6Pa5ix" name="encodingaeskey">
			<input type="hidden" value="wxd3efc43c9d32fc92" name="appid">
			<input type="hidden" value="14926261c374d50c7894122133690338" name="appsecret">
		</form>
	</div>
  </div>
</div>
  <ul id="myTabs" class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">项目列表</a></li>
      <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">众筹设置</a></li>

    </ul>

	<div id="myTabContent" class="tab-content">
      <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">

			<table class="table table-hover">
		        <thead>
		          <tr>
		            <th>编号</th>
					<th>项目状态</th>
		            <th>项目名称</th>
		            <th>目标/进度</th>
					<th>关注人数</th>
					<th>创建时间</th>
					<th>结束日期</th>
					<th>文章总数</th>
					<th>回复总数</th>
					<th>操作</th>
		          </tr>
		        </thead>
		        <tbody>
		        	<?php if(is_array($syslist)): foreach($syslist as $k=>$vo): ?><tr>
		            <th scope="row" class="Auto_ID"><?php echo ($vo["id"]); ?></th>
		            <td><span class="label label-danger"><?php echo ($vo["zc_key"]); ?></span></td>
		            <td>
		            	<span class="label label-default"><?php echo ($vo["zc_val"]); ?></span>
					</td>
		            <td>
						<span class="label label-default"><?php echo ($vo["zc_descript"]); ?></span>
					</td>
					<td>
						<a href="javascript:void(0);" class="btn btn-default btn-xs">修改</a>
					</td>
		          </tr><?php endforeach; endif; ?>
				 </tbody>
		      </table>
	  </div>
      <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
       asdf
	     </div>


    </div>

        </div>
      </div>
    </div>
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="http://v3.bootcss.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>