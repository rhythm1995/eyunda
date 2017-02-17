<?php
/**
* 
*/
class ErrorAction extends Action
{
	public function index(){
		$msg  = $_GET['msg'];
		//echo $msg;
		$result = array('msg'=>$msg);
		$this->assign('error',array($result));
		$this->display();

		//$this->redirect($aim,array(),3);
	}
}







?>