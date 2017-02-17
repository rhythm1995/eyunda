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
                        <li class="active"><a href="__ROOT__/admin.php/Main/index.html" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>首页</p></a></li>
                        <li><a href="__ROOT__/admin.php/User/index.html" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-user"></span><p>用户管理</p></a></li>
                        <li><a href="__ROOT__/admin.php/Car/index.html" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-scale"></span><p>车辆管理</p></a></li>
                        <li><a href="__ROOT__/admin.php/Yundan/index.html" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-shopping-cart"></span><p>运单管理</p></a></li>
                        <li><a href="__ROOT__/admin.php/News/index.html" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-th"></span><p>咨询发布</p></a></li>
                        <li><a href="__ROOT__/admin.php/Shenhe/index.html" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-edit"></span><p>车辆审核</p></span></a></li>
                    </ul>
                </div><!-- Page Sidebar Inner -->
            </div><!-- Page Sidebar -->
            <div class="page-inner">
                <div class="page-title">
                    <h3>首页</h3>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <?php if(is_array($number)): $i = 0; $__LIST__ = $number;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$n): $mod = ($i % 2 );++$i;?><p class="counter"><?php echo ($n["count_user"]); ?></p><?php endforeach; endif; else: echo "" ;endif; ?>
                                        <span class="info-box-title">总用户量</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class="icon-users"></i>
                                    </div>
                                    <div class="info-box-progress">
                                        <div class="progress progress-xs progress-squared bs-n">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <p class="counter">3402300</p>
                                        <span class="info-box-title">总访问量</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class="icon-eye"></i>
                                    </div>
                                    <div class="info-box-progress">
                                        <div class="progress progress-xs progress-squared bs-n">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <?php if(is_array($number)): $i = 0; $__LIST__ = $number;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$n): $mod = ($i % 2 );++$i;?><p><span class="counter"><?php echo ($n["count_dan"]); ?></span></p><?php endforeach; endif; else: echo "" ;endif; ?>
                                        <span class="info-box-title">总成交运单量</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class="icon-basket"></i>
                                    </div>
                                    <div class="info-box-progress">
                                        <div class="progress progress-xs progress-squared bs-n">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <p class="counter">47500</p>
                                        <span class="info-box-title">总网站注册货车辆</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class=" icon-cursor"></i>
                                    </div>
                                    <div class="info-box-progress">
                                        <div class="progress progress-xs progress-squared bs-n">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <!-- Row -->

                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <?php if(is_array($number)): $i = 0; $__LIST__ = $number;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?><p class="counter"><?php echo ($c["count_newuser"]); ?></p><?php endforeach; endif; else: echo "" ;endif; ?>
                                        <span class="info-box-title">当月新增用户量</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class="icon-users"></i>
                                    </div>
                                    <div class="info-box-progress">
                                        <div class="progress progress-xs progress-squared bs-n">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <p class="counter">221230</p>
                                        <span class="info-box-title">当月新增访问量</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class="icon-eye"></i>
                                    </div>
                                    <div class="info-box-progress">
                                        <div class="progress progress-xs progress-squared bs-n">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <p><span class="counter">3,000</span></p>
                                        <span class="info-box-title">当月新增成交运单量</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class="icon-basket"></i>
                                    </div>
                                    <div class="info-box-progress">
                                        <div class="progress progress-xs progress-squared bs-n">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <p class="counter">500</p>
                                        <span class="info-box-title">当月新增注册货车辆</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class=" icon-cursor"></i>
                                    </div>
                                    <div class="info-box-progress">
                                        <div class="progress progress-xs progress-squared bs-n">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->

                    <div class="col-md-12">
                        <div class="panel panel-white">
                            <div class="panel-heading clearfix">
                                <h4 class="panel-title">各地区注册车辆数</h4>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>地区</th>
                                            <th>数量</th>
                                            <th>地区</th>
                                            <th>数量</th>
                                            <th>地区</th>
                                            <th>数量</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>北京</td>
                                            <td>1</td>
                                            <td>上海</td>
                                            <td>2</td>
                                            <td>天津</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>重庆</td>
                                            <td>2</td>
                                            <td>河北</td>
                                            <td>3</td>
                                            <td>山西</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>辽宁</td>
                                            <td>3</td>
                                            <td>吉林</td>
                                            <td>2</td>
                                            <td>黑龙江</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>江苏</td>
                                            <td>2</td>
                                            <td>浙江</td>
                                            <td>3</td>
                                            <td>安徽</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>福建</td>
                                            <td>1</td>
                                            <td>江西</td>
                                            <td>3</td>
                                            <td>山东</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>河南</td>
                                            <td>1</td>
                                            <td>河北</td>
                                            <td>3</td>
                                            <td>湖南</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>湖北</td>
                                            <td>1</td>
                                            <td>广东</td>
                                            <td>2</td>
                                            <td>海南</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>四川</td>
                                            <td>1</td>
                                            <td>贵州</td>
                                            <td>1</td>
                                            <td>云南</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>陕西</td>
                                            <td>1</td>
                                            <td>甘肃</td>
                                            <td>1</td>
                                            <td>青海</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>内蒙古</td>
                                            <td>1</td>
                                            <td>广西</td>
                                            <td>1</td>
                                            <td>宁夏</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>新疆</td>
                                            <td>1</td>
                                            <td>西藏</td>
                                            <td>1</td>
                                            <td>香港</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>澳门</td>
                                            <td>2</td>
                                            <td>台湾</td>
                                            <td>1</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>




        <!-- Javascripts -->
        <script src="__ROOT__/Public/assets/plugins/jquery/jquery-2.1.3.min.js"></script>
        <script src="__ROOT__/Public/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="__ROOT__/Public/assets/plugins/pace-master/pace.min.js"></script>
        <script src="__ROOT__/Public/assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="__ROOT__/Public/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="__ROOT__/Public/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="__ROOT__/Publicassets/plugins/switchery/switchery.min.js"></script>
        <script src="__ROOT__/Publicassets/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="__ROOT__/Publicassets/plugins/offcanvasmenueffects/js/classie.js"></script>
        <script src="__ROOT__/Publicassets/plugins/offcanvasmenueffects/js/main.js"></script>
        <script src="__ROOT__/Publicassets/plugins/waves/waves.min.js"></script>
        <script src="__ROOT__/Publicassets/plugins/3d-bold-navigation/js/main.js"></script>
        <script src="__ROOT__/Publicassets/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="__ROOT__/Publicassets/plugins/jquery-counterup/jquery.counterup.min.js"></script>
        <script src="__ROOT__/Publicassets/plugins/toastr/toastr.min.js"></script>
        <script src="__ROOT__/Publicassets/plugins/flot/jquery.flot.min.js"></script>
        <script src="__ROOT__/Publicassets/plugins/flot/jquery.flot.time.min.js"></script>
        <script src="__ROOT__/Publicassets/plugins/flot/jquery.flot.symbol.min.js"></script>
        <script src="__ROOT__/Publicassets/plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="__ROOT__/Publicassets/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="__ROOT__/Publicassets/plugins/curvedlines/curvedLines.js"></script>
        <script src="__ROOT__/Publicassets/plugins/metrojs/MetroJs.min.js"></script>
        <script src="__ROOT__/Publicassets/js/modern.js"></script>
        <script src="__ROOT__/Publicassets/js/pages/dashboard.js"></script>
        
    </body>
</html>