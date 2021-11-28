<?php
require_once APP_PATH . '/app/config/controller.php';

class Product extends Controller{
	public function product_info(){
        $this->view->title="Tất cả sản phẩm";
        //$this->view->lstCatalogs=$this->model->getcatalogs();
        if(isset($_GET['catalog'])){
            $catalog = $_GET['catalog'];
            $this->view->catalogProducts=$catalog;
            if(isset($_GET['sortSelector'])){
                $sortSelector = $_GET['sortSelector'];
                $this->view->lstProducts=$this->model->getAllProducts($sortSelector,$catalog);
                $this->view->render("product/products", false);
                return;
            }
            $this->view->lstProducts=$this->model->getAllProducts(0,$catalog);
            $this->view->render("product/product_page", false);
        }else{
            echo"khong co gi";
        }     
        
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