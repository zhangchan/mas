<?php

namespace Home\Controller;
use Think\Controller;
/**
 * 联系我们控制器
 */
class ContactController extends Controller {

	//联系我们
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
