<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh_CN">
<head>
	
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link type="text/css" rel="stylesheet" href="/estore/Public/Home/css/H-ui.css"/>
<link type="text/css" rel="stylesheet" href="/estore/Public/Home/css/H-ui.admin.css"/>
<link type="text/css" rel="stylesheet" href="/estore/Public/Home/font/font-awesome.min.css"/>
<title>用户编辑页面</title>
</head>
<body>
<form action="<?php echo U('Home/User/userEditHandle');?>" enctype="multipart/form-data" method="post">
<table class="table table-border table-bordered table-hover table-bg table-sort">
     <tr class="text-c">
        <th width="80">ID</th>
        <td><input type="text" name="ID" value="<?php echo ($user["id"]); ?>" readonly="readonly"/></td>
   	 </tr>
     <tr class="text-c">
        <th width="100">用户名</th>
         <td><input type="text" name="account" value="<?php echo ($user["account"]); ?>" /></td>
     </tr>
     <tr class="text-c">
        <th width="40">性别</th>
         <td>
         	<?php if($user["sex"] == 0): ?><input type="radio" name="sex" value="0" checked/>男<input type="radio" name="sex" value="1" />女
			<?php else: ?>
				<input type="radio" name="sex" value="0" />男<input type="radio" name="sex" value="1" checked />女<?php endif; ?>
         </td>
     </tr>
      <tr class="text-c">
        <th width="90">原头像</th>
         <td><img src="<?php echo ($user["pic"]); ?>" alt="原头像"></td>
     </tr>
     <tr class="text-c">
        <th width="90">新上传头像</th>
         <td><input type="file" name="nphoto" value="" /></td>
     </tr>
     <tr class="text-c">
        <th width="150">邮箱</th>
         <td><input type="text" name="email" value="<?php echo ($user["email"]); ?>" /></td>
     </tr>
     <tr class="text-c">
        <th width="80">生日</th>
         <td><input type="text" name="birthday" value="<?php echo ($user["birthday"]); ?>" /></td>
     </tr>
     <tr class="text-c">
        <th width="130">身份证</th>
        <td><input type="text" name="identity" value="<?php echo ($user["identity"]); ?>" /></td>
     </tr>
     <tr class="text-c">
        <th colspan="2"><input type="submit"  value="修改" /><input type="reset"   value="重置" /></th>
     </tr>
</table>
</form>
















<script type="text/javascript" src="/estore/Public/Home/js/jquery.min.js"></script>
<script type="text/javascript" src="/estore/Public/Home/layer/layer.min.js"></script>
<script type="text/javascript" src="/estore/Public/Home/js/pagenav.cn.js"></script>
<script type="text/javascript" src="/estore/Public/Home/js/H-ui.js"></script>
<script type="text/javascript" src="/estore/Public/Home/plugin/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="/estore/Public/Home/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/estore/Public/Home/js/H-ui.admin.js"></script>	
</body>
</html>