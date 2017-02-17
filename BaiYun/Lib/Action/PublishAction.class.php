<?php  
/**
* 发布模块
*2015-7-3
*nodex-nero
*/
class PublishAction extends Action
{
	Public function Index(){
		$email = $_GET['email'];
		$token = $_GET['token'];
		$user_form  = M('User');
		$loguser = $user_form->where("email= '%s'",$email)->find();
		if($token!==$loguser['password']){
			$this->error('操作超时，请登录重试。');
		}else{
			$user = array(array('name'=>$loguser['username'],
						  'token'=>$token,
						  'phone'=>$loguser['phone'],
						  'email'=>$email));
			$this->assign('loguser',$user);
			$this->display();
		}
	}
	public function Publish_car(){
		if(session('verify') != md5($_GET['verify'])) {
  		 $this->error('验证码错误！');
 		}else{
 			$user_form = M('User');
 			$user = $user_form->where("email='%s'",$_GET['email'])->find();
 			if ($user['password']!==$_GET['token']) {
 				$this->error('操作超时，请登录重试。');
 			}else{
 				$chexing = $_GET['chexing'];
 				$banchang  =$_GET['banchang'];
 				$zaizhong = $_GET['zaizhong'];
 				$cheling = $_GET['cheling'];
 				$from_province = $_GET['from_province'];
 				$from_city = $_GET['from_city'];

 				$to_province = $_GET['to_province'];
 				$to_city = $_GET['to_city'];
 				//echo $chexing."板长：".$banchang."M,"."载重".$zaizhong."KG，"."车龄".$cheling."年，从".$from_province.$from_city."到".$to_province.$to_city;
 				$name = $user['username'];
 				$phone = $user['phone'];
 				$email = $_GET['email'];
 				$fabuuser = array(
 					array('name'=>$name,
 						  'email'=>$email,
 						  'phone'=>$phone,
 						  'token'=>$_GET['token'],
 						  'chexing'=>$chexing,
 						  'banchang'=>$banchang,
 						  'zaizhong'=>$zaizhong,
 						  'cheling'=>$cheling,
 						  'from'=>$from_province.$from_city,
 						  'to'=>$to_province.$to_city));
 				$form_car = M('Car');
 				$save = array(
 							'email'=>$email,
 							'chexing'=>$chexing,
 						    'banchang'=>$banchang,
 						    'zaizhong'=>$zaizhong,
 						    'cheling'=>$cheling,
 						    'from'=>$from_province.$from_city,
 						    'to'=>$to_province.$to_city,
 						    'createtime'=>date('Y-m-d H:i:s'));
 				$isSave = $form_car->add($save);
 				if(!$isSave){
 					$this->error('发布失败，请重试');
 				}else{
 				$this->assign('data',$fabuuser);

 				$this->display();
 				}
 			}
 		}
	}
	public function goods(){
		
		$user_form = M('User');
		$isLog = session('?phonenumber');
		if($isLog){
			$user = $user_form->where("phone='%s'",session('phonenumber'))->find();
			if($user['password']==session('password')){
				$this->assign('user',array($user));

				$this->display();
			}else{
				$this->error('操作超时，请重新登陆。');
			}
		}else{
			$this->error('操作超时，请重新登陆。');
		}

	}
	public function cars(){
		$user_form = M('User');
		$isLog = session('?phonenumber');
		if($isLog){
			$user = $user_form->where("phone='%s'",session('phonenumber'))->find();
			if($user['password']==session('password')){
				$this->assign('user',array($user));
				if($user['iscarowner']==1){
					$this->display();
				}else{
					$this->redirect('Publish/notcarowner');
				}
				
			}else{
				$this->error('操作超时，请重新登陆。');
			}
		}else{
			$this->error('操作超时，请重新登陆。');
		}
	}
	public function notcarowner(){
		$user_form = M('User');
		$isLog = session('?phonenumber');
		if($isLog){
			$user = $user_form->where("phone='%s'",session('phonenumber'))->find();
			if($user['password']==session('password')){
				$this->assign('user',array($user));
					$this->display();
			}else{
				$this->error('操作超时，请重新登陆。');
			}
		}else{
			$this->error('操作超时，请重新登陆。');
		}
	}
	public function cars_do(){
				$user_form = M('User');
		$isLog = session('?phonenumber');
		if($isLog){
			$user = $user_form->where("phone='%s'",session('phonenumber'))->find();
			if($user['password']==session('password')){
				$newcar=array('chexing' => $_POST['chexing'],

				'banchang' => $_POST['banchang'],
				'zaizhong' => $_POST['zaizhong'],
				'cheling' => $_POST['cheling'],
				'phonenumber'=>$user['phone'],
				

				'fromprovince' => $_POST['fromp'],
				'fromcity' => $_POST['fromc'],

				'toprovince' =>$_POST['top'],
				'tocity' => $_POST['toc'],

				'time'=>$_POST['date'],
				'createtime'=>date('Y-m-d H:i:s')
									);
				$car_form = M('Car');
				$isnewcar = $car_form->add($newcar); 
				if(!$isnewcar){
					$this->error('发布失败，请返回重试');
				}else{
					$this->redirect('Cars/index');
				}
			}else{
				$this->error('操作超时，请重新登陆。');
			}
		}else{
			$this->error('操作超时，请重新登陆。');
		}
	}
	public function goods_do(){
		$user_form = M('User');
		$isLog = session('?phonenumber');
		if($isLog){
			$user = $user_form->where("phone='%s'",session('phonenumber'))->find();
			if($user['password']==session('password')){
				$newgood=array('goodtype' => $_POST['goodtype'],

				'phonenumber'=>$user['phone'],
				'goodname' => $_POST['goodname'],
				'goodnumber' => $_POST['goodnumber'],
				'goodweight' => $_POST['goodweight'],
				'goodlength' => $_POST['goodlength'],
				'needcar' => $_POST['needcar'],

				'fromprovince' => $_POST['fromp'],
				'fromcity' => $_POST['fromc'],

				'toprovince' =>$_POST['top'],
				'tocity' => $_POST['toc'],

				'timeon'=>$_POST['date'],
				'timeoff'=>$_POST['dateoff']
									);
				$good_form = M('Goods');
				$isnewgood = $good_form->add($newgood); 
				if(!$isnewgood){
					$this->error('发布失败，请返回重试');
				}else{
					$this->redirect('Goods/index');
				}
				

			}else{
				$this->error('操作超时，请重新登陆。');
			}
		}else{
			$this->error('操作超时，请重新登陆。');
		}
	}








	public function Api_CarPub(){
		$phonenumber = $_GET['phonenumber'];
		$token = $_GET['token'];
		$chexing = $_GET['chexing'];
		$banchang = $_GET['banchang'];
		$zaizhong = $_GET['zaizhong'];
		$cheling = $_GET['cheling'];
		$from_province = $_GET['from_province'];
		$from_city = $_GET['from_city'];
		$to_province = $_GET['to_province'];
		$to_city = $_GET['to_city'];

		$user_form = M('User');
		$user   = $user_form->where("phone = '%s'",$phonenumber)->find();
		if($_GET['type']=='xml'){
			if($token!==$user['password']){
				echo '<?xml version="1.0" encoding="utf-8"?><result>';
				header("Content-Type:text;   charset=utf-8");
				echo "<ResultCode>01001</ResultCode>";
				echo "<Msg>操作超时，请登录重试。</Msg>";
				echo "</result>";
			}else{
				if($user['iscarowner']==1){
					$newcar = array(
						'phonenumber'=>$phonenumber,
						'chexing'=>$chexing,
						'banchang'=>$banchang,
						'zaizhong'=>$zaizhong,
						'cheling'=>$cheling,
						'fromprovince'=>$from_province,
						'fromcity'=>$from_city,
						'toprovince'=>$to_province,
						'tocity'=>$to_city,
						'createtime'=>date('Y-m-d H:i:s'));
					$form_car = M('Car');
					$isnew = $form_car->add($newcar);
					if(!$isnew){
						echo '<?xml version="1.0" encoding="utf-8"?><result>';
						header("Content-Type:text;   charset=utf-8");
						echo "<ResultCode>01002</ResultCode>";
						echo "<Msg>发布失败，请重试</Msg>";
						echo "</result>";
					}else{
						echo '<?xml version="1.0" encoding="utf-8"?><result>';
						header("Content-Type:text;   charset=utf-8");
						echo "<ResultCode>01003</ResultCode>";
						echo "<Msg>发布成功</Msg>";
						echo "</result>";
					}
				}else{
					echo '<?xml version="1.0" encoding="utf-8"?><result>';
					header("Content-Type:text;   charset=utf-8");
					echo "<ResultCode>01004</ResultCode>";
					echo "<Msg>未认证车主，请到web端认证</Msg>";
					echo "</result>";
				}
			}
		}else{
			if($token!==$user['password']){
				$result =array('ResultCode'=>'01001',
								'Msg'=>'操作超时，请登录重试。');
				echo json_encode($result);
			}else{
				if($user['iscarowner']==1){
					$newcar = array(
						'phonenumber'=>$phonenumber,
						'chexing'=>$chexing,
						'banchang'=>$banchang,
						'zaizhong'=>$zaizhong,
						'cheling'=>$cheling,
						'fromprovince'=>$from_province,
						'fromcity'=>$from_city,
						'toprovince'=>$to_province,
						'tocity'=>$to_city,
						'createtime'=>date('Y-m-d H:i:s'));
					$form_car = M('Car');
					$isnew = $form_car->add($newcar);
					if(!$isnew){
						$result =array('ResultCode'=>'01002',
								'Msg'=>'发布失败，请重试',
								'log'=>mysql_error());
						echo json_encode($result);
					}else{
						$result =array('ResultCode'=>'01003',
								'Msg'=>'发布成功');
						echo json_encode($result);
					}
				}else{
					$result =array('ResultCode'=>'01004',
								'Msg'=>'未认证车主，请到web端认证');
					echo json_encode($result);
				}
			}
		}
	}
	public function Api_GoodPub(){
		//起始地、目的地、货物品名/类别、数量/重量/体积、需要车型、装货时间、到达时间、特殊要求
		$phonenumber = $_GET['phonenumber'];
		$token = $_GET['token'];
		$chexing = $_GET['chexing'];
		
		$from_province = $_GET['from_province'];
		$from_city = $_GET['from_city'];
		$to_province = $_GET['to_province'];
		$to_city = $_GET['to_city'];

		$goodname = $_GET['goodname'];
		$goodnumber = $_GET['goodnumber'];

		$timeon = $_GET['timeon'];
		$timeoff = $_GET['timeoff'];

		$user_form = M('User');
		$user   = $user_form->where("phone = '%s'",$phonenumber)->find();
		if($_GET['type']=='xml'){
			if($token!==$user['password']){
				echo '<?xml version="1.0" encoding="utf-8"?><result>';
				header("Content-Type:text;   charset=utf-8");
				echo "<ResultCode>01001</ResultCode>";
				echo "<Msg>操作超时，请登录重试。</Msg>";
				echo "</result>";
			}else{
				$newgood = array(
						'phonenumber'=>$phonenumber,
						'needcar'=>$chexing,
						'goodname'=>$goodname,
						'goodnumber'=>$goodnumber,
						'fromprovince'=>$from_province,
						'fromcity'=>$from_city,
						'toprovince'=>$to_province,
						'tocity'=>$to_city,
						'timeon'=>$timeon,
						'timeoff'=>$timeoff,
						'createtime'=>date('Y-m-d H:i:s'));
					$form_good = M('Goods');
					$isnew = $form_good->add($newgood);
					if(!isnew){
						echo '<?xml version="1.0" encoding="utf-8"?><result>';
						header("Content-Type:text;   charset=utf-8");
						echo "<ResultCode>01002</ResultCode>";
						echo "<Msg>发布失败，请重试</Msg>";
						echo "</result>";
					}else{
						echo '<?xml version="1.0" encoding="utf-8"?><result>';
						header("Content-Type:text;   charset=utf-8");
						echo "<ResultCode>01003</ResultCode>";
						echo "<Msg>发布成功</Msg>";
						echo "</result>";
					}
			}
		}else{
			if($token!==$user['password']){
				$result =array('ResultCode'=>'01001',
								'Msg'=>'操作超时，请登录重试。');
						echo json_encode($result);
			}else{
				$newgood = array(
						'phonenumber'=>$phonenumber,
						'needcar'=>$chexing,
						'goodname'=>$goodname,
						'goodnumber'=>$goodnumber,
						'fromprovince'=>$from_province,
						'fromcity'=>$from_city,
						'toprovince'=>$to_province,
						'tocity'=>$to_city,
						'timeon'=>$timeon,
						'timeoff'=>$timeoff,
						'createtime'=>date('Y-m-d H:i:s'));
					$form_good = M('Goods');
					$isnew = $form_good->add($newgood);
					if(!isnew){
						$result =array('ResultCode'=>'01002',
								'Msg'=>'发布失败，请重试');
						echo json_encode($result);
					}else{
						$result =array('ResultCode'=>'01003',
								'Msg'=>'发布成功');
						echo json_encode($result);
					}
			}
		}
	}
}























































?>