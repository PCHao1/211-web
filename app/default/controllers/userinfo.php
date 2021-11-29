<?php
require_once APP_PATH . '/app/config/controller.php';

class Userinfo extends Controller{
	public function index(){
		//var_dump($this->verify());	
		if( isset($_COOKIE["username"]))
		{

			echo "Username: " . $_COOKIE["username"];
			echo "Tên người dùng: " . $_COOKIE["name"];
			echo "Email: " . $_COOKIE["email"];
		}
		else
		{
			echo "Chưa có cookie";
		}
		

		//die(var_dump($this->verify()));
		
	}
	public function product_info(){
		$this->view->render("showfb", false);
	}
	public function product_detail(){
		
	}
}