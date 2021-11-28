<?php
require_once APP_PATH . '/app/config/controller.php';

class SaleOrder extends Controller{
	public function index(){
		$info= $this->verify();
		$this->view->items =  $this->model->getOrders($info['username']);;

		$this->view->render("saleorder/index", false);
	}
		
	
}