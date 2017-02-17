<?php 
class MsgAction extends Action{
	public function Api_CarSend(){
		$user_form = M('User');
		$msg_form = M('Carmsg');
		$userphone = $_GET['phonenumber'];
		$carid = $_GET['carid'];
		$token = $_GET['token'];
		//$userbemail = $_GET['userbemail'];
		$content = strip_tags($_GET['content']);
		$userb = $user_form->where("phone = '%s'",$userphone)->find();
		$newmsg  = array('carid'=>$carid,
						 'userid'=>$userphone,
						 'content'=>$content,
						 'createtime'=>date('y-m-d h:i:s',time()));
		if($_GET['type']=='xml'){	
			if($token!==$userb['password']){
				$resultCode = '000001';
				echo '<?xml version="1.0" encoding="utf-8"?><result>';
				header("Content-Type:text;charset=utf-8");
				echo "<resultCode>".$resultCode."</resultCode>";
				echo "<Msg>操作超时</Msg>";
				echo "</result>";
			}else{
				$isadd = $msg_form->add($newmsg);
				if($isadd){
					$resultCode = '000002';
					echo '<?xml version="1.0" encoding="utf-8"?><result>';
					header("Content-Type:text;charset=utf-8");
					echo "<resultCode>".$resultCode."</resultCode>";
					echo "<Msg>留言成功</Msg>";
					echo "</result>";
				}else{
					$resultCode = '000003';
					echo '<?xml version="1.0" encoding="utf-8"?><result>';
					header("Content-Type:text;charset=utf-8");
					echo "<resultCode>".$resultCode."</resultCode>";
					echo "<Msg>留言失败</Msg>";
					echo "</result>";
				}
			}
		}else{
			if($token!==$userb['password']){
				$resultCode='000001';
				$result = array('resultCode'=>$resultCode,
								'Msg'=>'操作超时');
				echo json_encode($result);
			}else{
				$isadd = $msg_form->add($newmsg);
				if($isadd){
					$resultCode = '000002';
					$result = array('resultCode'=>$resultCode,
									'Msg'=>'留言成功');
					echo json_encode($result);
				}else{
					$resultCode = '000003';
					$result = array('resultCode'=>$resultCode,
									'Msg'=>'留言失败');
					echo json_encode($result);
				}
			}
		}
	}
	public function Api_CarMsgs(){
		$msg_form = M('Carmsg');
		$user_form = M('User');
		//$userphone = $_GET['phonenumber'];
		$carid = $_GET['carid'];
		//$useraid       = $_GET['useraid'];
		//$password    = $_GET['token'];
		$msg_list = $msg_form->where("carid = %d",$carid)->order('createtime')->select();
		if($_GET['type']=='xml'){
			echo '<?xml version="1.0" encoding="utf-8"?><msgs>';
			header("Content-Type:text;charset=utf-8");
			for ($i=0; $i <count($msg_list) ; $i++) { 
				echo "<msg>";
				echo "<content>".$msg_list[$i]['content']."</content>";
				echo "<phonenumber>".$msg_list[$i]['userid']."</phonenumber>";
				$user =$user_form->where('phone=%d',$msg_list[$i]['userid'])->find();
				echo "<username>".$user['username']."</username>";
				echo "<createtime>".$msg_list[$i]['createtime']."</createtime>";
				echo "</msg>";	
			}
			echo "</msgs>";
		}else{
			$msgs = array();
			for ($i=0; $i < count($msg_list); $i++) { 
				$user =$user_form->where("phone='%s'",$msg_list[$i]['userid'])->find();
				$msg = array('content'=>$msg_list[$i]['content'],
							 'phonenumber'=>$msg_list[$i]['userid'],
							 'createtime'=>$msg_list[$i]['createtime'],
							 'username'=>$user['username']);
				array_unshift($msgs,$msg); 
			}
			echo '{"msgs":'.json_encode($msgs)."}";
		}				
	}
	public function Api_GoodSend(){
		$user_form = M('User');
		$msg_form = M('Goodmsg');
		$userphone = $_GET['phonenumber'];
		$goodid = $_GET['goodid'];
		$token = $_GET['token'];
		//$userbemail = $_GET['userbemail'];
		$content = strip_tags($_GET['content']);
		$userb = $user_form->where("phone = '%s'",$userphone)->find();
		$newmsg  = array('goodid'=>$goodid,
						 'userid'=>$userphone,
						 'content'=>$content,
						 'createtime'=>date('y-m-d h:i:s',time()));
		if($_GET['type']=='xml'){	
			if($token!==$userb['password']){
				$resultCode = '000001';
				echo '<?xml version="1.0" encoding="utf-8"?><result>';
				header("Content-Type:text;charset=utf-8");
				echo "<resultCode>".$resultCode."</resultCode>";
				echo "<Msg>操作超时</Msg>";
				echo "</result>";
			}else{
				$isadd = $msg_form->add($newmsg);
				if($isadd){
					$resultCode = '000002';
					echo '<?xml version="1.0" encoding="utf-8"?><result>';
					header("Content-Type:text;charset=utf-8");
					echo "<resultCode>".$resultCode."</resultCode>";
					echo "<Msg>留言成功</Msg>";
					echo "</result>";
				}else{
					$resultCode = '000003';
					echo '<?xml version="1.0" encoding="utf-8"?><result>';
					header("Content-Type:text;charset=utf-8");
					echo "<resultCode>".$resultCode."</resultCode>";
					echo "<Msg>留言失败</Msg>";
					echo "</result>";
				}
			}
		}else{
			if($token!==$userb['password']){
				$resultCode='000001';
				$result = array('resultCode'=>$resultCode,
								'Msg'=>'操作超时');
				echo json_encode($result);
			}else{
				$isadd = $msg_form->add($newmsg);
				if($isadd){
					$resultCode = '000002';
					$result = array('resultCode'=>$resultCode,
									'Msg'=>'留言成功');
					echo json_encode($result);
				}else{
					$resultCode = '000003';
					$result = array('resultCode'=>$resultCode,
									'Msg'=>'留言失败');
					echo json_encode($result);
				}
			}
		}	
	}
	public function Api_GoodMsgs(){
		$msg_form = M('Goodmsg');
		$user_form = M('User');
		//$userphone = $_GET['phonenumber'];
		$goodid = $_GET['goodid'];
		//$useraid       = $_GET['useraid'];
		//$password    = $_GET['token'];
		$msg_list = $msg_form->where("goodid = %d",$goodid)->order('createtime')->select();
		if($_GET['type']=='xml'){
			echo '<?xml version="1.0" encoding="utf-8"?><msgs>';
			header("Content-Type:text;charset=utf-8");
			for ($i=0; $i <count($msg_list) ; $i++) { 
				echo "<msg>";
				echo "<content>".$msg_list[$i]['content']."</content>";
				echo "<phonenumber>".$msg_list[$i]['userid']."</phonenumber>";
				$user =$user_form->where("phone='%s'",$msg_list[$i]['userid'])->find();
				echo "<username>".$user['username']."</username>";
				echo "<createtime>".$msg_list[$i]['createtime']."</createtime>";
				echo "</msg>";	
			}
			echo "</msgs>";
		}else{
			$msgs = array();
			for ($i=0; $i < count($msg_list); $i++) { 
				$user =$user_form->where("phone = '%s'",$msg_list[$i]['userid'])->find();
				//var_dump($user);
				$msg = array('content'=>$msg_list[$i]['content'],
							 'phonenumber'=>$msg_list[$i]['userid'],
							 'createtime'=>$msg_list[$i]['createtime'],
							 'username'=>$user['username']);
				array_unshift($msgs,$msg); 
			}
			echo '{"msgs":'.json_encode($msgs)."}";
		}				
	}
}










































































































































































 ?>