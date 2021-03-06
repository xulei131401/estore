<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
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
<title>订单列表</title>
</head>
<body>
<nav class="Hui-breadcrumb"><i class="icon-home"></i> 首页 <span class="c-gray en">&gt;</span> 用户中心 <span class="c-gray en">&gt;</span> 用户管理 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="icon-refresh"></i></a></nav>
<div class="pd-20">
  
  <div class="cl pd-5 bg-1 bk-gray mt-20">
    <span class="r">共有数据：<strong><?php echo ($count); ?></strong> 条</span>
  </div>
  <table class="table table-border table-bordered table-hover table-bg table-sort">
    <thead>
      <tr class="text-c">
        <th width="80">订单编号</th>
        <th width="100">商品名</th>
        <th width="40">商品单价</th>
        <th width="150">订单总金额</th>
        <th width="80">商品数量</th>
        <th width="130">下单时间</th>
        <th width="70">状态</th>
        <th width="100">操作</th>
      </tr>
    </thead>
    <tbody>
    <?php if(is_array($order)): foreach($order as $k=>$v): ?><tr class="text-c">
        <td><?php echo ($v["order_id"]); ?></td>
        <td><u style="cursor:pointer" class="text-primary"><?php echo ($v["goods_name"]); ?></u></td>
        <td><?php echo ($v["store_price"]); ?></td>
        <td class="text-l"><?php echo ($v["total"]); ?></td>
        <td><?php echo ($v["num"]); ?></td>
        <td><?php echo ($v["order_time"]); ?></td>
        <td class="user-status"><span class="label label-success">正常</span></td>
        <td class="f-14 user-manage"><a title="删除该订单" href="<?php echo U('Home/Order/delete',array('id'=>$v['order_id']));?>"  class="ml-5" style="text-decoration:none"><i class="icon-trash"></i></a></td>
      </tr><?php endforeach; endif; ?>
    </tbody>
  </table>
  <div class="pagination" align="center">
　　<?php echo ($page); ?>
  </div>
  <div id="pageNav" class="pageNav"></div>
</div>
<script type="text/javascript" src="/estore/Public/Home/js/jquery.min.js"></script>
<script type="text/javascript" src="/estore/Public/Home/layer/layer.min.js"></script>
<script type="text/javascript" src="/estore/Public/Home/js/pagenav.cn.js"></script>
<script type="text/javascript" src="/estore/Public/Home/js/H-ui.js"></script>
<script type="text/javascript" src="/estore/Public/Home/plugin/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="/estore/Public/Home/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/estore/Public/Home/js/H-ui.admin.js"></script>
<!-- <script type="text/javascript">
window.onload = (function(){
    // optional set
    pageNav.pre="&lt;上一页";
    pageNav.next="下一页&gt;";
    // p,当前页码,pn,总页面
    pageNav.fn = function(p,pn){$("#pageinfo").text("当前页:"+p+" 总页: "+pn);};
    //重写分页状态,跳到第三页,总页33页
    pageNav.go(1,13);
});
$('.table-sort').dataTable({
	"lengthMenu":false,//显示数量选择 
	"bFilter": false,//过滤功能
	"bPaginate": false,//翻页信息
	"bInfo": false,//数量信息
	"aaSorting": [[ 1, "desc" ]],//默认第几个排序
	"bStateSave": true,//状态保存
	"aoColumnDefs": [
	  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
	  {"orderable":false,"aTargets":[0,8,9]}// 制定列不参与排序
	]
});
</script> -->

</body>
</html>