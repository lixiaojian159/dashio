<?php

/**
 * @Author: 李健
 * @Date:   2018-10-24 14:40:23
 * @Last Modified by:   banana
 * @Last Modified time: 2018-10-26 17:02:15
 * @E-mail: 852688838@qq.com
 * @Tel: 18633899381
 */
namespace Admin\Controller;

use Think\Controller;

class AdminController extends BaseController{

	//后台首页
	public function index(){
		$title = '后台首页';
		$id = cookie('user_id');
		$name = cookie('user_name');
		$gravatar_src = D('users')->getUserImgById($id);
		$this->assign('title',$title);
		$this->assign('gravatar_src',$gravatar_src);
		$this->assign('name',$name);
		$this->display();
	}
}