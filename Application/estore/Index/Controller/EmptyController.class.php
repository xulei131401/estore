<?php
namespace Index\Controller;
use Think\Controller;
class EmptyController extends Controller{

		public function index()
		{
			$this->error('您访问的页面不存在！！','',3);
		}
		
}
