<?php
require_once APP_PATH . '/app/config/controller.php';

class User extends Controller{
	public function register(){
		$this->view->pswError = "Init psw Errorrrr";
		$this->view->emailError = "Init email Error";
		$this->view->repeatPswError = "Init rePsw Error";
		$this->view->render("user/register", false);

	}
	public function product_detail(){
		
	}
}