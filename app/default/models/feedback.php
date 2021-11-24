<?php
require_once APP_PATH . '/app/config/model.php';

class FeedbackModel extends Model{
	public function __construct(){
		parent::__construct();
		$this->setTable("feedback");
	}



	public function insertFeedback($rate,$comment){
		$result =$this->insert([
			"data"		=> "star,comment",
			"bind"		=> [
				"sssss",

				$rate,
                $comment,
                
			]
		]);
		return $result;
	}
}