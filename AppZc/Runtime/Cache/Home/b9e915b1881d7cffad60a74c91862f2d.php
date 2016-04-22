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
			<a type="button" class="btn btn-success" id="UpdateWeChatUserBtn">更新用户信息</a>
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
				<tr>
				            <th scope="row" class="Auto_ID">0</th>
				            <td><img src="http://wx.qlogo.cn/mmopen/1LlgQzJVOyAYTFrNicMyHibC9C6zWXWBeKzuiabApQiciaVB6F36sbNkY1E7icbxQEHOpkib2MHKz7TKVibTZZleIeVkgw/0" width="41" height="41"></td>
				            <td>sweet。纠结</td>
				            <td>
								未知				            </td>
							<td>0</td>
							<td>安道尔//</td>
							<td>2016-01-07 21:00</td>
							<td></td>
							<td>
								<a href="javascript:void(0);" class="btn btn-default btn-xs">编辑</a>
								<a href="javascript:void(0);" class="btn btn-primary btn-xs">删除</a>
							</td>
				          </tr><tr>
				            <th scope="row" class="Auto_ID">0</th>
				            <td><img src="http://wx.qlogo.cn/mmopen/ajNVdqHZLLDD3q8z31FK2oLYRdfzUySPtv6Fb51P9IIBzhG9UHKIfA7puTsSNyxsiblyvcibCrNfP4I6DTvWsMrw/0" width="41" height="41"></td>
				            <td>A银川黎明</td>
				            <td>
								男
													            </td>
							<td>0</td>
							<td>中国/宁夏/银川</td>
							<td>2016-03-01 11:19</td>
							<td></td>
							<td>
								<a href="javascript:void(0);" class="btn btn-default btn-xs">编辑</a>
								<a href="javascript:void(0);" class="btn btn-primary btn-xs">删除</a>
							</td>
				          </tr><tr>
				            <th scope="row" class="Auto_ID">0</th>
				            <td><img src="http://wx.qlogo.cn/mmopen/PiajxSqBRaEJgUGHUNcxmF2qujGEZtD1xXugLjyuKEhmdGmOHvegCUnPpl8mWZK1mAlNTBrR8KaLYribxubFGhibg/0" width="41" height="41"></td>
				            <td>文医生-男性科</td>
				            <td>
								未知				            </td>
							<td>0</td>
							<td>中国/宁夏/银川</td>
							<td>2016-03-19 14:59</td>
							<td></td>
							<td>
								<a href="javascript:void(0);" class="btn btn-default btn-xs">编辑</a>
								<a href="javascript:void(0);" class="btn btn-primary btn-xs">删除</a>
							</td>
				          </tr><tr>
				            <th scope="row" class="Auto_ID">0</th>
				            <td><img src="http://wx.qlogo.cn/mmopen/PiajxSqBRaEKMgGib8DAtLxl0qhw8hBSkmficEeVwZAJRVDuDRicLHUtypHR8p4fW0ibFLuugiaQaEBIXOT6EBP4KO8A/0" width="41" height="41"></td>
				            <td>喻医生-男性科解答</td>
				            <td>
								未知				            </td>
							<td>0</td>
							<td>中国/宁夏/银川</td>
							<td>2016-03-19 14:59</td>
							<td></td>
							<td>
								<a href="javascript:void(0);" class="btn btn-default btn-xs">编辑</a>
								<a href="javascript:void(0);" class="btn btn-primary btn-xs">删除</a>
							</td>
				          </tr><tr>
				            <th scope="row" class="Auto_ID">0</th>
				            <td><img src="http://wx.qlogo.cn/mmopen/PiajxSqBRaEIRhHY7xCjmvxM7f5nZLaq3rNZJH03BR26KhTkQxPXxMXAF4WQnnZ79tPibYicjjaibROZVVZuplqXRg/0" width="41" height="41"></td>
				            <td>阳光明媚~，我有小情绪</td>
				            <td>
								未知				            </td>
							<td>0</td>
							<td>中国//</td>
							<td>2016-03-07 13:49</td>
							<td></td>
							<td>
								<a href="javascript:void(0);" class="btn btn-default btn-xs">编辑</a>
								<a href="javascript:void(0);" class="btn btn-primary btn-xs">删除</a>
							</td>
				          </tr><tr>
				            <th scope="row" class="Auto_ID">0</th>
				            <td><img src="http://wx.qlogo.cn/mmopen/PiajxSqBRaEJWP13BjdpQo1yicRb6zmgkQO2gj0xs7zWUJT4KMw9cyYKuXOanSvOzI7yyga1BsX6nzOMJwsvsd3A/0" width="41" height="41"></td>
				            <td>魏医生-男性科</td>
				            <td>
								未知				            </td>
							<td>0</td>
							<td>中国/宁夏/银川</td>
							<td>2016-03-19 14:59</td>
							<td></td>
							<td>
								<a href="javascript:void(0);" class="btn btn-default btn-xs">编辑</a>
								<a href="javascript:void(0);" class="btn btn-primary btn-xs">删除</a>
							</td>
				          </tr><tr>
				            <th scope="row" class="Auto_ID">0</th>
				            <td><img src="http://wx.qlogo.cn/mmopen/PiajxSqBRaELIoT5fKlj65cMU7KicxqTicAaE8ZyAxta4DzvRCTsQDianibsQIWSjKsIEK3P9IeBj7tZqiazyUcxFIWg/0" width="41" height="41"></td>
				            <td>常医生-男性科解答</td>
				            <td>
								未知				            </td>
							<td>0</td>
							<td>中国/宁夏/银川</td>
							<td>2016-03-19 14:59</td>
							<td></td>
							<td>
								<a href="javascript:void(0);" class="btn btn-default btn-xs">编辑</a>
								<a href="javascript:void(0);" class="btn btn-primary btn-xs">删除</a>
							</td>
				          </tr><tr>
				            <th scope="row" class="Auto_ID">0</th>
				            <td><img src="http://wx.qlogo.cn/mmopen/Q3auHgzwzM63p0R0q44TDRbom5cSkG01aZ5LHEv9pbzA0P7nruwW3HwvFvHickqVSPKDVWxJibG5aicqKBWZ8xQ7A/0" width="41" height="41"></td>
				            <td>琰</td>
				            <td>
								男
													            </td>
							<td>0</td>
							<td>中国/四川/宜宾</td>
							<td>2016-03-07 16:44</td>
							<td></td>
							<td>
								<a href="javascript:void(0);" class="btn btn-default btn-xs">编辑</a>
								<a href="javascript:void(0);" class="btn btn-primary btn-xs">删除</a>
							</td>
				          </tr><tr>
				            <th scope="row" class="Auto_ID">0</th>
				            <td><img src="http://wx.qlogo.cn/mmopen/1LlgQzJVOyByVW6fl3xx9lzHCftzzmlicF6YLArxyPtf3wSfKpbrs9Y2dibdyYJPKnfZRkpSiaibGCKSBeVvRicarlA/0" width="41" height="41"></td>
				            <td>暖心༂雪嫣༆</td>
				            <td>
								未知				            </td>
							<td>0</td>
							<td>中国/宁夏/银川</td>
							<td>2016-02-25 11:02</td>
							<td></td>
							<td>
								<a href="javascript:void(0);" class="btn btn-default btn-xs">编辑</a>
								<a href="javascript:void(0);" class="btn btn-primary btn-xs">删除</a>
							</td>
				          </tr><tr>
				            <th scope="row" class="Auto_ID">0</th>
				            <td><img src="http://wx.qlogo.cn/mmopen/cvy5dx5nl1xe1Vapx9vErPdgvFfYbfUtff46lCdADf1t2jrW5sjxS73zB6MRrnc0AibayCFomeM0Cq8fvuej50drOAibeYyB8w/0" width="41" height="41"></td>
				            <td>陈医生-男性科</td>
				            <td>
								未知				            </td>
							<td>0</td>
							<td>中国/宁夏/银川</td>
							<td>2016-03-19 14:59</td>
							<td></td>
							<td>
								<a href="javascript:void(0);" class="btn btn-default btn-xs">编辑</a>
								<a href="javascript:void(0);" class="btn btn-primary btn-xs">删除</a>
							</td>
				          </tr><tr>
				            <th scope="row" class="Auto_ID">0</th>
				            <td><img src="http://wx.qlogo.cn/mmopen/VMiaxaUQUADbf8y7LVQxCBDSfXvst1TdJObldFUaelmC7VhiaibvsjWY0zHo58hftkcfd8yq4UJxb3REX2eibsk1p92b9yGRWDdic/0" width="41" height="41"></td>
				            <td>小男人、</td>
				            <td>
								男
													            </td>
							<td>0</td>
							<td>中国/云南/曲靖</td>
							<td>2016-01-07 20:59</td>
							<td></td>
							<td>
								<a href="javascript:void(0);" class="btn btn-default btn-xs">编辑</a>
								<a href="javascript:void(0);" class="btn btn-primary btn-xs">删除</a>
							</td>
				          </tr><tr>
				            <th scope="row" class="Auto_ID">0</th>
				            <td><img src="http://wx.qlogo.cn/mmopen/PiajxSqBRaELEzklEjhHp5y695XjeT1xC45NocAPLbLWibjTteue0XxEObP0cxibjryh1W3RtibibnP4TXc3tuv4MGg/0" width="41" height="41"></td>
				            <td>～萌萌小歆歆**</td>
				            <td>
								未知				            </td>
							<td>0</td>
							<td>中国/宁夏/银川</td>
							<td>2016-03-01 09:24</td>
							<td></td>
							<td>
								<a href="javascript:void(0);" class="btn btn-default btn-xs">编辑</a>
								<a href="javascript:void(0);" class="btn btn-primary btn-xs">删除</a>
							</td>
				          </tr>        </tbody>
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