<?php
namespace Home\Controller;
use Think\Controller;

class AddressController extends CommonController {

	//后台查询收货地址
	public function index () {
		$address = M('User_address');
		$result = $address->select();
		$this->assign('address',$result);
		// dump($result);
		$this->display();
	}

	 //根据订单编号删除订单
    public function delete () {
    	if (IS_GET) {
    		$id = I('id','','intval');
    		$address = M('User_address');
    		$data['id'] = $id;
    		$result = $address->where($data)->delete();
    		if ($result) {
    			$this->success('删除地址成功',U('Home/Address/index'));
    		} else {
    			$this->error('删除地址失败!');
    		}
    	} else {
    		$this->error('页面不存在');
    	}
    }



    //添加收货地址方法
     public function addressAddHandle(){

        $data['address'] = I('address_name');
        $data['email'] = I('address_email');
        $data['tel'] = I('address_tel');
        $data['user_name'] = I('user_name');
        
        $user = M('User');
        $data1['account'] = $data['user_name'];
        $result = $user->where($data1)->find();
        if ($result) {
            $data['user_id'] = $result['id'];
            $address = M('User_address');
            $result1 = $address->add($data);
            if ($result1) {
                $this->success('添加收货地址成功!',U('Home/Address/addAddress'));
            } else {
                $this->error('添加收货地址失败!');
            }

        } else {
            $this->error('不能添加此收货人姓名!');
        }
        
    
    }



    //收货地址添加页面显示
    public function addAddress () {
        $this->display('addressAdd');
    }


     //修改收货地址页面显示
    public function editAddress () {
          if (!IS_GET) {
            $this->error('页面不存在!');
          } else {
            $data['id'] = I('id');
            $address =  M('User_address');
            $result = $address->where($data)->find();
            $this->assign('id',$data['id']);
            $this->assign('address',$result);
            $this->display('addressEdit');
          }
    }

    //修改地址数据
    public function addressEditHandle () {

        if (IS_POST) {

            $data['address'] = I('address_name');
            $data['email'] = I('address_email');
            $data['tel'] = I('address_tel');
            $data['id'] = I('id','','intval');
            $address =  M('User_address');
            $result = $address->where("id=%d",$data['id'])->save($data);
            if ($result) {
                $this->success ('更新地址成功!',U('Home/Address/index'));
            } else {
                $this->error('更新地址失败!');  
            }

        } else {
            $this->error('页面出错!');
        }

    }
    

   

}