<?php
require_once APP_PATH . '/app/config/controller.php';

class Orders extends Controller{
	public function index(){
		$info= $this->verify();
		if(!$info){
			header("Location:" . "/login");
		}
		else if($info["type"]!=1)
			header("Location:" . "/");
		if(isset($_GET['detail'])){
			$this->view->render("orders/detail",false);
			return;	
		}
		$this->view->title="Đơn hàng";
		$this->view->menuNum=1;
		$this->view->render("orders/index",false);
	}
}