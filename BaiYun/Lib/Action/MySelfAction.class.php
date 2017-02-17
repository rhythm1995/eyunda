<?php 
/**
*个人中心模块 
*2015-7-15
*author:nodex-nero
*email:3068591197@qq.com
*/
class MySelfAction extends Action
{
	public function Api_CarGoing(){
		$phonenumber = $_GET['phonenumber'];
		$dan_form = M('Dan');
		$car_form  = M('Car');
		$good_form = M('Goods');
		$user_form = M('User');
		$condition = array('phonenumber'=>$phonenumber,
						   'isover'=>1,
						   'isoff'=>1,
						   'isdone'=>0);
		$dan = $dan_form->where($condition)->select();
		//var_dump($dan);
		if($_GET['type']=='xml'){
			echo '<?xml version="1.0" encoding="utf-8"?><dans>';
			header("Content-Type:text;charset=utf-8");
			for($i=0;$i<count($dan);$i++){
				$good = $good_form->where('id  = %d',$dan[$i]['goodid'])->find();
				//var_dump($good);
				$usergood = $user_form->where("phone='%s'",$good['phonenumber'])->find();
				echo "<dan>";
				echo "<goodid>".$good['id']."</goodid>";
				echo "<from>".$good['fromprovince'].$good['fromcity']."</from>";
				echo "<to>".$good['toprovince'].$good['tocity']."</to>";
				echo "<goodname>".$good['goodname']."</goodname>";
				echo "<goodnumber>".$good['goodnumber']."</goodnumber>";
				echo "<goodcar>".$good['needcar']."</goodcar>";
				echo "<goodownername>".$usergood['username']."</goodownername>";
				echo "<goodownerphone>".$usergood['phone']."</goodownerphone>";
				echo "<timeon>".$good['timeon']."</timeon>";
				echo "<timeoff>".$good['timeoff']."</timeoff>";
				echo "</dan>";
			}
			echo "</dans>";
		}else{
			$dansarr  = array();
			for($i=0;$i<count($dan);$i++){
				$good = $good_form->where('id  = %d',$dan[$i]['goodid'])->find();
				//var_dump($good);
				$usergood = $user_form->where("phone='%s'",$good['phonenumber'])->find();
				$danarr = array(
					'goodid'=>$good['id'],
					'from'=>$good['fromprovince'].$good['fromcity'],
					'to'=>$good['toprovince'].$good['tocity'],
					'goodname'=>$good['goodname'],
					'goodnumber'=>$good['goodnumber'],
					'goodcar'=>$good['needcar'],
					'goodownername'=>$usergood['username'],
					'goodownerphone'=>$usergood['phone'],
					'timeon'=>$good['timeon'],
					'timeoff'=>$good['timeoff']);
				array_unshift($dansarr,$danarr);
			}
			echo '{"dan":'.json_encode($dansarr).'}';
		}

	}
	public function Api_CarOff(){
		$phonenumber = $_GET['phonenumber'];
		$dan_form = M('Dan');
		$car_form  = M('Car');
		$good_form = M('Goods');
		$user_form = M('User');
		$condition = array('phonenumber'=>$phonenumber,
						   'isover'=>1,
						   'isoff'=>1,
						   'isdone'=>1);
		$dan = $dan_form->where($condition)->select();
		//var_dump($dan);
		if($_GET['type']=='xml'){
			echo '<?xml version="1.0" encoding="utf-8"?><dans>';
			header("Content-Type:text;charset=utf-8");
			for($i=0;$i<count($dan);$i++){
				$good = $good_form->where('id  = %d',$dan[$i]['goodid'])->find();
				//var_dump($good);
				$usergood = $user_form->where("phone='%s'",$good['phonenumber'])->find();
				echo "<dan>";
				echo "<goodid>".$good['id']."</goodid>";
				echo "<from>".$good['fromprovince'].$good['fromcity']."</from>";
				echo "<to>".$good['toprovince'].$good['tocity']."</to>";
				echo "<goodname>".$good['goodname']."</goodname>";
				echo "<goodnumber>".$good['goodnumber']."</goodnumber>";
				echo "<goodcar>".$good['needcar']."</goodcar>";
				echo "<goodownername>".$usergood['username']."</goodownername>";
				echo "<goodownerphone>".$usergood['phone']."</goodownerphone>";
				echo "<timeon>".$good['timeon']."</timeon>";
				echo "<timeoff>".$good['timeoff']."</timeoff>";
				echo "<isstar>".$dan[$i]['isstar']."</isstar>";
				echo "</dan>";
			}
			echo "</dans>";
		}else{
			$dansarr  = array();
			for($i=0;$i<count($dan);$i++){
				$good = $good_form->where('id  = %d',$dan[$i]['goodid'])->find();
				//var_dump($good);
				$usergood = $user_form->where("phone='%s'",$good['phonenumber'])->find();
				$danarr = array(
					'goodid'=>$good['id'],
					'from'=>$good['fromprovince'].$good['fromcity'],
					'to'=>$good['toprovince'].$good['tocity'],
					'goodname'=>$good['goodname'],
					'goodnumber'=>$good['goodnumber'],
					'goodcar'=>$good['needcar'],
					'goodownername'=>$usergood['username'],
					'goodownerphone'=>$usergood['phone'],
					'timeon'=>$good['timeon'],
					'timeoff'=>$good['timeoff'],
					'isstar'=>$dan[$i]['isstar']);
				array_unshift($dansarr,$danarr);
			}
			echo '{"dan":'.json_encode($dansarr).'}';
		}
	}
	public function Api_CarWaiting(){
		$phonenumber = $_GET['phonenumber'];
		$dan_form = M('Dan');
		$car_form  = M('Car');
		$good_form = M('Goods');
		$user_form = M('User');
		$condition = array('phonenumber'=>$phonenumber,
						   'isover'=>1,
						   'isoff'=>0,
						   'iddone'=>0);
		$dan = $dan_form->where($condition)->select();
		//var_dump($dan);
		if($_GET['type']=='xml'){
			echo '<?xml version="1.0" encoding="utf-8"?><dans>';
			header("Content-Type:text;charset=utf-8");
			for($i=0;$i<count($dan);$i++){
				$good = $good_form->where('id  = %d',$dan[$i]['goodid'])->find();
				//var_dump($good);
				$usergood = $user_form->where("phone='%s'",$good['phonenumber'])->find();
				echo "<dan>";
				echo "<goodid>".$good['id']."</goodid>";
				echo "<from>".$good['fromprovince'].$good['fromcity']."</from>";
				echo "<to>".$good['toprovince'].$good['tocity']."</to>";
				echo "<goodname>".$good['goodname']."</goodname>";
				echo "<goodnumber>".$good['goodnumber']."</goodnumber>";
				echo "<goodcar>".$good['needcar']."</goodcar>";
				echo "<goodownername>".$usergood['username']."</goodownername>";
				echo "<goodownerphone>".$usergood['phone']."</goodownerphone>";
				echo "<timeon>".$good['timeon']."</timeon>";
				echo "<timeoff>".$good['timeoff']."</timeoff>";
				echo "</dan>";
			}
			echo "</dans>";
		}else{
			$dansarr  = array();
			for($i=0;$i<count($dan);$i++){
				$good = $good_form->where('id  = %d',$dan[$i]['goodid'])->find();
				//var_dump($good);
				$usergood = $user_form->where("phone='%s'",$good['phonenumber'])->find();
				$danarr = array(
					'goodid'=>$good['id'],
					'from'=>$good['fromprovince'].$good['fromcity'],
					'to'=>$good['toprovince'].$good['tocity'],
					'goodname'=>$good['goodname'],
					'goodnumber'=>$good['goodnumber'],
					'goodcar'=>$good['needcar'],
					'goodownername'=>$usergood['username'],
					'goodownerphone'=>$usergood['phone'],
					'timeon'=>$good['timeon'],
					'timeoff'=>$good['timeoff']);
				array_unshift($dansarr,$danarr);
			}
			echo '{"dan":'.json_encode($dansarr).'}';
		}
	}

////////////
///////////  
//////////
/////////
////////
///////
//////
/////
////
///
//
//
	public function Api_GoodGoing(){
		$phonenumber = $_GET['phonenumber'];
		$dan_form = M('Dan');
		$car_form  = M('Car');
		$good_form = M('Goods');
		$user_form = M('User');
		$condition = array('goodphone'=>$phonenumber,
						   'isover'=>1,
						   'isoff'=>1,
						   'isdone'=>0);
		$dan = $dan_form->where($condition)->select();
		//var_dump($dan);
		if($_GET['type']=='xml'){
			echo '<?xml version="1.0" encoding="utf-8"?><dans>';
			header("Content-Type:text;charset=utf-8");
			for($i=0;$i<count($dan);$i++){
				$good = $good_form->where('id  = %d',$dan[$i]['goodid'])->find();
				//var_dump($good);
				$caruser = $user_form->where("phone='%s'",$dan[$i]['phonenumber'])->find();
				$usergood = $user_form->where("phone='%s'",$good['phonenumber'])->find();
				echo "<dan>";
				echo "<goodid>".$good['id']."</goodid>";
				echo "<from>".$good['fromprovince'].$good['fromcity']."</from>";
				echo "<to>".$good['toprovince'].$good['tocity']."</to>";
				echo "<goodname>".$good['goodname']."</goodname>";
				echo "<goodnumber>".$good['goodnumber']."</goodnumber>";
				echo "<goodcar>".$good['needcar']."</goodcar>";
				echo "<carname>".$caruser['username']."</carname>";
				echo "<carphone>".$caruser['phone']."</carphone>";
				echo "<timeon>".$good['timeon']."</timeon>";
				echo "<timeoff>".$good['timeoff']."</timeoff>";
				echo "</dan>";
			}
			echo "</dans>";
		}else{
			$dansarr  = array();
			for($i=0;$i<count($dan);$i++){
				$good = $good_form->where('id  = %d',$dan[$i]['goodid'])->find();
				//var_dump($good);
				$caruser = $user_form->where("phone='%s'",$dan[$i]['phonenumber'])->find();
				$usergood = $user_form->where("phone='%s'",$good['phonenumber'])->find();
				$danarr = array(
					'goodid'=>$good['id'],
					'from'=>$good['fromprovince'].$good['fromcity'],
					'to'=>$good['toprovince'].$good['tocity'],
					'goodname'=>$good['goodname'],
					'goodnumber'=>$good['goodnumber'],
					'goodcar'=>$good['needcar'],
					'carname'=>$caruser['username'],
					'carphone'=>$caruser['phone'],
					'timeon'=>$good['timeon'],
					'timeoff'=>$good['timeoff']);
				array_unshift($dansarr,$danarr);
			}
			echo '{"dan":'.json_encode($dansarr).'}';
		}

	}
	public function Api_GoodOff(){
		$phonenumber = $_GET['phonenumber'];
		$dan_form = M('Dan');
		$car_form  = M('Car');
		$good_form = M('Goods');
		$user_form = M('User');
		$condition = array('goodphone'=>$phonenumber,
						   'isover'=>1,
						   'isoff'=>1,
						   'isdone'=>1);
		$dan = $dan_form->where($condition)->select();
		//var_dump($dan);
		if($_GET['type']=='xml'){
			echo '<?xml version="1.0" encoding="utf-8"?><dans>';
			header("Content-Type:text;charset=utf-8");
			for($i=0;$i<count($dan);$i++){
				$good = $good_form->where('id  = %d',$dan[$i]['goodid'])->find();
				//var_dump($good);
				$caruser = $user_form->where("phone='%s'",$dan[$i]['phonenumber'])->find();
				$usergood = $user_form->where("phone='%s'",$good['phonenumber'])->find();
				echo "<dan>";
				echo "<goodid>".$good['id']."</goodid>";
				echo "<from>".$good['fromprovince'].$good['fromcity']."</from>";
				echo "<to>".$good['toprovince'].$good['tocity']."</to>";
				echo "<goodname>".$good['goodname']."</goodname>";
				echo "<goodnumber>".$good['goodnumber']."</goodnumber>";
				echo "<goodcar>".$good['needcar']."</goodcar>";
				echo "<carname>".$caruser['username']."</carname>";
				echo "<carphone>".$caruser['phone']."</carphone>";
				echo "<timeon>".$good['timeon']."</timeon>";
				echo "<timeoff>".$good['timeoff']."</timeoff>";
				echo "</dan>";
			}
			echo "</dans>";
		}else{
			$dansarr  = array();
			for($i=0;$i<count($dan);$i++){
				$good = $good_form->where('id  = %d',$dan[$i]['goodid'])->find();
				//var_dump($good);
				$caruser = $user_form->where("phone='%s'",$dan[$i]['phonenumber'])->find();
				$usergood = $user_form->where("phone='%s'",$good['phonenumber'])->find();
				$danarr = array(
					'goodid'=>$good['id'],
					'from'=>$good['fromprovince'].$good['fromcity'],
					'to'=>$good['toprovince'].$good['tocity'],
					'goodname'=>$good['goodname'],
					'goodnumber'=>$good['goodnumber'],
					'goodcar'=>$good['needcar'],
					'carname'=>$caruser['username'],
					'carphone'=>$caruser['phone'],
					'timeon'=>$good['timeon'],
					'timeoff'=>$good['timeoff']);
				array_unshift($dansarr,$danarr);
			}
			echo '{"dan":'.json_encode($dansarr).'}';
		}
	}
	public function Api_GoodWaiting(){
		$phonenumber = $_GET['phonenumber'];
		$dan_form = M('Dan');
		$car_form  = M('Car');
		$good_form = M('Goods');
		$user_form = M('User');
		$condition = array('goodphone'=>$phonenumber,
						   'isover'=>1,
						   'isoff'=>0,
						   'isdone'=>0);
		$dan = $dan_form->where($condition)->select();
		//var_dump($dan);
		if($_GET['type']=='xml'){
			echo '<?xml version="1.0" encoding="utf-8"?><dans>';
			header("Content-Type:text;charset=utf-8");
			for($i=0;$i<count($dan);$i++){
				$good = $good_form->where('id  = %d',$dan[$i]['goodid'])->find();
				//var_dump($good);
				$caruser = $user_form->where("phone='%s'",$dan[$i]['phonenumber'])->find();
				$usergood = $user_form->where("phone='%s'",$good['phonenumber'])->find();
				echo "<dan>";
				echo "<goodid>".$good['id']."</goodid>";
				echo "<from>".$good['fromprovince'].$good['fromcity']."</from>";
				echo "<to>".$good['toprovince'].$good['tocity']."</to>";
				echo "<goodname>".$good['goodname']."</goodname>";
				echo "<goodnumber>".$good['goodnumber']."</goodnumber>";
				echo "<goodcar>".$good['needcar']."</goodcar>";
				echo "<carname>".$caruser['username']."</carname>";
				echo "<carphone>".$caruser['phone']."</carphone>";
				echo "<timeon>".$good['timeon']."</timeon>";
				echo "<timeoff>".$good['timeoff']."</timeoff>";
				echo "</dan>";
			}
			echo "</dans>";
		}else{
			$dansarr  = array();
			for($i=0;$i<count($dan);$i++){
				$good = $good_form->where('id  = %d',$dan[$i]['goodid'])->find();
				//var_dump($good);
				$caruser = $user_form->where("phone='%s'",$dan[$i]['phonenumber'])->find();
				$usergood = $user_form->where("phone='%s'",$good['phonenumber'])->find();
				$danarr = array(
					'goodid'=>$good['id'],
					'from'=>$good['fromprovince'].$good['fromcity'],
					'to'=>$good['toprovince'].$good['tocity'],
					'goodname'=>$good['goodname'],
					'goodnumber'=>$good['goodnumber'],
					'goodcar'=>$good['needcar'],
					'carname'=>$caruser['username'],
					'carphone'=>$caruser['phone'],
					'timeon'=>$good['timeon'],
					'timeoff'=>$good['timeoff']);
				array_unshift($dansarr,$danarr);
			}
			echo '{"dan":'.json_encode($dansarr).'}';
		}
	}
/////////////////////////
////////////////////////
///////////////////////
//////////////////////
///////nodeX/////////
////////////////////
///////////////////
//////////////////
/////////////////
////////////////
///////////////
//////////////
/////////////
////////////
///////////
//////////
/////////
////////
///////
//////
/////
////
///
//
	public function Api_Xuanren(){
		$phonenumber = $_GET['phonenumber'];
		$goodid      = $_GET['goodid'];
		$goodphone   = $_GET['goodphone'];
		$token       = $_GET['token'];
		$user_form = M('User');
		$dan_form = M('Dan');
		$user = $user_form->where("phone='%s'",$goodphone)->find();
		if($_GET['type']=='xml'){
			if($token!==$user['password']){
				echo '<?xml version="1.0" encoding="utf-8"?><result>';
				header("Content-Type:text;charset=utf-8");
				echo "<resultCode>20000</resultCode>";
				echo "<Msg>操作超时。</Msg>";
				echo "</result>";
			}else{
				$delcondition = array('goodid'=>$goodid,
									  'goodphone'=>$goodphone,
									  'isover'=>1,
									 );
				$deldan = $dan_form->where($delcondition)->delete();
				if(!$deldan){
					echo '<?xml version="1.0" encoding="utf-8"?><result>';
					header("Content-Type:text;charset=utf-8");
					echo "<resultCode>20001</resultCode>";
					echo "<Msg>订单整理失败。</Msg>";
					echo "</result>";
				}else{
					$newdan = array('goodid'=>$goodid,
								'phonenumber'=>$phonenumber,
								'goodphone'=>$goodphone,
								'isover'=>1,
								'isoff'=>1,
								'isdone'=>0);
					$adddan = $dan_form->add($newdan);
					if(!$adddan){
						echo '<?xml version="1.0" encoding="utf-8"?><result>';
						header("Content-Type:text;charset=utf-8");
						echo "<resultCode>20002</resultCode>";
						echo "<Msg>确认订单失败。</Msg>";
						echo "</result>";
					}else{
						echo '<?xml version="1.0" encoding="utf-8"?><result>';
						header("Content-Type:text;charset=utf-8");
						echo "<resultCode>20003</resultCode>";
						echo "<Msg>确认订单成功。</Msg>";
						echo "</result>";
					}
				}
			}
		}else{
			if($token!==$user['password']){
				$result = array('resultCode'=>'20000',
								'Msg'=>'操作超时。');
				echo json_encode($result);
			}else{
				$delcondition = array('goodid'=>$goodid,
									  'goodphone'=>$goodphone,
									  'isover'=>1,
									 );
				$deldan = $dan_form->where($delcondition)->delete();
				if(!$deldan){
					$result = array('resultCode'=>'20001',
									'Msg'=>'订单整理失败。');
					echo json_encode($result);
				}else{
					$newdan = array('goodid'=>$goodid,
								'phonenumber'=>$phonenumber,
								'goodphone'=>$goodphone,
								'isover'=>1,
								'isoff'=>1,
								'isdone'=>0);
					$adddan = $dan_form->add($newdan);
					if(!$adddan){
						$result = array('resultCode'=>'20002',
									'Msg'=>'订单确认失败。');
						echo json_encode($result);
					}else{
						$result = array('resultCode'=>'20003',
									'Msg'=>'订单确认成功');
						echo json_encode($result);
					}
				}
			}
		}
	}
	public function Api_Shouhuo(){
		$phonenumber = $_GET['phonenumber'];
		$goodid      = $_GET['goodid'];
		$goodphone   = $_GET['goodphone'];
		$token       = $_GET['token'];
		$user_form = M('User');
		$dan_form = M('Dan');
		$user = $user_form->where("phone='%s'",$goodphone)->find();
		if($_GET['type']=='xml'){
			if($token!==$user['password']){
				echo '<?xml version="1.0" encoding="utf-8"?><result>';
				header("Content-Type:text;charset=utf-8");
				echo "<resultCode>20000</resultCode>";
				echo "<Msg>操作超时。</Msg>";
				echo "</result>";
			}else{
				$delcondition = array('goodid'=>$goodid,
									  'goodphone'=>$goodphone,
									  'isover'=>1,
									  'isoff'=>1
									 );
				$deldan = $dan_form->where($delcondition)->delete();
				if(!$deldan){
					echo '<?xml version="1.0" encoding="utf-8"?><result>';
					header("Content-Type:text;charset=utf-8");
					echo "<resultCode>20001</resultCode>";
					echo "<Msg>订单整理失败。</Msg>";
					echo "</result>";
				}else{
					$newdan = array('goodid'=>$goodid,
								'phonenumber'=>$phonenumber,
								'goodphone'=>$goodphone,
								'isover'=>1,
								'isoff'=>1,
								'isdone'=>1);
					$adddan = $dan_form->add($newdan);
					if(!$adddan){
						echo '<?xml version="1.0" encoding="utf-8"?><result>';
						header("Content-Type:text;charset=utf-8");
						echo "<resultCode>20002</resultCode>";
						echo "<Msg>确认收货失败。</Msg>";
						echo "</result>";
					}else{
						echo '<?xml version="1.0" encoding="utf-8"?><result>';
						header("Content-Type:text;charset=utf-8");
						echo "<resultCode>20003</resultCode>";
						echo "<Msg>确认收货成功。</Msg>";
						echo "</result>";
					}
				}
			}
		}else{
			if($token!==$user['password']){
				$result = array('resultCode'=>'20000',
								'Msg'=>'操作超时。');
				echo json_encode($result);
			}else{
				$delcondition = array('goodid'=>$goodid,
									  'goodphone'=>$goodphone,
									  'isover'=>1,
									  'isoff'=>1
									 );
				$deldan = $dan_form->where($delcondition)->delete();
				if(!$deldan){
					$result = array('resultCode'=>'20001',
									'Msg'=>'订单整理失败。');
					echo json_encode($result);
				}else{
					$newdan = array('goodid'=>$goodid,
								'phonenumber'=>$phonenumber,
								'goodphone'=>$goodphone,
								'isover'=>1,
								'isoff'=>1,
								'isdone'=>1);
					$adddan = $dan_form->add($newdan);
					if(!$adddan){
						$result = array('resultCode'=>'20002',
									'Msg'=>'确认收货失败。');
						echo json_encode($result);
					}else{
						$result = array('resultCode'=>'20003',
									'Msg'=>'确认收货成功');
						echo json_encode($result);
					}
				}
			}
		}
	}
	public function Api_MySelf(){
		$phonenumber = $_GET['phonenumber'];
		$user_form = M('User');
		$car_form = M('Car');
		$good_form = M('Goods');
		$dan_form = M('Dan');
		$user =$user_form->where("phone='%s'",$phonenumber)->find();
		//发车数，发货数，接单数，成功数，信用等级，
		//发布车源数
		$car = $car_form->where("phonenumber='%s'",$phonenumber)->select();
		$carnum  = count($car);

		//发布货源数
		$good = $good_form->where("phonenumber='%s'",$phonenumber)->select();
		$goodnum = count($good);

		//接单请求数
		$dan = $dan_form->where("phonenumber='%s'",$phonenumber)->select();
		$dannum = count($dan);

		//成功接单数
		$condition = array('phonenumber'=>$phonenumber,
							'isover'=>1);
		$done = $dan_form->where($condition)->select();
		$donenum = count($done);

		//完成数
		$condition = array('phonenumber'=>$phonenumber,
							'isover'=>1,
							'isoff'=>1);
		$off = $dan_form->where($condition)->select();
		$offnum = count($off);

		//平均信用分
		$alluser = $user_form->order('id desc')->select();
		$allcount = count($alluser);
		//$allstar =0;
		for ($i=0; $i < $allcount; $i++) { 
			$allstar = $allstar+$alluser[$i]['star'];
		}

		$prestar = ($allstar-999999)/($allcount-1);


		//平均信用星
		$Star = Star($prestar);

		//自己信用分
		$mystar = $user['star'];

		//自己信用星
		$myStar = Star($mystar);
		if($_GET['type']=='xml'){
			echo '<?xml version="1.0" encoding="utf-8"?><myself>';
			header("Content-Type:text;charset=utf-8");
			echo "<cheyuan>".$carnum."</cheyuan>";
			echo "<huoyuan>".$goodnum."</huoyuan>";
			echo "<jiedan>".$dannum."</jiedan>";
			echo "<success>".$donenum."</success>";
			echo "<wancheng>".$offnum."</wancheng>";
			echo "<prestar>".$prestar."</prestar>";
			echo "<preStar>".$Star."</preStar>";
			echo "<mystar>".$mystar."</mystar>";
			echo "<myStar>".$myStar."</myStar>";
			echo "</myself>";
		}else{
			$result = array(
				'cheyuan'=>$carnum,
				"huoyuan"=>$goodnum,
				"jiedan"=>$dannum,
				"success"=>$donenum,
				"wancheng"=>$offnum,
				"prestar"=>$prestar,
				"preStar"=>$Star,
				"mystar"=>$mystar,
				"myStar"=>$myStar
				);
			echo json_encode($result);
		}
	}
	////////////////////////////
	///////////////////
	//////////
	///////
	////////
	///////
	///////
public function Api_CarStar(){
		$star = $_GET['star'];
		$phonenumber =$_GET['phonenumber'];
		$range = 0;
		switch ($star) {
			case 0:
				$range = -4;
				break;
			case 1:
				$range = -2;
				break;
			case 2:
				$range = -1;
				break;
			case 3:
				$range = 1;
				break;
			case 4:
				$range = 2;
				break;
			case 5:
				$range = 4;
				break;
			default:
				$range = 0;
				break;
		}
		$user_list = M('User');
		$user = $user_list->where("phone='%s'",$phonenumber)->find();
		$grades = $user['star'];
		$grades = $grades + $range;
		$data['star'] = $grades;
		$isstar = $user_list->where("phone='%s'",$phonenumber)->save($data);
		if($_GET['type'=='xml']){
			if(!$isstar){
				echo '<?xml version="1.0" encoding="utf-8"?><result>';
           	    header("Content-Type:text;   charset=utf-8");
           	    echo "<resultCode>0000000</resultCode>";
           	    echo "<Msg>评级失败</Msg>";
           	    echo "</result>";
			}else{
				echo '<?xml version="1.0" encoding="utf-8"?><result>';
           	    header("Content-Type:text;   charset=utf-8");
           	    echo "<resultCode>0000001</resultCode>";
           	    echo "<Msg>评级成功</Msg>";
           	    echo "</result>";
			}
		}else{
			if(!$isstar){
				$result =  array('resultCode'=>'0000000','Msg'=>'评级失败');
				echo json_encode($result);
			}else{
				$result =  array('resultCode'=>'0000001','Msg'=>'评级成功');
				echo json_encode($result);
			}
		}
	}
	public function Api_GoodStar(){
		$star = $_GET['star'];
		$phonenumber =$_GET['phonenumber'];
		$goodid = $_GET['goodid'];
		$goodphone = $_GET['goodphone'];

		$range = 0;
		switch ($star) {
			case 0:
				$range = -4;
				break;
			case 1:
				$range = -2;
				break;
			case 2:
				$range = -1;
				break;
			case 3:
				$range = 1;
				break;
			case 4:
				$range = 2;
				break;
			case 5:
				$range = 4;
				break;
			default:
				$range = 0;
				break;
		}
		$user_list = M('User');
		$user = $user_list->where("phone='%s'",$phonenumber)->find();
		$grades = $user['star'];
		$grades = $grades + $range;
		$data['star'] = $grades;
		$isstar = $user_list->where("phone='%s'",$phonenumber)->save($data);

		$dan_form =  M('Dan');
		$changedancondition = array('phonenumber'=>$phonenumber,
									'goodid'=>$goodid,
									'goodphone'=>$goodphone,
									'isoff'=>1,
									'isdone'=>1,
									'isover'=>1);
		$newdan = array('phonenumber'=>$phonenumber,
									'goodid'=>$goodid,
									'goodphone'=>$goodphone,
									'isoff'=>1,
									'isdone'=>1,
									'isover'=>1,
									'isstar'=>1,
									'createtime'=>date('y-m-d H:m:s')); 
		//$aaa =$dan_form->where($changedancondition)->find();
		//echo $aaa;
		$ischangedan = $dan_form->where($changedancondition)->delete();
		$isnewdan = $dan_form->add($newdan);
		if($_GET['type'=='xml']){
			if(!$isstar){
				echo '<?xml version="1.0" encoding="utf-8"?><result>';
           	    header("Content-Type:text;   charset=utf-8");
           	    echo "<resultCode>0000000</resultCode>";
           	    echo "<Msg>评级失败</Msg>";
           	    echo "</result>";
			}elseif(!$ischangedan){
				echo '<?xml version="1.0" encoding="utf-8"?><result>';
           	    header("Content-Type:text;   charset=utf-8");
           	    echo "<resultCode>0000003</resultCode>";
           	    echo "<Msg>评级失败</Msg>";
           	    echo "</result>";
			}elseif(!$isnewdan){
				echo '<?xml version="1.0" encoding="utf-8"?><result>';
           	    header("Content-Type:text;   charset=utf-8");
           	    echo "<resultCode>0000005</resultCode>";
           	    echo "<Msg>评级失败</Msg>";
           	    echo "</result>";
			}else{
				echo '<?xml version="1.0" encoding="utf-8"?><result>';
           	    header("Content-Type:text;   charset=utf-8");
           	    echo "<resultCode>0000001</resultCode>";
           	    echo "<Msg>评级成功</Msg>";
           	    echo "</result>";
			}
		}else{
			if(!$isstar){
				$result =  array('resultCode'=>'0000000','Msg'=>'评级失败');
				echo json_encode($result);
			}elseif(!$ischangedan){
				$result =  array('resultCode'=>'0000003','Msg'=>'评级失败');
				echo json_encode($result);
			}elseif(!$isnewdan){
				$result =  array('resultCode'=>'0000005','Msg'=>'评级失败');
				echo json_encode($result);
			}else{
				$result =  array('resultCode'=>'0000001','Msg'=>'评级成功');
				echo json_encode($result);
			}
		}
	}
	///////////
	////////
	/////////
	//////
}
//一些函数
function Star($star){
	if($star>=120){
		$star = 5;
	}elseif($star<=0){
		$star  =0;
	}else{
		$star = (floor(($star/20)*10))/10;
	}
	return $star;
}
 























 ?>