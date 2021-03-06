<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link type="text/css" rel="stylesheet" href="/estore/Public/Home/css/H-ui.css"/>
<link type="text/css" rel="stylesheet" href="/estore/Public/Home/css/H-ui.admin.css"/>
<link type="text/css" rel="stylesheet" href="/estore/Public/Home/font/font-awesome.min.css"/>
<title>添加收货地址</title>
</head>
<body>
<div class="pd-20">
  <div class="Huiform">
    <form action="<?php echo U('Home/Address/addressAddHandle');?>"  enctype="multipart/form-data" method="post">
      <table class="table table-bg">
        <tbody>
          <tr>
            <th width="100" class="text-r"><span class="c-red">*</span> 收货地址名称：</th>
            <td><input type="text" style="width:200px" class="input-text" value="" placeholder="" id="user-name" name="address_name" datatype="*2-16" nullmsg="地址名称不能为空"></td>
          </tr>
           <tr>
            <th width="100" class="text-r"><span class="c-red">*</span> 收货地址邮箱 :</th>
            <td><input type="text" style="width:200px" class="input-text" value="" placeholder="例如:373045134@qq.com" id="address_email" name="address_email" datatype="*2-16" nullmsg="邮箱不能为空"></td>
          </tr>
          <tr>
            <th class="text-r"><span class="c-red">*</span>收货地址电话:</th>
            <td><input type="text" style="width:300px" class="input-text" value="" placeholder="例如:183xxxxxxxx" id="address-tel" name="address_tel"></td>
          </tr>
          <tr>
            <th class="text-r">收货人的姓名:</th>
            <td><input type="text" style="width:300px" class="input-text" value="" placeholder="" id="user_name" name="user_name"></td>
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