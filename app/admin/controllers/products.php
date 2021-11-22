<?php
require_once APP_PATH . '/app/config/controller.php';

class Products extends Controller{
	public function index(){
		$info= $this->verify();
		if(!$info){
			header("Location:" . "/login");
		}
		else if($info["type"]!=1)
			header("Location:" . "/");
		if(isset($_GET['detail'])){
			$this->view->render("products/detail",false);
			return;	
		}
		$this->view->title="Sản phẩm";
		$this->view->menuNum=2;
		$this->view->render("products/index",false);
	}
}