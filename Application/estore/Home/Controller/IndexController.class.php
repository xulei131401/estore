<?php
namespace Home\Controller;
use Think\Controller;
use Home\Controller\CommonController;

class IndexController extends CommonController {
	//后台首页展示
    public function index(){
   	 $this->display();
    }

    //显示欢迎页面
    public function welcome(){
   	 $this->display();
    }
      
   /**
    * 退出登录的方法
    * [logout description]
    * @return [type] [description]
    */
   public function logout(){
      $account = empty($_SESSION['account'])?"":$_SESSION['account'];

        if ($account) {     //若已经登陆
          session_unset();
          session_destroy();
          $this->success('注销成功!',U('Home/Login/index'));
        } else {

         $this->success('您还没有登陆!',U('Home/Login/index'));
        }
     	
   }







}