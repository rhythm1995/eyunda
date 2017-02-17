<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <title>柏运网</title>
    <meta charset="utf-8">
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="__ROOT__/baiyun/Public/css/bootstrap.css">
    <!-- 可选的Bootstrap主题文件（一般不用引入） -->
    <link rel="stylesheet" href="__ROOT__/baiyun/Public/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="__ROOT__/baiyun/Public/css/button.css">
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="__ROOT__/baiyun/Public/js/jquery.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="__ROOT__/baiyun/Public/js/bootstrap.js"></script>
    <script src="https://cdn1.lncld.net/static/js/av-mini-0.5.5.js"></script>
    <script src="https://cdn1.lncld.net/static/js/av-core-mini-0.5.5.js"></script>
    <script type="text/javascript">
      AV.initialize("1z946wrdpudl4b5vh30e5rgbnzngsi6g7xpe14mlpk27r7z9", "ulbpsv497wuubhpappxai4mc8s9676k41zuysk7xlkgxjyh8");
    </script>
</head>
<body style="margin:0px;">
<div style="width:100%;height:100px;box-shadow:0px 0px 5px 2px rgb(76,176,249);position:fixed;z-index:1000;background:#fff;border-bottom:solid 2px rgb(76,176,249);">
	<div style="width:20%;height:30px;position:fixed;background:rgb(38,172,255);left:70%;top:0px;border-radius:5px;color:#fff;text-align:center;font-family:微软雅黑;font-size:14px;">
		<a href=""><p style="color:#fff;font-family:微软雅黑;font-size:14px;margin:0px;float:left;line-height:30px;margin-left:20px;">收藏 | </p></a>
		<a href=""><p style="color:#fff;font-family:微软雅黑;font-size:14px;margin:0px;float:left;line-height:30px;"> 关注微信</p></a>
		<a href=""><p style="color:#fff;font-family:微软雅黑;font-size:14px;margin:0px;line-height:30px;float:right;margin-right:20px;">
		<span class="glyphicon glyphicon-earphone"></span>
		  服务热线
		</p></a>
	</div>
	<img style="width:220;height:50px;margin-top:25px;margin-left:10%;" src="__ROOT__/baiyun/Public/img/logo/logo.png">
	<ul style="float:right;display:inline-block;height:50px;margin-top:68px;margin-right:8%;">
		<li class="button button-primary button-square button-small" style="width:100px;">首页</li>
		<li class="button button-primary button-square button-small" style="width:100px;">产品中心</li>
		<li class="button button-primary button-square button-small" style="width:100px;">公司简介</li>
		<li class="button button-primary button-square button-small" style="width:100px;">资讯中心</li>
		<li class="button button-primary button-square button-small" style="width:100px;">商务合作</li>
	</ul>
</div>
<div id="myCarousel" class="carousel slide" style="height:281px;width:100%;position:absolute;top:100px;">
   <!-- 轮播（Carousel）指标 -->
   <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
   </ol>   
   <!-- 轮播（Carousel）项目 -->
   <div class="carousel-inner">
      <div class="item active">
         <img style="height:280px;width:100%;" src="__ROOT__/baiyun/Public/img/banner9.jpg" alt="First slide">
      </div>
      <div class="item">
         <img style="height:280px;width:100%" src="__ROOT__/baiyun/Public/img/banner9.jpg" alt="Second slide">
      </div>
      <div class="item">
         <img style="height:280px;width:100%" src="__ROOT__/baiyun/Public/img/banner9.jpg" alt="Third slide">
      </div>
   </div>
   <!-- 轮播（Carousel）导航 -->
   <a class="carousel-control left" style='font-size:180px;background:#ddd;width:50px;' href="#myCarousel" 
      data-slide="prev">&lsaquo;</a>
   <a class="carousel-control right" style='font-size:180px;background:#ddd;width:50px;' href="#myCarousel" 
      data-slide="next">&rsaquo;</a>
</div> 
<div style="width:100%;height:50px;background:#f0f0f0;position:absolute;top:380;">
	<button class="button button-3d button-action button-pill" style="height:30px;width:150px;margin-top:10px;margin-left:10%;" onclick="openDiv(document.getElementById('Div_login'))">登陆</button>
	<button class="button button-3d button-action button-pill" style="height:30px;width:150px;margin-top:10px;" onclick="openDiv(document.getElementById('Div_Register'))">注册</button>
	<?php if(is_array($number)): $i = 0; $__LIST__ = $number;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$n): $mod = ($i % 2 );++$i;?><strong style="float:right;margin-right:10%;line-height:50px;">在线车源:<?php echo ($n["car"]); ?></strong><strong style="float:right;line-height:50px;">在线货源:<?php echo ($n["goods"]); ?></strong><?php endforeach; endif; else: echo "" ;endif; ?>
</div>





<div id="Div_login" style="width:100%;height:1000px;z-index:100000;position:fixed;background:#fff;opacity:0.9;display:none;">
  <div class="glyphicon glyphicon-remove-circle" style="color:#ff7c7c;float:right;font-size:30px;margin-top:20px;margin-right:10%;" onclick="closeDiv(document.getElementById('Div_login'))"></div>
  <center>
  <p style="width:100%;height:50px;margin-top:50px;font-size:40px;font-weight:bolder;font-family:微软雅黑;">登录</p>
  <P style="margin-top:30px;font-family:微软雅黑;font-weight:bolder;">使用你的账号登录</P>
  <form id="form_Log" style="margin-top:20px;" method="POST" action="__ROOT__/baiyun/index.php/Log/UserLogin">
    <input class="button button-pill button-primary" name="phonenumber" id="log_mail" type="text" placeholder="邮箱" style="height:40px;width:30%;"><br>
    <input class="button button-pill button-primary" name="token" id="log_pwd" type="password" placeholder="密码" style="height:40px;width:30%;margin-top:10px;">
  </form><br>
  <button class="button button-3d button-action button-pill" style="width:30%;height:40px;margin-bottom:10px;" onclick = "Log_Check(document.all['log_mail'],document.all['log_pwd'])">登录</button><br>
  <a href="" style="margin-top:15px;font-family:微软雅黑;font-weight:bolder;">忘记密码</a><br>
  <a href="" style="margin-top:15px;font-family:微软雅黑;font-weight:bolder;">还没有账号,点击注册</a><br>
  <button class="button button-3d button-action button-pill" style="margin-top:15px;width:30%;height:40px;" onclick="openDiv(document.getElementById('Div_Register'))">创建账号</button>
  </center>
</div>





<div id="Div_Register" style="width:100%;height:1000px;z-index:100000;position:fixed;background:#fff;opacity:0.9;display:none;">
	<div class="glyphicon glyphicon-remove-circle" style="color:#ff7c7c;float:right;font-size:30px;margin-top:20px;margin-right:10%;" onclick="closeDiv(document.getElementById('Div_Register'))"></div>
  <center>
  <p style="width:100%;height:50px;margin-top:50px;font-size:40px;font-weight:bolder;font-family:微软雅黑;">注册</p>
  <P id="msg_tip" style="margin-top:30px;font-family:微软雅黑;font-weight:bolder;">创建一个新的账号</P>
  <form id="form_reg" style="margin-top:20px;" method="POST" action="__ROOT__/baiyun/index.php/Log/UserRegister">
    <input id="name" placeholder="姓名" name="username" type="text" class="button button-pill button-primary" style="margin-top:5px;width:30%;height:40px;"><br>
    <input id="pwd" placeholder="密码" name="password" type="password" class="button button-pill button-primary" style="margin-top:5px;width:30%;height:40px;"><br>
    <input id="pwd_" placeholder="验证密码"  type="password" class="button button-pill button-primary" style="margin-top:5px;width:30%;height:40px;"><br>
    <input id="phone" placeholder="电话号码" name="phonenumber" class="button button-pill button-primary" style="margin-top:5px;width:30%;height:40px;"><br>
    </form>
    <input id="mod" placeholder="验证码" name="mod" class="button button-pill button-primary" style="margin-top:5px;width:15%;height:40px;">
    <button class="button button-3d button-action button-pill" style="margin-top:15px;width:15%;height:40px;" onclick="modify(document.getElementById('phone'))">获取验证码</button><br><br>
   
    <script type="text/javascript">
    var modify=function(phonenumber){

      var phone = phonenumber.value;
      AV.Cloud.requestSmsCode(phone).then(function(){
           document.getElementById('msg_tip').innerText="验证码已发送至您的手机";
      }, function(err){
             document.getElementById('msg_tip').innerText="验证码发送失败，请重试";
      });

    } 
    </script>


  <button class="button button-3d button-action button-pill" style="width:30%;height:40px;margin-bottom:10px;" onclick="Reg_Check(document.all['name'],document.getElementById('pwd'),document.all['pwd_'],document.all['phone'],document.all['mail']);">立即注册</button><br>
  <a href="" style="margin-top:15px;font-family:微软雅黑;font-weight:bolder;margin-top:10px;">已有账号？</a><br>
  <button class="button button-3d button-action button-pill" style="margin-top:15px;width:30%;height:40px;" onclick="openDiv(document.getElementById('Div_login'))">登录</button>
  </center>
</div>






<div style="width:100%;position:absolute;top:430;height:400px;">
	<div style="width:39%;height:400px;margin-left:10%;border:solid 2px rgb(38,172,255);float:left;margin-top:10px;border-top:solid 5px rgb(38,172,255);">
		<div class="bar" style="background:rgb(38,172,255);color:#fff;width:100%;">找车找货</div>
		<div style="width:100%;height:350px;margin-top:42px;">
			<div id="Div_zhaoche">
				<p style="float:left;text-align:center;width:100%;font-size:20px;margin-top:15px;font-family:微软雅黑;">全国<a style="color:#ff0000;">运费最低</a>!发货<a style="color:#ff0000;">流程最短</a>！不信试试</p>
				<form style="width:80%;margin-left:10%;">
					出发城市:<Select>
						<option>广东</option>
						<option>北京</option>
					</Select>
					<select>
						<option>东莞</option>
						<option>佛山</option>
					</select><br>
					<br>
					到达城市:<Select>
						<option>广东</option>
						<option>北京</option>
					</Select>
					<select>
						<option>东莞</option>
						<option>佛山</option>
					</select><br>
				</form>
				<button style="margin-left:20%;width:60%;float:bottom;" class="button button-3d button-primary button-rounded">查找</button>
				<div>
					
				</div>
			</div>
			<div id="Div_zhaohuo">
				
			</div>
		</div>
	</div>
	<div style="width:39%;height:400px;margin-right:10%;border:solid 2px rgb(38,172,255);float:right;margin-top:10px;border-top:solid 5px rgb(38,172,255);">
		<div class="bar_nav" id="bar_car" onclick="changeDiv(document.getElementById('Div_cheyuan'),document.getElementById('Div_huoyuan'),document.getElementById('bar_car'),document.getElementById('bar_goods'));">全国车源</div><div class="bar" id="bar_goods" onclick="changeDiv(document.getElementById('Div_huoyuan'),document.getElementById('Div_cheyuan'),document.getElementById('bar_goods'),document.getElementById('bar_car'));">全国货源</div>
		<div style="width:100%;height:350px;margin-top:42px;">
			<div id="Div_cheyuan">
				 <table class="table" style="margin:0px;">
      				<tr><td>车型</td><td>板长</td><td>载重</td><td>车龄</td><td>发出地</td><td>目的地</td><td>更多</td></tr>
      				<?php if(is_array($cars)): $i = 0; $__LIST__ = $cars;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?><tr><td><?php echo ($c["chexing"]); ?></td><td><?php echo ($c["banchang"]); ?>米</td><td><?php echo ($c["zaizhong"]); ?>吨</td><td><?php echo ($c["cheling"]); ?>年</td><td><?php echo ($c["fromprovince"]); echo ($c["fromcity"]); ?></td><td><?php echo ($c["toprovince"]); echo ($c["tocity"]); ?></td><td><a href="#">详细</a></td></tr><?php endforeach; endif; else: echo "" ;endif; ?>
      			</table>
      				<a href="#"><div style="text-align:center;width:100%;color:rgb(38,172,255);margin_top:5px;" onclick="openDiv(document.getElementById('Div_login'))">登录，可查看更多</div></a>
      			
			</div >
			<div id="Div_huoyuan" style="display:none;">
				<!--货主可以在上面免费发布货运信息，一条完整的信息包括：起始地、目的地、货物品名/类别、数量/重量/体积、需要车型、装货时间、到达时间、特殊要求-->
				<table class="table" style="margin:0px;">
      				<tr><td>起始地</td><td>目的地</td><td>货物</td><td>量</td><td>车型</td><td>装货时间</td><td>更多</td></tr>
      				<?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$g): $mod = ($i % 2 );++$i;?><tr><td><?php echo ($c["chexing"]); ?></td><td><?php echo ($c["banchang"]); ?>米</td><td><?php echo ($c["zaizhong"]); ?>吨</td><td><?php echo ($c["cheling"]); ?>年</td><td><?php echo ($c["fromprovince"]); echo ($c["fromcity"]); ?></td><td><?php echo ($c["toprovince"]); echo ($c["tocity"]); ?></td><td><a href="#">详细</a></td></tr><?php endforeach; endif; else: echo "" ;endif; ?>
      			</table>
      			<a href="#"><div style="text-align:center;width:100%;color:rgb(38,172,255);margin_top:5px;" onclick="openDiv(document.getElementById('Div_login'))">登录，可查看更多</div></a>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	changeDiv = function(open,close,bg,bg_){
		openDiv(open);
		bg.style.background = "rgb(38,172,255)";
		bg.style.color = "#fff";
		closeDiv(close);
		bg_.style.background = "#fff";
		bg_.style.color = "rgb(38,172,255)";
	}
</script>
<style type="text/css">
	.bar{
		width:50%;height:40px;background:#fff;color:rgb(38,172,255);float:left;border-bottom: solid 2px rgb(38,172,255);text-align:center;line-height:40px;font-weight:bolder;font-family: 微软雅黑;
		font-size: 18px;
	}
	.bar_nav{
		width:50%;height:40px;background:#fff;color:rgb(38,172,255);float:left;border-bottom: solid 2px rgb(38,172,255));text-align:center;line-height:40px;font-weight:bolder;font-family: 微软雅黑;
		background:rgb(38,172,255);color:#fff;font-size: 18px;
	}
	.bar:hover{
		width:50%;height:40px;background:rgb(38,172,255);color:#fff;float:left;
	}
</style>


<div style="width:100%;height:80px;background:rgb(31,31,31);position:absolute;top:850px;border-top:solid 2px #464563;">
	<img src=""><p style="float:left;height:60px;line-height:60px;margin-left:10%;font-size:15px;font-family:微软雅黑;color:#fff;">Copyright (C) 2012-2016 中国 柏运物流版权所有 Powered by www.baiyun.com (ICP备1045987号-1号)</p>
</div>

</body>
<style type="text/css">
	.top_li{
		text-align: center;
		display: inline-block;
		font-weight:bolder;
		font-size:20px;
		font-family: 黑体;
		color:rgb(38,172,255));
		width:120px;
	}
	.top_li:hover{
		background:rgb(38,172,255);
		color:#fff;
	}
</style>
<script type="text/javascript">
  openDiv = function(div){
    div.style.display = 'block';
  }
  closeDiv = function(div){
     div.style.display = 'none';
  }
</script>
<script type="text/javascript">
  Reg_Check = function(name,pwd,pwd_,phone,mail){
  	document.getElementById('msg_tip').style.color = "#ff0000";
    if(name.value==""){
      document.getElementById('msg_tip').innerText = "姓名不能为空";
    }else{
      if (name.value.length<2) {
        document.getElementById('msg_tip').innerText = "请填写真实姓名";
      }else{
        if(pwd.value==""){
        document.getElementById('msg_tip').innerText ="密码不能为空";
        }else{
          if(pwd.value.length>16){
          document.getElementById('msg_tip').innerText="密码不能多于16个字符";
          }else{
            if (pwd.value.length<8){
              document.getElementById('msg_tip').innerText="密码不能少于8个字符";
            }else{
              if(pwd.value!==pwd_.value){
                document.getElementById('msg_tip').innerText="输入密码不相符";
              }else{
                if(phone.value==""){
                  document.getElementById('msg_tip').innerText="请输入手机号码";
                }else{
                  var phone_check = /^1\d{10}$/;
                  if (!(phone_check.test(phone.value))){
                    document.getElementById('msg_tip').innerText="请输入正确的手机号码";
                  }else{
                    AV.Cloud.verifySmsCode(document.getElementById('mod').value, document.getElementById('phone').value).then(function(){
                        //验证成功
                        document.getElementById('form_reg').submit();
                        }, function(err){
                         document.getElementById('msg_tip').innerText="验证码错误";
                      });
                  }
                }
              }
            }
          }
        }
      }
    }
  }
</script>
<script type="text/javascript">
  var hex_chr = "0123456789abcdef"; 
function rhex(num) 
{ 
str = ""; 
for(j = 0; j <= 3; j++) 
str += hex_chr.charAt((num >> (j * 8 + 4)) & 0x0F) + 
hex_chr.charAt((num >> (j * 8)) & 0x0F); 
return str; 
} 
function str2blks_MD5(str) 
{ 
nblk = ((str.length + 8) >> 6) + 1; 
blks = new Array(nblk * 16); 
for(i = 0; i < nblk * 16; i++) blks[i] = 0; 
for(i = 0; i < str.length; i++) 
blks[i >> 2] |= str.charCodeAt(i) << ((i % 4) * 8); 
blks[i >> 2] |= 0x80 << ((i % 4) * 8); 
blks[nblk * 16 - 2] = str.length * 8; 
return blks; 
} 
function add(x, y) 
{ 
var lsw = (x & 0xFFFF) + (y & 0xFFFF); 
var msw = (x >> 16) + (y >> 16) + (lsw >> 16); 
return (msw << 16) | (lsw & 0xFFFF); 
} 
function rol(num, cnt) 
{ 
return (num << cnt) | (num >>> (32 - cnt)); 
} 
function cmn(q, a, b, x, s, t) 
{ 
return add(rol(add(add(a, q), add(x, t)), s), b); 
} 
function ff(a, b, c, d, x, s, t) 
{ 
return cmn((b & c) | ((~b) & d), a, b, x, s, t); 
} 
function gg(a, b, c, d, x, s, t) 
{ 
return cmn((b & d) | (c & (~d)), a, b, x, s, t); 
} 
function hh(a, b, c, d, x, s, t) 
{ 
return cmn(b ^ c ^ d, a, b, x, s, t); 
} 
function ii(a, b, c, d, x, s, t) 
{ 
return cmn(c ^ (b | (~d)), a, b, x, s, t); 
} 
function MD5(str) 
{ 
x = str2blks_MD5(str); 
var a = 1732584193; 
var b = -271733879; 
var c = -1732584194; 
var d = 271733878; 
for(i = 0; i < x.length; i += 16) 
{ 
var olda = a; 
var oldb = b; 
var oldc = c; 
var oldd = d; 
a = ff(a, b, c, d, x[i+ 0], 7 , -680876936); 
d = ff(d, a, b, c, x[i+ 1], 12, -389564586); 
c = ff(c, d, a, b, x[i+ 2], 17, 606105819); 
b = ff(b, c, d, a, x[i+ 3], 22, -1044525330); 
a = ff(a, b, c, d, x[i+ 4], 7 , -176418897); 
d = ff(d, a, b, c, x[i+ 5], 12, 1200080426); 
c = ff(c, d, a, b, x[i+ 6], 17, -1473231341); 
b = ff(b, c, d, a, x[i+ 7], 22, -45705983); 
a = ff(a, b, c, d, x[i+ 8], 7 , 1770035416); 
d = ff(d, a, b, c, x[i+ 9], 12, -1958414417); 
c = ff(c, d, a, b, x[i+10], 17, -42063); 
b = ff(b, c, d, a, x[i+11], 22, -1990404162); 
a = ff(a, b, c, d, x[i+12], 7 , 1804603682); 
d = ff(d, a, b, c, x[i+13], 12, -40341101); 
c = ff(c, d, a, b, x[i+14], 17, -1502002290); 
b = ff(b, c, d, a, x[i+15], 22, 1236535329); 
a = gg(a, b, c, d, x[i+ 1], 5 , -165796510); 
d = gg(d, a, b, c, x[i+ 6], 9 , -1069501632); 
c = gg(c, d, a, b, x[i+11], 14, 643717713); 
b = gg(b, c, d, a, x[i+ 0], 20, -373897302); 
a = gg(a, b, c, d, x[i+ 5], 5 , -701558691); 
d = gg(d, a, b, c, x[i+10], 9 , 38016083); 
c = gg(c, d, a, b, x[i+15], 14, -660478335); 
b = gg(b, c, d, a, x[i+ 4], 20, -405537848); 
a = gg(a, b, c, d, x[i+ 9], 5 , 568446438); 
d = gg(d, a, b, c, x[i+14], 9 , -1019803690); 
c = gg(c, d, a, b, x[i+ 3], 14, -187363961); 
b = gg(b, c, d, a, x[i+ 8], 20, 1163531501); 
a = gg(a, b, c, d, x[i+13], 5 , -1444681467); 
d = gg(d, a, b, c, x[i+ 2], 9 , -51403784); 
c = gg(c, d, a, b, x[i+ 7], 14, 1735328473); 
b = gg(b, c, d, a, x[i+12], 20, -1926607734); 
a = hh(a, b, c, d, x[i+ 5], 4 , -378558); 
d = hh(d, a, b, c, x[i+ 8], 11, -2022574463); 
c = hh(c, d, a, b, x[i+11], 16, 1839030562); 
b = hh(b, c, d, a, x[i+14], 23, -35309556); 
a = hh(a, b, c, d, x[i+ 1], 4 , -1530992060); 
d = hh(d, a, b, c, x[i+ 4], 11, 1272893353); 
c = hh(c, d, a, b, x[i+ 7], 16, -155497632); 
b = hh(b, c, d, a, x[i+10], 23, -1094730640); 
a = hh(a, b, c, d, x[i+13], 4 , 681279174); 
d = hh(d, a, b, c, x[i+ 0], 11, -358537222); 
c = hh(c, d, a, b, x[i+ 3], 16, -722521979); 
b = hh(b, c, d, a, x[i+ 6], 23, 76029189); 
a = hh(a, b, c, d, x[i+ 9], 4 , -640364487); 
d = hh(d, a, b, c, x[i+12], 11, -421815835); 
c = hh(c, d, a, b, x[i+15], 16, 530742520); 
b = hh(b, c, d, a, x[i+ 2], 23, -995338651); 
a = ii(a, b, c, d, x[i+ 0], 6 , -198630844); 
d = ii(d, a, b, c, x[i+ 7], 10, 1126891415); 
c = ii(c, d, a, b, x[i+14], 15, -1416354905); 
b = ii(b, c, d, a, x[i+ 5], 21, -57434055); 
a = ii(a, b, c, d, x[i+12], 6 , 1700485571); 
d = ii(d, a, b, c, x[i+ 3], 10, -1894986606); 
c = ii(c, d, a, b, x[i+10], 15, -1051523); 
b = ii(b, c, d, a, x[i+ 1], 21, -2054922799); 
a = ii(a, b, c, d, x[i+ 8], 6 , 1873313359); 
d = ii(d, a, b, c, x[i+15], 10, -30611744); 
c = ii(c, d, a, b, x[i+ 6], 15, -1560198380); 
b = ii(b, c, d, a, x[i+13], 21, 1309151649); 
a = ii(a, b, c, d, x[i+ 4], 6 , -145523070); 
d = ii(d, a, b, c, x[i+11], 10, -1120210379); 
c = ii(c, d, a, b, x[i+ 2], 15, 718787259); 
b = ii(b, c, d, a, x[i+ 9], 21, -343485551); 
a = add(a, olda); 
b = add(b, oldb); 
c = add(c, oldc); 
d = add(d, oldd); 
} 
return rhex(a) + rhex(b) + rhex(c) + rhex(d); 
}
</script>
<script type="text/javascript">
  Log_Check = function(email,pwd){
    pwd.value = MD5(MD5(pwd.value));
    document.getElementById('form_Log').submit();
  }
</script>
</html>