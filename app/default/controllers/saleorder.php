<?php
require_once APP_PATH . '/app/config/controller.php';

class SaleOrder extends Controller{
	public function index(){
		$this->view->items =  $this->model->getOrders();
		
		$this->view->render("saleorder/index", false);
	}
		
	
}