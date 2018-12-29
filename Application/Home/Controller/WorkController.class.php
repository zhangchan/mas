<?php

namespace Home\Controller;
use Think\Controller;
/**
 * 作品页控制器
 */
class WorkController extends Controller {

	//系统首页
    public function index(){
        return $this->display('index');
    }

    public function detail(){
        return $this->display('detail');
    }

    public function getCategory(){
    	$list = D('channel')->lists();
			$data['code']  = 200;
			$data['data'] = $list;
			$this->ajaxReturn($data,'json');
    }



}
