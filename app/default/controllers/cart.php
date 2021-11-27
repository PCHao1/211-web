<?php
require_once APP_PATH . '/app/config/controller.php';

class Cart extends Controller{
	public function index(){
		
		$this->view->items = [
			[
				"name" => "Product 1",
				"id" => 1,
				"price" => 5000,
				"quantity" => 1,
			],
			[
				"name" => "Product 2",
				"id" => 2,
				"price" => 8000,
				"quantity" => 2,
			],
			[
				"name" => "Product 3",
				"id" => 3,
				"price" => 1000,
				"quantity" => 5,
			],
			[
				"name" => "Product 4",
				"id" => 4,
				"price" => 10000,
				"quantity" => 1,
			],
		];


		$this->view->priceOptions=["normal" => 10000, "fast"=>20000];
		$this->view->currentOption = $this->view->priceOptions["normal"];
		$this->view->totalPrice = $this->model->totalPrice($this->view->items);

		if(isset($_POST['remove'])){	
			
			// array_filter($this->view->items, function($k) {
			// 	return $k['id'] != (int)$_POST['id'];
			// }, ARRAY_FILTER_USE_KEY);
			$this->view->items=[];
			echo "deleted";
			
		}
		
		$this->view->render("cart/cart", false);

	
	}
	
}