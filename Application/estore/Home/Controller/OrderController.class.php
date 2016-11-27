<?php
namespace Home\Controller;
use Think\Controller;
class OrderController extends CommonController {
	//后台订单详情列表显示
    public function index(){
   		$order = M('Order_detail');
    	$result = $order->select();
    	$this->assign('order',$result);
    	$this->display();
    }
    
    //根据订单编号删除订单
    public function delete () {
    	if (IS_GET) {
    		$id = I('id','','intval');
    		$order = M('Order_detail');
    		$data['order_id'] = $id;
    		$result = $order->where($data)->delete();
    		if ($result) {
    			$this->success('删除订单成功',U('Home/Order/index'));
    		} else {
    			$this->error('删除订单失败!');
    		}
    	} else {
    		$this->error('页面不存在');
    	}
    }



    
}