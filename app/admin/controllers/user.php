<?php
require_once APP_PATH . '/app/config/controller.php';

class User extends Controller{
	public function login(){
		if (isset($_SESSION["user"]["email"])) {
			if ($_SESSION["user"]["type"] == 1) {
				header("Location:" . "/admin");
			}else{
				header("Location:" . "/");
			}
			die();
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
					
					if ($user["type"] == 1) {
						header("Location:" . "/admin");
					}else{
						header("Location:" . "/");
					}
				}else{
					$message = "Thông tin đăng nhập không chính xác.";
				}
			}
		}
		$this->view->username = $_SESSION["user"]["username"];
		$this->view->message = $message;
		$this->view->render("login/index", false);
	}



	public function logout(){
		session_unset();
		header("Location:" . "/login");
	}


}