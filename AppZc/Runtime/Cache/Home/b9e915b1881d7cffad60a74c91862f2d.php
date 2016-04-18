<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>微信助手-后台管理中心-用户中心</title>
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
			  <h1 class="page-header">微信用户中心</h1>
<div class="panel panel-default margin-sy">
  <!-- Default panel contents -->
  <div class="panel-heading" style="height:50px;">
  	<div class="pull-left">当前用户列表</div>
	<div class="pull-right">
		<form method="post" name="userInfoForm">
			<a type="button" class="btn btn-success" id="UpdateWeChatUserBtn" href="/index.php?s=/Home/WeChatUser/UpdateUserList">更新用户信息</a>
			<input type="hidden" value="STOUIOID0x000" name="wid">
			<input type="hidden" value="studioit" name="token">
			<input type="hidden" value="dzCWxyJLTFCVcHEXcQB1j9NZcfMVUR4MovLdP6Pa5ix" name="encodingaeskey">
			<input type="hidden" value="wxd3efc43c9d32fc92" name="appid">
			<input type="hidden" value="14926261c374d50c7894122133690338" name="appsecret">
		</form>
	</div>
  </div>
</div>


			<table class="table table-hover">
		        <thead>
		          <tr>
		            <th>编号</th>
					<th>头像</th>
		            <th>用户昵称</th>
		            <th>性别</th>
		            <th>分组</th>
					<th>国家/城市/地区</th>
					<th>关注时间</th>
					<th>备注</th>
					<th>操作</th>
		          </tr>
		        </thead>
		        <tbody>
		<?php if(is_array($wulist)): foreach($wulist as $k=>$vo): ?><tr>
				            <th scope="row" class="Auto_ID">0</th>
				            <td><img src="<?php echo ($vo["headimgurl"]); ?>" width="41" height="41" /></td>
				            <td><?php echo ($vo["nickname"]); ?></td>
				            <td>
								<?php if( $vo["sex"] == 0): ?>女
									<?php elseif($vo["sex"] == 1): ?>男
									<?php else: ?>未知<?php endif; ?>
							</td>
							<td><?php echo ($vo["groupid"]); ?></td>
							<td><?php echo ($vo["country"]); ?>/<?php echo ($vo["province"]); ?>/<?php echo ($vo["city"]); ?></td>
							<td><?php echo (date("Y-m-d H:i",$vo["subscribe_time"])); ?></td>
							<td><?php echo ($vo["remark"]); ?></td>
							<td>
								<a href="javascript:void(0);" class="btn btn-default btn-xs">编辑</a>
								<a href="javascript:void(0);" class="btn btn-primary btn-xs">删除</a>
							</td>
				 </tr><?php endforeach; endif; ?>
			       </tbody>
		      </table>

	<ul class="pagination pull-right">
        <li>
          <a href="#" aria-label="Previous">
            <span aria-hidden="true">«</span>
          </a>
        </li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li>
          <a href="#" aria-label="Next">
            <span aria-hidden="true">»</span>
          </a>
        </li>
      </ul>

</nav>
        </div>
      </div>
    </div>
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="http://v3.bootcss.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>