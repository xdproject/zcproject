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
    <script type="text/javascript">
        function ShowUrlTr(){
            var jumpTest = document.getElementById("flagsj");
            var redirecturltr =document.getElementById("redirecturltr");
            var redirecturl = document.getElementById("redirecturl");
            if(jumpTest.checked) redirecturltr.style.display='block';
            else{
                redirecturl.value='';
                redirecturltr.style.display='none';
            }
        }
    </script>
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
            <!--arclhives start -->
            <div class="panel panel-info">
                <div class="panel-body">
                        <!--start-->
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="body" >文章标题:</label>
                                        <input type="text" class="form-control" id="body" placeholder="文章标题">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                   <div class="form-group">
                                      <label for="shorttitle">简略标题：</label>
                                       <input type="text" class="form-control" id="shorttitle" placeholder="简略标题">
                                   </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label for="body" >自定义属性:</label>
                                        <td align="left">
                                            <input class="np" type="checkbox" name="flags[]" id="flagsh" value="h">头条[h]
                                            <input class="np" type="checkbox" name="flags[]" id="flagsc" value="c">推荐[c]
                                            <input class="np" type="checkbox" name="flags[]" id="flagsf" value="f">幻灯[f]
                                            <input class="np" type="checkbox" name="flags[]" id="flagsa" value="a">特荐[a]
                                            <input class="np" type="checkbox" name="flags[]" id="flagss" value="s">滚动[s]
                                            <input class="np" type="checkbox" name="flags[]" id="flagsb" value="b">加粗[b]
                                            <input class="np" type="checkbox" name="flags[]" id="flagsp" value="p">图片[p]
                                            <input class="np" type="checkbox" name="flags[]" id="flagsj" value="j" onclick="ShowUrlTr()">跳转[j]
                                        </td>
                                    </div>

                                </div>
                            </div>
                            <div class="row" id="redirecturltr" style="display:none">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="redirecturl" >跳转地址:</label>
                                        <input type="text" class="form-control" id="redirecturl" name="redirecturl" placeholder="请在此输入跳转的地址">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">.col-md-6</div>
                                <div class="col-md-6">.col-md-6</div>
                            </div>
                        <!--ends-->
                </div>
            </div>
            <!--body -->
            <div class="panel panel-default">
                <script type="text/javascript"> $(function(){ var ue = UE.getEditor('container',{ initialFrameHeight:400 }); }) </script>
                <script type="text/javascript" src="/Public/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/Public/ueditor/ueditor.all.min.js"></script>
<script> $(function(){ var ue = UE.getEditor('container',{ serverUrl :'<?php echo U('Home/Crowdfunding/ueditor');?>' }); }) </script>
<script id="container" name="content" type="text/plain" style="width:100%;height:100%;"> <?php echo (stripslashes(htmlspecialchars_decode($zc_body))); ?></script>
<script type="text/javascript" src="/Public/ueditor/cu_functions.js"></script>
            </div>

        </div>

    </div>


</div>
</body>
</html>