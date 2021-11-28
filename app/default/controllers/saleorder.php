<?php
require_once APP_PATH . '/app/config/controller.php';

class SaleOrder extends Controller{
	public function index(){
		$this->view->items = 
		[
			[
				"id" => 1,
				"status" => 1,
				"address" => "Đâu đấy",
				"shipfee" => 20000,
				"items" =>[
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
				]
			],
			[
				"id" => 2,
				"status" => 1,
				"address" => "Dallas",
				"shipfee" => 99000,
				"items" =>[
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
				]
			],
		];
		$this->view->render("saleorder/index", false);
	}
		
	
}