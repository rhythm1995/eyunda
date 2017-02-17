<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){

    	$news_form=M('News');
    	$car_form =M('Car');
    	$cars = $car_form->limit(10)->order('id desc')->select();
    	$news = $news_form->limit(10)->order('id desc')->select();

    	$goods_form = M('Goods');
    	$goods = $goods_form->order('id desc')->select();

    	$cars_number = count($cars)+7503;
    	$goods_number = count($goods)+21375;
    	$number = array(array(
    		'car'=>$cars_number,
    		'goods'=>$goods_number));
    	//var_dump($news);
    	$cars_list = $car_form->limit(10)->order('id desc')->select();
    	$this->assign('cars',$cars_list);
    	$this->assign('number',$number);
    	$this->assign('news',$news);
	$this->display();
    }
}
?>