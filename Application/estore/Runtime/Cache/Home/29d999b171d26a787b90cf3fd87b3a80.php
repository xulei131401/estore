<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html style="overflow-y:hidden;">
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<LINK rel="Bookmark" href="/favicon.ico" >
<LINK rel="Shortcut Icon" href="/favicon.ico" />
<link href="/estore/Public/Home/css/H-ui.css" rel="stylesheet" type="text/css" />
<link href="/estore/Public/Home/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="/estore/Public/Home/font/font-awesome.min.css"/>

<title>ESTORE后台管理</title>
<meta name="keywords" content="H-ui.admin v2.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v2.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body style="overflow:hidden">
<header class="Hui-header cl"> <a class="Hui-logo l" title="ESTORE后台管理" href="/">ESTORE后台管理</a> <a class="Hui-logo-m l" href="/" title="H-ui.admin">H-ui</a> <span class="Hui-subtitle l"></span> <span class="Hui-userbox"><span class="c-white">超级管理员：<?php echo ($_SESSION['account']); ?></span> <a class="btn btn-danger radius ml-10" href="<?php echo U('Home/Index/logout');?>" title="退出"><i class="icon-off"></i> 退出</a></span> <a aria-hidden="false" class="Hui-nav-toggle" id="nav-toggle" href="#"></a> </header>
<div class="cl Hui-main">
  <aside class="Hui-aside" style="">
    <input runat="server" id="divScrollValue" type="hidden" value="" />
    <div class="menu_dropdown bk_2">
      <dl id="menu-user">
        <dt><i class="icon-user"></i> 用户中心<b></b></dt>
        <dd>
          <ul>
            <li><a _href="<?php echo U('Home/User/userList');?>" href="javascript:;">用户管理</a></li>
            <li><a _href="<?php echo U('Home/User/userAdd');?>" href="javascript:;">添加用户</a></li>
          </ul>
        </dd>
      </dl>
      <dl id="menu-comments">
        <dt><i class="icon-comments"></i>商品管理<b></b></dt>
        <dd>
          <ul>
            <li><a _href="<?php echo U('Home/Goods/goodsList');?>" href="javascript:;">商品管理</a></li>
            <li><a _href="<?php echo U('Home/Goods/goodsAdd');?>" href="javascript:void(0)">商品添加</a></li>
          </ul>
        </dd>
      </dl>
      <dl id="menu-article">
        <dt><i class="icon-edit"></i>商品分类管理<b></b></dt>
        <dd>
          <ul>
            <li><a _href="<?php echo U('Home/Category/index');?>" href="javascript:void(0)">分类管理</a></li>
            <li><a _href="<?php echo U('Home/Category/addTop');?>" href="javascript:void(0)">商品分类添加</a></li>
          </ul>
        </dd>
      </dl>
      <dl id="menu-picture">
        <dt><i class="icon-picture"></i>商品订单管理<b></b></dt>
        <dd>
          <ul>
            <li><a _href="<?php echo U('Home/Order/index');?>" href="javascript:void(0)">订单列表</a></li>
            <li><a _href="<?php echo U('Home/Address/index');?>" href="javascript:void(0)">收货地址管理</a></li>
            <li><a _href="<?php echo U('Home/Address/addAddress');?>" href="javascript:void(0)">收货地址添加</a></li>
          </ul>
        </dd>
      </dl>
   
     
    </div>
  </aside>
  <div class="dislpayArrow"><a class="pngfix" href="javascript:void(0);"></a></div>
  <section class="Hui-article">
    <div id="Hui-tabNav" class="Hui-tabNav">
      <div class="Hui-tabNav-wp">
        <ul id="min_title_list" class="acrossTab cl">
          <li class="active"><span title="我的桌面" data-href="welcome.html">我的桌面</span><em></em></li>
        </ul>
      </div>
      <div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default btn-small" href="javascript:;"><i class="icon-step-backward"></i></a><a id="js-tabNav-next" class="btn radius btn-default btn-small" href="javascript:;"><i class="icon-step-forward"></i></a></div>
    </div>
    <div id="iframe_box" class="Hui-articlebox">
      <div class="show_iframe">
        <div style="display:none" class="loading"></div>
        <iframe scrolling="yes" frameborder="0" src="<?php echo U('Home/Index/welcome');?>"></iframe>
      </div>
    </div>
  </section>
</div>
<script type="text/javascript" src="/estore/Public/Home/js/jquery.min.js"></script>
<script type="text/javascript" src="/estore/Public/Home/js/Validform_v5.3.2_min.js"></script> 
<script type="text/javascript" src="/estore/Public/Home/layer/layer.min.js"></script>
<script type="text/javascript" src="/estore/Public/Home/js/H-ui.js"></script>
<script type="text/javascript" src="/estore/Public/Home/js/H-ui.admin.js"></script>

</body>
</html>