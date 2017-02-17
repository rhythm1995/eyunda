<?php
/**
*货物模块 
*2015-7.14
*author:nodex-nero
*/
class GoodsAction extends Action
{	

	public function index(){
		$user_form = M('User');
		$goods_form = M('Goods');
		$isLog = session('?phonenumber');
		if($isLog){
			$user = $user_form->where("phone='%s'",session('phonenumber'))->find();
			
			//var_dump($user);
			if($user['password']==session('password')){
				$this->assign('user',array($user));
				
				$goods_list = $goods_form->order('id')->select();
				//var_dump($goods_list);
				$goods  =array();
				for($i= 0;$i<count($goods_list);$i++){
					$loguser = $user_form->where("phone='%s'",$goods_list[$i]['phonenumber'])->find();
					$good = array(
						'username'=>$loguser['username'],
						'phonenumber'=>session('phonenumber'),
						'from'=>$goods_list[$i]['fromprovince'].$goods_list[$i]['fromcity'],
						'to'=>$goods_list[$i]['toprovince'].$goods_list[$i]['tocity'],
						'createtime'=>$goods_list[$i]['createtime'],
						'needcar'=>$goods_list[$i]['needcar'],
						'goodname'=>$goods_list[$i]['goodname'],
						'goodnumber'=>$goods_list[$i]['goodnumber'],
						'timeon'=>$goods_list[$i]['timeon'],
						'timeoff'=>$goods_list['timeoff']
						);
					array_unshift($goods,$good);
				}
				$this->assign('goods',$goods);
				$this->display();
			}else{
				$this->error('操作超时，请重新登陆。');
			}
		}else{
			$this->error('操作超时，请重新登陆。');
		}

	}
	public function WebSearch(){
		$user_form = M('User');
		$goods_form = M('Goods');
		$isLog = session('?phonenumber');
		if($isLog){
			$user = $user_form->where("phone='%s'",session('phonenumber'))->find();
			//var_dump($user);
			if($user['password']==session('password')){
				$this->assign('user',array($user));
				
				//$condition['phonenumber'] = array('like',"%{$_GET['key']}%");
				$condition['fromprovince']=array('like',"%{$_POST['from']}%");
				$condition['fromcity']=array('like',"%{$_POST['from']}%");
				$condition['toprovince']=array('like',"%{$_POST['to']}%");
				$condition['tocity']=array('like',"%{$_POST['to']}%");
				//$condition['banchang']=array('like',"%{$_POST['banchang']}%");
				$condition['goodnumber']=array('like',"%{$_POST['zaizhong']}%");
				$condition['needcar']=array('like',"%{$_POST['chexing']}%");
				//$condition['cheling']=array('like',"%{$_POST['key']}%");
				$condition['_logic'] = 'OR';

				$goods_list = $goods_form->where($condition)->select();
				//var_dump($goods_list);
				//var_dump($goods_list);
				$goods  =array();
				for($i= 0;$i<count($goods_list);$i++){
					$loguser = $user_form->where("phone='%s'",$goods_list[$i]['phonenumber'])->find();
					$good = array(
						'username'=>$loguser['username'],
						'phonenumber'=>session('phonenumber'),
						'from'=>$goods_list[$i]['fromprovince'].$goods_list[$i]['fromcity'],
						'to'=>$goods_list[$i]['toprovince'].$goods_list[$i]['tocity'],
						'createtime'=>$goods_list[$i]['createtime'],
						'needcar'=>$goods_list[$i]['needcar'],
						'goodname'=>$goods_list[$i]['goodname'],
						'goodnumber'=>$goods_list[$i]['goodnumber'],
						'timeon'=>$goods_list[$i]['timeon'],
						'timeoff'=>$goods_list['timeoff']
						);
					array_unshift($goods,$good);
				}
				$this->assign('goods',$goods);
				$this->display();
			}else{
				$this->error('操作超时，请重新登陆。');
			}
		}else{
			$this->error('操作超时，请重新登陆。');
		}
	}




	//发货地、收货地、货物名称/类型、货物数量/重量/体积、所需车型、装货时间、卸货时间、联系方式
	public function Api_Goods(){
		$goods_form = M('Goods');
		$user_form = M('User');
		$goods_list= $goods_form->order('id desc')->select();
		if($_GET['type']=='xml'){
			echo '<?xml version="1.0" encoding="utf-8"?><goods>';
			header("Content-Type:text;charset=utf-8");
			for ($i=0;$i <count($goods_list) ; $i++) { 
				header("Content-Type:text;charset=utf-8");
				$user = $user_form->where("phone = '%s'",$goods_list[$i]['phonenumber'])->find(); 
				echo "<good>";
				echo "<id>".$goods_list[$i]['id']."</id>";
				echo "<phonenumber>".$goods_list[$i]['phonenumber']."</phonenumber>";
				echo "<from>".$goods_list[$i]['fromprovince'].$goods_list[$i]['fromcity']."</from>";
				echo "<to>".$goods_list[$i]['toprovince'].$goods_list[$i]['tocity']."</to>";
				echo "<ontime>".$goods_list[$i]['timeon']."</ontime>";
				echo "<offtime>".$goods_list[$i]['timeoff']."</offtime>";
				echo "<needcar>".$goods_list[$i]['needcar']."</needcar>";
				echo "<goodname>".$goods_list[$i]['goodname']."</goodname>";
				echo "<goodnumber>".$goods_list[$i]['goodnumber']."</goodnumber>";
				echo "<mapurl>".'http://104.237.154.88:8080/baiyun/index.php/Map/map/from/'.$goods_list[$i]['fromprovince'].$goods_list[$i]['fromcity'].'/to/'.$goods_list[$i]['toprovince'].$goods_list[$i]['tocity']."</mapurl>";
				echo "<star>".Star($user['star'])."</star>";
				echo "</good>";
			}
			echo "</goods>";
		}else{
			$goods  = array();
			for ($i=0; $i <count($goods_list) ; $i++) {
				$user = $user_form->where("phone = '%s'",$goods_list[$i]['phonenumber'])->find(); 
				//var_dump($user);
				$good = array(
					'id' =>$goods_list[$i]['id'],
					'phonenumber'=>$goods_list[$i]['phonenumber'],
					'from'=>$goods_list[$i]['fromprovince'].$goods_list[$i]['fromcity'],
					'to'=>$goods_list[$i]['toprovince'].$goods_list[$i]['tocity'],
					'ontime'=>$goods_list[$i]['timeon'],
					'offtime'=>$goods_list[$i]['timeoff'],
					'needcar'=>$goods_list[$i]['needcar'],
					'goodname'=>$goods_list[$i]['goodname'],
					'goodnumber'=>$goods_list[$i]['goodnumber'],
					'mapurl'=>'http://104.237.154.88:8080/baiyun/index.php/Map/map/from/'.$goods_list[$i]['fromprovince'].$goods_list[$i]['fromcity'].'/to/'.$goods_list[$i]['toprovince'].$goods_list[$i]['tocity'],
					'star'=>Star($user['star'])
					);
				array_unshift($goods,$good);
			}
			echo '{"goods":'.json_encode($goods).'}';
		}

	}
	public function Api_Good(){
		$goodid = $_GET['goodid'];
		$goods_form = M('Goods');
		$user_form = M('User');
		$good = $goods_form->where('id = %d',$goodid)->find();
		$user = $user_form->where("phone = '%s'",$good['phonenumber'])->find(); 
		if($_GET['type']=='xml'){
				echo '<?xml version="1.0" encoding="utf-8"?><good>';
				header("Content-Type:text;charset=utf-8");
				echo "<id>".$good['id']."</id>";
				echo "<phonenumber>".$good['phonenumber']."</phonenumber>";
				echo "<username>".$user['username']."</username>";
				echo "<from>".$goods['fromprovince'].$good['fromcity']."</from>";
				echo "<to>".$good['toprovince'].$good['tocity']."</to>";
				echo "<ontime>".$good['timeon']."</ontime>";
				echo "<offtime>".$good['timeoff']."</offtime>";
				echo "<needcar>".$good['needcar']."</needcar>";
				echo "<goodname>".$good['goodname']."</goodname>";
				echo "<goodnumber>".$good['goodnumber']."</goodnumber>";
				echo "<mapurl>".'http://104.237.154.88:8080/baiyun/index.php/Map/map/from/'.$good['fromprovince'].$good['fromcity'].'/to/'.$good['toprovince'].$good['tocity']."</mapurl>";
				echo "<star>".Star($user['star'])."</star>";
				echo "</good>";
		}else{
			$good_array  = array('id' =>$good['id'],
					'phonenumber'=>$good['phonenumber'],
					'username'=>$user['username'],
					'from'=>$good['fromprovince'].$good['fromcity'],
					'to'=>$good['toprovince'].$good['tocity'],
					'ontime'=>$good['timeon'],
					'offtime'=>$good['timeoff'],
					'needcar'=>$good['needcar'],
					'goodname'=>$good['goodname'],
					'goodnumber'=>$good['goodnumber'],
					'mapurl'=>'http://104.237.154.88:8080/baiyun/index.php/Map/map/from/'.$good['fromprovince'].$good['fromcity'].'/to/'.$good['toprovince'].$good['tocity'],
					'star'=>Star($user['star'])
				);
			echo '{"good":'.json_encode($good_array).'}';
		}
	}
	public function Api_AllSearch(){
		$key = $_GET['key'];
		$condition['phonenumber'] = array('like',"%{$_GET['key']}%");
		$condition['fromprovince']=array('like',"%{$_GET['key']}%");
		$condition['fromcity']=array('like',"%{$_GET['key']}%");
		$condition['toprovince']=array('like',"%{$_GET['key']}%");
		$condition['tocity']=array('like',"%{$_GET['key']}%");
		$condition['banchang']=array('like',"%{$_GET['key']}%");
		$condition['zaizhong']=array('like',"%{$_GET['key']}%");
		$condition['chexing']=array('like',"%{$_GET['key']}%");
		$condition['cheling']=array('like',"%{$_GET['key']}%");
		$condition['_logic'] = 'OR';
		$good_form =M('Goods');
		$user_form =M('User');
		$goods_list =$good_form->where($condition)->select();
		if($_GET['type']=='xml'){
			echo '<?xml version="1.0" encoding="utf-8"?><goods>';
			header("Content-Type:text;charset=utf-8");
			for ($i=0;$i <count($goods_list) ; $i++) { 
				header("Content-Type:text;charset=utf-8");
				$user = $user_form->where("phone = '%s'",$goods_list[$i]['phonenumber'])->find(); 
				echo "<good>";
				echo "<id>".$goods_list[$i]['id']."</id>";
				echo "<phonenumber>".$goods_list[$i]['phonenumber']."</phonenumber>";
				echo "<from>".$goods_list[$i]['fromprovince'].$goods_list[$i]['fromcity']."</from>";
				echo "<to>".$goods_list[$i]['toprovince'].$goods_list[$i]['tocity']."</to>";
				echo "<ontime>".$goods_list[$i]['timeon']."</ontime>";
				echo "<offtime>".$goods_list[$i]['timeoff']."</offtime>";
				echo "<needcar>".$goods_list[$i]['needcar']."</needcar>";
				echo "<goodname>".$goods_list[$i]['goodname']."</goodname>";
				echo "<goodnumber>".$goods_list[$i]['goodnumber']."</goodnumber>";
				echo "<mapurl>".'http://104.237.154.88:8080/baiyun/index.php/Map/map/from/'.$goods_list[$i]['fromprovince'].$goods_list[$i]['fromcity'].'/to/'.$goods_list[$i]['toprovince'].$goods_list[$i]['tocity']."</mapurl>";
				echo "<star>".Star($user['star'])."</star>";
				echo "</good>";
			}
			echo "</goods>";
		}else{
			$goods  = array();
			for ($i=0; $i <count($goods_list) ; $i++) {
				$user = $user_form->where("phone = '%s'",$goods_list[$i]['phonenumber'])->find(); 
				//var_dump($user);
				$good = array(
					'id' =>$goods_list[$i]['id'],
					'phonenumber'=>$goods_list[$i]['phonenumber'],
					'from'=>$goods_list[$i]['fromprovince'].$goods_list[$i]['fromcity'],
					'to'=>$goods_list[$i]['toprovince'].$goods_list[$i]['tocity'],
					'ontime'=>$goods_list[$i]['timeon'],
					'offtime'=>$goods_list[$i]['timeoff'],
					'needcar'=>$goods_list[$i]['needcar'],
					'goodname'=>$goods_list[$i]['goodname'],
					'goodnumber'=>$goods_list[$i]['goodnumber'],
					'mapurl'=>'http://104.237.154.88:8080/baiyun/index.php/Map/map/from/'.$goods_list[$i]['fromprovince'].$goods_list[$i]['fromcity'].'/to/'.$goods_list[$i]['toprovince'].$goods_list[$i]['tocity'],
					'star'=>Star($user['star'])
					);
				array_unshift($goods,$good);
			}
			echo '{"goods":'.json_encode($goods).'}';
		}
	}
	public function Api_GoodSearch(){
		$fromp= $_GET['fromprovince'];
		$fromc  = $_GET['fromcity'];
		$top= $_GET['toprovince'];
		$toc  = $_GET['tocity'];
		$type = $_GET['type'];
		$goods_list = M('Goods');
		$user_form = M('User');
		//$search=array('from'=>$fromp.$fromc,'to'=>$top.$toc);
			//$cars = $car_list->where($search)->select();
		if($fromp=='不限' and $fromc=='不限' and $top=='不限' and $toc=='不限'){
			$goods = $goods_list->order('id desc')->select();
			api_do($goods);
			//var_dump($goods);
		}elseif ($formp !== '不限' and $fromc=='不限' and $top!=='不限' and $toc=='不限') {
			$search_array = array('fromprovince'=>$fromp,
							 'toprovince'=>$top);
			$goods = $goods_list->where($search_array)->order('id  desc')->select();
			api_do($goods);
		}elseif($formp !== '不限' and $fromc!=='不限' and $top!=='不限' and $toc!=='不限'){
			$search_array = array('fromprovince'=>$fromp,
								  'fromcity'=>$fromc,
								  'toprovince'=>$top,
								  'tocity'=>$toc);
			$goods = $goods_list->where($search_array)->order('id desc')->select();
			api_do($goods);
		}elseif($formp == '不限' and $fromc=='不限' and $top!=='不限' and $toc!=='不限'){
			$search_array = array('toprovince'=>$top,
								  'tocity'=>$toc);
			$goods = $goods_list->where($search_array)->order('id desc')->select();
			api_do($goods);
		}elseif($formp !== '不限' and $fromc!=='不限' and $top=='不限' and $toc=='不限'){
			$search_array = array('fromprovince'=>$fromp,
								  'fromcity'=>$fromc);
			$goods = $goods_list->where($search_array)->order('id desc')->select();
			api_do($goods);
		}elseif($formp == '不限' and $fromc=='不限' and $top!=='不限' and $toc=='不限'){
			$search_array = array('toprovince'=>$top);
			$goods = $goods_list->where($search_array)->order('id desc')->select();
			api_do($goods);
		}elseif($formp !== '不限' and $fromc=='不限' and $top=='不限' and $toc=='不限'){
			$search_array = array('fromprovince'=>$fromp);
			$goods = $goods_list->where($search_array)->order('id desc')->select();
			api_do($goods);
		}elseif($formp !== '不限' and $fromc=='不限' and $top!=='不限' and $toc!=='不限'){
			$search_array = array('fromprovince'=>$fromp,
								  'toprovince'=>$top,
								  'tocity'=>$tocity);
			$goods = $goods_list->where($search_array)->order('id desc')->select();
			api_do($goods);
		}elseif($formp !== '不限' and $fromc!=='不限' and $top!=='不限' and $toc=='不限'){
			$search_array = array('fromprovince'=>$fromp,
								  'fromcity'=>$fromc,
								  'toprovince'=>$top);
			$goods = $goods_list->where($search_array)->order('id desc')->select();
			api_do($goods);
		}
	}
	public function Api_Jiedan(){
		$goodid = $_GET['goodid'];
		$phonenumber = $_GET['phonenumber'];
		$token = $_GET['token'];
		$user_form = M('User');
		$good_form = M('Goods');
		$good_user = $good_form->where('id=%d',$goodid)->find();
		$user = $user_form->where("phone = '%s'",$phonenumber)->find();
		if($_GET['type']=='xml'){
			if ($token!==$user['password']) {
				//操作超时
				echo '<?xml version="1.0" encoding="utf-8"?><result>';
				header("Content-Type:text;charset=utf-8");
				echo "<resultCode>10001</resultCode>";
				echo "<Msg>操作超时。</Msg>";
				echo "</result>";
			}else{
				if($user['iscarowner']!==1){
					//不是车主，未认证
					echo '<?xml version="1.0" encoding="utf-8"?><result>';
					header("Content-Type:text;charset=utf-8");
					echo "<resultCode>10002</resultCode>";
					echo "<Msg>不是车主，请到web端认证。</Msg>";
					echo "</result>";
				}else{
					$good_form = M('Goods');
					$mygood = $good_form->where('id = %d',$goodid)->find();
					if($phonenumber==$mygood['phonenumber']){
						echo '<?xml version="1.0" encoding="utf-8"?><result>';
						header("Content-Type:text;charset=utf-8");
						echo "<resultCode>10008</resultCode>";
						echo "<Msg>想刷单是吧，告诉你，不！可！以！</Msg>";
						echo "</result>";
					}else{
					$dan_form = M('Dan');
					$dan_list = $dan_form->where('goodid = %d',$goodid)->select();
					for ($i=0; $i < count($dan_list); $i++) { 
						if($dan_list[$i]['isover']==1){
							$isover = 1;
						}
					}
					if($isover==1){
						//该单已被接
						echo '<?xml version="1.0" encoding="utf-8"?><result>';
						header("Content-Type:text;charset=utf-8");
						echo "<resultCode>10003</resultCode>";
						echo "<Msg>你来晚了，该单已被接喽。</Msg>";
						echo "</result>";

					}else{
						$condition = array('goodid'=>$goodid,
										   'phonenumber'=>$phonenumber);
						$dan = $dan_form->where($condition)->find();
						if(is_null($dan)){
							//可接
							$newdan = array('goodid'=>$goodid,
											'phonenumber'=>$phonenumber,
											'isover'=>0,
											'createtime'=>date('y-m-d h:i:s',time()));
							$isnew = $dan_form->add($newdan);
							if(!$isnew){
								echo '<?xml version="1.0" encoding="utf-8"?><result>';
								header("Content-Type:text;charset=utf-8");
								echo "<resultCode>10005</resultCode>";
								echo "<Msg>接单失败,请重试。</Msg>";
								echo "</result>";
							}else{
								echo '<?xml version="1.0" encoding="utf-8"?><result>';
								header("Content-Type:text;charset=utf-8");
								echo "<resultCode>10006</resultCode>";
								echo "<Msg>接单成功，请等待货主确认。</Msg>";
								echo "</result>";
							}
						}else{
							//你已发送接单请求，等待货主确认
							echo '<?xml version="1.0" encoding="utf-8"?><result>';
							header("Content-Type:text;charset=utf-8");
							echo "<resultCode>10004</resultCode>";
							echo "<Msg>你已发送接单请求，不用重复申请</Msg>";
							echo "</result>";
						}
					}
				}}
			}
		}else{
			if ($token!==$user['password']) {
				//操作超时
				$result = array('resultCode'=>'10001',
								'Msg'=>'操作超时。');
				echo json_encode($result);
			}else{
				//var_dump($user);
				if($user['iscarowner']!=1){
					//不是车主，未认证
					$result = array('resultCode'=>'10002',
									'Msg'=>'不是车主，请到web端认证。');
					echo json_encode($result);
				}else{
					$good_form = M('Goods');
					$mygood = $good_form->where('id = %d',$goodid)->find();
					if($phonenumber==$mygood['phonenumber']){
						$result = array('resultCode'=>'10008',
									'Msg'=>'想刷单是吧，告诉你，不！可！以！');
						echo json_encode($result);
					}else{
						$dan_form = M('Dan');
						$dan_list = $dan_form->where('goodid = %d',$goodid)->select();
						for ($i=0; $i < count($dan_list); $i++) { 
							if($dan_list[$i]['isover']==1){
								if($dan_list[$i]['phonenumber']==$phonenumber){
									//你已发送接单请求，等待货主确认
									$result = array('resultCode'=>'10004',
											'Msg'=>'你已发送接单请求，不用重复申请。');
									echo json_encode($result);
								}else{
									$isover = 1;
								}
							}
						}
						if($isover==1){
							//该单已被接
							$result = array('resultCode'=>'10003',
										'Msg'=>'该单已被接。');
							echo json_encode($result);
						}else{
							$condition = array('goodid'=>$goodid,
										   'phonenumber'=>$phonenumber);
							$dan = $dan_form->where($condition)->find();
							if(is_null($dan)){
								//可接
								$newdan = array('goodid'=>$goodid,
											'phonenumber'=>$phonenumber,
											'isover'=>1,
											'createtime'=>date('y-m-d h:i:s',time()),
											'goodphone'=>$good_user['phonenumber']);
								$isnew = $dan_form->add($newdan);
								if(!$isnew){
									$result = array('resultCode'=>'10005',
												'Msg'=>'接单失败,请重试。');
									echo json_encode($result);
								}else{
									$result = array('resultCode'=>'10006',
												'Msg'=>'接单成功，请等待货主确认。');
									echo json_encode($result);
								}
							}
						}
					}
				}
			}
		}
	}
}

/**************************/
/*******一些方法***********/
/**************************/
function api_do($goods){
	//var_dump($goods);
	$user_form = M('User');
	if($_GET['type'] == 'xml'){
		echo '<?xml version="1.0" encoding="utf-8"?><goods>';
			header("Content-Type:text;charset=utf-8");
			for ($i=0;$i <count($goods) ; $i++) { 
				header("Content-Type:text;charset=utf-8");
				$user = $user_form->where("phone = '%s'",$goods[$i]['phonenumber'])->find(); 
				echo "<good>";
				echo "<id>".$goods[$i]['id']."</id>";
				echo "<phonenumber>".$goods[$i]['phonenumber']."</phonenumber>";
				echo "<from>".$goods[$i]['fromprovince'].$goods[$i]['fromcity']."</from>";
				echo "<to>".$goods[$i]['toprovince'].$goods[$i]['tocity']."</to>";
				echo "<ontime>".$goods[$i]['timeon']."</ontime>";
				echo "<offtime>".$goods[$i]['timeoff']."</offtime>";
				echo "<needcar>".$goods[$i]['needcar']."</needcar>";
				echo "<goodname>".$goods[$i]['goodname']."</goodname>";
				echo "<goodnumber>".$goods[$i]['goodnumber']."</goodnumber>";
				echo "<mapurl>".'http://104.237.154.88:8080/baiyun/index.php/Map/map/from/'.$goods[$i]['fromprovince'].$goods[$i]['fromcity'].'/to/'.$goods[$i]['toprovince'].$goods[$i]['tocity']."</mapurl>";
				echo "<star>".Star($user['star'])."</star>";
				echo "</good>";
			}
			echo "</goods>";
	}else{
		//var_dump($cars);
		$user_form = M('User');
		$goodsarr  = array();
			for ($i=0; $i <count($goods) ; $i++) {
				$user = $user_form->where("phone = '%s'",$goods[$i]['phonenumber'])->find(); 
				//var_dump($user);
				$good = array(
					'id' =>$goods[$i]['id'],
					'phonenumber'=>$goods[$i]['phonenumber'],
					'from'=>$goods[$i]['fromprovince'].$goods[$i]['fromcity'],
					'to'=>$goods[$i]['toprovince'].$goods[$i]['tocity'],
					'ontime'=>$goods[$i]['timeon'],
					'offtime'=>$goods[$i]['timeoff'],
					'needcar'=>$goods[$i]['needcar'],
					'goodname'=>$goods[$i]['goodname'],
					'goodnumber'=>$goods[$i]['goodnumber'],
					'mapurl'=>'http://104.237.154.88:8080/baiyun/index.php/Map/map/from/'.$goods[$i]['fromprovince'].$goods[$i]['fromcity'].'/to/'.$goods[$i]['toprovince'].$goods[$i]['tocity'],
					'star'=>Star($user['star'])
					);
				array_unshift($goodsarr,$good);
			}
			echo '{"goods":'.json_encode($goodsarr).'}';
	}
}
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