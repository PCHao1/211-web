<?php
require_once APP_PATH . '/app/config/controller.php';

class Product extends Controller{
	public function product_info(){
		$this->view->render("showfb", false);
	}
	public function product_detail(){
		
	}
}