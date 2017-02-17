<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        
        <!-- Title -->
        <title>E运达管理系统</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="E运达管理系统" />
        <meta name="keywords" content="admin,E运达管理系统" />
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
        
        <!-- Theme Styles -->
        <link href="__ROOT__/Public/assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
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
    <body class="page-error">
        <main class="page-content">
            <div class="page-inner">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-4 center">
                            <h1 class="text-xxl text-primary text-center">操作出错</h1>
                            <div class="details">
                            	<?php if(is_array($error)): $i = 0; $__LIST__ = $error;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$e): $mod = ($i % 2 );++$i;?><h1><?php echo ($e["msg"]); ?></h1>
                                <a href='<?php echo ($e["aim"]); ?>'>返回</a><?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
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
        <script src="__ROOT__/Public/assets/js/modern.min.js"></script>
        
    </body>
</html>