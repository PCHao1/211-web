<?php
require_once APP_PATH . '/app/config/controller.php';

class Product extends Controller{
	public function product_info(){
        
	}
	public function product_detail(){
		$this->view->title="Tên sản phẩm";
		$this->view->render("product/product_detail", false);
	}
}