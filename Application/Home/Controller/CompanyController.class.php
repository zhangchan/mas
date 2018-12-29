<?php

namespace Home\Controller;
use Think\Controller;
/**
 * 公司简介控制器
 */
class CompanyController extends Controller {

	//公司简介
    public function index(){
        return $this->display('news');
    }

    public function getCategory(){
    	$list = D('channel')->lists();
			$data['code']  = 200;
			$data['data'] = $list;
			$this->ajaxReturn($data,'json');
    }



}
