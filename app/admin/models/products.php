<?php
require_once APP_PATH . '/app/config/model.php';

class ProductsModel extends Model{
	public function __construct(){
		parent::__construct();
		$this->setTable("product");
	}
	public function getAllProducts(){
		$result = $this->selectMulti([
			"column"	=> "productid,title,price,quantity,promotion,catalog,descri"
		]);
		return $result;
	}
	public function getDetailProduct($username){
		$result = $this->selectOne([
			"column"	=> "username, phone_number, name, email, accounttype, status, lastlogin",
			"condition"	=> "username = ?",
			"bind"		=> [
				"s",
				$username
				// hash('sha256',$password)
			]
		]);
		return $result;
	}

    public function insertProduct($title, $price, $quantity,$promotion, $catalog, $descr){
		$result =$this->insert([
			"data"		=> "title,price,quantity,promotion,catalog,descri",
			"bind"		=> [
				"siiiss",
				$title,
                $price,
                $quantity,
                $promotion,
                $catalog,
                $descr,

			]
		]);
		$id = $this->selectOne([
			"column"	=> "max(productid)"
			
		])["max(productid)"];
		return $id;
	}
    public function insertPicture($product, $priority){
		$this->setTable("product_image");
    	$id = $this->selectOne([
			"column"	=> "max(product_image)"
			
		]);
		$id++;
		$result =$this->insert([
			"data"		=> "imgcode,productid,priority,type",
			"bind"		=> [
				"iiii",
				$id,
				$product,
                $priority,
                0

			]
		]);
		$this->setTable("product");
		return $result;
	}
}