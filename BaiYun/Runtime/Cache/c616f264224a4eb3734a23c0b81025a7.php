<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>地图</title>
</head>
<body>
<?php if(is_array($dizhi)): $i = 0; $__LIST__ = $dizhi;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><input id="from" type="hidden" value="<?php echo ($d["from"]); ?>">
<input id="to" type="hidden" value="<?php echo ($d["to"]); ?>"><?php endforeach; endif; else: echo "" ;endif; ?>
<div style="width:100%;height:768px;padding-bottom:10%;">
<div id="allmap" style="width:100%;height:500px;float:left;">
</div>
</div>
</body>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=Cl8zLjik7tYqADmYEeeIICKu"></script>
	<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script type="text/javascript">
	// 百度地图API功能
	var map = new BMap.Map("allmap");
	var start = document.getElementById('from').value;
	//alert(start);
	var end = document.getElementById('to').value;
	map.centerAndZoom(new BMap.Point(116.404, 39.915), 11);
	//三种驾车策略：最少时间，最短距离，避开高速
	var routePolicy = [BMAP_DRIVING_POLICY_LEAST_TIME,BMAP_DRIVING_POLICY_LEAST_DISTANCE,BMAP_DRIVING_POLICY_AVOID_HIGHWAYS];
		map.clearOverlays(); 
		search(start,end,routePolicy[0]); 
		function search(start,end,route){ 
			var driving = new BMap.DrivingRoute(map, {renderOptions:{map: map, autoViewport: true},policy: route});
			driving.search(start,end);
		}
</script>
</html>