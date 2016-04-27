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
    <script type="text/javascript" src="/Public/js/jquery-2.0.2.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="http://v3.bootcss.com/assets/js/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript" src="/Public/js/pub_func.js"></script>
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
			<h1 class="page-header" xmlns="http://www.w3.org/1999/html">微信助手-功能中心</h1>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">众筹应用-项目主体介绍,这里的内容将在众筹的前台显示!一般情况下这里的内容是对当前您的众筹进行介绍</h3>
    </div>
    <div class="panel-body">
        <h5>
           <h5><span style="font-weight:bold;">项目编号:</span>&nbsp;&nbsp;<?php echo ($objinfo["oid"]); ?>&nbsp;&nbsp;</h5>
           <h5><span style="font-weight:bold;">项目创建日期:</span>&nbsp;&nbsp;<?php echo (date("Y-m-d H:i",$objinfo["cdt"])); ?>&nbsp;&nbsp;</h5>
           <h5><span style="font-weight:bold;"> 项目名称:</span>&nbsp;&nbsp;<?php echo ($objinfo["cname"]); ?></h5>
        </h5>
    </div>
</div>
<script type="text/javascript"> $(function(){ var ue = UE.getEditor('container',{ initialFrameHeight:400 }); }) </script>
<script type="text/javascript" src="/Public/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/Public/ueditor/ueditor.all.min.js"></script>
<script> $(function(){ var ue = UE.getEditor('container',{ serverUrl :'<?php echo U('Home/Crowdfunding/ueditor');?>' }); }) </script>
<script id="container" name="content" type="text/plain" style="width:100%;height:100%;"> <?php echo (stripslashes(htmlspecialchars_decode($zc_body))); ?></script>
<script type="text/javascript" src="/Public/ueditor/cu_functions.js"></script>

<a id="getcontent" class="btn btn-primary pull-left" style="margin-top:20px;" href="javascript:void(0);" >确认添加</a>

<script type="text/javascript">
   $(function(){
       $("#getcontent").click(function(){
           UeditContentPost(
                  {'oid':'<?php echo ($objinfo["oid"]); ?>','cdt':'<?php echo ($objinfo["cdt"]); ?>','pdt':'<?php echo time();?>','cname':'<?php echo ($objinfo["cname"]); ?>','body':getUEFormatBody()},
                   "/index.php?s=/home/crowdfunding/AddProjectBody",
                   function(data){
                      alert(data.status);
                   },function(){
                       alert("ERROR!!");
                   }
           )
       });
   })
</script>

        </div>
      </div>
    </div>


	<script src="/Public/js/locales/bootstrap-datetimepicker.fr.js"></script>
	<script src="/Public/js/bootstrap-datetimepicker.min.js" ></script>
	<script src="/Public/js/zc-crowdfunding.js"></script>
  </body>
</html>