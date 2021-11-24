<?php
require_once APP_PATH . '/app/config/controller.php';

class Resource extends Controller{
	public function index(){
		$info= $this->verify();
		if(!$info){
			header("Location:" . "/login");
		}
		else if($info["type"]!=1)
			header("Location:" . "/");
		$this->view->title="Tài nguyên";
		$this->view->menuNum=6;
		$this->view->render("resource/index",false);
	}
}