<?php
/**
*客户端错误反馈模块
*author：nodex-nero
*2015-7-8
*/
class ErrorAction extends Action
{
	
	public function Api_error(){
		import('ORG.Mail');
		if($_GET['app']=='ios'){
			if($_GET['errorcode']=='0000'){
				$email = 'justzht@qq.com';
				$title = '柏运客户端出现问题';
				$content = '数据解析出错';
			}
		}
		$a = SendMail($email,$title,$content,"柏运网开发者通知");
		if($a){
			echo "success";
		}
	}
}

?>