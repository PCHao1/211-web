<?php
require_once APP_PATH . '/app/config/controller.php';

class User extends Controller{
	public function register(){
		$this->view->nameError = "";
		$this->view->pswError = "";
		$this->view->emailError = "";
		$this->view->repeatPswError = "";
		$this->view->userNameError = "";
		$this->view->phoneError = "";

		$method = $_SERVER['REQUEST_METHOD'];
		if ($method == "POST") {
			$username = $_POST["reg"]["username"];
			$psw = $_POST["reg"]["psw"];
			$name = $_POST["reg"]["name"];
			$email = $_POST["reg"]["email"];
			$repeatPsw = $_POST["reg"]["repeatPsw"];
			$phone = $_POST["reg"]["phone"];
			$submitable = true;
			//validate
			// if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
			// 	$this->view->nameError = "Tên chỉ bao gồm kí tự và khoảng trắng";
			// 	$submitable = false;
			// }

			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$this->view->emailError = "Email không đúng định dạng";
				$submitable = false;
			}else{
				if($this->model->checkRegisterEmail($email) != false){
					$this->view->emailError = "Email đã tồn tại";
					$submitable = false;
				}
			}

			if (!preg_match("/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/",$psw)) {
				$this->view->pswError = "Phải gồm 8 kí tự trở lên, ít nhất 1 chữ hoa, 1 chữ thường và 1 số";
				$submitable = false;
			}

			if (!preg_match("/^(0?)(3[2-9]|5[6|8|9]|7[0|6-9]|8[0-6|8|9]|9[0-4|6-9])[0-9]{7}$/",$phone)) {
				$this->view->phoneError = "Đây không thể là một số điện thoại";
				$submitable = false;
			}

			if($psw != $repeatPsw){
				$this->view->repeatPswError = "Mật khẩu không khớp";
				$submitable = false;
			}

			
			if($this->model->checkRegisterUserName($username) != false){
				$this->view->userNameError = "Tên đăng nhập đã tồn tại";
				$submitable = false;
			}
			

			if($submitable){
				//handlesubmit
				$result = $this->model->insertUser($username,$psw,$email,$name,$phone);
				if($result == 1){
					$_SESSION["user"]["username"] = $username;
					$_SESSION["user"]["email"] = $email;
					$_SESSION["user"]["name"] = $name;
					$_SESSION["user"]["type"] = 0;
					$_SESSION["user"]["status"] = 0;
					
					header("Location:" . "/");
	
				}
			}
		}
		$this->view->render("user/register", false);

	}
	public function product_detail(){
		
	}
}