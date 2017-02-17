<?php
/**
* 
*/
class YundanAction extends Action
{
	public function index(){
		$islog  = session('?adminname');
		$admin_form = M('Admin');
		$user_form  =M('User');
		$good_form = M('Goods');
		$dan_form = M('Dan');
		$admin = $admin_form->where("name='%s'",session('adminname'))->find();
		if($islog){
			if($admin['password']==session('adminpwd')){
				$this->assign('admin',array($admin));
				$good_list = $good_form->order('id')->select();
				$goods = array();
				for($i=0;$i<count($good_list);$i++){
					$goodid = $good_list[$i]['id'];
					$goodowner = $user_form->where("phone='%s'",$good_list[$i]['phonenumber'])->find();
					$dan = $dan_form->where('goodid=%d',$goodid)->find();
					//var_dump($dan);
					if(is_null($dan)){
						$zhuangtai='等待中';
						$carname='';
					}else{
						if($dan['isover']==1){
							if($dan['isdone']==1){
								$zhuangtai='已收货';
								$car = $user_form->where("phone='%s'",$dan['phonenumber'])->find();
								$carname=$car['username']; 
							}else{
								$zhuangtai='运输中';
								$car = $user_form->where("phone='%s'",$dan['phonenumber'])->find();
								$carname=$car['username']; 
							}
						}else{
							$zhuangtai='等待中';
							$carname='';
						}
					}
					$good = array('id'=>$good_list[$i]['id'],
								  'from'=>$good_list[$i]['fromprovince'].$good_list[$i]['fromcity'],
								  'to'=>$good_list[$i]['toprovince'].$good_list[$i]['tocity'],
								  'goodname'=>$goodowner['username'],							 
								  'carname'=>$carname,
								  'data'=>$good_list[$i]['timeon'],
								  'zhuangtai'=>$zhuangtai);
					array_unshift($goods,$good);

				}
				$this->assign('goods',$goods);
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
		$good_form = M('Goods');
		$dan_form = M('Dan');
		$wuliu_form = M("Wuliu");
		$admin = $admin_form->where("name='%s'",session('adminname'))->find();
		if($islog){
			if($admin['password']==session('adminpwd')){
				$this->assign('admin',array($admin));
				
				$goodid = $_GET['id'];

				$good = $good_form->where('id=%d',$goodid)->find();
				$this->assign('good',array($good));

				$gooduser = $user_form->where("phone='%s'",$good['phonenumber'])->find();

				$dan=$dan_form->where('goodid=%d',$goodid)->find();
				if(!is_null($dan)){
					if($dan['isover']==1){
						$yonghuo = $user_form->where("phone='%s'",$dan['phonenumber'])->find();
						$yunhuoid = $yonghuo['id'];
						$yunhuoren= $yonghuo['username'];
						$yunhuophone = $yonghuo['phone'];
					}else{
						$yunhuoren = '';
						$yunhuophone="";
					}
				}else{
					$yunhuoren = '';
					$yunhuophone="";
				}
				$user_array = array(
					'fahuoren'=>$gooduser['username'],
					'fahuophone'=>$gooduser['phone'],
					'fahuoid'=>$gooduser['id'],
					'yunhuoren'=>$yunhuoren,
					'yunhuophone'=>$yunhuophone,
					'yunhuoid'=>$yunhuoid
					);
				//var_dump($user_array);
				$this->assign('twouser',array($user_array));

				$wuliu  = $wuliu_form->where('goodid=%d',$goodid)->select();

				$wuliu_list  = array();
				for($i=0;$i<count($wuliu);$i++){
					$xuhao = $i+1;

					$time = $wuliu[$i]['createtime'];

					$data = date('Y-m-d',strtotime($time));

					$xingqi = date('l',strtotime($time));

					$hour = date('H:i',strtotime($time));

					$address  = $wuliu[$i]['address'];

					$wuliu_l = array(
									'xuhao'=>$xuhao,
									'time'=>$data,
									'xingqi'=>$xingqi,
									'hour'=>$hour,
									'address'=>$address
						);
					array_unshift($wuliu_list,$wuliu_l);
				}


				$this->assign('wuliu',$wuliu_list);





				$this->display();
			}else{
				$this->redirect('Error/index',array('msg' => "操作超时，请登录重试"));
			}
		}else{
			$this->redirect('Error/index',array('msg' => "操作超时，请登录重试"));
		}
	}
	public function Del(){
		//echo $_GET['id'];
		$islog  = session('?adminname');
		$admin_form = M('Admin');
		$user_form  =M('User');
		$good_form = M('Goods');
		$dan_form = M('Dan');
		$admin = $admin_form->where("name='%s'",session('adminname'))->find();
		if($islog){
			if($admin['password']==session('adminpwd')){
				$id = $_GET['id'];
				$isdel = $good_form->where('id=%d',$id)->delete();
				if(!$isdel){
					$this->redirect('Yundan/Detil',array('id'=>$id));
				}else{
					$this->redirect('Yundan/index');
				}
				
			}else{
				$this->redirect('Error/index',array('msg' => "操作超时，请登录重试"));
			}
		}else{
			$this->redirect('Error/index',array('msg' => "操作超时，请登录重试"));
		}
	}
}

?>