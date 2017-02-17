<?php
/**
* 
*/
class UserAction extends Action
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
					$this->assign('user',$user_list);
				
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
		$car_form = M('Car');

		$admin = $admin_form->where("name='%s'",session('adminname'))->find();
		if($islog){
			if($admin['password']==session('adminpwd')){
				$this->assign('admin',array($admin));
				$id = $_GET['id'];
				$user = $user_form->where('id=%d',$id)->find();
				$this->assign('user',array($user));

				$goods = $good_form->where("phonenumber='%s'",$user['phone'])->select(); 
				$cars = $car_form->where("phonenumber='%s'",$user['phone'])->select(); 

				$good_array = array();
				for($i=0;$i<count($goods);$i++){
					$good = array(
						'xuhao'=>$i+1,
						'id'=>$goods[$i]['id'],
						'goodname'=>$goods[$i]['goodname'],
						'createtime'=>$goods[$i]['createtime'],
						'from'=>$goods[$i]['fromprovince'].$goods[$i]['fromcity'],
						'to'=>$goods[$i]['toprovince'].$goods[$i]['tocity']
						);
					array_unshift($good_array,$good);
				}
				$goods_count = count($goods);
				$car_count = count($cars);
				$count = array(array('goods'=>$goods_count,
								'cars'=>$car_count));
				$this->assign('count',$count);

				$this->assign('goods',$good_array);
				$this->assign('cars',$cars);

				$this->display();
			}else{
				$this->redirect('Error/index',array('msg' => "操作超时，请登录重试"));
			}
		}else{
			$this->redirect('Error/index',array('msg' => "操作超时，请登录重试"));
		}
	}
	public function Del(){
		$islog  = session('?adminname');
		$admin_form = M('Admin');
		$user_form  =M('User');
		$admin = $admin_form->where("name='%s'",session('adminname'))->find();
		if($islog){
			if($admin['password']==session('adminpwd')){
				$id = $_GET['id'];
				$isdel = $user_form->where('id=%d',$id)->delete();
				if($isdel){
					$this->redirect('User/index');
				}else{
					$this->redirect('Error/index',array('msg' => "删除失败，请重试"));
				}
			}else{
				$this->redirect('Error/index',array('msg' => "操作超时，请登录重试"));
			}
		}else{
			$this->redirect('Error/index',array('msg' => "操作超时，请登录重试"));
		}
	}
	public function Search(){
		$islog  = session('?adminname');
		$admin_form = M('Admin');
		$user_form  =M('User');
		$admin = $admin_form->where("name='%s'",session('adminname'))->find();
		if($islog){
			if($admin['password']==session('adminpwd')){
				$this->assign('admin',array($admin));

				header("Content-Type: text/html; charset=UTF-8; encoding:binary;");
				$key = $_GET['key'];
				$condition['phone'] = array('like',"%{$_GET['key']}%");
				$condition['id'] = array('like',"%{$_GET['key']}%");
				$condition['username'] = array('like binary',"%{$_GET['key']}%");
				$condition['createtime'] = array('like',"%{$_GET['key']}%");
				$condition['_logic'] = 'OR';

				$user_list = $user_form->where($condition)->select();
				$this->assign('user',$user_list);
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