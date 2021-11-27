<?php
require_once APP_PATH . '/app/config/controller.php';

class Showfb extends Controller{
	public function showfb(){
		
		// $info= $this->verify();
		// if(!$info){
		// 	header("Location:" . "/login");
		// }
		// else if($info["type"]!=1)
		// 	header("Location:" . "/");
		if(isset($_GET['detail'])){
			$fb=$_GET['id'];
			$this->view->fb=$this->model->getDetailFeedback($fb);
			$this->view->render("feedback/detail",false);
			return;	
		}
		
		$this->view->lstfb=$this->model->getAllFeedback();
		$this->view->title="Feedback";
		$this->view->menuNum=4;
		$this->view->render("showfb/showfb",false);
	}
}