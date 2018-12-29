<?php

namespace Home\Controller;
use Think\Controller;
/**
 * 公共部分控制器
 */
class PublicController extends Controller {

    public function getCategory(){
    	$list = D('channel')->lists();
			$data['code']  = 200;
			$data['data'] = $list;
			$this->ajaxReturn($data,'json');
    }



}
