<?php

namespace Home\Controller;
use Think\Controller;
/**
 * 团队伙伴页面控制器
 */
class TeamController extends Controller {

	//团队伙伴
    public function team(){
        return $this->display('team');
    }

    //合伙人
    public function cooperate(){
        return $this->display('cooperate');
    }

    public function getCategory(){
    	$list = D('channel')->lists();
			$data['code']  = 200;
			$data['data'] = $list;
			$this->ajaxReturn($data,'json');
    }



}
