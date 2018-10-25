<?php

/**
 * @Author: 李健
 * @Date:   2018-10-24 14:40:23
 * @Last Modified by:   banana
 * @Last Modified time: 2018-10-25 16:26:31
 * @E-mail: 852688838@qq.com
 * @Tel: 18633899381
 */
namespace Admin\Controller;

use Think\Controller;

class AdminController extends BaseController{

	//后台首页
	public function index(){
		$id = cookie('user_id');
		$gravatar_src = D('users')->getUserImgById($id);
		$this->assign('gravatar_src',$gravatar_src);
		$this->display();
	}
}