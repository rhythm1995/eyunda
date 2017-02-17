<?php
/**
*车主认证模块 
*2015.7.23
*author:nodex.nero
*email:3068591197@qq.com
*/
class RenzhengAction extends Action
{
	
	public function index(){
		$user_form = M('User');
		$isLog = session('?phonenumber');
		if($isLog){
			$user = $user_form->where("phone='%s'",session('phonenumber'))->find();
			if($user['password']==session('password')){
				if($user['iscarowner']==1){
						$this->redirect('Renzheng/iscarowner');
				}else{
						$this->assign('user',array($user));
						$this->display();
				}
			}else{
				$this->error('操作超时，请重新登陆。');	
			}
		}else{
			$this->error('操作超时，请重新登陆。');
		}
	}
	public function iscarowner(){
	
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
	public function Renzheng_do(){  
            //导入图片上传类 
            $ziliao_form = M('Rzziliao'); 
            $rephoto_form = M('Rzphoto');
            import("ORG.Net.UploadFile");  
            //实例化上传类  
           $upload = new UploadFile();
			foreach ($_FILES as $key=>$file){
    		if(!empty($file['name'])) {
        		$upload->autoSub = true;
       			 $upload->subType   =  'date';
       			 $upload->maxSize = 3292200;   
     		   //设置上传文件类型   
        		$upload->allowExts = explode(',', 'jpg,png,jpeg');   
        		//设置附件上传目录   
        		if (!is_dir('./Public/img/'.session('phonenumber').'/')) mkdir('./Public/img/'.session('phonenumber').'/');
       			 $upload->savePath = './Public/img/'.session('phonenumber').'/';      
        		//设置上传文件规则   
        		$upload->saveRule = uniqid;   
        		//删除原图   
        		$upload->thumbRemoveOrigin = true; 

        		///////////////土它土它白勺 次 米斗
        		////////////////////////////贝/////
        		$ziliao = array(
        		'phonenumber'=>session('phonenumber'),

        		'danweimingcheng' => $_POST['danweimingcheng'],
        		'danweidizhi'     => $_POST['danweidizhi'],
        		
        		'faren'           => $_POST['faren'],
        		'farenshenfenzheng' => $_POST['farenshenfenzheng'],
        		'farendizhi'      => $_POST['farendizhi'],
        		
        		'jinwangchexing'  => $_POST['jinwangchexing'],
        		'chetouhao'       => $_POST['chetouhao'],
        		'chejiahao'       => $_POST['chejiahao'],

        		'yunyingzhengyouxiaoqi'=>$_POST['yunyingzhengyouxiaoqi'],
        		'yunyingzhengxiacinianjianriqi'=>$_POST['yunyingzhengxiacinianjianriqi'],

        		'baoxiandanyouxiaoqi'=>$_POST['baoxiandanyouxiaoqi'],
        		'baoxiandanxiacinianjianriqi'=>$_POST['baoxiandanxiacinianjianriqi'],

        		'zhunjiachexing'=>$_POST['zhunjiachexing'],
        		'jiashiyuanxingming'=>$_POST['jiashiyuanxingming'],
        		'jiashiyuanshenfenzhenghao'=>$_POST['jiashiyuanshenfenzhenghao'],
        		'jiashiyuanyouxiaoqi'=>$_POST['jiashiyuanyouxiaoqi'],
        		'jiashiyuanzhuzhi'=>$_POST['jiashiyuanzhuzhi'],

        		'jiashizhenghaoma'=>$_POST['jiashizhenghaoma'],
        		'jiashizhengyouxiaoqi'=>$_POST['jiashizhengyouxiaoqi'],
        		'jiashizhengshenhe'=>$_POST['jiashizhengshenhe'],

        		'congyezigezhenghaoma'=>$_POST['congyezigezhenghaoma'],
        		'congyezigezhengyouxiaoqi'=>$_POST['congyezigezhengyouxiaoqi'],
        		'congyezigezhengshenhe'=>$_POST['congyezigezhengshenhe'],
        		'createtime'=>date('Y-m-d H:m:s')
        						);
			
				$isziliao = $ziliao_form->add($ziliao);
				if(!$isziliao){
					//var_dump($ziliao);
					$this->error('上传失败');
				}else{
					$this->success("认证请求提交成功，后台工作人员会在3-7个工作日内为您审核，请耐心等待，谢谢合作");
				}
        		$info =  $upload->uploadOne($file);
        		
        		if($info){ // 保存附件信息
            		//M('Photo')->add($info);
            		$Renzheng = array(
            			'phonenumber'=>session('phonenumber'),
            			'createtime'=>date('Y-m-d  H:m:s')
            			);
            		for($i = 0;$i<count($info);$i++){
            			//echo $info[$i]['savepath'].$info[$i]['savename'];
            			$tu = $info[$i]['savepath'].$info[$i]['savename'];
            			array_unshift($Renzheng,$tu);
            			//echo "<br>";
            		}
            		$isphoto = $rephoto_form->add($Renzheng);
            		if($isphoto){
						$this->success("认证请求提交成功，后台工作人员会在3-7个工作日内为您审核，请耐心等待，谢谢合作");
            		}else{
            			$this->error('上传失败');
            		}
            		
            		//var_dump($info);
        		}else{ // 上传错误
            		$this->error($upload->getErrorMsg());
        		}
    		 }
			} 
	}
}
function nameFun(){
        return time();
 	}












?>