<?php
namespace Index\Controller;
use Think\Controller;
class CartController extends CommonController {

	//购物车列表显示
    public function index(){
    	$cart = M('Cart');
    	$result = $cart->select();
        $total = "";            //总金额
        // dump($result);
        foreach ($result as $key => $value) {
            $total +=$value['amount'];
        }
        $this->assign('data',$result);
    	$this->assign('total',$total);
   		$this->display();
    }

    //添加购物车
    public function addCart () {
        if (IS_GET) {
        	$cart = M('Cart');
        	$goods = M('Goods');
        	$good['id'] = I('id','','intval');
        	$result = $goods->where($good)->find();
        	// dump($result);
            /*准备要插入的数据*/ 
        	$data['goods_id'] = $result['id'];
        	$data['goods_name'] = $result['goods_name'];
        	$data['goods_price'] = $result['goods_price'];
        	$data['goods_pic'] = $result['goods_pic'];
        	$data['store_price'] = $result['store_price'];
        	$data['count'] = $result['count'];
        	$data['num'] = 1;
        	$data['amount'] = $result['store_price']*1;
        	$data['user_id'] = $_SESSION['user_id'];
            /*先判断购物车中是否有该商品*/
            $result1 = $cart->where("goods_id=%d AND user_id = %d",array($good['id'],$_SESSION['user_id']))->find();

            if ($result1) {     //若购物车中有该商品,则进行更新操作
                $result1['num'] =$result1['num']+1;
                $result1['amount'] = $result['store_price']*1+$result1['amount'];

                $data1['num'] = $result1['num'];
                $data1['amount'] = $result1['amount'];

                $result2 =  $cart->where("goods_id=%d",array($good['id']))->save($data1);
                if ($result2) {
                        $this->success('添加购物车成功!',U('Index/Cart/index'));
                    } else {
                        $this->error('添加购物车失败!');
                    }
            } else {    //否则则进行插入操作

                  $result3 =  $cart->data($data)->add();
                    if ($result3) {
                        $this->success('添加购物车成功!',U('Index/Cart/index'));
                    } else {
                        $this->error('添加购物车失败!');
                    }
           
            }
            
    	
        }
    }

    //删除购物车中的商品
    public function deleteCart () {
       if (IS_GET) {
        $good_id = I('id','','intval');
        $cart = M('Cart');
        $delete = $cart->where("goods_id=%d AND user_id=%d",array($good_id,$_SESSION['user_id']))->delete();
        if ($delete) {
            $this->display(U('Index/Cart/index'));
        } else {
            $this->error('删除购物车商品失败!');
        }
       } else {
            $this->error ('页面不存在!');
       }
    }



    
}