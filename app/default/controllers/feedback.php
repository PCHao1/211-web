<?php
require_once APP_PATH . '/app/config/controller.php';

class Feedback extends Controller{
	public function feedback(){

		$method = $_SERVER['REQUEST_METHOD'];
		if ($method == "POST") {

			$rate = $_POST["rate"];
			$comment = $_POST["feedcmt"];
			//validate
			if(isset($comment)){

				//handlesubmit
				$result = $this->model->insertFeedback($rate,$comment);
				
				if($result){
					header("Location:" . "/");
	
				}
			}
		}
		$this->view->render("feedback/feedback", false);
	}
	public function product_detail(){
		
	}
}