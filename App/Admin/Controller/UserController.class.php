<?php

/**
 * @Author: 李健
 * @Date:   2018-10-26 16:46:24
 * @Last Modified by:   banana
 * @Last Modified time: 2018-10-26 17:03:27
 * @E-mail: 852688838@qq.com
 * @Tel: 18633899381
 */

namespace Admin\Controller;

use Think\Controller;

class UserController extends BaseController{

    //开启授权页面
	public function index(){
		$title = "开户授权";
		$this->assign('title',$title);
		$this->display();
	}
}