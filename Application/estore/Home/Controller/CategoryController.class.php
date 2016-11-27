<?php
namespace Home\Controller;
use Think\Controller;
/**
 * 商品分类控制器
 */
class CategoryController extends CommonController {

   //分类列表视图
    Public function index () {
        $cate = M('Category')->select();
        $this->cate = recursive($cate);
        // dump($this->cate);
        $this->display('categoryList');
    }

    //添加顶级分类视图
    Public function addTop () {
        $this->display();
    }

    //添加子分类视图
    Public function addChild () {
        $this->cate = M('Category')->find(I('pid','','intval'));
        //dump($this->cate);
        $this->display();
    }

    //添加分类表单处理
    Public function addCate () {
        $data['category_name'] = I('category_name');
        $data['pid'] = I('pid','','intval');
        $data['level'] = I('level','','intval')+1;

        if (M('Category')->data($data)->add()) {
            $this->success('添加成功', 'index');
        } else {
            $this->error('添加失败');
        }
    }

    //修改分类视图
    Public function edit () {
        $this->cate = M('Category')->find(I('id','','intval'));
        $this->display();
    }

    //修改分类操作
    Public function editCate () {
        if (M('Category')->save($_POST)) {
            $this->success('修改成功', 'index');
        } else {
            $this->error('修改失败');
        }
    }

    //删除分类
    Public function del () {
        $id = I('id','','intval');
        $cate = M('Category');
        $cateid = $cate->field(array('id', 'pid'))->select();
        $delid = get_all_child($cateid, $id);
        $delid[] = $id;

        $data = array('id' => array('IN', $delid));
        // dump($data);
        if (!$cate->where($data)->delete()) {
            $this->error('删除失败');
        }

        $this->success('删除成功', U('index'));
     }


   
}