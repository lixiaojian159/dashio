<?php if (!defined('THINK_PATH')) exit();?><!--
* @Author: 李健
* @Date:   2018-10-25 14:41:03
* @Last Modified by:   banana
* @Last Modified time: 2018-10-26 17:02:48
* @E-mail: 852688838@qq.com
* @Tel: 18633899381
-->
<?php
$user_id = cookie('user_id'); $user_name = cookie('user_name'); $gravatar_src = D('users')->getUserImgById($user_id); $route = D('users')->getRouteById($user_id); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

  <title><?php echo ($title); ?></title>

  <!-- Favicons -->
  <link href="/Public/admin/img/favicon.png" rel="icon">
  <link href="/Public/admin/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="/Public/admin/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="/Public/admin/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="/Public/admin/css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="/Public/admin/lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="/Public/admin/css/style.css" rel="stylesheet">
  <link href="/Public/admin/css/style-responsive.css" rel="stylesheet">
  <script type="text/javascript" src="/Public/jquery/jquery.js"></script>
  <script src="/Public/admin/lib/chart-master/Chart.js"></script>
  <script type="text/javascript" src="/Public/layer/layer.js"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
  <div class="sidebar-toggle-box">
    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
  </div>
  <!--logo start-->
  <a href="index.html" class="logo"><b>DASH<span>IO</span></b></a>
  <!--logo end-->
  <div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
      <!-- settings start -->
      <li class="dropdown">
        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
          <i class="fa fa-tasks"></i>
          <span class="badge bg-theme">4</span>
          </a>
        <ul class="dropdown-menu extended tasks-bar">
          <div class="notify-arrow notify-arrow-green"></div>
          <li>
            <p class="green">You have 4 pending tasks</p>
          </li>
          <li>
            <a href="index.html#">
              <div class="task-info">
                <div class="desc">Dashio Admin Panel</div>
                <div class="percent">40%</div>
              </div>
              <div class="progress progress-striped">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                  <span class="sr-only">40% Complete (success)</span>
                </div>
              </div>
            </a>
          </li>
          <li>
            <a href="index.html#">
              <div class="task-info">
                <div class="desc">Database Update</div>
                <div class="percent">60%</div>
              </div>
              <div class="progress progress-striped">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                  <span class="sr-only">60% Complete (warning)</span>
                </div>
              </div>
            </a>
          </li>
          <li>
            <a href="index.html#">
              <div class="task-info">
                <div class="desc">Product Development</div>
                <div class="percent">80%</div>
              </div>
              <div class="progress progress-striped">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                  <span class="sr-only">80% Complete</span>
                </div>
              </div>
            </a>
          </li>
          <li>
            <a href="index.html#">
              <div class="task-info">
                <div class="desc">Payments Sent</div>
                <div class="percent">70%</div>
              </div>
              <div class="progress progress-striped">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                  <span class="sr-only">70% Complete (Important)</span>
                </div>
              </div>
            </a>
          </li>
          <li class="external">
            <a href="#">See All Tasks</a>
          </li>
        </ul>
      </li>
      <!-- settings end -->
      <!-- inbox dropdown start-->
      <li id="header_inbox_bar" class="dropdown">
        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
          <i class="fa fa-envelope-o"></i>
          <span class="badge bg-theme">5</span>
          </a>
        <ul class="dropdown-menu extended inbox">
          <div class="notify-arrow notify-arrow-green"></div>
          <li>
            <p class="green">You have 5 new messages</p>
          </li>
          <li>
            <a href="index.html#">
              <span class="photo"><img alt="avatar" src="/Public/admin/img/ui-zac.jpg"></span>
              <span class="subject">
              <span class="from">Zac Snider</span>
              <span class="time">Just now</span>
              </span>
              <span class="message">
              Hi mate, how is everything?
              </span>
              </a>
          </li>
          <li>
            <a href="index.html#">
              <span class="photo"><img alt="avatar" src="/Public/admin/img/ui-divya.jpg"></span>
              <span class="subject">
              <span class="from">Divya Manian</span>
              <span class="time">40 mins.</span>
              </span>
              <span class="message">
              Hi, I need your help with this.
              </span>
              </a>
          </li>
          <li>
            <a href="index.html#">
              <span class="photo"><img alt="avatar" src="/Public/admin/img/ui-danro.jpg"></span>
              <span class="subject">
              <span class="from">Dan Rogers</span>
              <span class="time">2 hrs.</span>
              </span>
              <span class="message">
              Love your new Dashboard.
              </span>
              </a>
          </li>
          <li>
            <a href="index.html#">
              <span class="photo"><img alt="avatar" src="/Public/admin/img/ui-sherman.jpg"></span>
              <span class="subject">
              <span class="from">Dj Sherman</span>
              <span class="time">4 hrs.</span>
              </span>
              <span class="message">
              Please, answer asap.
              </span>
              </a>
          </li>
          <li>
            <a href="index.html#">See all messages</a>
          </li>
        </ul>
      </li>
      <!-- inbox dropdown end -->
      <!-- notification dropdown start-->
      <li id="header_notification_bar" class="dropdown">
        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
          <i class="fa fa-bell-o"></i>
          <span class="badge bg-warning">7</span>
          </a>
        <ul class="dropdown-menu extended notification">
          <div class="notify-arrow notify-arrow-yellow"></div>
          <li>
            <p class="yellow">You have 7 new notifications</p>
          </li>
          <li>
            <a href="index.html#">
              <span class="label label-danger"><i class="fa fa-bolt"></i></span>
              Server Overloaded.
              <span class="small italic">4 mins.</span>
              </a>
          </li>
          <li>
            <a href="index.html#">
              <span class="label label-warning"><i class="fa fa-bell"></i></span>
              Memory #2 Not Responding.
              <span class="small italic">30 mins.</span>
              </a>
          </li>
          <li>
            <a href="index.html#">
              <span class="label label-danger"><i class="fa fa-bolt"></i></span>
              Disk Space Reached 85%.
              <span class="small italic">2 hrs.</span>
              </a>
          </li>
          <li>
            <a href="index.html#">
              <span class="label label-success"><i class="fa fa-plus"></i></span>
              New User Registered.
              <span class="small italic">3 hrs.</span>
              </a>
          </li>
          <li>
            <a href="index.html#">See all notifications</a>
          </li>
        </ul>
      </li>
      <!-- notification dropdown end -->
    </ul>
    <!--  notification end -->
  </div>
  <div class="top-menu">
    <ul class="nav pull-right top-menu">
      <li><a class="logout" href="javascript:;" id="logout">Logout</a></li>
    </ul>
  </div>
</header> 
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->

    <!--sidebar start-->
    <aside>
  <div id="sidebar" class="nav-collapse ">
    <!-- sidebar menu start-->
    <ul class="sidebar-menu" id="nav-accordion">
      <p class="centered"><a href="profile.html"><img src="<?php echo ($gravatar_src); ?>" width="50px" class="img-circle" width="80"></a></p>
      <h5 class="centered"><?php echo ($user_name); ?></h5>
      <li class="mt">
        <a class="active" href="<?php echo U('Admin/Admin/index');?>">
          <i class="fa fa-dashboard"></i>
          <span>主页</span>
          </a>
      </li>

      <?php if($route): ?><li class="sub-menu">
        <a href="javascript:;">
          <i class="fa fa-desktop"></i>
          <span>账户管理</span>
          </a>
        <ul class="sub">
          <li><a href="<?php echo U('Admin/User/index');?>">开户授权</a></li>
          <li><a href="buttons.html">Buttons</a></li>
          <li><a href="panels.html">Panels</a></li>
          <li><a href="font_awesome.html">Font Awesome</a></li>
        </ul>
      </li><?php endif; ?>

      <li class="sub-menu">
        <a href="javascript:;">
          <i class="fa fa-cogs"></i>
          <span>Components</span>
          </a>
        <ul class="sub">
          <li><a href="grids.html">Grids</a></li>
          <li><a href="calendar.html">Calendar</a></li>
          <li><a href="gallery.html">Gallery</a></li>
          <li><a href="todo_list.html">Todo List</a></li>
          <li><a href="dropzone.html">Dropzone File Upload</a></li>
          <li><a href="inline_editor.html">Inline Editor</a></li>
          <li><a href="file_upload.html">Multiple File Upload</a></li>
        </ul>
      </li>
      <li class="sub-menu">
        <a href="javascript:;">
          <i class="fa fa-book"></i>
          <span>Extra Pages</span>
          </a>
        <ul class="sub">
          <li><a href="blank.html">Blank Page</a></li>
          <li><a href="login.html">Login</a></li>
          <li><a href="lock_screen.html">Lock Screen</a></li>
          <li><a href="profile.html">Profile</a></li>
          <li><a href="invoice.html">Invoice</a></li>
          <li><a href="pricing_table.html">Pricing Table</a></li>
          <li><a href="faq.html">FAQ</a></li>
          <li><a href="404.html">404 Error</a></li>
          <li><a href="500.html">500 Error</a></li>
        </ul>
      </li>
      <li class="sub-menu">
        <a href="javascript:;">
          <i class="fa fa-tasks"></i>
          <span>Forms</span>
          </a>
        <ul class="sub">
          <li><a href="form_component.html">Form Components</a></li>
          <li><a href="advanced_form_components.html">Advanced Components</a></li>
          <li><a href="form_validation.html">Form Validation</a></li>
          <li><a href="contactform.html">Contact Form</a></li>
        </ul>
      </li>
      <li class="sub-menu">
        <a href="javascript:;">
          <i class="fa fa-th"></i>
          <span>Data Tables</span>
          </a>
        <ul class="sub">
          <li><a href="basic_table.html">Basic Table</a></li>
          <li><a href="responsive_table.html">Responsive Table</a></li>
          <li><a href="advanced_table.html">Advanced Table</a></li>
        </ul>
      </li>
      <li>
        <a href="inbox.html">
          <i class="fa fa-envelope"></i>
          <span>Mail </span>
          <span class="label label-theme pull-right mail-info">2</span>
          </a>
      </li>
      <li class="sub-menu">
        <a href="javascript:;">
          <i class=" fa fa-bar-chart-o"></i>
          <span>Charts</span>
          </a>
        <ul class="sub">
          <li><a href="morris.html">Morris</a></li>
          <li><a href="chartjs.html">Chartjs</a></li>
          <li><a href="flot_chart.html">Flot Charts</a></li>
          <li><a href="xchart.html">xChart</a></li>
        </ul>
      </li>
      <li class="sub-menu">
        <a href="javascript:;">
          <i class="fa fa-comments-o"></i>
          <span>Chat Room</span>
          </a>
        <ul class="sub">
          <li><a href="lobby.html">Lobby</a></li>
          <li><a href="chat_room.html"> Chat Room</a></li>
        </ul>
      </li>
      <li>
        <a href="google_maps.html">
          <i class="fa fa-map-marker"></i>
          <span>Google Maps </span>
          </a>
      </li>
    </ul>
    <!-- sidebar menu end-->
  </div>
</aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <section id="main-content">
    	 <section class="wrapper">
			    
	<div class="row mt">
        <div class="col-lg-4 col-md-6 col-sm-10">
        	<div class="showback">
                <h4><i class="fa fa-angle-right"></i> 授权</h4>
                <button type="button" class="btn btn-default" id="keyCode">生成开户码</button>
                <button type="button" class="btn btn-success" id="success">确定</button>
                <div style="margin-top: 20px">
                    <form role="form" class="form-horizontal style-form">
                        <div class="form-group has-success">
                          <div class="col-lg-8">
                            <input type="text" placeholder="自动生成开户授权码" id="key" readonly class="form-control" style="text-align: center">
                          </div>
                        </div>
                    </form>
                </div>
            </div>  
        </div>
    </div>

     <!-- row -->
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> 开户授权码</h4>
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i> ID</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> 用户名</th>
                    <th><i class="fa fa-bookmark"></i> 授权码</th>
                    <th><i class=" fa fa-edit"></i> 邮箱</th>
                    <th><i class=" fa fa-edit"></i> 注册时间</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                    <?php if(is_array($users)): foreach($users as $key=>$user): ?><tr>
                        <td><?php echo ($user["id"]); ?></td>
                        <td class="hidden-phone"><?php echo ($user["name"]); ?></td>
                        <td><?php echo ($user["keycode"]); ?></td>
                        <td><?php echo ($user["email"]); ?></td>
                        <td><?php echo (date("Y-m-d H:i:s",$user["logintime"])); ?></td>
                        <td>
                            <?php if($user["name"] == ''): ?><button class="btn btn-danger btn-xs del" data-id="<?php echo ($user["id"]); ?>"><i class="fa fa-trash-o "></i></button><?php endif; ?>
                        </td>
                    </tr><?php endforeach; endif; ?>
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>

<script>
    //生成7位随机字符串作为授权码
    $("#keyCode").click(function(){
        var keyCode = _getRandomString(7);
        $("#key").val(keyCode);
    })

    //异步请求: 把授权码保存到users
    $("#success").click(function(){
        var keyCode = $("#key").val();
        var url  = "<?php echo U('Admin/User/createKeyCode');?>";
        var data = {'keycode':keyCode};
        $.post(url,data,function(result){
            if(result.code){
                layer.open({
                    title: '授权码'
                    ,content: result.msg
                    ,icon:6
                    , yes: function(index, layero){
                        //do something
                        layer.close(index); //如果设定了yes回调，需进行手工关闭
                        window.location.href = result.url;
                    }
                });
            }else{
                layer.open({
                    title: '授权码'
                    ,content: result.msg
                    ,icon:5
                    , yes: function(index, layero){
                        //do something
                        layer.close(index); //如果设定了yes回调，需进行手工关闭
                        window.location.href = result.url;
                    }
                });
            }
        },'JSON')
    })
    
    //异步申请:删除未注册成功的授权码
    $(".del").click(function(){
        var id   = $(this).attr('data-id');
        var url  = "<?php echo U('Admin/User/delkeyCode');?>";
        var data = {'id':id};
        $.post(url,data,function(result){
            if(result.code){
                layer.open({
                    title: '删除授权码'
                    ,content: result.msg
                    ,icon:6
                    , yes: function(index, layero){
                        //do something
                        layer.close(index); //如果设定了yes回调，需进行手工关闭
                        window.location.href = result.url;
                    }
                });
            }
        },'JSON')
    })

    //获取长度为len的随机字符串
    function _getRandomString(len) {
        var $chars = 'ABCDEFGHJKMNPQRSTWXYZabcdefhijkmnprstwxyz2345678'; // 默认去掉了容易混淆的字符oOLl,9gq,Vv,Uu,I1
        var maxPos = $chars.length;
        var pwd = '';
        for (i = 0; i < len; i++) {
            pwd += $chars.charAt(Math.floor(Math.random() * maxPos));
        }
        return pwd;
    }
</script>

        </section>
    </section>

    <!--footer start-->
    <footer class="site-footer">
  <div class="text-center">
    <p>
      &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
    </p>
    <div class="credits">
      <!--
        You are NOT allowed to delete the credit link to TemplateMag with free version.
        You can delete the credit link only if you bought the pro version.
        Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
        Licensing information: https://templatemag.com/license/
      -->
      Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
    </div>
    <a href="index.html#" class="go-top">
      <i class="fa fa-angle-up"></i>
      </a>
  </div>
</footer>
    <!--footer end-->
   </section>

    <script src="/Public/admin/lib/jquery/jquery.min.js"></script>

  <script src="/Public/admin/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="/Public/admin/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="/Public/admin/lib/jquery.scrollTo.min.js"></script>
  <script src="/Public/admin/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="/Public/admin/lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="/Public/admin/lib/common-scripts.js"></script>
  <script type="text/javascript" src="/Public/admin/lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="/Public/admin/lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="/Public/admin/lib/sparkline-chart.js"></script>
  <script src="/Public/admin/lib/zabuto_calendar.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to Dashio!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
        // (string | optional) the image to display on the left
        image: '<?php echo ($gravatar_src); ?>',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
  <script type="text/javascript">
    $("#logout").click(function(){
      var url  = "<?php echo U('Admin/Index/logout');?>";
      var data = "{'action':'logout'}";
      $.post(url,data,function(result){
        if(result.code){
          layer.open({
            title: '退出系统'
            ,content: result.msg
            ,icon:6
            ,yes: function(index, layero){
              //do something
              layer.close(index); //如果设定了yes回调，需进行手工关闭
              window.location.href = result.url;
            }
          });
        }
      },'JSON')
    })
  </script>
</body>

</html>