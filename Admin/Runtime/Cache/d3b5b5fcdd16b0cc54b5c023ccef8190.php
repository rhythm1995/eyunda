<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>

    <!-- Title -->
    <title>E运达管理系统</title>

    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta charset="UTF-8">
    <meta name="description" content="E运达管理系统" />
    <meta name="keywords" content="admin" />
    <meta name="author" content="Nodex" />

    <!-- Styles -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href="__ROOT__/Public/assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
    <link href="__ROOT__/Public/assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
    <link href="__ROOT__/Public/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="__ROOT__/Public/assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="__ROOT__/Public/assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>
    <link href="__ROOT__/Public/assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>
    <link href="__ROOT__/Public/assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>
    <link href="__ROOT__/Public/assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
    <link href="__ROOT__/Public/assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="__ROOT__/Public/assets/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/>
    <link href="__ROOT__/Public/assets/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="__ROOT__/Public/assets/plugins/metrojs/MetroJs.min.css" rel="stylesheet" type="text/css"/>
    <link href="__ROOT__/Public/assets/plugins/toastr/toastr.min.css" rel="stylesheet" type="text/css"/>

    <!-- Theme Styles -->
    <link href="__ROOT__/Public/assets/css/modern.css" rel="stylesheet" type="text/css"/>
    <link href="__ROOT__/Public/assets/css/themes/white.css" class="theme-color" rel="stylesheet" type="text/css"/>
    <link href="__ROOT__/Public/assets/css/custom.css" rel="stylesheet" type="text/css"/>

    <script src="__ROOT__/Public/assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
    <script src="__ROOT__/Public/assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="page-header-fixed">
<div class="menu-wrap">
    <button class="close-button" id="close-button">Close Menu</button>
</div>
<form class="search-form" action="#" method="GET">
    <div class="input-group">
        <input type="text" name="search" class="form-control search-input" placeholder="Search...">
                <span class="input-group-btn">
                    <button class="btn btn-default close-search waves-effect waves-button waves-classic" type="button"><i class="fa fa-times"></i></button>
                </span>
    </div><!-- Input Group -->
</form><!-- Search Form -->
<main class="page-content content-wrap">
    <div class="navbar">
        <div class="navbar-inner">
            <div class="sidebar-pusher">
                <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <div class="logo-box">
                <a href="index.html" class="logo-text"><span>E运达</span></a>
            </div><!-- Logo Box -->
            <div class="topmenu-outer">
                <div class="top-menu">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="javascript:void(0);" class="waves-effect waves-button waves-classic sidebar-toggle"><i class="fa fa-bars"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect waves-button waves-classic toggle-fullscreen"><i class="fa fa-expand"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                <i class="fa fa-cogs"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-md dropdown-list theme-settings" role="menu">
                                <li class="li-group">
                                    <ul class="list-unstyled">
                                        <li class="no-link" role="presentation">
                                            固定表头
                                            <div class="ios-switch pull-right switch-md">
                                                <input type="checkbox" class="js-switch pull-right fixed-header-check" checked>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="li-group">
                                    <ul class="list-unstyled">
                                        <li class="no-link" role="presentation">
                                            固定侧边栏
                                            <div class="ios-switch pull-right switch-md">
                                                <input type="checkbox" class="js-switch pull-right fixed-sidebar-check">
                                            </div>
                                        </li>
                                        <li class="no-link" role="presentation">
                                            顶部菜单栏
                                            <div class="ios-switch pull-right switch-md">
                                                <input type="checkbox" class="js-switch pull-right horizontal-bar-check">
                                            </div>
                                        </li>
                                        <li class="no-link" role="presentation">
                                            省略菜单名
                                            <div class="ios-switch pull-right switch-md">
                                                <input type="checkbox" class="js-switch pull-right toggle-sidebar-check">
                                            </div>
                                        </li>
                                        <li class="no-link" role="presentation">
                                            紧凑布局
                                            <div class="ios-switch pull-right switch-md">
                                                <input type="checkbox" class="js-switch pull-right compact-menu-check">
                                            </div>
                                        </li>
                                        <li class="no-link" role="presentation">
                                            盘旋布局
                                            <div class="ios-switch pull-right switch-md">
                                                <input type="checkbox" class="js-switch pull-right hover-menu-check">
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="li-group">
                                    <ul class="list-unstyled">
                                        <li class="no-link" role="presentation">
                                            盒状布局
                                            <div class="ios-switch pull-right switch-md">
                                                <input type="checkbox" class="js-switch pull-right boxed-layout-check">
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="li-group">
                                    <ul class="list-unstyled">
                                        <li class="no-link" role="presentation">
                                            选择主题颜色
                                            <div class="color-switcher">
                                                <a class="colorbox color-blue" href="?theme=blue" title="Blue Theme" data-css="blue"></a>
                                                <a class="colorbox color-green" href="?theme=green" title="Green Theme" data-css="green"></a>
                                                <a class="colorbox color-red" href="?theme=red" title="Red Theme" data-css="red"></a>
                                                <a class="colorbox color-white" href="?theme=white" title="White Theme" data-css="white"></a>
                                                <a class="colorbox color-purple" href="?theme=purple" title="purple Theme" data-css="purple"></a>
                                                <a class="colorbox color-dark" href="?theme=dark" title="Dark Theme" data-css="dark"></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="no-link"><button class="btn btn-default reset-options">重置样式按钮</button></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                <img class="img-circle avatar" src="__ROOT__/Public/assets/images/avatar1.png" width="40" height="40" alt="">
                            </a>

                        </li>
                        <li>
                            <a href="__ROOT__/admin.php/Log/AdminLogout" class="log-out waves-effect waves-button waves-classic">
                                <span><i class="fa fa-sign-out m-r-xs"></i>退出系统</span>
                            </a>
                        </li>

                    </ul><!-- Nav -->
                </div><!-- Top Menu -->
            </div>
        </div>
    </div><!-- Navbar -->
    <div class="page-sidebar sidebar">
        <div class="page-sidebar-inner slimscroll">
            <div class="sidebar-header">
                <div class="sidebar-profile">
                    <a href="javascript:void(0);" id="profile-menu-link">
                        <div class="sidebar-profile-image">
                            <img src="__ROOT__/Public/assets/images/avatar1.png" class="img-circle img-responsive" alt="">
                        </div>
                        <?php if(is_array($admin)): $i = 0; $__LIST__ = $admin;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?><div class="sidebar-profile-details">
                                    <span><?php echo ($a["name"]); ?></span>
                                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                    </a>
                </div>
            </div>
           <ul class="menu accordion-menu">
                        <li ><a href="__ROOT__/admin.php/Main/index.html" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>首页</p></a></li>
                        <li><a href="__ROOT__/admin.php/User/index.html" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-user"></span><p>用户管理</p></a></li>
                        <li><a href="__ROOT__/admin.php/Car/index.html" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-scale"></span><p>车辆管理</p></a></li>
                        <li ><a href="__ROOT__/admin.php/Yundan/index.html" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-shopping-cart"></span><p>运单管理</p></a></li>
                        <li class="active"><a href="__ROOT__/admin.php/News/index.html" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-th"></span><p>咨询发布</p></a></li>
                        <li><a href="__ROOT__/admin.php/Shenhe/index.html" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-edit"></span><p>车辆审核</p></span></a></li>
            </ul>
        </div><!-- Page Sidebar Inner -->
    </div><!-- Page Sidebar -->
            <div class="page-inner">
                <div class="page-title">
                    <h3>资讯发布</h3>
                </div>
                <div id="main-wrapper">
                   <div class="row">
                        <div class="col-md-12">

                            <div class="panel panel-white">
                                <div class="panel-body">
                                <form name='t' action="__ROOT__/admin.php/News/Publish.html" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <h3>咨询页面内容添加</h3>
                                        <label>咨询标题</label>
                                        <input name="title" type="text" class="form-control">
                                    </div>

                                    <div>
                                        <label>咨询内容</label>
                                        <div>
                                            <textarea name='content' id="console" class="form-control" rows="8" style="height:200px;float: left"></textarea>
                                            <div id='sc10' style="float:left;width:100%;">
                                            <img id="imghead10" style="margin-top:10px;width:300px;height:200px;background:#ddd;" src="">
                                            </div>
                                        </div>
                                        <div style="margin-top:10px;float:left;">
                                        <label style="float: left">选择封面图片:</label><input type="file" style="float:left" name="f" type="file" onchange="previewImage(this,document.getElementById('sc10'),'imghead10')"></div>
                                        <button type="submit" name="s" id='d' style="float:right;" class="btn btn-danger">发布</button>
                                    </div>
                                </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
<script type="text/javascript">  
function previewImage(file,container,head)  
{  
  var MAXWIDTH  = 300;  
  var MAXHEIGHT = 200;  
  var div = container;  
  if (file.files && file.files[0])  
  {  
    div.innerHTML = '<img id='+head+'>';  
    var img = document.getElementById(head); 
    img.onload = function(){  
      var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);  
      img.width = rect.width;  
      img.height = rect.height;  
      img.style.marginLeft = rect.left+'px';  
      img.style.marginTop = rect.top+'px';  
    }  
    var reader = new FileReader();  
    reader.onload = function(evt){img.src = evt.target.result;}  
    reader.readAsDataURL(file.files[0]);  
  }  
  else  
  {  
    var sFilter='filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src="';  
    file.select();  
    var src = document.selection.createRange().text;  
    div.innerHTML = '<img id='+head+'>';  
    var img = document.getElementById(head);  
    img.filters.item('DXImageTransform.Microsoft.AlphaImageLoader').src = src;  
    var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);  
    status =('rect:'+rect.top+','+rect.left+','+rect.width+','+rect.height);  
    div.innerHTML = "<div id=divhead style='width:"+rect.width+"px;height:"+rect.height+"px;margin-top:"+rect.top+"px;margin-left:"+rect.left+"px;"+sFilter+src+"\"'></div>";  
  }  
}  
function clacImgZoomParam( maxWidth, maxHeight, width, height ){  
    var param = {top:0, left:0, width:width, height:height};  
    if( width>maxWidth || height>maxHeight )  
    {  
        rateWidth = width / maxWidth;  
        rateHeight = height / maxHeight;  
          
        if( rateWidth > rateHeight )  
        {  
            param.width =  maxWidth;  
            param.height = Math.round(height / rateWidth);  
        }else  
        {  
            param.width = Math.round(width / rateHeight);  
            param.height = maxHeight;  
        }  
    }  
      
    param.left = Math.round((maxWidth - param.width) / 2);  
    param.top = Math.round((maxHeight - param.height) / 2);  
    return param;  
}  
</script>


        <!-- Javascripts -->
        <script src="__ROOT__/Public/assets/plugins/jquery/jquery-2.1.3.min.js"></script>
        <script src="__ROOT__/Public/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="__ROOT__/Public/assets/plugins/pace-master/pace.min.js"></script>
        <script src="__ROOT__/Public/assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="__ROOT__/Public/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="__ROOT__/Public/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="__ROOT__/Public/assets/plugins/switchery/switchery.min.js"></script>
        <script src="__ROOT__/Public/assets/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="__ROOT__/Public/assets/plugins/offcanvasmenueffects/js/classie.js"></script>
        <script src="__ROOT__/Public/assets/plugins/offcanvasmenueffects/js/main.js"></script>
        <script src="__ROOT__/Public/assets/plugins/waves/waves.min.js"></script>
        <script src="__ROOT__/Public/assets/plugins/3d-bold-navigation/js/main.js"></script>
        <script src="__ROOT__/Public/assets/plugins/jquery-mockjax-master/jquery.mockjax.js"></script>
        <script src="__ROOT__/Public/assets/plugins/moment/moment.js"></script>
        <script src="__ROOT__/Public/assets/plugins/datatables/js/jquery.datatables.min.js"></script>
        <script src="__ROOT__/Public/assets/plugins/x-editable/bootstrap3-editable/js/bootstrap-editable.js"></script>
        <script src="__ROOT__/Public/__ROOT__/Public/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="__ROOT__/Public/assets/js/modern.min.js"></script>
        <script src="__ROOT__/Public/assets/js/pages/table-data.js"></script>
        
    </body>
</html>