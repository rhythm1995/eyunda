<?php
/**
* 
*/
class SuccessAction extends Action
{
	public function index(){
		$msg  = $_GET['msg'];
		//echo $msg;
		$result = array('msg'=>$msg);
		$this->assign('success',array($result));
		$this->display();

		//$this->redirect($aim,array(),3);
	}
}







?>