<?php
/*
*登陆注册模块
*NodeX-Nero
*2015-6-20
**/
//SendMail('3068591197@qq.com','柏运管理员通知','您已请求用户登陆接口','柏运开发者管理');

class LogAction extends Action{
	
	/*用户登陆*/
	public function UserLogin(){
		$phonenumber = $_POST['phonenumber'];
		$password = $_POST['token'];
		//echo $email;
		$user_form = M('User');
		$user = $user_form->where("phone='%s'",$phonenumber)->find();
		if(is_null($user)){
			$this->error('该用户不存在');
		}else{
			//echo $password."<br>".$user['password'];
			if($password!==$user['password']){
				$this->error('密码错误');
			}else{
				session(array('name'=>'session_id','expire'=>3600));
				session('phonenumber',$phonenumber);
				session('password',$password);
				$this->redirect('Cars/index');
			}
		}
	}
	/*用户登陆移动端接口*/
	public function Api_UserLogin(){
		import('ORG.Mail');
		$phonenumber  = $_GET['phonenumber'];
		$password = $_GET['password'];
		$type = $_GET['type'];
		$user_form = M('User');
		$LoginUser = $user_form->where('phone = %d',$phonenumber)->find();
		if (is_null($LoginUser)) {
			if ($type=="xml") {
				$ResultCode = '0000';
				echo '<?xml version="1.0" encoding="utf-8"?><Login>';
				header("Content-Type:text;   charset=utf-8");
				echo '<ResultCode>'.$ResultCode.'</ResultCode>';
				echo '<Msg>用户不存在</Msg>';
				echo '</Login>';
			}else{
				$ResultCode = '0000';
				$result =array('ResultCode'=>$ResultCode,
							   'Msg'=>'用户不存在');
				$result =json_encode($result);
				echo $result;
			}
		}else{
			if ($LoginUser['password']==$password) {
				$ResultCode="0001";
				if($type=='xml'){
					echo '<?xml version="1.0" encoding="utf-8"?><Login>';
					header("Content-Type:text;   charset=utf-8");
					echo '<ResultCode>'.$ResultCode.'</ResultCode>';
					echo '<Msg>登陆成功</Msg>';
					echo '<Username>'.$LoginUser['username'].'</Username>';
					echo '</Login>';
				}else{
					$result =array('ResultCode'=>$ResultCode,
						           'Msg'=>'登陆成功',
						           'Username'=>$LoginUser['username']);
					$result =json_encode($result);
					echo $result;
				}
			}else{
				$ResultCode="0002";
				if($type=='xml'){
					echo '<?xml version="1.0" encoding="utf-8"?><Login>';
					header("Content-Type:text;   charset=utf-8");
					echo '<ResultCode>'.$ResultCode.'</ResultCode>';
					echo '<Msg>密码错误</Msg>';
					echo '</Login>';
				}else{
					$result =array('ResultCode'=>$ResultCode,
						 		   'Msg'=>'密码错误');
					$result =json_encode($result);
					echo $result;
				}
			}
		}
	}
	/*用户注册*/
	public function UserRegister(){
		$phonenumber = $_POST['phonenumber'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$user_form=M('User');
		$newuser = array('username'=>$username,
						'phone'=>$phonenumber,
						'password'=>md5(md5($password)),
						'createtime'=>date('y-m-d H:m:s'));
		$isnew = $user_form->add($newuser);
		if(!isnew){
			$this->error("注册失败，请重试");
		}else{
			$this->error("注册成功，正在返回");
		}
		
	}
	/*用户注册接口*/
	public function Api_UserRegister(){
		import('ORG.Mail');
		$phonenumber = $_GET['phonenumber'];
		$username = $_GET['username'];
		$password = $_GET['token'];
		$user_form = M('User');
		$user = $user_form->where("phone='%s'",$phonenumber)->find();
		if($_GET['type']=='xml'){
			if(!is_null($user)){
				echo '<?xml version="1.0" encoding="utf-8"?><Reg>';
				header("Content-Type:text;   charset=utf-8");
				echo "<ResultCode>00001</ResultCode>";
				echo "<Msg>该手机号码已经绑定</Msg>";
				echo "</Reg>";
			}else{
				$new = array('username'=>$username,
							'password'=>$password,
							'phone'=>$phonenumber,
							'createtime'=>data('y-m-d H:m:s'));
				$isnew = $user_form->add($new);
				if(!$isnew){
					echo '<?xml version="1.0" encoding="utf-8"?><Reg>';
					header("Content-Type:text;   charset=utf-8");
					echo "<ResultCode>00002</ResultCode>";
					echo "<Msg>注册失败</Msg>";
					echo "</Reg>";
				}else{
					echo '<?xml version="1.0" encoding="utf-8"?><Reg>';
					header("Content-Type:text;   charset=utf-8");
					echo "<ResultCode>00003</ResultCode>";
					echo "<Msg>注册成功</Msg>";
					echo "</Reg>";
				}
			}
		}else{
			if(!is_null($user)){
				$result = array('ResultCode'=>'00001',
								'Msg'=>'该手机号码已经绑定');
				echo json_encode($result);
			}else{
				$new = array('username'=>$username,
							'password'=>$password,
							'phone'=>$phonenumber);
				$isnew = $user_form->add($new);
				if(!isnew){
					$result = array('ResultCode'=>'00002',
								'Msg'=>'注册失败');
					echo json_encode($result);
				}else{
					$result = array('ResultCode'=>'00003',
								'Msg'=>'注册成功');
					echo json_encode($result);
				}
			}
		}
	}
	/*密码找回*/
	public function PwdChange(){

	}	
	/*密码找回接口*/
	public function Api_PwdChange(){
		
	}
}
?>