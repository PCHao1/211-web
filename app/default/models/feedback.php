<?php
require_once APP_PATH . '/app/config/model.php';

class FeedbackModel extends Model{
	public function __construct(){
		parent::__construct();
		$this->setTable("feedback");
	}



	public function insertFeedback($rate, $comment){
		$rs = $this->insert([
			"data"	=> "orderid,productid,star, comment,imgcode",
			"bind"		=> [
				"iiisi",
				1,
				33,
				4,
				"hh",
				28256
			]
		]);
		
		return $rs;
	}
}