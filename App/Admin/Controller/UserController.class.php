<?php

/**
 * @Author: 李健
 * @Date:   2018-10-26 16:46:24
 * @Last Modified by:   banana
 * @Last Modified time: 2018-10-29 10:29:35
 * @E-mail: 852688838@qq.com
 * @Tel: 18633899381
 */

namespace Admin\Controller;

use Think\Controller;

class UserController extends BaseController{

    //开启授权页面
	public function index(){
		$title = "开户授权";
		$users = M('users')->where('route != 1')->select();
		$this->assign('users',$users);
		$this->assign('title',$title);
		$this->display();
	}

	//接口: 保存授权码到users表中
	public function createKeyCode(){
		$data['keycode'] = I('keycode');
		$res = M('users')->add($data);
		if($res){
			$arr['code'] = 1;
			$arr['msg']  = '生成授权码成功';
			$arr['url']  = U('Admin/User/index');
		}else{
			$arr['code'] = 0;
			$arr['msg']  = '授权码生成失败';
			$arr['url']  = U('Admin/User/index');
		}
		echo json_encode($arr);
	}

	//接口: 删除未注册成功的授权码
	public function delkeyCode(){
		$id  = I('post.id');
		$res = M('users')->delete($id);
		if($res){
			$arr['code'] = 1;
			$arr['msg']  = '授权码删除成功';
			$arr['url']  = U('Admin/User/index');
			echo json_encode($arr);
		}
	}

}