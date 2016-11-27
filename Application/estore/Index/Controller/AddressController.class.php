<?php
namespace Index\Controller;
use Think\Controller;

class AddressController extends Controller {

	//根据用户ID查询收货地址
	public function index () {
		$user_id = $_SESSION['user_id'];
		// echo $user_id;
		$address = M('User_address');
		// $result = $address->where('user_id=%d',array($user_id))->select();
		$result = $address->where('user_id=%d',array($user_id))->find();
		// dump($result);
		return $result;
	}
}