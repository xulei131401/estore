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
<title>添加商品</title>
</head>
<body>
<div class="pd-20">
  <div class="Huiform">
    <form action="<?php echo U('Home/Goods/goodsAddHandle');?>"  enctype="multipart/form-data" method="post">
      <table class="table table-bg">
        <tbody>
          <tr>
            <th width="100" class="text-r"><span class="c-red">*</span> 商品名：</th>
            <td><input type="text" style="width:200px" class="input-text" value="" placeholder="" id="user-name" name="goods_name" datatype="*2-16" nullmsg="用户名不能为空"></td>
          </tr>
           <tr>
            <th width="100" class="text-r"><span class="c-red">*</span> 商品进货价格 :</th>
            <td><input type="text" style="width:200px" class="input-text"  placeholder=""  name="goods_price"></td>
          </tr>
          <tr>
            <th class="text-r">商品图片：</th>
            <td><input type="file"  name="pic" multiple></td>
          </tr>
          <tr>
              <th class="text-r">商品库存：</th>
              <td><input type="text"  name="count"></td>
          </tr>
          <tr>
            <th class="text-r"><span class="c-red">*</span>商品出售价格：</th>
           <td><input type="text" style="width:200px" class="input-text"   name="store_price"></td>
          </tr>
          <tr>
          <th class="text-r"><span class="c-red">*</span>所属分类：</th>
           <td><select name="fenlei" id="fenlei">
                <option value="--请选择分类--" selected="selected">--请选择分类--</option>
                <?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo str_repeat('&nbsp;&nbsp;', $vo['level']); if($vo["level"] > 0): ?>|<?php endif; echo ($vo["html"]); echo ($vo["category_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
           </td>
          </tr>
          <tr>
            <th class="text-r">商品描述:</th>
            <td><textarea name="description" id="" cols="30" rows="10"></textarea></td>
          </tr>
          <tr>
            <th></th>
            <td><button class="btn btn-success radius" type="submit"><i class="icon-ok"></i>添加</button><button class="btn btn-success radius" type="reset"><i class="icon-ok"></i>重置</button></td>
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