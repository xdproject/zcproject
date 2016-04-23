<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="/Public/css/login.css" />
 <title>用户登陆</title>

</head>
<body>
	<div class="header">

	</div>
	<div class="container">
      <form class="form-signin" id="form1" method="post" action="index.php/Home/Login/LoginIn">
        <h2 class="form-signin-heading">用户登陆</h2>
        <label for="inputEmail" class="sr-only">用户名</label>
        <input type="username" id="inputEmail" name="uname" class="form-control" placeholder="用户名" required autofocus>
        <label for="inputPassword" class="sr-only">密码</label>
        <input type="password" id="inputPassword" name="upwd" class="form-control" placeholder="密码" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> 记住我
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block">登陆</button>
      </form>

    </div>
    <footer class="footer">
        <div class="container">
            <p class="text-muted">本软件由StudioIT工作室开发，维护</p>
        </div>
    </footer>
</body>
</html>