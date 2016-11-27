<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="/estore/Public/Index/css/style.css" rel="stylesheet" type="text/css">
<title>我的商店-登录页面</title>
</head>
<body>
<div id="container">
	<div id="header">
<div id="nav_user">
	<span style="color:yellow">
		<?php if(empty($_SESSION['account']) == true): ?><a href="javascript:void(0);">你还没登录！</a>
		<?php else: ?>
			<a href="javascript:void(0);">欢迎<?php echo ($_SESSION['account']); ?>登录！</a><?php endif; ?>
	</span>
	<a href="<?php echo U('Index/User/register');?>">注册</a>
	<a href="javascript:void(0)">购物车</a>
	<a href="javascript:void(0)">结帐中心</a>
	<a href="javascript:void(0);">用户管理</a>

	<a href="<?php echo U('Home/Login/index');?>">后台管理</a>
	<a href="<?php echo U('Index/Index/logout');?>">注销</a>
</div>	</div>
	<div id="nav">
		<ul>
			<li><span><a href="<?php echo U('Index/Index/index');?>">首页</a></span></li>
			<li><span><a href="javascript:void(0)">用户中心</a></span></li>

			<li><span><a href="<?php echo U('Home/Login/index');?>">后台管理</a></span></li>
		</ul>
	</div>
	<div id="wrapper">
		<div id="sidebar">
			
<div>
	<div class="box_title">会员登录</div>

	<div class="box_list">
		<form action="<?php echo U('Index/User/login');?>" method="post">
			<div class="login">
				<ul>
					<li>
						<label>账号</label>
						<input name="username" id="useraccount" type="text">
					</li>

					<li>
						<label>密码</label>
						<input name="password" id="userpwd" type="password">
					</li>
					<li>
						<label>验证码	</label>
						<input name="checkCode" id="code" type="text" style="width:50px">
						<img src="<?php echo U('Index/User/verify');?>" onclick="this.src='<?php echo U('Index/User/verify');?>?code='+Math.random()" alt="验证码" style="cursor:pointer" width="80px" height="25px">

					</li>
					<li class="formbt">
						<input type="submit" value="登录" class="bt">
						<input type="button" value="注册" class="bt" 
						onclick="javascript:window.location.href='<?php echo U('Index/User/register');?>'">
					</li>
				</ul>
			</div>
			<input name="act" type="hidden" value="checkLogin">
		</form>

	</div>
	<div class="box_bottom"><img src="images//0.gif" width="10" height="1" alt=""/></div>
</div>


<div style="margin-top:10px;"></div>

<div class="category">
	<div class="box_title">商品分类</div>
	<div class="box_list">
		<dl>
					<dt>

				<a href="javascript:void(0);">『衣服』</a>
			</dt>
							<dd>
					|__ <a href="javascript:void(0);">上衣</a>
				</dd>
							<dd>
					|__ <a href="javascript:void(0);">裤子</a>

				</dd>
							<dd>
					|__ <a href="javascript:void(0);">衬衫</a>
				</dd>
							<dd>
					|__ <a href="javascript:void(0);">棉袄</a>
				</dd>

								<dt>
				<a href="javascript:void(0);">『帽子』</a>
			</dt>
								<dt>
				<a href="javascript:void(0);">『箱包』</a>
			</dt>
							<dd>
					|__ <a href="javascript:void(0);">女土包包</a>

				</dd>
							<dd>
					|__ <a href="javascript:void(0);">旅行包</a>
				</dd>
								<dt>
				<a href="javascript:void(0);">『鞋子』</a>
			</dt>

							</dl>
	</div>
	<div class="box_bottom"><img src="/estore/Public/Index/images//0.gif" width="10" height="1" alt=""/></div>
</div>		</div>
		<div id="content">
			<div id="showgoods">
				<h4>店主推荐</h4>
				<div class="goodslist"><ul>

					
						<li>
							<a href="javascript:void(0);">
								<img src="/estore/Public/Index/images/goodsimg/200901080154198.jpg" width="125" height="120" />
							</a>
							<span>【包包2】</span>
							<div class="price">￥11</div>
						</li>

					
						<li>
							<a href="javascript:void(0);">
								<img src="/estore/Public/Index/images/goodsimg/200901080150574.jpg" width="125" height="120" />
							</a>
							<span>【包包1】</span>
							<div class="price">￥12</div>
						</li>

					
						<li>
							<a href="javascript:void(0);">
								<img src="/estore/Public/Index/images/goodsimg/2009010802031178.jpg" width="125" height="120" />
							</a>
							<span>【xiezi】</span>
							<div class="price">￥10</div>
						</li>

					</ul>
				</div>
			</div>
			<div id="buylist">
				<h5>☆最新商品<a href="javascript:void(0);">.o0更多</a></h5>
				<div class="newgoods"><ul>
					
							<li>
								<a href="javascript:void(0);">

									<img src="/estore/Public/Index/images/goodsimg/200901080241316.jpg" width="150" height="150" /></a>
								<p>【男士衬衫1】</p>
								<p>市场价格￥<label class="quchu">123</label></p>
								<p class="red">本店价格￥123</p>
							</li>

					
							<li>

								<a href="javascript:void(0);">
									<img src="/estore/Public/Index/images/goodsimg/2009010802085839.jpg" width="150" height="150" /></a>
								<p>【男士衬衫2】</p>
								<p>市场价格￥<label class="quchu">12</label></p>
								<p class="red">本店价格￥12</p>
							</li>

					
							<li>
								<a href="javascript:void(0);">
									<img src="/estore/Public/Index/images/goodsimg/2009010802273936.jpg" width="150" height="150" /></a>
								<p>【白色棉袄】</p>
								<p>市场价格￥<label class="quchu">12</label></p>
								<p class="red">本店价格￥12</p>
							</li>

					
							<li>
								<a href="javascript:void(0);">
									<img src="/estore/Public/Index/images/goodsimg/2009010802215617.jpg" width="150" height="150" /></a>
								<p>【箱子】</p>
								<p>市场价格￥<label class="quchu">123</label></p>
								<p class="red">本店价格￥123</p>

							</li>

					
							<li>
								<a href="javascript:void(0);">
									<img src="/estore/Public/Index/images/goodsimg/2009010802295577.jpg" width="150" height="150" /></a>
								<p>【黑色裤子】</p>
								<p>市场价格￥<label class="quchu">122</label></p>
								<p class="red">本店价格￥112</p>

							</li>

					
							<li>
								<a href="javascript:void(0);">
									<img src="/estore/Public/Index/images/goodsimg/2009010802325617.jpg" width="150" height="150" /></a>
								<p>【裤子】</p>
								<p>市场价格￥<label class="quchu">122</label></p>
								<p class="red">本店价格￥112</p>

							</li>

					</ul>
				</div>
			</div>
		</div>
	</div>

	<div id="footer">
<label>『 Right By Christy Lan 』</label></div>

</div>
</body>
</html>