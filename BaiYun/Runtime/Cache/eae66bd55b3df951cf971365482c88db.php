<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <title>柏运网</title>
    <meta charset="utf-8">
    <script src="__ROOT__/baiyun/Public/js/jquery.js"></script>
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
    <script src="https://cdn1.lncld.net/static/js/av-mini-0.5.5.js"></script>
    <script src="https://cdn1.lncld.net/static/js/av-core-mini-0.5.5.js"></script>
    <script type="text/javascript">
      AV.initialize("1z946wrdpudl4b5vh30e5rgbnzngsi6g7xpe14mlpk27r7z9", "ulbpsv497wuubhpappxai4mc8s9676k41zuysk7xlkgxjyh8");
    </script>
   

</head>

<body style="background:rgb(245,245,245);margin:0px;">
   
    <div class="top">
        <ul id="top_ul">
            <a href=""><li id="gerenzhongxin">个人中心</li></a>
            <a href=""></a>
        </ul>
        <?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$l): $mod = ($i % 2 );++$i;?><p id="top_text"><span class="glyphicon glyphicon-user"></span><?php echo ($l["username"]); ?><i id="phonenumber"><?php echo ($l["phone"]); ?></i>
        <?php if($l["iscarowner"] == 1): ?><i id="chezhurenzhen">车主认证</i> <?php else: endif; ?>，欢迎使用柏运物流！</p><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>


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
    <div style="margin:0px;width:100%;float:left;padding-left:10%;padding-right:10%;box-shadow:1px 0px 1px 2px rgb(27,154,247);margin-top:-20px;padding-top:20px;padding-bottom:10px;">
        <div style="width:100%;float:left;padding:5px;box-shadow:0px 0px 2px 1px #ddd;background:#fff;">
            <p style="color:RGB(27,154,247);margin:0px;">发布货源</p>
            <hr style="width:100%;margin-top:5px;">
            <div style="width:100%;float:left;">
                <form id="fabu" class="form-horizontal" action="goods_do.html" method="POST" role="form">
                    <div style="width:100%;float:left;margin:0px;">
                    <p style="width:100%;margin-left:10px;margin-top:0px;">货物信息</p>
                    <select name="goodtype" style="width:30%;float:left;height:34px;border-radius:5px;border:none;box-shadow:0px 0px 1px 1px #f3f3f3 inset;border:solid 1px #d3d3d3;color:#a3a3a3;margin-left:10px;">
                        <option value="食品及饮料">食品及饮料</option>
                        <option value="日用品">日用品</option>
                        <option value="农副产品">农副产品</option>
                        <option value="电子电器">电子电器</option>
                        <option value="机械设备">机械设备</option>
                        <option value="建材木材">建材木材</option>
                        <option value="矿产及其加工品">矿产及其加工品</option>
                        <option value="危险品">危险品</option>
                        <option value="化工产品">化工产品</option>
                        <option value="其他">其他</option>
                    </select>
                    <input name="goodname" style="width:30%;float:left;margin-left:10px;" class="form-control" placeholder="货物名称">
                    </div>
                    <div style="width:100%;float:left;margin-top:10px;">
                    <input name="goodlength" style="width:30%;float:left;margin-left:10px;" class="form-control" placeholder="货物体积（方）">
                    <input name="goodweight" style="width:30%;float:left;margin-left:10px;" class="form-control" placeholder="货物重量（吨）">
                    </div>
                    <div style="width:100%;float:left;margin-top:10px;margin-bottom:10px;">
                    <input name="goodnumber" style="width:30%;float:left;margin-left:10px;" class="form-control" placeholder="货物数量（个）">
                    </div>
                    <hr style="width:100%;">
                    <p style="width:100%;margin-left:10px;">车辆信息</p>
                    <select name="needcar" style="width:30%;float:left;height:34px;border-radius:5px;border:none;box-shadow:0px 0px 1px 1px #f3f3f3 inset;border:solid 1px #d3d3d3;color:#a3a3a3;margin-left:10px;">
                        <option value="其他">车型</option>
                        <option value="平板车">平板车</option>
                        <option value="罐车">罐车</option>
                        <option value="厢式货车">厢式货车</option>
                        <option value="冷藏车">冷藏车</option>
                    </select>
                    </div>
                    <div style="width:100%;float:left;margin-top:10px;margin-bottom:10px;">
                    <select name="fromp" id="to_cn" onchange="set_city(this, document.getElementById('city')); WYL();" style="width:30%;float:left;height:34px;border-radius:5px;border:none;box-shadow:0px 0px 1px 1px #f3f3f3 inset;border:solid 1px #d3d3d3;color:#a3a3a3;margin-left:10px;">
                        <option value="不限">出发地区</option> 

                        <option value="台湾">台湾</option> 

                        <option value="马来西亚">马来西亚</option> 

                        <option value="北京">北京</option> 

                        <option value="上海">上海</option> 

                        <option value="天津">天津</option> 

                        <option value="重庆">重庆</option> 

                        <option value="河北省">河北省</option> 

                        <option value="山西省">山西省</option> 

                        <option value="辽宁省">辽宁省</option> 

                        <option value="吉林省">吉林省</option> 

                        <option value="黑龙江省">黑龙江省</option> 

                        <option value="江苏省">江苏省</option> 

                        <option value="浙江省">浙江省</option> 

                        <option value="安徽省">安徽省</option> 

                        <option value="福建省">福建省</option> 

                        <option value="江西省">江西省</option> 

                        <option value="山东省">山东省</option> 

                        <option value="河南省">河南省</option> 

                        <option value="湖北省">湖北省</option> 

                        <option value="湖南省">湖南省</option> 

                        <option value="广东省">广东省</option> 

                        <option value="海南省">海南省</option> 

                        <option value="四川省">四川省</option> 

                        <option value="贵州省">贵州省</option> 

                        <option value="云南省">云南省</option> 

                        <option value="陕西省">陕西省</option> 

                        <option value="甘肃省">甘肃省</option> 

                        <option value="青海省">青海省</option> 

                        <option value="内蒙古">内蒙古</option> 

                        <option value="广西">广西</option> 

                        <option value="西藏">西藏</option> 

                        <option value="宁夏">宁夏</option> 

                        <option value="新疆">新疆</option> 

                        <option value="香港">香港</option> 

                        <option value="澳门">澳门</option> 
                    </select>
                    <select name="fromc" id="city" style="width:30%;float:left;height:34px;border-radius:5px;border:none;box-shadow:0px 0px 1px 1px #f3f3f3 inset;border:solid 1px #d3d3d3;color:#a3a3a3;margin-left:10px;">
                        <option>发货城市</option>
                    </select>
<script language=javascript> 

cities = new Object(); 

cities['台湾']=new Array('台北','台南','其他'); 

cities['马来西亚']=new Array('Malaysia'); 

cities['北京']=new Array('东城区','西城区','崇文区','宣武区','朝阳区','海淀区','丰台区','石景山区','房山区','通州区','顺义区','昌平区','大兴区','怀柔区','平谷区','门头沟区','密云县','延庆县','其他'); 

cities['上海']=new Array('上海'); 

cities['天津']=new Array('天津','和平区','河东区','河西区','南开区','河北区','红桥区','塘沽区','汉沽区','大港区','东丽区','西青区','北辰区','津南区','武清区','宝坻区','静海县','宁河县','蓟县','其他'); 

cities['重庆']=new Array('渝中区','大渡口区','江北区','南岸区','北培区','渝北区','巴南区','长寿区','双桥区','沙坪坝区','万盛区','万州区','涪陵区','黔江区','永川区','合川区','江津区','九龙坡区','南川区','綦江县','潼南县','荣昌县','璧山县','大足县','铜梁县','梁平县','开县','忠县','城口县','垫江县','武隆县','丰都县','奉节县','云阳县','巫溪县','巫山县','石柱县','秀山县','彭水县');
cities['河北省']=new Array('石家庄', '张家口', '承德', '秦皇岛', '唐山', '廊坊', '保定', '沧州', '衡水', '邢台', '邯郸'); 

cities['山西省']=new Array('太原', '大同', '朔州', '阳泉', '长治', '晋城', '忻州', '吕梁', '晋中', '临汾', '运城'); 

cities['辽宁省'    ]=new Array('沈阳', '朝阳', '阜新', '铁岭', '抚顺', '本溪', '辽阳', '鞍山', '丹东', '大连', '营口', '盘锦', '锦州', '葫芦岛'); 

cities['吉林省']=new Array('长春', '白城', '松原', '吉林', '四平', '辽源', '通化', '白山', '延边'); 

cities['黑龙江省']=new Array('哈尔滨', '齐齐哈尔', '黑河', '大庆', '伊春', '鹤岗', '佳木斯', '双鸭山', '七台河', '鸡西', '牡丹江', '绥化', '大兴安'); 

cities['江苏省']=new Array('南京', '徐州', '连云港', '宿迁', '淮阴', '盐城', '扬州', '泰州', '南通', '镇江', '常州', '无锡', '苏州'); 

cities['浙江省']=new Array('杭州', '湖州', '嘉兴', '舟山', '宁波', '绍兴', '金华', '台州', '温州', '丽水'); 

cities['安徽省']=new Array('合肥', '宿州', '淮北', '阜阳', '蚌埠', '淮南', '滁州', '马鞍山', '芜湖', '铜陵', '安庆', '黄山', '六安', '巢湖', '池州', '宣城'); 

cities['福建省']=new Array('福州', '南平', '三明', '莆田', '泉州', '厦门', '漳州', '龙岩', '宁德'); 

cities['江西省']=new Array('南昌', '九江', '景德镇', '鹰潭', '新余', '萍乡', '赣州', '上饶', '抚州', '宜春', '吉安'); 

cities['山东省']=new Array('济南', '聊城', '德州', '东营', '淄博', '潍坊', '烟台', '威海', '青岛', '日照', '临沂', '枣庄', '济宁', '泰安', '莱芜', '滨州', '菏泽'); 

cities['河南省']=new Array('郑州', '三门峡', '洛阳', '焦作', '新乡', '鹤壁', '安阳', '濮阳', '开封', '商丘', '许昌', '漯河', '平顶山', '南阳', '信阳', '周口', '驻马店'); 

cities['湖北省']=new Array('武汉', '十堰', '襄攀', '荆门', '孝感', '黄冈', '鄂州', '黄石', '咸宁', '荆州', '宜昌', '恩施', '襄樊'); 

cities['湖南省']=new Array('长沙', '张家界', '常德', '益阳', '岳阳', '株洲', '湘潭', '衡阳', '郴州', '永州', '邵阳', '怀化', '娄底', '湘西'); 

cities['广东省']=new Array('广州', '清远', '韶关', '河源', '梅州', '潮州', '汕头', '揭阳', '汕尾', '惠州', '东莞', '深圳', '珠海', '江门', '佛山', '肇庆', '云浮', '阳江', '茂名', '湛江'); 

cities['海南省']=new Array('海口', '三亚'); 

cities['四川省']=new Array('成都', '广元', '绵阳', '德阳', '南充', '广安', '遂宁', '内江', '乐山', '自贡', '泸州', '宜宾', '攀枝花', '巴中', '达川', '资阳', '眉山', '雅安', '阿坝', '甘孜', '凉山'); 

cities['贵州省']=new Array('贵阳', '六盘水', '遵义', '毕节', '铜仁', '安顺', '黔东南', '黔南', '黔西南'); 

cities['云南省']=new Array('昆明', '曲靖', '玉溪', '丽江', '昭通', '思茅', '临沧', '保山', '德宏', '怒江', '迪庆', '大理', '楚雄', '红河', '文山', '西双版纳'); 

cities['陕西省']=new Array('西安', '延安', '铜川', '渭南', '咸阳', '宝鸡', '汉中', '榆林', '商洛', '安康'); 

cities['甘肃省']=new Array('兰州', '嘉峪关', '金昌', '白银', '天水', '酒泉', '张掖', '武威', '庆阳', '平凉', '定西', '陇南', '临夏', '甘南'); 

cities['青海省']=new Array('西宁', '海东', '西宁', '海北', '海南', '黄南', '果洛', '玉树', '海西'); 

cities['内蒙古']=new Array('呼和浩特', '包头', '乌海', '赤峰', '呼伦贝尔盟', '兴安盟', '哲里木盟', '锡林郭勒盟', '乌兰察布盟', '鄂尔多斯', '巴彦淖尔盟', '阿拉善盟'); 

cities['广西']=new Array('南宁', '桂林', '柳州', '梧州', '贵港', '玉林', '钦州', '北海', '防城港', '南宁', '百色', '河池', '柳州', '贺州'); 

cities['西藏']=new Array('拉萨', '那曲', '昌都', '林芝', '山南', '日喀则', '阿里'); 

cities['宁夏']=new Array('银川', '石嘴山', '吴忠', '固原'); 

cities['新疆']=new Array('乌鲁木齐', '克拉玛依', '喀什', '阿克苏', '和田', '吐鲁番', '哈密', '博尔塔拉', '昌吉', '巴音郭楞', '伊犁', '塔城', '阿勒泰'); 

cities['香港']=new Array('香港'); 

cities['澳门']=new Array('澳门'); 

function set_city(province, city) 

{ 

var pv, cv; 

var i, ii; 

pv=province.value; 

cv=city.value; 

city.length=1; 

if(pv=='0') return; 

if(typeof(cities[pv])=='undefined') return; 

for(i=0; i<cities[pv].length; i++) 

{ 

ii = i+1; 

city.options[ii] = new Option(); 

city.options[ii].text = cities[pv][i]; 

city.options[ii].value = cities[pv][i]; 

} 

} 

</script>






                    </div>
                    <div style="width:100%;float:left;margin-top:10px;margin-bottom:10px;">
                    <select name="top" onchange="set_city(this, document.getElementById('cityto')); WYL();" style="width:30%;float:left;height:34px;border-radius:5px;border:none;box-shadow:0px 0px 1px 1px #f3f3f3 inset;border:solid 1px #d3d3d3;color:#a3a3a3;margin-left:10px;">
                        <option value="不限">收货地区</option> 

                        <option value="台湾">台湾</option> 

                        <option value="马来西亚">马来西亚</option> 

                        <option value="北京">北京</option> 

                        <option value="上海">上海</option> 

                        <option value="天津">天津</option> 

                        <option value="重庆">重庆</option> 

                        <option value="河北省">河北省</option> 

                        <option value="山西省">山西省</option> 

                        <option value="辽宁省">辽宁省</option> 

                        <option value="吉林省">吉林省</option> 

                        <option value="黑龙江省">黑龙江省</option> 

                        <option value="江苏省">江苏省</option> 

                        <option value="浙江省">浙江省</option> 

                        <option value="安徽省">安徽省</option> 

                        <option value="福建省">福建省</option> 

                        <option value="江西省">江西省</option> 

                        <option value="山东省">山东省</option> 

                        <option value="河南省">河南省</option> 

                        <option value="湖北省">湖北省</option> 

                        <option value="湖南省">湖南省</option> 

                        <option value="广东省">广东省</option> 

                        <option value="海南省">海南省</option> 

                        <option value="四川省">四川省</option> 

                        <option value="贵州省">贵州省</option> 

                        <option value="云南省">云南省</option> 

                        <option value="陕西省">陕西省</option> 

                        <option value="甘肃省">甘肃省</option> 

                        <option value="青海省">青海省</option> 

                        <option value="内蒙古">内蒙古</option> 

                        <option value="广西">广西</option> 

                        <option value="西藏">西藏</option> 

                        <option value="宁夏">宁夏</option> 

                        <option value="新疆">新疆</option> 

                        <option value="香港">香港</option> 

                        <option value="澳门">澳门</option> 
                    </select>
                    <select name="toc" id="cityto" style="width:30%;float:left;height:34px;border-radius:5px;border:none;box-shadow:0px 0px 1px 1px #f3f3f3 inset;border:solid 1px #d3d3d3;color:#a3a3a3;margin-left:10px;">
                        <option>收货城市</option>
                    </select>
                    </div>
                    <hr style="width:100%;">  
                    <p style="width:100%;margin-left:10px;">时间信息(发货时间---收货时间)</p>



                    <div style="float:left;margin-bottom:10px;margin-left:10px;">
                        <div style="float:left;border:solid 1px #d3d3d3;border-radius:3px;box-shadow:0px 0px 1px 1px #f3f3f3 inset;height:30px;padding:5px;">
                        <input name="date" id="data" readonly="readonly" style="float:left;border:none;border-right:solid 1px #d3d3d3;margin-right:3px;" value="2015-7-23 21:37:00">
                        <span onclick="dataclear();" style="folat:left;color:rgb(27,166,247);" class="glyphicon glyphicon-remove"></span>
                        <span onclick="dataopen();" style="folat:left;color:rgb(27,166,247);" class="glyphicon glyphicon-calendar"></span>
                        </div>
                        <div id="timepicker" style="float:left;width:55%;border:solid 1px #d3d3d3;border-radius:4px;box-shadow:0px 0px 1px 1px #f3f3f3;padding:5px;display:none;">
                            <div style="width:100%;">
                                日期选择：
                                <span onclick="yeardown()" class="glyphicon glyphicon-chevron-left"></span>
                                <input id="year" readonly="readonly" value="2015" style="width:35px;border:none;">
                                <span onclick="yearon();" class="glyphicon glyphicon-chevron-right"></span>
                                <span onclick="monthdown();" class="glyphicon glyphicon-chevron-left"></span>
                                <input id="month" readonly="readonly" value="12" style="width:20px;border:none;">
                                <span onclick="monthup();" class="glyphicon glyphicon-chevron-right"></span>
                            </div>
                            <table id="oTable" style="margin:0px;" class="table">
                                <tr><td onclick="setday(this,this.innerText)">1</td><td onclick="setday(this,this.innerText)">2</td><td onclick="setday(this,this.innerText)">3</td><td onclick="setday(this,this.innerText)">4</td><td onclick="setday(this,this.innerText)">5</td><td onclick="setday(this,this.innerText)">6</td><td onclick="setday(this,this.innerText)">7</td><tr onclick="setday(this,this.innerText)">
                                <tr><td onclick="setday(this,this.innerText)">8</td><td onclick="setday(this,this.innerText)">9</td><td onclick="setday(this,this.innerText)">10</td><td onclick="setday(this,this.innerText)">11</td><td onclick="setday(this,this.innerText)">12</td><td onclick="setday(this,this.innerText)">13</td><td onclick="setday(this,this.innerText)">14</td><tr>
                                <tr><td onclick="setday(this,this.innerText)">15</td><td onclick="setday(this,this.innerText)">16</td><td onclick="setday(this,this.innerText)">17</td><td onclick="setday(this,this.innerText)">18</td><td onclick="setday(this,this.innerText)">19</td><td onclick="setday(this,this.innerText)">20</td><td onclick="setday(this,this.innerText)">21</td><tr>
                                <tr><td onclick="setday(this,this.innerText)">22</td><td onclick="setday(this,this.innerText)">23</td><td onclick="setday(this,this.innerText)">24</td><td onclick="setday(this,this.innerText)">25</td><td onclick="setday(this,this.innerText)">26</td><td onclick="setday(this,this.innerText)">27</td><td onclick="setday(this,this.innerText)">28</td><tr>
                                <tr><td onclick="setday(this,this.innerText)">29</td><td onclick="setday(this,this.innerText)">30</td><td onclick="setday(this,this.innerText)">31</td><td> </td><td> </td><td> </td><td> </td><tr>
                            </table>
                            <hr style="margin-top:0px;">
                            <div style="width:100%;margin-top:0px;">
                                时间选择：
                                <span onclick="hourdown()" class="glyphicon glyphicon-chevron-left"></span>
                                <input id="hour" readonly="readonly" value="12" style="width:20px;border:none;">
                                <span onclick = "hourup()" class="glyphicon glyphicon-chevron-right"></span>
                                <span onclick="mindown()" class="glyphicon glyphicon-chevron-left"></span>
                                <input id="min" readonly="readonly" value="30" style="width:20px;border:none;">
                                <span onclick="minup()" class="glyphicon glyphicon-chevron-right"></span>
                            </div>
                        </div>
                    </div>



                    <div style="float:left;margin-bottom:10px;margin-left:10px;">
                        <div style="float:left;border:solid 1px #d3d3d3;border-radius:3px;box-shadow:0px 0px 1px 1px #f3f3f3 inset;height:30px;padding:5px;">
                        <input name="dateoff" id="dataoff" readonly="readonly" style="float:left;border:none;border-right:solid 1px #d3d3d3;margin-right:3px;" value="2015-7-23 21:37:00">
                        <span onclick="dataclearoff();" style="folat:left;color:rgb(27,166,247);" class="glyphicon glyphicon-remove"></span>
                        <span onclick="dataopenoff();" style="folat:left;color:rgb(27,166,247);" class="glyphicon glyphicon-calendar"></span>
                        </div>
                        <div id="timepickeroff" style="float:left;width:55%;border:solid 1px #d3d3d3;border-radius:4px;box-shadow:0px 0px 1px 1px #f3f3f3;padding:5px;display:none;">
                            <div style="width:100%;">
                                日期选择：
                                <span onclick="yeardownoff()" class="glyphicon glyphicon-chevron-left"></span>
                                <input id="yearoff" readonly="readonly" value="2015" style="width:35px;border:none;">
                                <span onclick="yearonoff();" class="glyphicon glyphicon-chevron-right"></span>
                                <span onclick="monthdownoff();" class="glyphicon glyphicon-chevron-left"></span>
                                <input id="monthoff" readonly="readonly" value="12" style="width:20px;border:none;">
                                <span onclick="monthupoff();" class="glyphicon glyphicon-chevron-right"></span>
                            </div>
                            <table id="oTableoff" style="margin:0px;" class="table">
                                <tr><td onclick="setdayoff(this,this.innerText)">1</td><td onclick="setdayoff(this,this.innerText)">2</td><td onclick="setdayoff(this,this.innerText)">3</td><td onclick="setdayoff(this,this.innerText)">4</td><td onclick="setdayoff(this,this.innerText)">5</td><td onclick="setdayoff(this,this.innerText)">6</td><td onclick="setdayoff(this,this.innerText)">7</td><tr onclick="setdayoff(this,this.innerText)">
                                <tr><td onclick="setdayoff(this,this.innerText)">8</td><td onclick="setdayoff(this,this.innerText)">9</td><td onclick="setdayoff(this,this.innerText)">10</td><td onclick="setdayoff(this,this.innerText)">11</td><td onclick="setdayoff(this,this.innerText)">12</td><td onclick="setdayoff(this,this.innerText)">13</td><td onclick="setdayoff(this,this.innerText)">14</td><tr>
                                <tr><td onclick="setdayoff(this,this.innerText)">15</td><td onclick="setdayoff(this,this.innerText)">16</td><td onclick="setdayoff(this,this.innerText)">17</td><td onclick="setdayoff(this,this.innerText)">18</td><td onclick="setdayoff(this,this.innerText)">19</td><td onclick="setdayoff(this,this.innerText)">20</td><td onclick="setdayoff(this,this.innerText)">21</td><tr>
                                <tr><td onclick="setdayoff(this,this.innerText)">22</td><td onclick="setdayoff(this,this.innerText)">23</td><td onclick="setdayoff(this,this.innerText)">24</td><td onclick="setdayoff(this,this.innerText)">25</td><td onclick="setdayoff(this,this.innerText)">26</td><td onclick="setdayoff(this,this.innerText)">27</td><td onclick="setdayoff(this,this.innerText)">28</td><tr>
                                <tr><td onclick="setdayoff(this,this.innerText)">29</td><td onclick="setdayoff(this,this.innerText)">30</td><td onclick="setdayoff(this,this.innerText)">31</td><td> </td><td> </td><td> </td><td> </td><tr>
                            </table>
                            <hr style="margin-top:0px;">
                            <div style="width:100%;margin-top:0px;">
                                时间选择：
                                <span onclick="hourdownoff()" class="glyphicon glyphicon-chevron-left"></span>
                                <input id="houroff" readonly="readonly" value="12" style="width:20px;border:none;">
                                <span onclick = "hourupoff()" class="glyphicon glyphicon-chevron-right"></span>
                                <span onclick="mindownoff()" class="glyphicon glyphicon-chevron-left"></span>
                                <input id="minoff" readonly="readonly" value="30" style="width:20px;border:none;">
                                <span onclick="minupoff()" class="glyphicon glyphicon-chevron-right"></span>
                            </div>
                        </div>
                    </div>
                </form>
                    <script type="text/javascript">
                        var isopen  =0;
                        var hour = 21;
                        var min = 30;
                        var year = 2015;
                        var month = 7;
                        var day = 23;

                        var yeardown = function(){

                            year=year-1;
                            showtime();

                        }
                        var yearon = function(){
                            year=year+1;
                            showtime();
                        }
                        var monthdown = function(){
                            if(month>=1){
                                month = month-1;
                            }else{
                                month = 0;
                            }
                            showtime();
                        }
                        var monthup = function(){
                            if(month<+11){
                                month = month+1;
                            }else{
                                month=12;
                            }
                            showtime();
                        }
                        var hourdown = function(){
                            if(hour>=1){
                                hour = hour-1;
                            }else{
                                hour=0;
                            }
                            showtime();
                        }
                        var hourup = function(){
                            if(hour<=22){
                                hour = hour+1;
                            }else{
                                hour=23;
                            }
                            showtime();
                        }
                        var mindown = function(){
                            if(min>=1){
                                min = min-1;
                            }else{
                                min=0;
                            }
                            
                            showtime();
                        }
                        var minup = function(){
                            if(min<=58){
                                min = min+1;    
                            }else{
                                min= 59;
                            }
                            showtime();
                        }
                        var setday = function(view,setday){

                            for (i=0; i < window.oTable.rows.length; i++) { 
                                for (j=0; j < window.oTable.rows[i].cells.length; j++) { 
                                    window.oTable.rows[i].cells[j].style.background="rgb(255,255,255)"; 
                                }        
                            } 

                            view.style.background="rgb(27,157,247)";
                            day = setday;
                            showtime();
                        }
                        var dataclear = function(){
                            year=0;
                            month=0;
                            day =0;
                            hour=0;
                            min =0;
                            showtime();
                        }
                        var dataopen = function(){
                            if(isopen==0){
                                document.getElementById('timepicker').style.display="block";
                                isopen=1;
                            }else{
                                document.getElementById('timepicker').style.display="none";
                                isopen=0;
                            }
                           showtime();
                        }
                        var showtime = function(){
                            document.getElementById('year').value=String(year);
                            document.getElementById('month').value=String(month);
                            //document.getElementById('day').value=String(day);
                            document.getElementById('hour').value = String(hour);
                            document.getElementById('min').value =String(min);

                            document.getElementById('data').value=String(year)+"-"+String(month)+"-"+String(day)+" "+String(hour)+":"+String(min)+":00";
                        }
                    </script>




                     <script type="text/javascript">
                        var isopenoff  =0;
                        var houroff = 21;
                        var minoff = 30;
                        var yearoff = 2015;
                        var monthoff = 7;
                        var dayoff = 23;

                        var yeardownoff = function(){

                            yearoff=yearoff-1;
                            showtimeoff();

                        }
                        var yearonoff = function(){
                            yearoff=yearoff+1;
                            showtimeoff();
                        }
                        var monthdownoff = function(){
                            if(monthoff>=1){
                                monthoff = monthoff-1;
                            }else{
                                monthoff = 0;
                            }
                            showtimeoff();
                        }
                        var monthupoff = function(){
                            if(monthoff<+11){
                                monthoff = monthoff+1;
                            }else{
                                monthoff=12;
                            }
                            showtimeoff();
                        }
                        var hourdownoff = function(){
                            if(houroff>=1){
                                houroff = houroff-1;
                            }else{
                                houroff=0;
                            }
                            showtimeoff();
                        }
                        var hourupoff = function(){
                            if(houroff<=22){
                                houroff = houroff+1;
                            }else{
                                houroff=23;
                            }
                            showtimeoff();
                        }
                        var mindownoff = function(){
                            if(minoff>=1){
                                minoff = minoff-1;
                            }else{
                                minoff=0;
                            }
                            
                            showtimeoff();
                        }
                        var minupoff = function(){
                            if(minoff<=58){
                                minoff = minoff+1;    
                            }else{
                                minoff= 59;
                            }
                            showtimeoff();
                        }
                        var setdayoff = function(view,setday){

                            for (i=0; i < window.oTableoff.rows.length; i++) { 
                                for (j=0; j < window.oTableoff.rows[i].cells.length; j++) { 
                                    window.oTableoff.rows[i].cells[j].style.background="rgb(255,255,255)"; 
                                }        
                            } 

                            view.style.background="rgb(27,157,247)";
                            dayoff = setday;
                            showtimeoff();
                        }
                        var dataclearoff = function(){
                            yearoff=0;
                            monthoff=0;
                            dayoff =0;
                            houroff=0;
                            minoff =0;
                            showtimeoff();
                        }
                        var dataopenoff = function(){
                            if(isopenoff==0){
                                document.getElementById('timepickeroff').style.display="block";
                                isopenoff=1;
                            }else{
                                document.getElementById('timepickeroff').style.display="none";
                                isopenoff=0;
                            }
                           showtimeoff();
                        }
                        var showtimeoff = function(){
                            document.getElementById('yearoff').value=String(yearoff);
                            document.getElementById('monthoff').value=String(monthoff);
                            //document.getElementById('day').value=String(day);
                            document.getElementById('houroff').value = String(houroff);
                            document.getElementById('minoff').value =String(minoff);

                            document.getElementById('dataoff').value=String(yearoff)+"-"+String(monthoff)+"-"+String(dayoff)+" "+String(houroff)+":"+String(minoff)+":00";
                        }
                    </script>
                    <style type="text/css">
                    .glyphicon{
                        height:20px;
                        width:20px;
                    }
                    </style>

                    <hr style="width:100%;">

                <div style="width:100%;float:left;">
                <center>
                <input id="mod" placeholder="验证码" name="mod" class="button button-pill button-primary" style="margin-top:5px;width:20%;height:40px;">
                <?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$l): $mod = ($i % 2 );++$i;?><input id="phone" value="<?php echo ($l["phone"]); ?>" type='hidden'><?php endforeach; endif; else: echo "" ;endif; ?>
                <button class="button button-action button-pill" style="margin-top:15px;width:20%;height:40px;" onclick="modify(document.getElementById('phone'))">获取验证码</button>
                </center>
                <script type="text/javascript">
                var modify=function(phonenumber){
                    //alert('dffdg');
                var phone = phonenumber.value;
                //alert(phone);
                AV.Cloud.requestSmsCode(phone).then(function(){
                    document.getElementById('mod').placeholder="验证码已发送至您的手机";
                }, function(err){
                    document.getElementById('mod').placeholder="验证码发送失败，请重试";
                });
                } 
                </script>
                </div>


                <div style="width:100%;float:left;">
                <center>
                <button class="button button-action button-pill" onclick="tijiao()" style="margin-top:15px;width:20%;height:40px;">发布货源</button>
                <script type="text/javascript">
                var tijiao = function(){
                      //document.getElementById('fabu').submit();
                 AV.Cloud.verifySmsCode(document.getElementById('mod').value, document.getElementById('phone').value).then(function(){
                        //验证成功
                        document.getElementById('fabu').submit();
                        }, function(err){
                         document.getElementById('mod').innerText="验证码错误";
                      });
                 }
                </script>
                </center>
                </div>
                
            </div>
        </div>        
    </div>
    <div id="bot">
        <div id="bot_inside">
            <img id="bot_img" src="__ROOT__/baiyun/Public/img/logo_bot.png">
            <p id="bot_text">Copyright@2015&nbsp;&nbsp;上海柏运物流版权所有&nbsp;&nbsp;&nbsp; powered by Nodex</p>
        </div>
    </div>
<body>