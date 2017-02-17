<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>柏运网</title>
    <meta charset="utf-8">
    <script src="__ROOT__/baiyun/Public/js/jquery-2.1.4.js"></script>
	<link rel="stylesheet" href="__ROOT__/baiyun/Public/css/button.css">
	<link rel="stylesheet" href="__ROOT__/baiyun/Public/css/bootstrap.css">
	<script src="__ROOT__/baiyun/Public/js/bootstrap.js"></script>
    <link rel="stylesheet" href="__ROOT__/baiyun/Public/css/searchgoodsstylesheet.css">
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
			<a href="__ROOT__/baiyun/index.php/Renzheng/cars.html" class="button button-uppercase button-primary">车主认证</a>
			<a href="__ROOT__/baiyun/index.php/MySelf/index.html" class="button button-uppercase button-primary">我的账户</a>
		</ul>
	</div>

		<div id="top_meanu">
			<div id="top_button">
				<a href="searchtruck.html">找货</a>
				<hr>
					<div id="ul_name">
						<div class="col-md-2">始发地</div>
						<div class="col-md-2">目的地</div>
						<div class="col-md-2">车型</div>
						
						<div class="col-md-4">货物重量</div>
					</div>

					<div id="all_form">
						<form class="form-inline" action="WebSearch.html" method="post">
							<div class="form-group" style="float:left">
								<label class="sr-only" for="exampleInputEmail3">北京市东城区</label>
								<input name='from' style="margin-right:5px;" type="text" class="form-control" id="exampleInputEmail3" placeholder="北京市东城区">
							</div>
							<div class="form-group" style="float:left">
								<label class="sr-only" for="exampleInputPassword3">北京市东城区</label>
								<input name="to" style="margin-right:5px;" type="text" class="form-control" id="exampleInputPassword3" placeholder="北京市东城区">
							</div>
							<select name="chexing" class="select" id="select1" style="margin-right:5px;" onfocus="change(document.getElementById('select1'))" onblur="lost(document.getElementById('select1'))">
								<option value="aaa">不限</option>
								<option value="aaa">平板车</option>
								<option value="aaa">工程车</option>
								<option value="aaa">罐车</option>
								<option value="aaa">集装箱运输车</option>
								<option value="aaa">冷藏车</option>
								<option value="aaa">面包车</option>
								<option value="aaa">爬梯车</option>
								<option value="aaa">商品车运输车</option>
								<option value="aaa">厢式货车</option>
								<option value="aaa">自卸车</option>
								<option value="aaa">其他车</option>
							</select>
							<select name="zaizhonng" class="select" id="select3" style="margin-right:5px;" onclick="" onfocus="change(document.getElementById('select3'))" onblur="lost(document.getElementById('select3'))">
								<option value="aaa">不限</option>
								<option value="aaa">2吨</option>
								<option value="aaa">2-4吨</option>
								<option value="aaa">4-8吨</option>
								<option value="aaa">8-12吨</option>
								<option value="aaa">12-16吨</option>
								<option value="aaa">16-20吨</option>
								<option value="aaa">20-25吨</option>
								<option value="aaa">25-30吨</option>
								<option value="aaa">30吨以上</option>
							</select>
							<input type="submit"  class="button button-primary button-pill button-small" id="search_button" value="搜索" />
						</form>
					</div>
				</div>

			<div id="fenjie">
			</div>

		<div id="search_final">
			<div id="search_menu">
				<div class="col-md-2">始发地</div>
				<div class="col-md-2">目的地</div>
				<div class="col-md-2">货物分类</div>
				<div class="col-md-1">车型要求</div>
				<div class="col-md-1">重量/体积</div>
				<div class="col-md-1">发布时间</div>
				<div class="col-md-1">发布人</div>
			</div>
			<hr>
			<?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$g): $mod = ($i % 2 );++$i;?><div class="search_result">
				<div class="col-md-2"><?php echo ($g["from"]); ?></div>
				<div class="col-md-2"><?php echo ($g["to"]); ?></div>
				<div class="col-md-2"><?php echo ($g["goodname"]); ?></div>
				<div class="col-md-1"><?php echo ($g["needcar"]); ?></div>
				<div class="col-md-1"><?php echo ($g["goodnumber"]); ?></div>
				<div class="col-md-1"><?php echo ($g["createtime"]); ?></div>
				<div class="col-md-1"><?php echo ($g["username"]); ?> <?php echo ($g["phonenumber"]); ?></div>
			</div>
			<hr><?php endforeach; endif; else: echo "" ;endif; ?>

			
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
	var change = function(slkt){
		slkt.style.border="solid 1px rgb(76,176,249)";
		slkt.style.boxShadow="0px 0px 8px 1px #99cbef"
	}
	var lost  = function(slkt){
		slkt.style.border="solid 1px #ccc";
		slkt.style.boxShadow="0px 0px 1px 1px #f3f3f3 inset"
	}
</script>