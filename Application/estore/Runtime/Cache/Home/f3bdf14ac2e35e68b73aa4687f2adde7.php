<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<LINK rel="Bookmark" href="/favicon.ico" >
<LINK rel="Shortcut Icon" href="/favicon.ico" />
<link href="/estore/Public/Home/css/H-ui.css" rel="stylesheet" type="text/css" />
<link href="/estore/Public/Home/css/H-ui.login.css" rel="stylesheet" type="text/css" />
<title>后台登录 - H-ui.admin v2.1</title>
<meta name="keywords" content="H-ui.admin v2.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v2.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<input type="hidden" id="TenantId" name="TenantId" value="" />
<div class="header"></div>
<div class="loginWraper">
  <div id="loginform" class="loginBox">
    <form action="<?php echo U('Home/Login/isLogin');?>" method="post">
      <div class="formRow user">
        <input id="" name="username" type="text" placeholder="账户" class="input_text input-big">
      </div>
      <div class="formRow password">
        <input id="" name="password" type="password" placeholder="密码" class="input_text input-big">
      </div>
      <div class="formRow yzm">
        <input class="input_text input-big" type="text" placeholder="验证码" onBlur="if(this.value==''){this.value='验证码:'}" onClick="if(this.value=='验证码:'){this.value='';}" value="验证码:" style="width:150px;" name="checkCode">
        <img src="<?php echo U('Home/Login/verify');?>" onclick="this.src='<?php echo U('Home/Login/verify');?>?code='+Math.random()"></div>
     <!--  <div class="formRow">
        <label for="online">
          <input type="checkbox" name="online" id="online" value="">
          使我保持登录状态</label>
      </div> -->
      <div class="formRow">
        <input name="" type="submit" class="btn radius btn-success btn-big" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
        <input name="" type="reset" class="btn radius btn-default btn-big" value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">
      </div>
    </form>
  </div>
</div>
<div class="footer">ESTORE后台管理系统</div>
<script type="text/javascript" src="/estore/Public/Home/js/jquery.min.js"></script>
<script type="text/javascript" src="/estore/Public/Home/js/H-ui.js"></script>

</body>
</html>