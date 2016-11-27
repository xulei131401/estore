<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="/estore/Public/Index/css/style.css" rel="stylesheet" type="text/css">
<title>我的商店-首页</title>
<script type="text/javascript" src='/estore/Public/Home/js/jquery-1.7.2.min.js'></script>
<script type="text/javascript">
		$(function () {
			$( 'tr[pid!=0]' ).hide();

			$( '.open' ).toggle( function () {
				var index = $( this ).parents('tr').attr('id');
				$( this ).html( '-' );
				$( 'tr[pid=' + index + ']' ).show();
			}, function () {
				var index = $( this ).parents('tr').attr('id');
				$( this ).html( '+' );
				$( 'tr[pid=' + index + ']' ).hide();
			} );

		});
</script>
</head>
<body>
<div id="container">
	<div id="header">
<div id="nav_user">
	<span style="color:yellow">
			<a href="javascript:void(0);">欢迎<?php echo ($_SESSION['account']); ?>登录！</a>
	</span>
	<a href="<?php echo U('Index/User/register');?>">注册</a>
	<a href="<?php echo U('Index/Cart/index');?>">购物车</a>
	<a href="<?php echo U('Index/Order/index');?>">结帐中心</a>
	<a href="javascript:void(0);">用户管理</a>

	<a href="<?php echo U('Home/Login/index');?>">后台管理</a>
	<a href="<?php echo U('Index/Index/logout');?>">注销</a>
</div>	</div>
	<div id="nav">
		<ul>
			<li><span><a href="<?php echo U('Index/Goods/index');?>">首页</a></span></li>
			<li><span><a href="javascript:void(0);">用户中心</a></span></li>

			<li><span><a href="<?php echo U('Home/Login/index');?>">后台管理</a></span></li>
		</ul>
	</div>
	<div id="wrapper">
		<div id="sidebar">
			
<div style="margin-top:10px;"></div>

<div class="category">
	<div class="box_title">商品分类</div>

<table class="table">
		<tr pid='0'>
			<th>展开</th>
			<th>ID</th>
			<th>分类名称</th>
		</tr>
		<?php if(is_array($cate)): foreach($cate as $key=>$v): ?><tr id='<?php echo ($v["id"]); ?>' pid='<?php echo ($v["pid"]); ?>'>
				<td ><button class='open'>+</button></td>
				<td ><?php echo ($v["id"]); ?></td>
				<td><?php echo str_repeat('&nbsp;&nbsp;', $v['level']); if($v["level"] > 0): ?>|<?php endif; ?><a href="<?php echo U('Index/Goods/showByCategory',array('id'=>$v['id']));?>"><?php echo ($v["html"]); echo ($v["category_name"]); ?></a></td>
			</tr><?php endforeach; endif; ?>
</table>




	<div class="box_bottom"><img src="/estore/Public/Index/images//0.gif" width="10" height="1" alt=""/></div>
</div>		</div>
		<div id="content">
			<div id="showgoods">
				<h4>店主推荐</h4>
				<div class="goodslist">
				<ul>
					<?php if(is_array($goods1)): $k = 0; $__LIST__ = array_slice($goods1,0,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><li>
							<a href="<?php echo U('Index/Goods/showById',array('id'=>$vo['id']));?>">
								<img src="<?php echo ($vo["goods_pic"]); ?>" width="125" height="120" />
							</a>
							<span>【<?php echo ($vo["goods_name"]); ?>】</span>
							<div class="price">￥<?php echo ($vo["goods_price"]); ?></div>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
			</div>
			<div id="buylist">
				<h5>☆最新商品<a href="goodsList.php?act=listgoods&cateid=0">.o0更多</a></h5>
				<div class="newgoods"><ul>
						<?php if(is_array($goods)): $k = 0; $__LIST__ = array_slice($goods,0,6,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><li>
								<a href="<?php echo U('Index/Goods/showById',array('id'=>$vo['id']));?>">

									<img src="<?php echo ($vo["goods_pic"]); ?>" width="150" height="150" /></a>
								<p>【<?php echo ($vo["goods_name"]); ?>】</p>
								<p>市场价格￥<label class="quchu"><?php echo ($vo["goods_price"]); ?></label></p>
								<p class="red">本店价格￥<?php echo ($vo["store_price"]); ?></p>
							</li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div id="footer"><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<label>『 Right By Christy Lan 』</label></div>

</div>
</body>
</html>