<?php
require_once APP_PATH . '/app/config/controller.php';

class User extends Controller{
	public function login(){
		$info= $this->verify();
		if($info){
			if($info["type"]!=1)
				header("Location:" . "/");
			else 
				header("Location:" . "/admin");
		}
		$method = $_SERVER['REQUEST_METHOD'];
		$message = "";
		if ($method == "POST") {
			$username = $_POST["login"]["username"];
			$password = $_POST["login"]["password"];
			$_SESSION["user"]["username"] = $username;
			if (strlen($username) == 0 || strlen($password) == 0) {
				$message = "Hãy nhập đầy đủ thông tin.";
			}else{
				$user = $this->model->checkLogin($username, $password);
				if ($user) {
					$_SESSION["user"]["username"] = $user["username"];
					$_SESSION["user"]["email"] = $user["email"];
					$_SESSION["user"]["name"] = $user["name"];
					$_SESSION["user"]["type"] = $user["accounttype"];
					$_SESSION["user"]["status"] = $user["status"];
					
					if ($user["accounttype"] == 1) {
						header("Location:" . "/admin");
					}else{
						header("Location:" . "/");
					}
				}else{
					$message = "Thông tin đăng nhập không chính xác.";
				}
			}
		}
		$this->view->message = $message;
		$this->view->render("login/index", false);
	}

	public function logout(){
		session_unset();
		header("Location:" . "/");
	}

	public function index(){
		$info= $this->verify();
		if(!$info){
			header("Location:" . "/login");
		}
		else if($info["type"]!=1)
			header("Location:" . "/");
		if(isset($_GET['detail'])){
			$this->view->render("user/detail",false);
			return;	
		}
		$this->view->title="Quản lý thành viên";
		$this->view->menuNum=3;
		$this->view->render("user/index",false);
	}

}