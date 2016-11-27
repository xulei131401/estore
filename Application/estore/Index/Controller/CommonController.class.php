<?php
namespace Index\Controller;
use Think\Controller;

class CommonController extends Controller {

		//登录权限设置
	    public function _initialize(){
	    	//若没有登录强制定向到登录页面
	    	if (!isset($_SESSION['account']) && !isset($_SESSION['user_id'])) {
	    		$this->redirect('Index/Index','',2, '登录失效,页面跳转中...');
	    		// redirect(U('Index/Index/index'),2,'页面跳转中...');
	    	}

	    }



}