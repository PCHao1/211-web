<?php
require_once APP_PATH . '/app/config/controller.php';

class Feedback extends Controller{
	public function feedback(){

		$method = $_SERVER['REQUEST_METHOD'];
		if ($method == "POST") {
			$rate1 = $_POST["rate"]["s1"]?? 9;
			$rate2 = $_POST["rate"]["s2"]?? 9;
			$rate3 = $_POST["rate"]["s3"]?? 9;
			$rate4 = $_POST["rate"]["s4"]?? 9;
			$rate5 = $_POST["rate"]["s5"]?? 9;
			$comment = $_POST["feedcmt"];
			if($rate1!=9)
			{
				$rate = $rate1;
			}
			else if($rate2!=9)
			{
				$rate = $rate2;
			}
			else if($rate3!=9)
			{
				$rate = $rate3;
			}
			else if($rate4!=9)
			{
				$rate = $rate4;
			}
			else if($rate5!=9)
			{
				$rate = $rate5;
			}
			else 
			{
				$rate = 5;
			}
			
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