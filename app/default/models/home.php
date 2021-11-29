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
        $arr_id = $this->selectMulti([
            "column"	=> "productid,count(productid)",
            "order"		=> "count(productid)",
            "group"		=> "productid",
            "limit"		=> 5,
        ]);

        $result = [];

        foreach($arr_id as $id){
            array_push($result, $this->selectOne([
                "column"	=> "productid,title,price,quantity,promotion,",
                "condition"	=> "productid = ?",
                "bind"		=> [
                    "i",
                    $id,
                ]
            ]));
        }

        return $result;
    }
}