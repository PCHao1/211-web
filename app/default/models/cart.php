<?php
require_once APP_PATH . '/app/config/model.php';

class CartModel extends Model{
	public function __construct(){
		parent::__construct();
		$this->setTable("product");
	}


	public function totalPrice($items){
		$total = 0;
		foreach($items as &$item){
			$total = $total + $item['price']*$item['quantity'];

		}
		return $total;
	}
}