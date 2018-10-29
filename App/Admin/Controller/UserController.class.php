<?php

/**
 * @Author: 李健
 * @Date:   2018-10-26 16:46:24
 * @Last Modified by:   banana
 * @Last Modified time: 2018-10-29 15:26:47
 * @E-mail: 852688838@qq.com
 * @Tel: 18633899381
 */

namespace Admin\Controller;

use Think\Controller;

class UserController extends BaseController{

    //开启授权页面
	public function index(){
		$title = "开户授权";
		$users_model = M('users');
		$count = $users_model->where('route != 1')->count();
		$Page  = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(5)
		$Page->lastSuffix=false;
		$Page->setConfig('header','&nbsp;&nbsp;&nbsp;&nbsp;<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
		$Page->setConfig('prev','上一页');
		$Page->setConfig('next','下一页');
		$Page->setConfig('last','末页');
		$Page->setConfig('first','首页');
		$Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
		$show  = $Page->show();// 分页显示输出
		$users = $users_model->where('route != 1')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('users',$users);
		$this->assign('title',$title);
		$this->assign('page',$show);
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