<?php

/**
 * @Author: 李健
 * @Date:   2018-10-24 11:38:09
 * @Last Modified by:   banana
 * @Last Modified time: 2018-10-24 16:03:03
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
}