<?php
require_once APP_PATH . '/app/config/controller.php';

class Product extends Controller{
	public function product_info(){
        $this->view->title="Tất cả sản phẩm";
        $this->view->lstCatalogs=$this->model->getcatalogs();
		$this->view->lstProducts=$this->model->getAllProducts();
        $this->view->render("product/products", false);
	}
	public function product_detail(){
        if(isset($_GET['id_of_product'])){
            $id_of_product=$_GET['id_of_product'];
			$this->view->product=$this->model->getDetailProduct($id_of_product);
            //$this->view->title=$this->view->product['title'];
		    $this->view->render("product/product_detail", false);
        }
	}
}