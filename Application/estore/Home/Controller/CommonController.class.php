<?php
namespace Home\Controller;
use Think\Controller;

class CommonController extends Controller {

		//登录权限设置
	    public function _initialize(){
	    	//若没有登录强制定向到登录页面
	    	if (!isset($_SESSION['account']) && !isset($_SESSION['user_id'])) {
	    		// $this->redirect('Home/Login/index','',2, '登录失效,页面跳转中...');
	    		// redirect(U('Home/Login/index'),2,'页面跳转中...');
	    		echo "<script>alert('登录失效!请重新登录!');window.parent.location.href='".__APP__."/Home/Login/index';</script>";
	    	}

	    }


	    //错误跳转页面
	    public function error(){
	    	$this->display();
	    }



}