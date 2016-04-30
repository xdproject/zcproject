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

  <!--dialogBox -->
<div class="modal fade bs-example-modal-sm" id="MsgBox" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">信息框</h4>
            </div>
            <div class="modal-body" id="modal-body-c"> </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" id="MsgBox_closeBtn">关闭</button>
            </div>
        </div>
    </div>
</div>
  <script type="text/javascript">
	  function MsgBox(msgbody,jmpurl){
          $("#modal-body-c").html(msgbody); $("#MsgBox").modal();
          $("#MsgBox_closeBtn").click(function(){
              window.location.href=jmpurl;
          })
      }
  </script>

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
                            <th><center>选择</center></th>
                            <th><center>编号</center></th>
                            <th><center>文章标题</center></th>
                            <th><center>文章描述</center></th>
                            <th><center>文章标记</center></th>
                            <th><center>点击量</center></th>
                            <th><center>阅读量</center></th>
                            <th><center>发布日期</center></th>
                            <th><center>权重</center></th>
                            <th><center>回复总数</center></th>
                            <th><center>操作</center></th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php if(is_array($arclist)): foreach($arclist as $k=>$vo): ?><tr>
                                <td> <center><input type="checkbox" name="arcids" value="<?php echo ($vo["id"]); ?>" /></center> </td>
                                <th scope="row" class="Auto_ID"><center><?php echo ($vo["id"]); ?></center></th>
                                <td><center><span style="color:<?php echo ($vo["color"]); ?>"><?php echo ($vo["title"]); ?></span></center></td>
                                <td><center> <span  class="label label-info" data-toggle="tooltip" data-placement="top" title="<?php echo ($vo["description"]); ?>">查看描述</span> </center></td>
                                <td><center><?php echo ($vo["flag"]); ?> </center></td>
                                <td> <center><?php echo ($vo["click"]); ?> </center></td>
                                <td> <center><?php echo ($vo["read"]); ?> </center></td>
                                <td> <center><?php echo ($vo["senddate"]); ?></center> </td>
                                <td><center><?php echo ($vo["short"]); ?></center></td>
                                <td><center>123</center></td>

                                <td align="center">
                                    <a href="javascript:void(0);" class="btn btn-default btn-xs">预览</a>
                                    <a href="/index.php?s=/home/crowdfunding/AddObjArcData/oid/<?php echo ($oid); ?>/aid/<?php echo ($vo["id"]); ?>/cp/edit" class="btn btn-primary btn-xs">编辑</a>
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
<script type="text/javascript"> $(function(){ $('[data-toggle="popover"]').popover(); $('[data-toggle="tooltip"]').tooltip(); }) </script>

</body>
</html>