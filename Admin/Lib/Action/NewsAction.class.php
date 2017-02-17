<?php
/**
* 
*/
class NewsAction extends Action
{
	public function index(){
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

				$this->display();
			}else{
				$this->redirect('Error/index',array('msg' => "操作超时，请登录重试"));
			}
		}else{
			$this->redirect('Error/index',array('msg' => "操作超时，请登录重试"));
		}
	}
	public function Publish(){
		$title = $_POST['title'];
		$content = $_POST['content'];
		$news_form = M('News');
		import("ORG.Net.UploadFile");
 		//导入上传类
		$upload = new UploadFile();
 		//设置上传文件大小
		$upload->maxSize = 3292200;
 		//设置上传文件类型
		$upload->allowExts = explode('jpg','png','jpeg');
 		//设置附件上传目录
		$upload->savePath = './Public/img/news/';
 		
		$upload->saveRule = 'uniqid';
 		//删除原图
		$upload->thumbRemoveOrigin = true;
 		if (!$upload->upload()) {
    	//捕获上传异常
    	$this->error("发布失败，请添加图片");
 		} else {
    		//取得成功上传的文件信息
    		$uploadList = $upload->getUploadFileInfo();
    		$path = $uploadList[0]['savepath'] . $uploadList[0]['savename'];
    		$new = array('title'=>$title,
    					'content'=>$content,
    					'img'=>$path,
    					'createtime'=>date('Y-m-d H:i:s'));
    		$isnew = $news_form->add($new);
    		if($isnew){
    			$this->redirect('News/index');
    		}else{
    			$this->error('发布失败，请返回重试');
    		}
 		}
	}
}












































?>