<?php
require_once APP_PATH . '/app/config/controller.php';

class Feedback extends Controller{
	public function feedback(){

		$method = $_SERVER['REQUEST_METHOD'];
		if ($method == "POST") {
			$rate = $_POST["rate"];
			$comment = $_POST["feed"]["cmt"];
			$submitable = true;
			//validate

			if($submitable){
				//handlesubmit
				$result = $this->model->insertFeedback($rate,$comment);
				if($result == 1){
					$_SESSION["feedback"]["star"] = $rate;
					$_SESSION["feedback"]["comment"] = $comment;
					$_SESSION["feedback"]["imgcode"] = 1;
					
					header("Location:" . "/");
	
				}
			}
		}
		$this->view->render("feedback/feedback", false);
	}
	public function product_detail(){
		
	}
}