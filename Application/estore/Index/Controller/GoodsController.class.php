<?php
namespace Index\Controller;
use Think\Controller;
use Index\Controller\CategoryController;

class GoodsController extends CommonController {

	//商品列表页面显示
	  public function index () {
	  	$goods = M('Goods');
	  	$result = $goods->where('recommend=0')->select();	//默认0不推荐
	  	$result1 = $goods->where('recommend=1')->select();	//1表示推荐
	  	// dump($result);
	  	// dump($result1);
	  	// dump($this->categoryList());
	  	$this->assign('goods',$result);
	  	$this->assign('goods1',$result1);
	  	$this->assign('cate',$this->categoryList());
	  	$this->display();
	  	
	  }

	  //商品分类显示
	  public function categoryList () {

	  	$cate = M('Category')->select();
        $cate = recursive($cate);

      	return $cate;

	  }


	  //按商品类别查询显示
	  public function showByCategory () {
	  	if (!IS_GET) {
	  		$this->error('页面出错!');
	  	} else {
	  		$id = I('id','','intval');
	        $cate = M('Category');
	        $cateid = $cate->field(array('id', 'pid'))->select();
	        $delid = get_all_child($cateid, $id);
	        $delid[] = $id;		//将本身分类下的所有分类ID放到该数组
	        $data['category_id'] = array('IN',$delid);
	        $goods = M('Goods');
	        $result = $goods->where($data)->select();
	        // dump($result);
	        $this->assign('goods_cate',$result);
	        $this->assign('cate',$this->categoryList());
	        $this->display('goodsCate');
	  	}
	  }

	  //根据商品ID显示商品详情
	  public function showById () {

	  	if (!IS_GET) {
	  		$this->error('页面出错!');
	  	} else {
	  		$data['id'] = I('id','','intval');
	        $goods = M('Goods');
	        $result = $goods->where($data)->find();
	        // dump($result);
	        $this->assign('goodsdetail',$result);
	        $this->display('goodsDetail');
	  	}
	  }


}