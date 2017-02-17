<?php
/**
* 
*/
class CarAction extends Action
{
	public function index(){
		$islog  = session('?adminname');
		$admin_form = M('Admin');
		$user_form  =M('User');
		$good_form = M('Goods');
		$dan_form = M('Dan');
		$ziliao_form = M('Rzziliao');
		$rztu_form = M('Rzphoto');
		$admin = $admin_form->where("name='%s'",session('adminname'))->find();
		if($islog){
			if($admin['password']==session('adminpwd')){
				$this->assign('admin',array($admin));
				
				$user_list = $user_form->order('id')->select();

				$cars = array();
				for($i=0;$i<count($user_list);$i++){
					if($user_list[$i]['iscarowner']==1){
						$zilaio = $ziliao_form->where("phonenumber='%s'",$user_list[$i]['phone'])->find();
						$car=array(
							'id'=>$zilaio['id'],
							'chetouhao'=>$zilaio['chetouhao'],
							'username'=>$user_list[$i]['username'],
							'userid'=>$user_list[$i]['id'],
							'userphone'=>$user_list[$i]['phone'],
							'time'=>$user_list[$i]['createtime']
							);
						array_unshift($cars,$car);
					}
				}
				$this->assign('cars',$cars);

				$this->display();
				
			}else{
				$this->redirect('Error/index',array('msg' => "操作超时，请登录重试"));
			}
		}else{
			$this->redirect('Error/index',array('msg' => "操作超时，请登录重试"));
		}
	}
	public function Detil(){
			$islog  = session('?adminname');
		$admin_form = M('Admin');
		$user_form  =M('User');
		$car_form = M('Car');
		$good_form = M('Goods');
		$dan_form = M('Dan');
		$ziliao_form = M('Rzziliao');
		$rztu_form = M('Rzphoto');
		$admin = $admin_form->where("name='%s'",session('adminname'))->find();
		if($islog){
			if($admin['password']==session('adminpwd')){
				$this->assign('admin',array($admin));
				
				$carid = $_GET['id'];

				$car_list = $car_form->where('id=%d',$carid)->select();
				$car_phone = $car_list[0]['phonenumber'];
				//echo $car_phone;

				$rz_form = M('Rzziliao');
				$car_rz = $rz_form->where("phonenumber='%s'",$car_phone)->find();

				//var_dump($car_list);
				//var_dump($car_rz);
				$this->assign('carrz',array($car_rz));
				$paths=array();
				for($i=0;$i<count($car_list);$i++){
					$path = array(
						'xuhao'=>$i+1,
						'danhao'=>$car_list[$i]['id'],
						'time'=>$car_list[$i]['createtime'],
						'from'=>$car_list[$i]['fromprovince'].$car_list[$i]['fromcity'],
						'to'=>$car_list[$i]['toprovince'].$car_list[$i]['tocity']
						);
					array_unshift($paths,$path);
				}

				$this->assign('car',$paths);

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