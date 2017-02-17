<?php 
/**
*管理员登陆模块 
*210-6-20
*NodeX-Nero
*/
class LogAction extends Action
{
	public function AdminLogin(){
		$adminname = $_POST['adminname'];
		$adminpwd = $_POST['adminpwd'];
		//echo $adminname.$adminpwd;
		$admin_form = M('Admin');
		$admin = $admin_form->where("name='%s'",$adminname)->find();
		if($adminpwd==$admin['password']){
			session(array('name'=>'session_id','expire'=>3600));
				session('adminname',$adminname);
				session('adminpwd',$adminpwd);
			$this->redirect('Main/index');
		}else{
			$this->redirect('Error/index',array("msg"=>"用户不存在或密码错误"));
		}
	}
	public function AdminLogout(){
		$islog  = session('?adminname');
		$admin_form = M('Admin');
		$user_form  =M('User');
		$admin = $admin_form->where("name='%s'",session('adminname'))->find();
		if($islog){
			if($admin['password']==session('adminpwd')){
				session('adminname',null);
				session('adminpwd',null);
				$this->redirect('Index/index');
			}else{
				$this->redirect('Error/index',array('msg' => "操作超时，请登录重试"));
			}
		}else{
			$this->redirect('Error/index',array('msg' => "操作超时，请登录重试"));
		}
	}
}































 ?>