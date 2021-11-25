<?php
require_once APP_PATH . '/app/config/model.php';

class CartModel extends Model{
	public function __construct(){
		parent::__construct();
		$this->setTable("product");
	}

	public function setItem($data){
		$this->view->items = $data;
	}

	function addItem($item){
		array_push($this->view->items, $item);
	}

	

	function removeItem($id){
		$this->view->items = array_filter($this->view->items, function($item){
			return $item->id !== $id;
		});
	}
	public function totalPrice($items){
		$total = 0;
		foreach($items as &$item){
			$total = $total + $item['price']*$item['quantity'];

		}
		return $total;
	}
}