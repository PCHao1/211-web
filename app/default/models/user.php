<?php
require_once APP_PATH . '/app/config/model.php';

class UserModel extends Model{
	public function __construct(){
		parent::__construct();
		$this->setTable("user");
	}

	public function checkRegisterUserName($username){
		$result = $this->selectOne([
			"column"	=> "username, phone_number, name, email, accounttype, status",
			"condition"	=> "username = ?",
			"bind"		=> [
				"s",
				$username,
			
				// hash('sha256',$password)
			]
		]);
		return $result;
	}
    public function checkRegisterEmail($email){
		$result = $this->selectOne([
			"column"	=> "username, phone_number, name, email, accounttype, status",
			"condition"	=> "email = ?",
			"bind"		=> [
				"s",
				$email,
			
				// hash('sha256',$password)
			]
		]);
		return $result;
	}
    public function insertUser($username,$psw,$email,$name,$phone){
		$result =$this->insert([
			"data"		=> "username,name,phone_number,email,password",
			"bind"		=> [
				"sssss",
				$username,
                $name,
                $phone,
                $email,
                $psw,

			]
		]);
		return $result;
	}
}