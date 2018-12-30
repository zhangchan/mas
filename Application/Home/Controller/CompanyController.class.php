<?php

namespace Home\Controller;
use Think\Controller;
/**
 * 公司简介控制器
 */
class CompanyController extends Controller {

	//新闻
    public function news(){
        return $this->display('news');
    }
    //奖项
    public function prize(){
        return $this->display('prize');
    }
    //公司简介
    public function profile(){
        return $this->display('profile');
    }

    public function getCategory(){
    	$list = D('channel')->lists();
			$data['code']  = 200;
			$data['data'] = $list;
			$this->ajaxReturn($data,'json');
    }



}
