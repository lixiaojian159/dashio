<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller {

	//后台登陆
    public function index(){

        //验证是否用户已经登陆过, 如果已经登录过,直接跳转到后台首页; 否则, 渲染后台登录页
        $user_id   = cookie('user_id');
        $user_name = cookie('user_name');
        $user_salt = cookie('user_salt');
        $user = D('users')->getUserById($user_id);
        $salt = md5($user['salt'].C('SALT'));
        if($user_id && $user_name && $user_salt && $user_name == $user['name'] && $user_salt == $salt){
            $this->redirect('/admin/Admin/index');
        }else{
            $this->display('Login:login');
        }
    }

    public function successpass(){
    	$name     = I('post.name');
    	$password = I('post.password');
    	$verify   = I('post.verify');
    	$remember = I('post.remember');  //选中是string 1, 未选中是 string 0

    	$user = D('users')->getUserByName($name);

    	//验证验证码
    	$res_verify = $this->check_verify($verify);
    	if(!$res_verify){
    		$info['code'] = 0;
    		$info['msg']  = '验证码错误';
    		$info['url']  = U('Admin/Index/index');
    		echo json_encode($info);
    		exit;
    	}

    	//验证是否存在此用户
    	if(!$user){
    		$info['code'] = 0;
    		$info['msg']  = '用户不存在';
    		$info['url']  = U('Admin/Index/index');
    		echo json_encode($info);
    		exit;
    	}
    	//检测用户密码
    	if($user['password'] != md5($password.$user['salt'])){
    		$info['code'] = 0;
    		$info['msg']  = '用户名或者密码错误';
    		$info['url']  = U('Admin/Index/index');
    		echo json_encode($info);
    		exit;
    	}

    	//验证成功保存session和cookie, 用于是否登陆后操作的验证
    	cookie('user_id',$user['id']);
    	cookie('user_name',$user['name']);
    	$salt = md5($user['salt'].C('SALT'));
    	cookie('user_salt',$salt);
        
        //登录成功后的返回json格式
    	$info['code'] = 1;
    	$info['msg']  = '登陆成功!';
    	$info['url']  = U('Admin/Admin/index');
    	echo json_encode($info);
    }

    //生成验证码
    public function verify(){
    	$Verify = new \Think\Verify();
		$Verify->fontSize = 30;
		$Verify->length   = 4;
		$Verify->useNoise = false;
		$Verify->useCurve = false;
		$Verify->entry();
    }

    //检测输入的验证码是否正确，$code为用户输入的验证码字符串
    function check_verify($code, $id = ''){
	    $verify = new \Think\Verify();
	    return $verify->check($code, $id);
    } 

}