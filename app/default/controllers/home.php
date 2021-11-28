<?php
require_once APP_PATH . '/app/config/controller.php';

class Home extends Controller{
	public function index(){	
		$this->view->title="Home";
		$this->view->render("home", false);
		// $info= $this->verify();
		// foreach ($info as $info => $value) {
		// 	echo $info.": ".$value."<br>";
		// }
	}
}