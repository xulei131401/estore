<?php
namespace Home\Controller;
use Think\Controller;
class GoodsController extends CommonController {

    //显示商品添加页面
    public function goodsAdd () {
        $cate1 = M('Category')->select();
        $cate = recursive($cate1);
        // dump($cate);
        $this->assign('cate',$cate);
        $this->display();
    }

   //商品列表分页显示
    public function goodsList(){

        $goods = M('Goods');
        $count  = $goods->count();// 查询满足要求的总记录数
        $page   = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $page -> setConfig('header','共%TOTAL_ROW%条');
        $page -> setConfig('first','首页');
        $page -> setConfig('last','共%TOTAL_PAGE%页');
        $page -> setConfig('prev','上一页');
        $page -> setConfig('next','下一页');
        // $page -> setConfig('link','indexpagenumb');//pagenumb 会替换成页码
        $page -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $show   = $page->show();// 分页显示输出
        $list = $goods->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('goodsList',$list);// 赋值数据集
        $this->assign('count',$count);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }

    //添加商品方法
     public function goodsAddHandle(){
        $data['regtime'] = date('Y-m-d H:i:s',time());
        $data['goods_name'] = I('goods_name');
        $data['goods_price'] = I('goods_price','','intval');
        $data['count'] = I('count','','intval');
        $data['store_price'] = I('store_price','','intval');
        $data['description'] = I('description');
        $data['category_id'] = I('fenlei','','intval');
        //处理用户上传头像
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->subName   =    array('date','Ymd');
        $upload->rootPath   =   './';       //网站跟目录是./
        $upload->savePath  =     'Public/Uploads/Goods/'; // 设置附件上传目录    // 上传文件 
        $info   =   $upload->upload();
        if(!$info) {        // 上传错误提示错误信息   
            $this->error($upload->getError());
        }else{              // 上传成功     
            $data['goods_pic'] = __ROOT__."/".$info['pic']['savepath'].$info['pic']['savename'];
            $goods = M('Goods');
            if ($goods->add($data)) {
                $this->success('添加商品成功!',U('Home/Goods/goodsList'));
            } else {
                $this->error('添加商品失败! ');
            }
        }
    
    }


     //删除商品
    public function goodsDelete () {
        if (!IS_GET) {
            $this->error('页面不存在!');
        } else {
            $data['id'] = I('id','','intval');
            $goods = M('Goods');
            $result = $goods->where("id=%d",$data['id'])->delete();
           if (!$result === false) {
                $this->success('商品删除成功!',U('Home/Goods/goodsList'));
           } else {
                $this->error('商品删除失败!');
           }
        }

    }

       //商品修改页面
    public function goodsEdit () {
        if (!IS_GET) {
             $this->error('页面不存在');
        } else {
            $id = $_GET['id'];
            $data['id'] = $id;
            $goods = M('Goods')->where($data)->find();
            // dump($goods);
            $cate = M('Category')->select();
            $cate1 = recursive($cate);
            // dump($cate);
            $id = "";
            //判断当前商品是否被选中
            foreach ($cate1 as $key => $value) {
              if ($goods['category_id'] == $value['id']) {
                $id = $value['id'];
              }
            }

            $this->assign('cate',$cate1);
            $this->assign('id',$id);
            $this->assign('goods',$goods);
            $this->display();
        }
        
    }


    //处理修改商品信息
    public function goodsEditHandle () {
          if (!IS_POST) {
            $this->error('页面不存在!');
          } else {
            $data['regtime'] = date('Y-m-d H:i:s',time());
            $data['id'] = I('ID');
            $data['goods_name'] = I('goods_name');
            $data['goods_price'] = I('goods_price');
            $data['count'] = I('count');
            $data['store_price'] = I('store_price');
            $data['description'] = I('description');
            $data['category_id'] = I('fenlei','','intval');
            // dump($data);
            

            //处理用户上传头像
	    	$upload = new \Think\Upload();// 实例化上传类
	    	$upload->maxSize   =     3145728 ;// 设置附件上传大小
	    	$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
	    	$upload->subName   =    array('date','Ymd');
	    	$upload->rootPath   =   './';		//网站跟目录是./
	    	$upload->savePath  =     'Public/Uploads/'; // 设置附件上传目录    // 上传文件 
	    	$info   =   $upload->upload();
		    	if(!$info) {		//若没有上传头像  
                    $goods = M('Goods');
                    $result = $goods->where("id=%d",$data['id'])->save($data);       
                    if (!$result === false) {
                        $this->success('商品信息更新成功!',U('Home/Goods/goodsList'));
                    } else {
                        $this->error('商品信息更新失败!');
                    }
		    		//$this->error($upload->getError());
		    	}else{				// 上传成功     
			    	$data['goods_pic'] = __ROOT__."/".$info['npic']['savepath'].$info['npic']['savename'];
		            $goods = M('Goods');
		            $result = $goods->where("id=%d",$data['id'])->save($data);       
		            if (!$result === false) {
		                $this->success('商品信息更新成功!',U('Home/Goods/goodsList'));
		            } else {
		                $this->error('商品信息更新失败!');
		            }

	         	 }
         	}
   		}






}