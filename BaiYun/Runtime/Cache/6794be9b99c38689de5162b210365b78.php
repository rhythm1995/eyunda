<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>柏运网</title>
    <meta charset="utf-8">
    <script src="__ROOT__/baiyun/Public/js/jquery-2.1.4.js"></script>
	<link rel="stylesheet" href="__ROOT__/baiyun/Public/css/button.css">
	<link rel="stylesheet" href="__ROOT__/baiyun/Public/css/bootstrap.css">
	<script src="__ROOT__/baiyun/Public/js/bootstrap.js"></script>
    <link rel="stylesheet" href="__ROOT__/baiyun/Public/css/searchtruckstylesheet.css">
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

	<div id="top_background" style="background-image:url('__ROOT__/baiyun/Public/img/background.png');">
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

		<div id="top_meanu">
			<div id="top_button">
				<a href="searchtruck.html">找车</a>
				<hr>
				<div id="search">
					<div id="shifadi">
						<form id="fm" class="form-inline" action="WebSearch" method="Post">
							<div class="form-group">
								<label for="exampleInputName2">始发地:</label>
								<input name="from" type="text" class="form-control" id="exampleInputName2" placeholder="北京市东城区">
							</div>
							<img src="__ROOT__/baiyun/Public/img/find_img.png">
							<div class="form-group">
								<label for="exampleInputEmail2">目的地:</label>
								<input name="to" type="email" class="form-control" id="exampleInputEmail2" placeholder="北京市东城区">
								<input name="chexing" id="chexing" type="hidden">
								<input name="banchang" id="banchang" type="hidden">
								<input name="zaizhong" id="zaizhong" type="hidden">
							</div>
							<input type="submit" class="button button-primary button-pill button-small" id="search_button" value="查询" />
						</form>
					</div>
					<hr>
					<div id="all_3ul">
						<div class="all_ul">
							车辆类型:
							<button class="cho" onclick="onchoicea(document.getElementById('buxian'))" id="buxian" onblur="onlost(document.getElementById('buxian'))">不限</button>
							<button class="cho" onclick="onchoicea(document.getElementById('pingbanche'))" id="pingbanche" onblur="onlost(document.getElementById('pingbanche'))" id="pingbanche">平板车</button>
							<button class="cho" onclick="onchoicea(document.getElementById('gongchengche'))" id="gongchengche" onblur="onlost(document.getElementById('gongchengche'))" id="gongchengche">工程车</button>
							<button class="cho" onclick="onchoicea(document.getElementById('guanche'))" id="guanche" onblur="onlost(document.getElementById('guanche'))" id="guanche">罐车</button>
							<button class="cho" onclick="onchoicea(document.getElementById('jizhuangxianghuoyunche'))"
							onblur="onlost(document.getElementById('jizhuangxianghuoyunche'))" id="jizhuangxianghuoyunche">集装箱运输车</button>
							<button class="cho" onclick="onchoicea(document.getElementById('lengcangche'))" id="lengcangche" onblur="onlost(document.getElementById('lengcangche'))" id="lengcangche">冷藏车</button>
							<button class="cho" onclick="onchoicea(document.getElementById('mianbaoche'))" id="mianbaoche" onblur="onlost(document.getElementById('mianbaoche'))" id="mianbaoche">面包车</button>
							<button class="cho" onclick="onchoicea(document.getElementById('patiche'))" onblur="onlost(document.getElementById('patiche'))" id="patiche">爬梯车</button>
							<button class="cho" onclick="onchoicea(document.getElementById('shangyongpingyunshuche'))" onblur="onlost(document.getElementById('shangyongpingyunshuche'))" id="shangyongpingyunshuche">商品车运输车</button>
							<button class="cho" onclick="onchoicea(document.getElementById('xiangshihuoche'))" id="xiangshihuoche" onblur="onlost(document.getElementById('xiangshihuoche'))" id="xiangshihuoche">厢式货车</button>
							<button class="cho" onclick="onchoicea(document.getElementById('zixieche'))" onblur="onlost(document.getElementById('zixieche'))" id="zixieche">自卸车</button>
						</div>
						<style type="text/css">
						.cho{margin-top:2px;margin-left: 5px;margin-right: 5px;padding-left: 2px;padding-right: 2px;padding-top: 1px;padding-bottom: 1px;border-radius: 2px;border:none;}
						</style>
						
						<hr>
						<div class="all_ul">
							车板长度：
							<button class="cho" onclick="onchoiceb(document.getElementById('buxiancheliang'))" onblur="onlost(document.getElementById('buxiancheliang'))" id="buxiancheliang">不限</button>
							<button class="cho" onclick="onchoiceb(document.getElementById('28mi'))" onblur="onlost(document.getElementById('28mi'))" id="28mi">2.8米</button>
							<button class="cho" onclick="onchoiceb(document.getElementById('38mi'))" onblur="onlost(document.getElementById('38mi'))" id="38mi">3.8米</button>
							<button class="cho" onclick="onchoiceb(document.getElementById('42mi'))" onblur="onlost(document.getElementById('42mi'))" id="42mi">4.2米</button>
							<button class="cho" onclick="onchoiceb(document.getElementById('51mi'))" onblur="onlost(document.getElementById('51mi'))" id="51mi">5.1米</button>
							<button class="cho" onclick="onchoiceb(document.getElementById('61mi'))" onblur="onlost(document.getElementById('61mi'))" id="61mi">6.1米</button>
							<button class="cho" onclick="onchoiceb(document.getElementById('72mi'))" onblur="onlost(document.getElementById('72mi'))" id="72mi">7.2米</button>
							<button class="cho" onclick="onchoiceb(document.getElementById('81mi'))" onblur="onlost(document.getElementById('81mi'))" id="81mi">8.1米</button>
							<button class="cho" onclick="onchoiceb(document.getElementById('96mi'))" onblur="onlost(document.getElementById('96mi'))" id="96mi">9.6米</button>
							<button class="cho" onclick="onchoiceb(document.getElementById('125mi'))" onblur="onlost(document.getElementById('125mi'))" id="125mi">12.5米</button>
							<button class="cho" onclick="onchoiceb(document.getElementById('130mi'))" onblur="onlost(document.getElementById('130mi'))" id="130mi">13米</button>
							<button class="cho" onclick="onchoiceb(document.getElementById('160mi'))" onblur="onlost(document.getElementById('160mi'))" id="160mi">16米</button>
							<button class="cho" onclick="onchoiceb(document.getElementById('6miyixia'))" onblur="onlost(document.getElementById('6miyixia'))" id="6miyixia">6米以下</button>
							<button class="cho" onclick="onchoiceb(document.getElementById('6dao9'))" onblur="onlost(document.getElementById('6dao9'))" id="6dao9">6-9米</button>
							<button class="cho" onclick="onchoiceb(document.getElementById('9dao12'))" onblur="onlost(document.getElementById('9dao12'))" id="9dao12">9-12米</button>
							<button class="cho" onclick="onchoiceb(document.getElementById('12dao15'))" onblur="onlost(document.getElementById('12dao15'))" id="12dao15">12-15米</button>
							<button class="cho" onclick="onchoiceb(document.getElementById('15dao18'))" onblur="onlost(document.getElementById('15dao18'))" id="15dao18">15-18米</button>
							<button class="cho" onclick="onchoiceb(document.getElementById('18dao21'))" onblur="onlost(document.getElementById('18dao21'))" id="18dao21">18-21米</button>
							<button class="cho" onclick="onchoiceb(document.getElementById('21miyishang'))" onblur="onlost(document.getElementById('21miyishang'))" id="21miyishang">21米以上</button>
						</div>
						<hr>
						<div class="all_ul">
							载重：
							<button class="cho" onclick="onchoicec(document.getElementById('buxianzaizhong'))" onblur="onlost(document.getElementById('buxianzaizhong'))" id="buxianzaizhong">不限</button>
							<button class="cho" onclick="onchoicec(document.getElementById('2t'))" onblur="onlost(document.getElementById('2t'))" id="2t">2吨</button>
							<button class="cho" onclick="onchoicec(document.getElementById('2dao4t'))" onblur="onlost(document.getElementById('2dao4t'))" id="2dao4t">2-4吨</button>
							<button class="cho" onclick="onchoicec(document.getElementById('4dao8t'))" onblur="onlost(document.getElementById('4dao8t'))" id="4dao8t">4到8吨</button>
							<button class="cho" onclick="onchoicec(document.getElementById('8dao12t'))" onblur="onlost(document.getElementById('8dao12t'))" id="8dao12t">8到12吨</button>
							<button class="cho" onclick="onchoicec(document.getElementById('12dao16t'))" onblur="onlost(document.getElementById('12dao16t'))" id="12dao16t">12到16吨</button>
							<button class="cho" onclick="onchoicec(document.getElementById('16dao20t'))" onblur="onlost(document.getElementById('16dao20t'))" id="16dao20t">16-20吨</button>
							<button class="cho" onclick="onchoicec(document.getElementById('20dao25t'))" onblur="onlost(document.getElementById('20dao25t'))" id="20dao25t">20-25吨</button>
							<button class="cho" onclick="onchoicec(document.getElementById('25dao30t'))" onblur="onlost(document.getElementById('25dao30t'))" id="25dao30t">25到30吨</button>
							<button class="cho" onclick="onchoicec(document.getElementById('30tyishang'))" onblur="onlost(document.getElementById('30tyishang'))" id="30tyishang">30吨以上</button>
						</div>
					</div>
					<script type="text/javascript">
						var onchoicea = function(object){
								object.style.background="RGB(27,154,247);";
								object.style.color="#fff";
								document.getElementById('chexing').value=object.innerText;
								document.getElementById('fm').submit();
						} 
						var onchoiceb = function(object){
								object.style.background="RGB(27,154,247);";
								object.style.color="#fff";
								document.getElementById('banchang').value=object.innerText;
								document.getElementById('fm').submit();
						} 
						var onchoicec = function(object){
								object.style.background="RGB(27,154,247);";
								object.style.color="#fff";
								document.getElementById('zaizhong').value=object.innerText;
								document.getElementById('fm').submit();
						} 
						var onlost = function(object){
								object.style.background="RGB(240,240,240)";
								object.style.color="#000";
						}
						</script>
				</div>
			</div>

			<div id="fenjie">
			</div>

			<div id="search_final">
				<div id="search_menu">
					<div class="col-md-1"></div>
					<div class="col-md-2">车辆信息</div>
					<div class="col-md-3"></div>
					<div class="col-md-1"></div>
					<div class="col-md-3">位置信息</div>
					<div class="col-md-2">操作</div>
				</div>
				<?php if(is_array($car)): $i = 0; $__LIST__ = $car;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?><div class="one_final">
					<br>
					<div class="col-md-1"></div>
					<div class="col-md-2"><?php echo ($c["username"]); ?></div>
					<div class="col-md-3"><?php echo ($c["chexing"]); ?> | <?php echo ($c["banchang"]); ?>米 | <?php echo ($c["zaizhong"]); ?>吨</div>
					<div class="col-md-1"></div>
					<div class="col-md-3"></div>
					<a href="one/id/<?php echo ($c["id"]); ?>.html">
					<div class="col-md-2"><span class="glyphicon glyphicon-option-horizontal"></span></div>
					</a>
					<div class="col-md-1"></div>
					<div class="col-md-2"><?php echo ($c["phonenumber"]); ?></div>
					<div class="col-md-3"><?php echo ($c["from"]); ?> —— <?php echo ($c["to"]); ?></div>
					<div class="col-md-6"><?php echo ($c["createtime"]); ?></div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>

	<div id="bot">
	    <div id="bot_inside">
			<img id="bot_img" src="__ROOT__/baiyun/Public/img/logo_bot.png">
			<p id="bot_text">Copyright@2015&nbsp;&nbsp;上海柏运物流版权所有&nbsp;&nbsp;&nbsp; powered by Nodex</p>
		</div>
	</div>

</body>
</html>