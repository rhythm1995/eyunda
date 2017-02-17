<?php
/**
* 客户端更新模块
*author:nodex-nero
*time:2015-7-8
*/
class UpdateAction extends Action
{
	public function Update(){
		//ios客户端更新
		if($_GET['app']=='ios'){
			$app = M('App');
			$ios = $app->where('type==%d',0)->order('id desc')->select();
			if($_GET['version']<$ios['version']){
				$version = $ios['version'];
				$downloadUrl = 'http://104.237.154.88:8080/baiyun/Update/app/ios/'.$ios['version'].'ipa';
				if ($_GET['type']=='xml') {
					echo '<?xml version="1.0" encoding="utf-8"?><Update>';
					echo "<version>".$version."</version>";
					echo "<downloadUrl>".$downloadUrl."</downloadUrl>";
					echo "</Update>";
				}else{
					$Update = array('version'=>$version,'downloadUrl'=>$downloadUrl);
					echo '{"Update":'.json_decode($Update).'}';
				}
			}
		}
		//安卓客户端更新
		if($_GET['app']=='android'){
			$app = M('App');
			$android = $app->where('type==%d',1)->order('id desc')->select();
			if($_GET['version']<$android['version']){
				$version = $android['version'];
				$downloadUrl = 'http://104.237.154.88:8080/baiyun/Update/app/android/'.$android['version'].'apk';
				if ($_GET['type']=='xml') {
					echo '<?xml version="1.0" encoding="utf-8"?><Update>';
					echo "<version>".$version."</version>";
					echo "<downloadUrl>".$downloadUrl."</downloadUrl>";
					echo "</Update>";
				}else{
					$Update = array('version'=>$version,'downloadUrl'=>$downloadUrl);
					echo '{"Update":'.json_decode($Update).'}';
				}
			}
		}
	}
}















































































?>