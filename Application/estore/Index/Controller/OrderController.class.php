<?php
namespace Index\Controller;
use Think\Controller;
class OrderController extends CommonController {

	//订单列表显示
    public function index(){
    	$order = M('Order_detail');
    	$user_id = $_SESSION['user_id'];
    	$result = $order->join('goods ON order_detail.goods_id = goods.id')->where("user_id=%d",array($user_id))->select();
        $address = R('Address/index');
        $this->assign('address',$address);
        // dump($result);
    	$this->assign('order',$result);
   		$this->display();
    }

    //添加订单
    public function addOrder () {
    	if (!IS_GET) {
    		$this->error('页面不存在');
    	} else {
    		$cart = M('Cart');
	    	$result = $cart->select();		//查询购物车数据
	    	$stack = array();

    		foreach ($result as $key => $value) {
    			array_push($stack, $value['goods_id']);
	    		$data['order_id'] = time();
		    	$data['goods_id'] = $value['goods_id'];
		    	$data['goods_name'] = $value['goods_name'];
		    	$data['num'] = $value['num'];
		    	$data['store_price'] = $value['store_price'];
		    	$data['order_time'] = date('Y-m-d H:i:s',time());
		    	$data['total'] = I('total','','intval');
		    	$data['user_id'] = $_SESSION['user_id'];
		    	$data1[] = $data;
    		}

    		$order_data['order_id'] = $data['order_id'];
    		$order_data['user_id'] = $_SESSION['user_id'];
            $order_data['order_time'] = $data['order_time'];
    		$order_data['total'] = I('total','','intval');

    		//将数据插入订单表和订单详情表中
    		$order_detail = M('Order_detail');
    		$order = M('Order');

    		$res = $order->data($order_data)->add();
    		$res1 = $order_detail->addAll($data1);

    		if ($res == true && $res1 == true) {
    			//当下单成功时,将购物车相应数据清空
    			$var['goods_id'] = array('IN',$stack);
    			$del = $cart->where($var)->delete();

    			if ($del) {
 					$this->success ('下单成功!',U('Index/Order/showById',array('id'=>$data['order_id'])));
    			} else {
    				$this->error('购物车删除数据失败!');
    			}

    		} else {
    				$this->error('下单失败!');
    		}

    	}
    	
    }


    //根据订单ID显示订单信息
    public function showById () {
    	$data['order_id'] = I('id');
    	$order = M('Order_detail');
    	$result = $order->join('goods ON order_detail.goods_id = goods.id')->where("order_id = %d AND user_id = %d",array($data['order_id'],$_SESSION['user_id']))->select();
        // dump($result);
        $total = "";
        foreach ($result as $key => $value) {
            $total=$value['total'];
        }
        $address = R('Address/index');
        $this->assign('address',$address);
        $this->assign('data',$result);
    	$this->assign('total',$total);
    	$this->display();
    }

    
}