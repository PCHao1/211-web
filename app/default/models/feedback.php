<?php
require_once APP_PATH . '/app/config/model.php';

class FeedbackModel extends Model{
	public function __construct(){
		parent::__construct();
		$this->setTable("feedback");
	}



	// public function checkorderid(){
	// 	$this->setTable("order");


	// 	// $result = $this->selectOne([
	// 	// 	"column"	=> "username, phone_number, name, email, accounttype, status",
	// 	// 	"condition"	=> "username = ?",
	// 	// 	"bind"		=> [
	// 	// 		"s",
	// 	// 		$username,
			
	// 	// 		// hash('sha256',$password)
	// 	// 	]
	// 	// ]);
	// 	$this->setTable("feedback");
	// 	return $result;
	// }

	public function insertFeedback($rate, $comment){

		$rs = $this->insert([
			"data"	=> "orderid,productid,star,comment",
			"bind"		=> [
				"iiis",
				1,
				33,
				$rate,
				$comment
			]
		]);
		
		return $rs;
	}

	public function getFeedback(){

		$re = $this->selectOne([
			"column"	=> "max(feedbackid)"
			
		]);
		
		return $re['max(feedbackid)'];
	}
	// public function getFeedback(){

	// 	$result = $this->selectMulti([
	// 		"column"	=> "feedbackid"
	// 	]);
	// 	//Get product name
		
		
	// 	return $result;
	// }
}