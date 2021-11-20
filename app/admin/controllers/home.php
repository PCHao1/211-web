<?php
require_once APP_PATH . '/app/config/controller.php';

class Home extends Controller{
	public function index(){
		$info= $this->verify();
		if(!$info){
			header("Location:" . "/login");
		}
		else if($info["type"]!=1)
			header("Location:" . "/");
		$this->view->title="DASHBOARD";
		$this->view->render("home/index",false);
	}
}