<?php
namespace Index\Controller;
use Think\Controller;
use Index\Controller\CommonController;

class IndexController extends Controller {
	//登陆页面显示
    public function index(){
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
          $this->success('注销成功!',U('Index/Index/index'));
        } else {

         $this->success('您还没有登陆!',U('Index/Index/index'));
        }
     	
   }













}