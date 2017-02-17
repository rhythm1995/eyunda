<?php
/**
* 地图显示模块
*time:2015-7-9
*author:nodex-nero
*/
class MapAction extends Action
{
	public function map(){
		$dizhi = array(array(
			'from'=>$_GET['from'],
			'to'=>$_GET['to']));
		$this->assign('dizhi',$dizhi);
		$this->display();
	}
}
?>