<?php
require_once APP_PATH . '/app/config/model.php';

class SaleOrderModel extends Model{
	public function __construct(){
		parent::__construct();
		$this->setTable("`order`");
	}

	public function getOrders($username){
		$result = $this->selectMulti([
			"column"	=> "orderid,username,status,address,shipfee",
			"condition" => "username = ?",
			"bind" => [
				"s",
				$username
			]
		]);
		$this->setTable("orderdetail");
		foreach ($result as $key=>$row) {
			$order=$row['orderid'];
			
	    	$raw_details = $this->selectMulti([
				"column"	=> "orderid,productid,price, quantity",
				"condition"	=> "orderid = ?",
				"bind"		=> [
					"i",
					$order
				]
			]);
			
			foreach ($raw_details as $key=>$row) {
				$this->setTable("product");
				$productid = $row['productid'];
				$product_detail = $this->selectOne([
					"column"	=> "title",
					"condition"	=> "productid = ?",
					"bind"		=> [
						"i",
						$productid
					]
				]);
				$raw_details[$key] += array("name" => $product_detail['title']);
				
			}
			$this->setTable("orderdetail");
			$result[$key] += array("items" => $raw_details);
			$result[$key] += array("test" => "z");
		}
		$this->setTable("`order`");
		return $result;
	}
}