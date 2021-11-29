<?php
require_once APP_PATH . '/app/config/model.php';

class HomeModel extends Model{
	public function __construct(){
		parent::__construct();
		$this->setTable("user");
	}

	// public function checkLogin($username, $password){
	// 	$result = $this->selectOne([
	// 		"column"	=> "username, phone_number, name, email, accounttype, status",
	// 		"condition"	=> "username = ? AND password = ?",
	// 		"bind"		=> [
	// 			"ss",
	// 			$username,
	// 			$password
	// 			// hash('sha256',$password)
	// 		]
	// 	]);
	// 	return $result;
	// }

    public function getBestSellingProducts(){
        $this->setTable("orderdetail");
        $products = $this->selectMulti([
            "column"	=> "productid,sum(quantity)",
            "order"		=> "sum(quantity) desc",
            "group"		=> "productid" ,           
            "limit"		=> 4,
        ]);
        
        //die(var_dump($products));
        
        $result = [];
        $this->setTable("product");
        foreach($products as $product){
            array_push($result, $this->selectOne([
                "column"	=> "productid,title,price,quantity,promotion",
                "condition"	=> "productid = ?",
                "bind"		=> [
                    "i",
                    $product['productid'],
                ]
            ]));
        }
        //die($result);
        //$this->setTable("user");
        return $result;
    }
}