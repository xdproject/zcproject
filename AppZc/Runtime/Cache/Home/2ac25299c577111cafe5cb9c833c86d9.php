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
    <!-- Bootstrap core CSS -->
    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="/Public/css/dashboard.css" />
	<link rel="stylesheet" type="text/css" href="/Public/css/bootstrap-datetimepicker.min.css" />
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/Public/js/ie-emulation-modes-warning.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
	 <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="http://v3.bootcss.com/assets/js/ie10-viewport-bug-workaround.js"></script>
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
  	<div class="pull-left">众筹应用-众筹项目列表</div>
	<div class="pull-right">
		<form method="post" name="userInfoForm">
			<a type="button" class="btn btn-success" id="UpdateWeChatUserBtn" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">新建项目</a>
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
	  <li role="presentation"><a href="#zctrash" role="tab" id="profile-tab" data-toggle="tab" aria-controls="zctrash">众筹回收站</a></li>

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

			<?php if(is_array($objlist)): foreach($objlist as $k=>$vo): ?><tr>
		            <th scope="row" class="Auto_ID"><?php echo ($vo["id"]); ?></th>
					<td><span >
		            <?php if( $vo["status"] == 0): ?>不可用
									<?php elseif($vo["status"] == 1): ?>可用
									<?php else: ?>未知<?php endif; ?>
					</span></td>
		            <td>
		            	<span ><?php echo ($vo["objname"]); ?></span>
					</td>
		            <td>
						<span ><?php echo ($vo["goal"]); ?>/12.00</span>
					</td>

					<td>
						<span>123人</span>
					</td>

					<td>
						<span ><?php echo (date("Y-m-d H:i",$vo["start_time"])); ?></span>
					</td>
					<td>
						<span ><?php echo (date("Y-m-d H:i",$vo["end_time"])); ?></span>
					</td>

					<td>
						<span ><a href="javascript:void(0);" class="btn btn-default btn-xs">23</a></span>
					</td>

					<td>
						<span >323</span>
					</td>
					<td>
						<a href="javascript:void(0);" class="btn btn-default btn-xs">添加文章</a>
						<a href="javascript:void(0);" class="btn btn-default btn-xs">修改设置</a>
						<a href="javascript:void(0);" class="btn btn-error btn-xs">删除</a>
					</td>
		          </tr><?php endforeach; endif; ?>

				 </tbody>
		      </table>
	  </div>
      <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
       asdf
	  </div>
	  <div role="tabpanel" class="tab-pane fade" id="zctrash" aria-labelledby="profile-tab">
       asdf123
	  </div>


    </div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
  	<form method="post" action="/index.php?s=/home/crowdfunding/AddProject">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">新建众筹项目</h4>
      </div>
      <div class="modal-body">

          <div class="form-group">
            <label for="recipient-name" class="control-label">项目名称:</label>
            <input type="text" class="form-control" id="recipient-name" name="objname" placeholder="新建项目">
		  </div>

		  <div class="form-group">
			 <label for="recipient-name" class="control-label">项目目标:</label>
			 <label class="sr-only" for="exampleInputAmount">总额 (请输入数字)</label>　
		     <div class="input-group">
		      <div class="input-group-addon">￥</div>
		      <input type="text" class="form-control" id="exampleInputAmount" name="goal" placeholder="总额　666.6666">
		      <div class="input-group-addon">.00</div>
		    </div>
		  </div>

		  <div class="form-group">
			 <label for="recipient-name" class="control-label">结束日期</label>
             <div class="input-group date form_datetime" data-date="2012-05-15 21:05" data-date-format="yyyy-MM-dd HH:ii" data-link-field="dtp_input1">
                <input class="form-control" size="16" type="text" value="" name="end_time" readonly>
                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
				<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
             </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">项目简要描述</label>
            <textarea class="form-control" id="message-text" name="descript" placeholder="项目简要描述 ......."></textarea>
			<input type="hidden" value="<?php echo ($create_time); ?>" name="start_time" />
			<input type="hidden" value="1" name="status" />
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
		<input type="submit" class="btn btn-primary" value="确认新建" />
      </div>
    </div>
	</form>
  </div>
</div>

        </div>
      </div>
    </div>


	<script src="/Public/js/locales/bootstrap-datetimepicker.fr.js"></script>
	<script src="/Public/js/bootstrap-datetimepicker.min.js" ></script>
	<script src="/Public/js/zc-crowdfunding.js"></script>
  </body>
</html>