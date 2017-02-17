<?php
class CarsAction extends Action{
	public function index(){
		$user_form = M('User');
		$car_form = M('Car');
		//echo "string";
		$isLog = session('?phonenumber');
		if($isLog==1){
			//session中存在用户名
			$user = $user_form->where("phone='%s'",session('phonenumber'))->find();
			//var_dump($user);
			if($user['password']==session('password')){
				//echo "登陆成功";
				$this->assign('user',array($user));

				$car_list = $car_form->order('createtime')->select();
				$cars = array();
				for ($i=0; $i < count($car_list); $i++) { 
					$cra_user = $user_form->where("phone='%s'",$car_list[$i]['phonenumber'])->find();
					$car =array(
						'id'=>$car_list[$i]['id'],
						'phonenumber'=>$car_list[$i]['phonenumber'],
						'username'=>$cra_user['username'],
						'from'=>$car_list[$i]['fromprovince'].$car_list[$i]['fromcity'],
						'to'=>$car_list[$i]['toprovince'].$car_list[$i]['tocity'],
						'createtime'=>$car_list[$i]['createtime'],
						'chexing'=>$car_list[$i]['chexing'],
						'cheling'=>$car_list[$i]['cheling'],
						'banchang'=>$car_list[$i]['banchang'],
						'zaizhong'=>$car_list[$i]['zaizhong']
						);
					array_unshift($cars,$car);
				}
				$this->assign('car',$cars)	;
				$this->display();
			}else{
				$this->error('操作超时，请重新登陆');
			}
		}else{
			$this->error('操作超时，请重新登陆');
		}
		//echo $iss;
		//echo session('phonenumber');
		
	}
	public function WebSearch(){
		$user_form = M('User');
		$car_form = M('Car');
		//echo "string";
		$isLog = session('?phonenumber');
		if($isLog==1){
			//session中存在用户名
			$user = $user_form->where("phone='%s'",session('phonenumber'))->find();
			//var_dump($user);
			if($user['password']==session('password')){
				//echo "登陆成功";
				$this->assign('user',array($user));
				//echo $_POST['from'].$_POST['to'];
				$condition['fromprovince']=array('like',"%{$_POST['from']}%");
				$condition['fromcity']=array('like',"%{$_POST['from']}%");
				$condition['toprovince']=array('like',"%{$_POST['to']}%");
				$condition['tocity']=array('like',"%{$_POST['to']}%");
				$condition['banchang']=array('like',"%{$_POST['banchang']}%");
				$condition['zaizhong']=array('like',"%{$_POST['zaizhong']}%");
				$condition['chexing']=array('like',"%{$_POST['chexing']}%");
				//$condition['cheling']=array('like',"%{$_POST['key']}%");
				$condition['_logic'] = 'OR';

				$car_list = $car_form->where($condition)->select();
				//echo mysql_error();
				//var_dump($car_list);
				$cars = array();
				for ($i=0; $i < count($car_list); $i++) { 
					$cra_user = $user_form->where("phone='%s'",$car_list[$i]['phonenumber'])->find();
					$car =array(
						'id'=>$car_list[$i]['id'],
						'phonenumber'=>$car_list[$i]['phonenumber'],
						'username'=>$cra_user['username'],
						'from'=>$car_list[$i]['fromprovince'].$car_list[$i]['fromcity'],
						'to'=>$car_list[$i]['toprovince'].$car_list[$i]['tocity'],
						'createtime'=>$car_list[$i]['createtime'],
						'chexing'=>$car_list[$i]['chexing'],
						'cheling'=>$car_list[$i]['cheling'],
						'banchang'=>$car_list[$i]['banchang'],
						'zaizhong'=>$car_list[$i]['zaizhong']
						);
					array_unshift($cars,$car);
				}
				$this->assign('car',$cars)	;
				$this->display();
			}else{
				$this->error('操作超时，请重新登陆');
			}
		}else{
			$this->error('操作超时，请重新登陆');
		}
		//echo $iss;
		//echo session('phonenumber');
		
	}

	public function one(){
		$user_form = M('User');
		$car_form = M('Car');
		$carid = $_GET['id'];
		//echo "string";
		$isLog = session('?phonenumber');
		if($isLog==1){
			//session中存在用户名
			$user = $user_form->where("phone='%s'",session('phonenumber'))->find();
			//var_dump($user);
			if($user['password']==session('password')){
				$this->assign('user',array($user));
				$car = $car_form->where("id=%d",$carid)->find();
				$loguser =$user_form->where("phone='%s'",$car['phonenumber'])->find();
				$car = array(array(
							'chexing'=>$car['chexing'],
							'banchang'=>$car['banchang'],
							'cheling'=>$car['cheling'],
							'zaizhong'=>$car['zaizhong'],
							'from'=>$car['fromprovince'].$car['fromcity'],
							'to'=>$car['toprovince'].$car['tocity'],
							'phonenumber'=>$car['phonenumber'],
							'username'=>$loguser['username']
					));
				$this->assign('car',$car);
				$this->display();
			}else{
				$this->error('操作超时，请重新登陆');
			}
		}else{
			$this->error('操作超时，请重新登陆');
		}
	}

	public function Api_cars(){
        $car_form = M('Car');
        $cars = $car_form->order('id desc')->select();
        $user_form = M('User');
        if($_GET['type']=="xml"){
            echo '<?xml version="1.0" encoding="utf-8"?><cars>';
             header("Content-Type:text;   charset=utf-8");
            for($i = 0;$i<count($cars);$i++){
                header("Content-Type:text;   charset=utf-8");
                echo "<car>";
                echo "<id>".$cars[$i]['id']."</id>";
                echo "<chexing>".$cars[$i]['chexing']."</chexing>";
                echo "<banchang>".$cars[$i]['banchang']."</banchang>";
                echo "<zaizhong>".$cars[$i]['zaizhong']."</zaizhong>";
                echo "<cheling>".$cars[$i]['cheling']."</cheling>";
                echo "<chufadi>".$cars[$i]['fromprovince'].$cars[$i]['fromcity']."</chufadi>";
                //$st =  strstr($cars[$i]['from'],"省");
                //echo substr($st,3);
                echo "<mudidi>".$cars[$i]['toprovince'].$cars[$i]['tocity']."</mudidi>";
                echo "<map>".'http://104.237.154.88:8080/baiyun/index.php/Map/map/from/'.$car['fromprovince'].$car['fromcity'].'/to/'.$car['toprovince'].$car['tocity']."</map>";
                $user = $user_form->where("phone = '%s'",$cars[$i]['phonenumber'])->find();
                echo "<star>".Star($user['star'])."</star>";
                echo "</car>";
            }
            echo "</cars>";
        }else{
            //var_dump($cars);
            $cars_array = array();
            for ($i=0;$i<count($cars); $i++) { 
            	$user = $user_form->where("phone = '%s'",$cars[$i]['phonenumber'])->find();
                $car_array = array(
                                    'id'=>$cars[$i]['id'],
                                    'chexing'=>$cars[$i]['chexing'],
                                    'banchang'=>$cars[$i]['banchang'],
                                    'zaizhong'=>$cars[$i]['zaizhong'],
                                    'cheling'=>$cars[$i]['cheling'],
                                    'from'=>$cars[$i]['fromprovince'].$cars[$i]['fromcity'],
                                    'to'=>$cars[$i]['toprovince'].$cars[$i]['tocity'],
                                    'map'=>'http://104.237.154.88:8080/baiyun/index.php/Map/map/from/'.$cars[$i]['fromprovince'].$cars[$i]['fromcity'].'/to/'.$cars[$i]['toprovince'].$cars[$i]['tocity'],
                                    'star'=>Star($user['star']));
                array_unshift($cars_array,$car_array);
            }
            //var_dump($cars_array);
            echo '{"cars":'.json_encode($cars_array).'}';
        }
    }
	public function Api_car(){
		$cars_form = M('Car');
		$user_form = M('User');
		$car = $cars_form->where('id = %d',$_GET['carid'])->find();
		$user = $user_form->where("phone = '%s'",$car['phonenumber'])->find();
		if($_GET['type']=='xml'){
			echo '<?xml version="1.0" encoding="utf-8"?><car>';
            header("Content-Type:text;   charset=utf-8");
            echo "<chexing>".$car['chexing']."</chexing>";
            echo "<banchang>".$car['banchang']."</banchang>";
            echo "<zaizhong>".$car['zaizhong']."</zaizhong>";
            echo "<cheling>".$car['cheling']."</cheling>";
            echo "<chufadi>".$car['fromprovince'].$car['fromcity']."</chufadi>";
            //$st =  strstr($cars[$i]['from'],"省");
            //echo substr($st,3);
            echo "<mudidi>".$car['toprovince'].$car['tocity']."</mudidi>";
            echo "<map>".'http://104.237.154.88:8080/baiyun/index.php/Map/map/from/'.$car['fromprovince'].$car['fromcity'].'/to/'.$car['toprovince'].$car['tocity']."</map>";
            echo "<username>".$user['username']."</username>";
            echo "<phonenumber>".$user['phone']."</phonenumber>";
            echo "<star>".Star($user['star'])."</star>";
            echo "</car>";
		}else{
			$car = array( 'chexing'=>$car['chexing'],
                          'banchang'=>$car['banchang'],
                          'zaizhong'=>$car['zaizhong'],
                          'cheling'=>$car['cheling'],
                          'from'=>$car['fromprovince'].$car['fromcity'],
                          'to'=>$car['toprovince'].$car['tocity'],
                          'map'=>'http://104.237.154.88:8080/baiyun/index.php/Map/map/from/'.$car['fromprovince'].$car['fromcity'].'/to/'.$car['toprovince'].$car['tocity'],
                          'username'=>$user['username'],
                          'phonenumber'=>$user['phone'],
                          'star'=>Star($user['star'])							
				);
			echo json_encode($car);
		}

	}
	public function Api_AllSearch(){
		$key = $_GET['key'];
		$condition['phonenumber'] = array('like',"%{$_GET['key']}%");
		$condition['fromprovince']=array('like',"%{$_GET['key']}%");
		$condition['fromcity']=array('like',"%{$_GET['key']}%");
		$condition['toprovince']=array('like',"%{$_GET['key']}%");
		$condition['tocity']=array('like',"%{$_GET['key']}%");
		$condition['goodname']=array('like',"%{$_GET['key']}%");
		$condition['goodnumber']=array('like',"%{$_GET['key']}%");
		$condition['needcar']=array('like',"%{$_GET['key']}%");
		$condition['timeon']=array('like',"%{$_GET['key']}%");
		$condition['timeoff']=array('like',"%{$_GET['key']}%");
		$condition['_logic'] = 'OR';
		$car_form =M('Car');
		$user_form =M('User');
		$cars = $car_form->where($condition)->select();
		if($_GET['type']=="xml"){
            echo '<?xml version="1.0" encoding="utf-8"?><cars>';
             header("Content-Type:text;   charset=utf-8");
            for($i = 0;$i<count($cars);$i++){
                header("Content-Type:text;   charset=utf-8");
                echo "<car>";
                echo "<id>".$cars[$i]['id']."</id>";
                echo "<chexing>".$cars[$i]['chexing']."</chexing>";
                echo "<banchang>".$cars[$i]['banchang']."</banchang>";
                echo "<zaizhong>".$cars[$i]['zaizhong']."</zaizhong>";
                echo "<cheling>".$cars[$i]['cheling']."</cheling>";
                echo "<chufadi>".$cars[$i]['fromprovince'].$cars[$i]['fromcity']."</chufadi>";
                //$st =  strstr($cars[$i]['from'],"省");
                //echo substr($st,3);
                echo "<mudidi>".$cars[$i]['toprovince'].$cars[$i]['tocity']."</mudidi>";
                echo "<map>".'http://104.237.154.88:8080/baiyun/index.php/Map/map/from/'.$car['fromprovince'].$car['fromcity'].'/to/'.$car['toprovince'].$car['tocity']."</map>";
                $user = $user_form->where("phone = '%s'",$cars[$i]['phonenumber'])->find();
                echo "<star>".Star($user['star'])."</star>";
                echo "</car>";
            }
            echo "</cars>";
        }else{
            //var_dump($cars);
            $cars_array = array();
            for ($i=0;$i<count($cars); $i++) { 
            	$user = $user_form->where("phone = '%s'",$cars[$i]['phonenumber'])->find();
                $car_array = array(
                                    'id'=>$cars[$i]['id'],
                                    'chexing'=>$cars[$i]['chexing'],
                                    'banchang'=>$cars[$i]['banchang'],
                                    'zaizhong'=>$cars[$i]['zaizhong'],
                                    'cheling'=>$cars[$i]['cheling'],
                                    'from'=>$cars[$i]['fromprovince'].$cars[$i]['fromcity'],
                                    'to'=>$cars[$i]['toprovince'].$cars[$i]['tocity'],
                                    'map'=>'http://104.237.154.88:8080/baiyun/index.php/Map/map/from/'.$cars[$i]['fromprovince'].$cars[$i]['fromcity'].'/to/'.$cars[$i]['toprovince'].$cars[$i]['tocity'],
                                    'star'=>Star($user['star']));
                array_unshift($cars_array,$car_array);
            }
            //var_dump($cars_array);
            echo '{"cars":'.json_encode($cars_array).'}';
        }
	}
	public function Api_CarSearch(){
		$fromp= $_GET['fromprovince'];
		$fromc  = $_GET['fromcity'];
		$top= $_GET['toprovince'];
		$toc  = $_GET['tocity'];
		$type = $_GET['type'];
		$car_list = M('Car');
		$user_form = M('User');
		//$search=array('from'=>$fromp.$fromc,'to'=>$top.$toc);
			//$cars = $car_list->where($search)->select();
		if($fromp=='不限' and $fromc=='不限' and $top=='不限' and $toc=='不限'){
			$cars = $car_list->order('id desc')->select();
			api_do($cars);
		}elseif ($formp !== '不限' and $fromc=='不限' and $top!=='不限' and $toc=='不限') {
			$search_array = array('fromprovince'=>$fromp,
							 'toprovince'=>$top);
			$cars = $car_list->where($search_array)->order('id  desc')->select();
			api_do($cars);
		}elseif($formp !== '不限' and $fromc!=='不限' and $top!=='不限' and $toc!=='不限'){
			$search_array = array('fromprovince'=>$fromp,
								  'fromcity'=>$fromc,
								  'toprovince'=>$top,
								  'tocity'=>$toc);
			$cars = $car_list->where($search_array)->order('id desc')->select();
			api_do($cars);
		}elseif($formp == '不限' and $fromc=='不限' and $top!=='不限' and $toc!=='不限'){
			$search_array = array('toprovince'=>$top,
								  'tocity'=>$toc);
			$cars = $car_list->where($search_array)->order('id desc')->select();
			api_do($cars);
		}elseif($formp !== '不限' and $fromc!=='不限' and $top=='不限' and $toc=='不限'){
			$search_array = array('fromprovince'=>$fromp,
								  'fromcity'=>$fromc);
			$cars = $car_list->where($search_array)->order('id desc')->select();
			api_do($cars);
		}elseif($formp == '不限' and $fromc=='不限' and $top!=='不限' and $toc=='不限'){
			$search_array = array('toprovince'=>$top);
			$cars = $car_list->where($search_array)->order('id desc')->select();
			api_do($cars);
		}elseif($formp !== '不限' and $fromc=='不限' and $top=='不限' and $toc=='不限'){
			$search_array = array('fromprovince'=>$fromp);
			$cars = $car_list->where($search_array)->order('id desc')->select();
			api_do($cars);
		}elseif($formp !== '不限' and $fromc=='不限' and $top!=='不限' and $toc!=='不限'){
			$search_array = array('fromprovince'=>$fromp,
								  'toprovince'=>$top,
								  'tocity'=>$tocity);
			$cars = $car_list->where($search_array)->order('id desc')->select();
			api_do($cars);
		}elseif($formp !== '不限' and $fromc!=='不限' and $top!=='不限' and $toc=='不限'){
			$search_array = array('fromprovince'=>$fromp,
								  'fromcity'=>$fromc,
								  'toprovince'=>$top);
			$cars = $car_list->where($search_array)->order('id desc')->select();
			api_do($cars);
		}
	}
	
}
/**************/
/*函数函数函数*/
/**************/
function api_do($cars){
	$user_form = M('User');
	if($_GET['type'] == 'xml'){
		echo '<?xml version="1.0" encoding="utf-8"?><search>';
		header("Content-Type:text;charset=utf-8");
		for($i=0;$i<count($cars);$i++){
			header("Content-Type:text;charset=utf-8");
			echo "<car>";
            echo "<id>".$cars[$i]['id']."</id>";
            echo "<chexing>".$cars[$i]['chexing']."</chexing>";
            echo "<banchang>".$cars[$i]['banchang']."</banchang>";
            echo "<zaizhong>".$cars[$i]['zaizhong']."</zaizhong>";
            echo "<cheling>".$cars[$i]['cheling']."</cheling>";
            echo "<chufadi>".$cars[$i]['fromprovince'].$cars[$i]['fromcity']."</chufadi>";
            echo "<mudidi>".$cars[$i]['toprovince'].$cars[$i]['tocity']."</mudidi>";
            echo "<map>".'http://104.237.154.88:8080/baiyun/index.php/Map/map/from/'.$car['fromprovince'].$car['fromcity'].'/to/'.$car['toprovince'].$car['tocity']."</map>";
            $user = $user_form->where("phone = '%s'",$cars[$i]['phonenumber'])->find();
            echo "<star>".Star($user['star'])."</star>";
            echo "</car>";
		}
		echo "</search>";
	}else{
		//var_dump($cars);
		$user_form = M('User');
		$cars_array = array();
            for ($i=0;$i<count($cars); $i++) { 
            	$user = $user_form->where("phone = '%s'",$cars[$i]['phonenumber'])->find();
            	//var_dump($user);
                $car_array = array(
                                    'id'=>$cars[$i]['id'],
                                    'chexing'=>$cars[$i]['chexing'],
                                    'banchang'=>$cars[$i]['banchang'],
                                    'zaizhong'=>$cars[$i]['zaizhong'],
                                    'cheling'=>$cars[$i]['cheling'],
                                    'from'=>$cars[$i]['fromprovince'].$cars[$i]['fromcity'],
                                    'to'=>$cars[$i]['toprovince'].$cars[$i]['tocity'],
                                    'map'=>'http://104.237.154.88:8080/baiyun/index.php/Map/map/from/'.$cars[$i]['fromprovince'].$cars[$i]['fromcity'].'/to/'.$cars[$i]['toprovince'].$cars[$i]['tocity'],
                                    'star'=>Star($user['star']));
                //var_dump($car_array);
                array_unshift($cars_array,$car_array);
            }
            //var_dump($cars_array);
            echo '{"cars":'.json_encode($cars_array).'}';
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