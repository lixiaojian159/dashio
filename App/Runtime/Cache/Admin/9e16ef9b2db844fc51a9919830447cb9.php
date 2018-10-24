<?php if (!defined('THINK_PATH')) exit();?><!--
* @Author: 李健
* @Date:   2018-10-24 10:52:40
* @Last Modified by:   banana
* @Last Modified time: 2018-10-24 15:33:56
* @E-mail: 852688838@qq.com
* @Tel: 18633899381
-->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="/Public/admin/img/favicon.png" rel="icon">
  <link href="/Public/admin/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Bootstrap core CSS -->
  <link href="/Public/admin/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="/Public/admin/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="/Public/admin/css/style.css" rel="stylesheet">
  <link href="/Public/admin/css/style-responsive.css" rel="stylesheet">
  <!-- <link rel="stylesheet" type="text/css" href="/Public/layui/css/layui.css"> -->
  <script type="text/javascript" src="/Public/jquery/jquery.js"></script>
  <!-- <script type="text/javascript" src="/Public/layui/layui.js"></script> -->
  <script type="text/javascript" src="/Public/layer/layer.js"></script>
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<style>
  .form-control-verify input{
    width: 150px;
  }
  .form-control-verify{
    position: relative;
  }
  #verify{
    position: absolute;
    top: -3px;
    left: 180px;
    width: 130px;
    cursor: pointer;
  }
</style>

<body>

  <div id="login-page">
    <div class="container">
      <form class="form-login" action="index.html">
        <h2 class="form-login-heading">sign in now</h2>
        <div class="login-wrap">
          <input type="text" class="form-control" name="name" placeholder="User ID" autofocus>
          <br>
          <input type="password" class="form-control" name="password" placeholder="Password">
          <br/>
          <label class="form-control-verify">
              <input type="text" class="form-control" name="verify" placeholder="Verify" autofocus>
              <img src="<?php echo U('Admin/Index/verify');?>" onclick="Code()" id="verify" />
          </label>
          <label class="checkbox" style="padding-left: 22px">
            <input type="checkbox" value="remember-me" name="remember"> Remember me
            <span class="pull-right">
            <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
            </span>
            </label>
          <a class="btn btn-theme btn-block" id="submit"><i class="fa fa-lock"></i> SIGN IN</a>
          <hr>
          <div class="registration">
            Don't have an account yet?<br/>
            <a class="" href="#">
              Create an account
              </a>
          </div>
        </div>
        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Forgot Password ?</h4>
              </div>
              <div class="modal-body">
                <p>Enter your e-mail address below to reset your password.</p>
                <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
              </div>
              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                <button class="btn btn-theme" type="button">Submit</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="/Public/admin/lib/jquery/jquery.min.js"></script>
  <script src="/Public/admin/lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="/Public/admin/lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("/Public/admin/img/login-bg.jpg", {
      speed: 500
    });
  </script>
  <script>
    $(function(){
      $("#submit").click(function(){
        var name     = $("input[name='name']").val();
        var password = $("input[name='password']").val();
        var verify   = $("input[name='verify']").val();
        var rem = $("input[name='remember']:checked");
        if(rem.size()>0){
           remember = 1;
        }else{
           remember = 0;
        }
        url  = "<?php echo U('Admin/Index/successpass');?>";
        data = {'name':name,'password':password,'verify':verify,'remember':remember};
        $.post(url,data,function(result){
          if(result.code == 0){
              layer.open({
                title: '验证提示'
                ,content: result.msg
                ,icon: 5
                , yes: function(index, layero){
                    //do something
                    layer.close(index); //如果设定了yes回调，需进行手工关闭
                    window.location.href = result.url;
                  }
              });
          }else{

               layer.open({
                title: '验证提示'
                ,content: result.msg
                ,icon: 6
                , yes: function(index, layero){
                    //do something
                    layer.close(index); //如果设定了yes回调，需进行手工关闭
                    window.location.href = result.url;
                  }
              });
          }
        },'JSON');
      })
    })

    function Code(){
        document.getElementById('verify').src = document.getElementById('verify').src + "?random=" + Math.random();
    }
  </script>

</body>

</html>