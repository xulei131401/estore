<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="/estore/Public/Index/css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/estore/Public/Index/js/register.js"></script>
<script type="text/javascript" src="/estore/Public/Index/js/checkpwd.js"></script>
<script type="text/javascript" src="/estore/Public/Index/js/utils.js"></script>
<script type="text/javascript" src="/estore/Public/Index/js/validator.js"></script>
<script type="text/javascript">
	var url = "/estore/Public/Index/";		//头像的路径
</script>
<title>注册</title>
</head>
<body>

	<div id="container">
		<div id="header">
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<div id="nav_user">
	<span style="color:yellow">
		<a href="login.php">你还没登录！</a>
		</span>
	<a href="register.php">注册</a>

	<a href="cart.php?act=show">购物车</a>
	<a href="#">结帐中心</a>
	<a href="#">用户管理</a>

	<a href="admin/login.php?act=login">后台管理</a>
	<a href="logout.php">注销</a>
</div>		</div>

		<div id="nav">
			<ul>
				<li><span><a href="index.php">首页</a></span></li>
				<li><span><a href="">用户中心</a></span></li>
				<li><span><a href="">后台管理</a></span></li>
			</ul>
		</div>

		<div id="wrapper">
			<div id="contentCenter">
				<div id="register">
					<div class="reg_title">注&nbsp;&nbsp;&nbsp;&nbsp;册</div>
					<div class="reg_body">
						<!-- 表单名user_register在register.js的换头像中需要用到 -->
						<form name="user_register" method="post" action="<?php echo U('Index/User/registerHandle');?>" onsubmit="return Validator.checkSubmit(this)">
							<div class="fm_item">

								<label>* 账号：</label>
								<input type="text" name="username" mode="require" id="username">
								<label id="ckusername" class="forminfo">请输入你的账号</label>
							</div>
							<div class="fm_item">
								<label>* 密码：</label>
								<input type="password" name="userpwd" mode="require" id="userpwd" onchange="javascript:EvalPwd(this.value);" onkeyup="javascript:EvalPwd(this.value);" size="25">

								<label id="ckuserpwd" class="forminfo">请输入你的密码</label>
							</div>
							<div class="fm_item">
								<label>&nbsp;</label>
								<table cellpadding="0" cellspacing="0" border="0" id="pwdpower">
									<tr>
										<td id="pweak" style="">弱</td>
										<td id="pmedium" style="">中</td>

										<td id="pstrong" style="">强</td>
									</tr>
								</table>
							</div>
							<div class="fm_item">
								<label>* 密码确认：</label>
								<input type="password" name="userrepwd" id="userrepwd">
								<label class="forminfo">2次密码不一致</label>

							</div>
							<div class="fm_item">
								<label>* 性别：</label>
								<select name="sex">
									<option value="0" selected>男</option>
									<option value="1">女</option>
								</select>

							</div>
							<div class="fm_item">
								<label>* 头像：</label>
								<select size="1" name="selectpics" onchange="chgpic()">
					             	<option value='t1' selected>默认</option>
					             	<option value='t2'>头像一</option>
					             	<option value='t3'>头像二</option>

					             	<option value='t4'>头像三</option>
					             	<option value='t5'>头像四</option>
					             	<option value='t6'>头像五</option>
					             	<option value='t7'>头像六</option>
					             	<option value='t8'>头像七</option>
					             	<option value='t9'>头像八</option>

					             	<option value='t10'>头像九</option>
					             	<option value='t11'>头像十</option>
				             	</select>
				           		<img src="/estore/Public/Index/images/t1.jpg" name="userimg" class="r_pt">
							</div>
							<div class="fm_item">
								<label>生日：</label>

								<input type="text" name="birthday" placeholder="例如:1996-06-13">
							</div>
							<div class="fm_item">
								<label>邮件：</label>
								<input type="text" name="email" placeholder="例如:373045134@qq.com">
							</div>
							<div class="fm_item">
								<label>身份证：</label>

								<input type="text" name="idcard" placeholder="例如:14xxxxxxx52xx">
							</div>
							<div class="fm_btn">
								<input type="submit" value="注册" class="btn">
								<input type="reset" value="重填" class="btn">
							</div>
							<input type="hidden" value="adduser" name="act">
						</form>
					</div>

				</div>

			</div>
		</div>
		<div id="footer"><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<label>『 Right By Christy Lan 』</label></div>
	</div>
</body>
</html>