<?php
/**
* 
*
*
*/
class MainAction extends Action
{
	public function index(){
		$islog  = session('?adminname');
		$admin_form = M('Admin');
		$user_form  =M('User');
		$dan_form = M('Dan');
		$admin = $admin_form->where("name='%s'",session('adminname'))->find();
		if($islog){
			if($admin['password']==session('adminpwd')){
				$this->assign('admin',array($admin));

				$user_list = $user_form->order('id')->select();
				$count_user = count($user_list);

				$dan_list  = $dan_form->where('isover=1')->select();
				$count_dan = count($dan_list);

				$count_newuser = 0;
				for($i=0;$i<count($user_list);$i++){
					$time = floor(strtotime($user_list[$i]['createtime'])/(60*60*24*30));
					$nowtime = floor(strtotime(date('Y-m-d', time()))/(60*60*24*30));
					//echo $time."sfsddf".$nowtime."<br>";
					if($time==$nowtime){
						$count_newuser ++;
					}
				}

				$number = array('count_user'=>$count_user,
								'count_dan'=>$count_dan,
								'count_newuser'=>$count_newuser);
				$this->assign('number',array($number));

				$this->display();
			}else{
				$this->redirect('Error/index',array('msg' => "操作超时，请登录重试"));
			}
		}else{
			$this->redirect('Error/index',array('msg' => "操作超时，请登录重试"));
		}
		
	}
}



?>