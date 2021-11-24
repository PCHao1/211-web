<?php
require_once APP_PATH . '/app/config/controller.php';

class Feedback extends Controller{
	public function index(){
		$info= $this->verify();
		if(!$info){
			header("Location:" . "/login");
		}
		else if($info["type"]!=1)
			header("Location:" . "/");
		if(isset($_GET['detail'])){
			$this->view->render("feedback/detail",false);
			return;	
		}
		$this->view->title="Feedback";
		$this->view->menuNum=4;
		$this->view->render("feedback/index",false);
	}
}