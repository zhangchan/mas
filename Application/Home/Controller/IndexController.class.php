<?php

namespace Home\Controller;
use Think\Controller;
/**
 * 前台首页控制器
 * 主要获取首页聚合数据
 */
class IndexController extends Controller {

	//系统首页
    public function index(){
        return $this->display('index');
    }

    public function getCategory(){
    	$list = D('channel')->lists();
			$data['code']  = 200;
			$data['data'] = $list;
			$this->ajaxReturn($data,'json');
    }



}
