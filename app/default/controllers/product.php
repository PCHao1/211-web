<?php
require_once APP_PATH . '/app/config/controller.php';

class Product extends Controller{
	public function product_info(){
		$this->view->render("product/1", false);
	}
	public function product_detail(){
		
	}
}