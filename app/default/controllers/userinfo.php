<?php
require_once APP_PATH . '/app/config/controller.php';

class Userinfo extends Controller{
	public function index(){
		echo 'info';
	}
	public function product_info(){
		$this->view->render("showfb", false);
	}
	public function product_detail(){
		
	}
}