<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>柏运网</title>
    <meta charset="utf-8">
    <script src="__ROOT__/baiyun/Public/js/jquery-2.1.4.js"></script>
	<link rel="stylesheet" href="__ROOT__/baiyun/Public/css/button.css">
	<link rel="stylesheet" href="__ROOT__/baiyun/Public/css/bootstrap.css">
	<script src="__ROOT__/baiyun/Public/js/bootstrap.js"></script>
    <link rel="stylesheet" href="__ROOT__/baiyun/Public/css/authenticationstylesheet.css">
	<!-- 新 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- 可选的Bootstrap主题文件（一般不用引入） -->
	<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
	<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body>
<?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$l): $mod = ($i % 2 );++$i;?><div class="top">
		<ul id="top_ul">
			<a href=""><li id="gerenzhongxin">个人中心</li></a>
			<a href=""></a>
		</ul>
		<p id="top_text"><span class="glyphicon glyphicon-user"></span><?php echo ($l["username"]); ?><i id="phonenumber"><?php echo ($l["phone"]); ?></i>
		<?php if($l["iscarowner"] == 1): ?><i id="chezhurenzhen">车主认证</i> <?php else: endif; ?>，欢迎使用柏运物流！</p>
	</div><?php endforeach; endif; else: echo "" ;endif; ?>

	<div id="top_background" style="background:url('__ROOT__/baiyun/Public/img/background.png')">
		<img src="__ROOT__/baiyun/Public/img/logotext.png" id="logo_img">
		<ul class="litop">
			<a href="__ROOT__/baiyun/index.php/Goods/index.html" class="button button-uppercase button-primary">找货</a>
			<a href="__ROOT__/baiyun/index.php/Cars/index.html" class="button button-uppercase button-primary">找车</a>
			<a href="__ROOT__/baiyun/index.php/Publish/goods.html" class="button button-uppercase button-primary">发货</a>
			<a href="__ROOT__/baiyun/index.php/Publish/cars.html" class="button button-uppercase button-primary">发车</a>
			<a href="__ROOT__/baiyun/index.php/Renzheng/index.html" class="button button-uppercase button-primary">车主认证</a>
			<a href="__ROOT__/baiyun/index.php/MySelf/index.html" class="button button-uppercase button-primary">我的账户</a>
		</ul>
	</div>
	</Volist>

	<div id="top_meanu">
		<div id="top_button2">
			<a href="searchtruck.html">司机认证</a>
			<hr>
			<center style='margin-top:130px;'>
			<span style="font-size:80px;" class="glyphicon glyphicon-ok-sign"></span>
			<p style="margin-left:40px;height:80px;line-height:80px;">尊敬的百运客户，您已通过车主认证，祝您生活愉快！</p>
			</center>
		</div>
	</div>



	<div id="bot">
	    <div id="bot_inside">
			<img id="bot_img" src="__ROOT__/baiyun/Public/img/logo_bot.png">
			<p id="bot_text">Copyright@2015&nbsp;&nbsp;上海柏运物流版权所有&nbsp;&nbsp;&nbsp; powered by Nodex</p>
		</div>
	</div>

</body>

<script type="text/javascript">
	var file = function(files){
		files.click();
	}
</script>
</html>