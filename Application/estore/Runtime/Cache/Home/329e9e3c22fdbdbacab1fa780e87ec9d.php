<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<script type="text/javascript" src="js/respond.min.js"></script>
<script type="text/javascript" src="js/PIE_IE678.js"></script>
<![endif]-->
<link type="text/css" rel="stylesheet" href="/estore/Public/Home/css/H-ui.css"/>
<link type="text/css" rel="stylesheet" href="/estore/Public/Home/css/H-ui.admin.css"/>
<link type="text/css" rel="stylesheet" href="/estore/Public/Home/font/font-awesome.min.css"/>
<!--[if IE 7]>
<link href="font/font-awesome-ie7.min.css" rel="stylesheet" type="text/css" />
<![endif]-->
<title>添加用户</title>
</head>
<body>
<div class="pd-20">
  <div class="Huiform">
    <form action="<?php echo U('Home/User/userAddHandle');?>"  enctype="multipart/form-data" method="post">
      <table class="table table-bg">
        <tbody>
          <tr>
            <th width="100" class="text-r"><span class="c-red">*</span> 用户名：</th>
            <td><input type="text" style="width:200px" class="input-text" value="" placeholder="" id="user-name" name="user-name" datatype="*2-16" nullmsg="用户名不能为空"></td>
          </tr>
           <tr>
            <th width="100" class="text-r"><span class="c-red">*</span> 密码 :</th>
            <td><input type="password" style="width:200px" class="input-text" value="" placeholder="" id="password" name="user-password" datatype="*2-16" nullmsg="密码不能为空"></td>
          </tr>
          <tr>
            <th class="text-r"><span class="c-red">*</span> 性别：</th>
            <td><label>
                <input name="sex" type="radio" id="six_0" value="0" checked>
                男</label>
              <label>
                <input type="radio" name="sex" value="1" id="six_1">
                女</label></td>
          </tr>
          <tr>
            <th class="text-r"><span class="c-red">*</span> 生日：</th>
            <td><input type="text" style="width:300px" class="input-text" value="" placeholder="例如:1996-06-13" id="user-tel" name="user-birth"></td>
          </tr>
          <tr>
            <th class="text-r">邮箱：</th>
            <td><input type="text" style="width:300px" class="input-text" value="" placeholder="例如:373045134@qq.com" id="user-email" name="user-email"></td>
          </tr>
          <tr>
            <th class="text-r">头像：</th>
            <td><input type="file" class="" name="photo" multiple></td>
          </tr>
          <tr>
            <th class="text-r">身份证：</th>
            <td><input type="text" style="width:300px" class="input-text" value="" placeholder="" id="user-address" name="user-identity"></td>
          </tr>
          <tr>
            <th></th>
            <td><button class="btn btn-success radius" type="submit"><i class="icon-ok"></i> 确定</button></td>
          </tr>
        </tbody>
      </table>
    </form>
  </div>
</div>
<script type="text/javascript" src="/estore/Public/Home/js/jquery.min.js"></script>
<script type="text/javascript" src="/estore/Public/Home/js/Validform_v5.3.2_min.js"></script> 
<script type="text/javascript" src="/estore/Public/Home/js/H-ui.js"></script> 
<script type="text/javascript" src="/estore/Public/Home/js/H-ui.admin.js"></script> 
<script type="text/javascript">
$(".Huiform").Validform(); 
</script>

</body>
</html>