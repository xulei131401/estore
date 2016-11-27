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
<title>商品修改页面</title>
<script type="text/javascript" src='/estore/Public/Home/js/jquery-1.7.2.min.js'></script>
<script type="text/javascript">
  $(function () {
   $('#a'+<?php echo ($id); ?>).attr('selected','selected');
  });
</script>
</head>
<body>
<form action="<?php echo U('Home/Goods/goodsEditHandle');?>" enctype="multipart/form-data" method="post">
<table class="table table-border table-bordered table-hover table-bg table-sort">
     <tr class="text-c">
        <th width="80">商品ID</th>
        <td><input type="text" name="ID" value="<?php echo ($goods["id"]); ?>" readonly="readonly"/></td>
   	 </tr>
     <tr class="text-c">
        <th width="100">商品名</th>
         <td><input type="text" name="goods_name" value="<?php echo ($goods["goods_name"]); ?>"/></td>
     </tr>
     <tr class="text-c">
        <th width="40">商品进货价格</th>
         <td><input type="text" name="goods_price" value="<?php echo ($goods["goods_price"]); ?>"></td>
     </tr>
      <tr class="text-c">
        <th width="90">原头像</th>
         <td><img src="<?php echo ($goods["goods_pic"]); ?>" alt="原头像" width="125px" height="100px"></td>
     </tr>
     <tr class="text-c">
        <th width="90">新上传头像</th>
         <td><input type="file" name="npic" value="" /></td>
     </tr>
     <tr class="text-c">
        <th width="90">商品分类</th>
        <td><select name="fenlei" id="fenlei">
                  <?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" id="a<?php echo ($vo["id"]); ?>"><?php echo str_repeat('&nbsp;&nbsp;', $vo['level']); if($vo["level"] > 0): ?>|<?php endif; echo ($vo["html"]); echo ($vo["category_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </td>
     </tr>
     <tr class="text-c">
        <th width="150">商品库存</th>
         <td><input type="text" name="count" value="<?php echo ($goods["count"]); ?>" /></td>
     </tr>
     <tr class="text-c">
        <th width="80">商品出售价格</th>
         <td><input type="text" name="store_price" value="<?php echo ($goods["store_price"]); ?>" /></td>
     </tr>
     <tr class="text-c">
        <th width="130">商品描述</th>
        <td><textarea name="description" cols="30" rows="10"><?php echo ($goods["description"]); ?></textarea></td>
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