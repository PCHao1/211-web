<?php
require_once APP_PATH . '/app/config/controller.php';

class Orders extends Controller{
	public function index(){
		$info= $this->verify();
		if(!$info){
			header("Location:" . "/login");
		}
		else if($info["type"]!=1)
			header("Location:" . "/");
		//Lấy thông tin Đơn hàng
		if(isset($_GET['detail'])){
			$this->view->render("orders/detail",false);
			return;	
		}
		//Hủy đơn hàng
		else if(isset($_POST['deny'])){
			$id=$_POST['id'];
			$reason="Admin hủy đơn hàng";
			if($this->model->updateOrderSts($id,$sts,$reason))
				echo 2;
			else echo 0;
			return;	
		}
		$this->view->lstOrders=$this->model->getAllOrders();
		$this->view->title="Đơn hàng";
		$this->view->menuNum=1;
		$this->view->render("orders/index",false);
	}
}