<?php

/**
 * @Author: 李健
 * @Date:   2018-10-24 11:38:09
 * @Last Modified by:   lijian
 * @Last Modified time: 2018-10-27 01:11:19
 * @E-mail: 852688838@qq.com
 * @Tel: 18633899381
 */
namespace Admin\Model;

use Think\Model;

class UsersModel extends Model{

	public $db;

	public function __construct(){
		parent::__construct();
		$this->db = M('users');
	}

    /**
     * [getUserByName 根据用户名获取用户整体信息, 查看是否存在此用户]
     * @param  [string]       $name  用户名
     * @return [array/null]   $user  有此用户,返回以为数组; 无此用户,返回null 
     */
	public function getUserByName($name){
		$data['name'] = $name;
		$user = $this->db->where($data)->find();
		return $user;
	}

    /**
     * [getUserById 根据ID获得用户信息]
     * @param  [int]    $id  用户ID
     * @return [array]  
     */
	public function getUserById($id){
		return $this->db->find($id);
	}
    
    /**
     * [getUserImgById 通过ID获取用户的邮箱,然后生成gravatar,并返回]
     * @param  [int]     $id   用户ID
     * @return [string]  $src  用户头像src
     */
	public function getUserImgById($id){
		$user  = $this->getUserById($id);
		$email = md5(strtolower(trim($user['email'])));
		$src   = 'https://www.gravatar.com/avatar/'.$email;
		return $src;
	}

	public function getRouteById($id){
		$user = $this->getUserById($id);
		return $user['route'];
	}
}