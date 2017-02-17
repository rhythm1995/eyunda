<?php
class NewsAction extends Action{
public function All(){
			$new_form = M('News');
			$news = $new_form->order('id desc')->select();
			$this->assign('news',$news);

			$newnew = $new_form->order('id desc')->limit(4)->select();
			$this->assign("bignew",$newnew);
		$this->display();
 	}
 	public function One(){
 			$id = $_GET['id'];
 			$news_form=M('News');

 			$new = $news_form->where('id=%d',$id)->find();
 			$new = array($new);
 			$this->assign('new',$new);

 			$this->display();
 	}
 	public function Api_All(){
 		$news_form = M("News");
 		$news = $news_form->order('id desc')->select();
 			$type = $_GET['type'];
 		if($type=="xml"){
 			echo '<?xml version="1.0" encoding="utf-8"?><news>';
 			for($i = 0;$i<count($news);$i++){
 				header("Content-Type:text;   charset=utf-8");
 				echo "<new>";
 				echo "<id>".$news[$i]['id']."</id>";
 				echo "<title>".$news[$i]['title']."</title>";
 				echo "<content>".$news[$i]['content']."</content>";
 				echo "</new>";
 			}
 		 echo "</news>";
 		}else{
 			
 			$news = '{"news":'.json_encode($news).'}';
 			echo $news;
 		}
 		//var_dump($news);
 	}
 	public function Api_Tuijian(){
 		$user_form = M('User');
 		$car_form = M('Car');
 		$car_list =$user_form->order('star')->limit(5)->select();
 		
 		if($_GET['type']=='xml'){
 			echo '<?xml version="1.0" encoding="utf-8"?><tuijian>';
 			header("Content-Type:text;   charset=utf-8");
 			for ($i=0; $i < count($car_list); $i++) { 
 				$carid = $car_form->where("phonenumber='%s'",$car_list[$i]['phone'])->limit(1)->find();
 				# code...
 				echo "<t>";
 				echo "<username>".$car_list[$i]['username']."</username>";
 				echo "<phonenumber>".$car_list[$i]['phone']."</phonenumber>";
 				echo "<star>".Star($car_list[$i]['star'])."</star>";
 				echo "<carid>".$carid['id']."</carid>";
 			 	echo "</t>";
 			 }
 			echo "</tuijian>";

 		}else{
 			$tuis = array();
 			for ($i=0; $i <count($car_list) ; $i++) { 
 				# code...
 			$carid = $car_form->where("phonenumber='%s'",$car_list[$i]['phone'])->limit(1)->find();
 			$tui = array('username'=>$car_list[$i]['username'],
 						 'phonenumber'=>$car_list[$i]['phone'],
						'star'=>Star($car_list[$i]['star']),
						'carid'=>$carid['id']);
 				array_unshift($tuis,$tui);
 			}
 			echo '{"tui":'.json_encode($tuis).'}';
 		}
 	}
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