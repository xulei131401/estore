<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends CommonController {

    //用户列表分页显示
    public function userList(){

    	$user = M('User');
    	$count  = $user->count();// 查询满足要求的总记录数
    	$page   = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数(25)
    	$page -> setConfig('header','共%TOTAL_ROW%条');
		$page -> setConfig('first','首页');
		$page -> setConfig('last','共%TOTAL_PAGE%页');
		$page -> setConfig('prev','上一页');
		$page -> setConfig('next','下一页');
		// $page -> setConfig('link','indexpagenumb');//pagenumb 会替换成页码
		$page -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
    	$show   = $page->show();// 分页显示输出
    	$list = $user->limit($page->firstRow.','.$page->listRows)->select();
    	$this->assign('userList',$list);// 赋值数据集
    	$this->assign('count',$count);// 赋值数据集
    	$this->assign('page',$show);// 赋值分页输出
   		$this->display();
    }

    //显示用户添加页面
    public function userAdd () {
    	$this->display();
    }

    //用户修改页面
    public function userEdit () {
    	if (!IS_GET) {
    		 $this->error('页面不存在');
    	} else {
    		$id = $_GET['id'];
    		$data['id'] = $id;
    		$user = M('user')->where($data)->find();
  			$this->assign('user',$user);
  			$this->display();
    	}
    	
    }

    //处理修改用户信息
    public function userEditHandle () {
         // dump($_POST);
    	  if (!IS_POST) {
            $this->error('页面不存在!');
          } else {
            $data['id'] = I('ID');
            $data['account'] = I('account');
            $data['sex'] = I('sex');
            $data['email'] = I('email');
            $data['birthday'] = I('birthday');
            $data['identity'] = I('identity');
            //处理用户上传头像
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize   =     3145728 ;// 设置附件上传大小
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->subName   =    array('date','Ymd');
            $upload->rootPath   =   './';       //网站跟目录是./
            $upload->savePath  =     'Public/Uploads/'; // 设置附件上传目录    // 上传文件 
            $info   =   $upload->upload();
            if(!$info) {        // 上传错误提示错误信息   
                $this->error($upload->getError());
            }else{              // 上传成功     
                $data['pic'] = __ROOT__."/".$info['nphoto']['savepath'].$info['nphoto']['savename'];
                $user = M('User');
                $result = $user->where("id=%d",$data['id'])->save($data);       
                if (!$result === false) {
                    $this->success('更新成功!',U('Home/User/userList'));
                } else {
                    $this->error('更新失败!');
                }
          }
      }
    }



    //删除用户
    public function userDelete () {
        if (!IS_GET) {
            $this->error('页面不存在!');
        } else {
            $data['id'] = I('id');
            $user = M('User');
            $result = $user->where("id=%d",$data['id'])->delete();
           if (!$result === false) {
                $this->success('删除成功!',U('Home/User/userList'));
           } else {
                $this->error('删除失败!');
           }
        }

    }
   



    //修改用户密码
    public function editPassHandle () {
          if (!IS_POST) {
            $this->error('页面不存在!');
          } else {
            $data['id'] = I('id','','intval');
            $data['password'] = I('password','','md5');
            $repassword = I('repassword','','md5');

            if ($data['password'] !==  $repassword) {
                $this->error('密码输入不一致!');
            } else {
                $user = M('User');
                $result = $user->where("id=%d",$data['id'])->save($data);
                 if (!$result === false) {
                    $this->success('更新密码成功!',U('Home/User/userList'));
                 } else {
                    $this->error('更新密码失败!');
                 }
            }

          }
    }

    //修改用户密码
    public function editPass () {
          if (!IS_GET) {
            $this->error('页面不存在!');
          } else {
            $id = I('id');
            $this->assign('id',$id);
            $this->display();
          }
    }

    //添加用户方法
     public function userAddHandle(){

 		$data['account'] = I('user-name');
    	$data['password'] = I('user-password','','md5');
    	$data['sex'] = I('sex','','intval');
    	$data['birthday'] = I('user-birth');
    	$data['email'] = I('user-email');
    	$data['identity'] = I('user-identity');
    	//处理用户上传头像
    	$upload = new \Think\Upload();// 实例化上传类
    	$upload->maxSize   =     3145728 ;// 设置附件上传大小
    	$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    	$upload->subName   =    array('date','Ymd');
    	$upload->rootPath   =   './';		//网站跟目录是./
    	$upload->savePath  =     'Public/Uploads/'; // 设置附件上传目录    // 上传文件 
    	$info   =   $upload->upload();
    	if(!$info) {		// 上传错误提示错误信息   
    		$this->error($upload->getError());
    	}else{				// 上传成功     
    		$data['pic'] = __ROOT__."/".$info['photo']['savepath'].$info['photo']['savename'];

    		$user = M('User');
    		if ($user->add($data)) {
    			$this->success('添加用户成功!',U('Home/User/userList'));
    		} else {
    			$this->error('用户添加失败! ');
    		}
    	}
   	
    }


   
}