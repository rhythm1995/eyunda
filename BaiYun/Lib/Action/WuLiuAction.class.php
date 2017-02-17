<?php
/**
*物流模块 
*2015-7-18
*author:nodex-nero
*qq:3068591197
*/
class WuLiuAction extends Action
{
	
	public function Api_Find(){
		$goodid = $_GET['goodid'];
		$dan_form = M('Dan');
		$wuliu_form = M('Wuliu');
		$dan = $dan_form->where('goodid = %d',$goodid)->find();
		if($dan['isdone']==1){
			//该单已结束
			echo '<?xml version="1.0" encoding="utf-8"?><result>';
            header("Content-Type:text;   charset=utf-8");
 			echo "<resultCode>02001</resultCode>";
 			echo "<Msg>该单已结束</Msg>";           
            echo "</result>";
		}else{
			//改单还在
			$wuliuinfo = $wuliu_form->where('goodid=%d',$goodid)->order('createtime')->select();
			echo '{"wuliu":'.json_encode($wuliuinfo).'}';
		}

	}
	public function Api_Update(){
		$phonenumber = $_GET['phonenumber'];
		$token = $_GET['token'];
		$goodid = $_GET['goodid'];
		$address = $_GET['address'];
		$user_form  = M('User');
		$wuliu_form = M('Wuliu');
		$user = $user_form->where("phone='%s'",$phonenumber)->find();
		if($_GET['type']=='xml'){
			if($token!==$user['password']){
				echo '<?xml version="1.0" encoding="utf-8"?><result>';
            	header("Content-Type:text;   charset=utf-8");
 				echo "<resultCode>03001</resultCode>";
 				echo "<Msg>操作超时</Msg>";           
            	echo "</result>";
			}else{
				$newwuliu  = array('goodid'=>$goodid,
								   'phonenumber'=>$phonenumber,
								   'address'=>$address,
								   'createtime'=>date('y-m-d HH:i:s',time()));
				$addnewwuliu = $wuliu_form->add($newwuliu);
				if(!$addnewwuliu){
					echo '<?xml version="1.0" encoding="utf-8"?><result>';
           			header("Content-Type:text;   charset=utf-8");
 					echo "<resultCode>03002</resultCode>";
 					echo "<Msg>物流信息更新失败</Msg>";           
            		echo "</result>";
				}else{
					echo '<?xml version="1.0" encoding="utf-8"?><result>';
           			header("Content-Type:text;   charset=utf-8");
 					echo "<resultCode>03003</resultCode>";
 					echo "<Msg>物流信息更新成功</Msg>";           
            		echo "</result>";
				}
			}
		}else{
			if($token!==$user['password']){
				$result = array('resultCode'=>'03001',
									'Msg'=>'操作超时');
						echo json_encode($result);
			}else{
				$newwuliu  = array('goodid'=>$goodid,
								   'phonenumber'=>$phonenumber,
								   'address'=>$address,
								   'createtime'=>date('y-m-d h:i:s',time()));
				$addnewwuliu = $wuliu_form->add($newwuliu);
				if(!$addnewwuliu){
					$result = array('resultCode'=>'03002',
									'Msg'=>'物流信息更新失败。');
						echo json_encode($result);
				}else{
					$result = array('resultCode'=>'03003',
									'Msg'=>'物流信息更新成功。');
						echo json_encode($result);
				}
			}
		}
	}
}















































































?>