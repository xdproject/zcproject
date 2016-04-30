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
    <script type="text/javascript" src="/Public/js/pub_func.js"></script>
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
            <!--arclhives start -->
            <div class="panel panel-info">

                <div class="panel-body">
                        <!--start-->
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="title" >文章标题:</label>
                                        <input type="text" class="form-control" id="title" value="<?php echo ($arcinfo["title"]); ?>" name="title" placeholder="文章标题">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                   <div class="form-group">
                                      <label for="shorttitle">简略标题：</label>
                                       <input type="text" class="form-control" id="shorttitle" value="<?php echo ($arcinfo["shorttitle"]); ?>" name="shorttitle" placeholder="简略标题">
                                   </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="short">权重(越小越靠前)：</label>
                                        <input type="text" class="form-control" id="short" name="short" value="<?php echo ($arcinfo["short"]); ?>" placeholder="80">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="flags" >自定义属性:</label>
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
                                        <input type="text" class="form-control" id="redirecturl" name="redirecturl" value="<?php echo ($arcinfo["redirecturl"]); ?>" placeholder="请在此输入跳转的地址" />
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                   <div class="form-group">
                                       <label for="color">标题颜色值(可选):</label>
                                       <input type="text" class="form-control" id="color" name="color" value="<?php echo ($arcinfo["color"]); ?>" placeholder="#000000" />
                                   </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="writer">作者:</label>
                                        <input type="text" class="form-control" id="writer" name="writer" value="<?php echo ($arcinfo["writer"]); ?>" placeholder="ZcProject" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="source">来源:</label>
                                        <input type="text" class="form-control" id="source" name="source" value="<?php echo ($arcinfo["source"]); ?>" placeholder="From SZP Project~~!!" />
                                    </div>
                                </div>
                            </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="keywords">关键词</label>
                                    <input type="text" name="keyworkds" class="form-control" id="keywords"  value="<?php echo ($arcinfo["keywords"]); ?>" placeholder="文章关键字" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                               <div class="col-md-12">
                                   <div class="form-group">
                                       <label for="description">描述</label>
                                       <input type="text" name="description" class="form-control" id="description" value="<?php echo ($arcinfo["description"]); ?>" placeholder="文章描述信息" />
                                   </div>
                               </div>
                            </div>
                        <!--ends-->
                </div>

            </div>
            <!--body -->
            <div class="panel">
                <script type="text/javascript"> $(function(){ var ue = UE.getEditor('container',{ initialFrameHeight:400 }); }) </script>
                <script type="text/javascript" src="/Public/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/Public/ueditor/ueditor.all.min.js"></script>
<script> $(function(){ var ue = UE.getEditor('container',{ serverUrl :'<?php echo U('Home/Crowdfunding/ueditor');?>' }); }) </script>
<script id="container" name="content" type="text/plain" style="width:100%;height:100%;">
    <?php echo (stripslashes(htmlspecialchars_decode($zc_body))); ?>
    <?php echo (stripslashes(htmlspecialchars_decode($arcinfo["body"]))); ?>
    </script>
<script type="text/javascript" src="/Public/ueditor/cu_functions.js"></script>
            </div>
            <div class="panel" style="border:none;">
                <button type="button" class="btn btn-primary" style="margin-left:30px;" id="sendArcBtn">确认发布</button>
            </div>
        </div>

    </div>



<script type="text/javascript">
        //获取当前用户表单内容 并返回一个json格式的对象用户Ajax方式发布文章
        function AddZcArticleInfo(){
            //alert($("input[id='title']").val());
           // var $oid                =<?php echo ($arc_attrinfo["oid"]); ?>;
            var $arc_title          =$("input[id='title']").val();
            var $arc_shorttitle     =$("input[id='shorttitle']").val();
            var $arc_short          =$("input[id='short']").val();
            var $arc_color          =$("input[id='color']").val();
            var $arc_writer         =$("input[id='writer']").val();
            var $arc_source         =$("input[id='source']").val();
            var $arc_keywords       =$("input[id='keywords']").val();
            var $arc_descriptin     =$("input[id='description']").val();
            var $arc_redirecturl    =$("input[id='redirecturl']").val();
            var $arc_body           =getUEFormatBody();

            if($arc_title.length<=0){ MsgBox("文章标题不能为空哈!"); return false;}
            UeditContentPost(
                {
                    "opt":'<?php echo ($arc_attrinfo["opt"]); ?>',
                    "oid":<?php echo ($arc_attrinfo["oid"]); ?>,
                    <?php if(!empty($arc_attrinfo["aid"])): ?>"aid":<?php echo ($arc_attrinfo["aid"]); ?>,<?php endif; ?>
                    'short':$arc_short,
                    'flag':'c',
                    'shorttitle':$arc_shorttitle,
                    'title':$arc_title,
                    'color':$arc_color,
                    'writer':$arc_writer,
                    'source':$arc_source,
                    'litpic':'pp',
                    'keywords':$arc_keywords,
                    'description':$arc_descriptin,
                    'body':$arc_body
                },
                "/index.php?s=/home/crowdfunding/OptZcProjectArchives",
                function(data){
                   // alert(data.status);
                    MsgBox(data.msg,data.jmpurl);

                },
                function(){
                    alert("ERROR!!123");
                }
            );
        }
        $("#sendArcBtn").click(function(){ AddZcArticleInfo();; });
</script>
</div>
</body>
</html>