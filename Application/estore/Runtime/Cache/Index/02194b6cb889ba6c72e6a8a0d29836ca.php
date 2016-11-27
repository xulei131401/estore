<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="/estore/Public/Index/css/style.css" rel="stylesheet" type="text/css">
<title>当前订单信息页面</title>
</head>
<body>
	<div id="container">
		<div id="header">
<div id="nav_user">
	<span style="color:yellow">
	<a href="javascript:void(0);">你好<?php echo ($_SESSION['account']); ?>！</a>
		</span>
	<a href="<?php echo U('Index/User/register');?>">注册</a>
	<a href="<?php echo U('Index/Cart/index');?>">购物车</a>
	<a href="<?php echo U('Index/Order/index');?>">结帐中心</a>
	<a href="javascript:void(0);">用户管理</a>

	<a href="<?php echo U('Home/Login/index');?>">后台管理</a>
	<a href="<?php echo U('Index/Index/logout');?>">注销</a>
</div>		</div>
		<div id="nav">
			<ul>
				<li><span><a href="<?php echo U('Index/Goods/index');?>">首页</a></span></li>
				<li><span><a href="javascript:void(0);">用户中心</a></span></li>
				<li><span><a href="<?php echo U('Home/Login/index');?>">后台管理</a></span></li>
			</ul>
		</div>
		<div id="wrapper">
			<div id="contentCenter">
				<div id="register">
					<div class="reg_title">当前购物订单信息显示</div>
					<div class="reg_body">
					<table id="buylist" border="0" cellpadding="0" cellspacing="3">
						<tr>
							<th scope="col">订单编号</th>
							<th scope="col">商品名称</th>
							<th scope="col">商品图片</th>
							<th scope="col">商品售价</th>
							<th scope="col">市场价格</th>
							<th scope="col">购买数量</th>
							<th scope="col">商品数量</th>
							<th scope="col">订单总金额</th>
						</tr>
						<?php if(is_array($data)): $k = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><tr>
										<td><?php echo ($vo['order_id']); ?></td>
										<td>【<?php echo ($vo['goods_name']); ?>】</td>
										<td><img src="<?php echo ($vo['goods_pic']); ?>" width="50" height="50"></td>
										<td>￥<?php echo ($vo['store_price']); ?></td>
										<td>￥<?php echo ($vo['goods_price']); ?></td>
										<td><?php echo ($vo['num']); ?>件</td>
										<td><?php echo ($vo['count']); ?>件</td>
										<td>￥<?php echo ($vo['total']); ?></td>
										<!-- <td><a href="<?php echo U('Index/Cart/deleteCart',array('id'=>$vo['goods_id']));?>">删除</a></td> -->
									</tr><?php endforeach; endif; else: echo "" ;endif; ?>		
					</table>
					<table border="0">
						<tr>
							<td>购物总金额：￥<?php echo ($total); ?>元</td>
							<!-- <td align="right">
								<span><input type="button" value="修改" onclick='javascript:window.location.href="cart.php?act=show"' class="modifyBtn"/></span>
							</td> -->
						</tr>
					</table>
					<div id="orderuser">
						<h4>订单人的信息</h4>
					   <ul>
					        <li>收货人姓名:<label><?php echo ($address['user_name']); ?></label></li>
					        <li>收货人地址:<label><?php echo ($address['address']); ?></label></li>
					        <li>收货人电话:<label><?php echo ($address['tel']); ?></label></li>
					        <li>收货人邮箱:<label><?php echo ($address['email']); ?></label></li>
					    </ul>
						<div class="clear"></div>
					</div>
					<!-- <form action="order.php" method="post">
						<input type="submit" value="提交订单" class="orderBtn">
						<input type="hidden" name="act" value="submitOrder">
						<input type="hidden" name="oid" value="32">
					</form> -->
					</div>
				</div>
			</div>
		</div>
		<div id="footer">
<label>『 Right By Christy Lan 』</label></div>
	</div>
</body>
</html>