<?php
require_once APP_PATH . '/app/config/controller.php';

class Home extends Controller{
	public function index(){
		if (isset($_SESSION["user"]["email"])) {
			if ($_SESSION["user"]["type"] != 1) {
				header("Location:" . "/"); //không phải admin thì cho về trang chủ
			}
		}else{
			header("Location:" . "/login"); //chưa đăng nhập thì cho về đăng nhập
			die();
		}	

		$this->view->noti="hi các cậu";

		$this->view->render("home/index");
	}
}