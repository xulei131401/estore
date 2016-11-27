<?php
namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller {
	//显示登录页面
    public function index(){
   	 	$this->display();
    }

    //显示欢迎页面
    public function welcome(){
   	 $this->display();
    }
    

      //判断登录
	    public function isLogin () {

	    	$account = I('username');
	    	$password = I('password','','md5');
	    	$checkCode = I('checkCode');
	    	//模型类
	    	$user = M('User');
	    	$where['account'] = ':account';
	    	$where['password'] = ':password';
	    	$bind[':account'] =   array($account, \PDO::PARAM_STR);
	    	$bind[':password'] =   array($password, \PDO::PARAM_STR);
	    	//dump($_SESSION);
	    	//绑定参数
	    	$result = $user->where($where)->bind($bind)->find();
	    	
	    	if ($this->check_verify($checkCode)) {

			    	if ($result) {
			    		$_SESSION['account'] = $result['account'];
			    		$_SESSION['user_id'] = $result['id'];

			    		$this->success('登录成功',U('Home/Index/index'));
			    	} else {
			    		$this->error('账号密码输入错误!重新登录!');
			    	}

	    	} else {

	    		$this->error('验证码错误,重新登录!');
	    	}

	    }



	     //生成验证码
	    public function verify () {
	    	$config = array(
		    	// 验证码字体大小
		    	'fontSize'    =>    15,
		    	//验证码位数
		    	'length'      =>    1,
		    	 // 关闭验证码杂点
		    	'useNoise'    =>    false,
		    	//是否使用背景图片 默认为false
		    	'useImgBg'    => false,
		    	//验证码宽度 设置为0为自动计算
		    	'imageW'      => 80,
		    	//验证码高度 设置为0为自动计算
				'imageH'     => 25,
				'reset'		=> false,

	    	);

	    	$Verify = new \Think\Verify($config);

	    	$Verify->entry();
	    }

	    //验证验证码是否正确
	    public  function check_verify($code, $id = ''){
	    	$verify = new \Think\Verify();  
	    	return $verify->check($code, $id);
	    }


}