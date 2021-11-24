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
		//Check permission
		$info= $this->verify();
		if(!$info){
			header("Location:" . "/login");
		}
		else if($info["type"]!=1)
			header("Location:" . "/");
		//Getdetail AJAX
		if(isset($_GET['detail'])){
			$this->view->user=$this->model->getDetailUser($_GET['user']);
			$this->view->render("user/detail",false);
			return;	
		}
		//ADD User AJAX
		if(isset($_POST['add'])){
			$username=$_POST['username'];
			$name=$_POST['name']; 
			$phone=$_POST['phone']; 
			$email=$_POST['email']; 
			$pass=$_POST['pass']; 
			$type=$_POST['type'];
			//Return 0 if any field is null
			if($username==''||$name==''||$phone==''||$email==''||$pass==''||$type==''){
				echo 0;
				return;
			}
			//Return 1 if username exist
			if($this->model->checkRegisterUserName($username)){
				echo 1;
				return;
			}
			$this->model->insertUser($username,$pass,$email,$name,$phone,$type);
			//Return 2, success
			echo 2;
			return;
		}
		//Ban User AJAX
		if(isset($_POST['ban'])){
			$user=$_POST['banUserName'];
			$status=$this->model->getDetailUser($user)['status'];
			if($status==0){
				$this->model->updateUserStatus($user,1);
			}
			else{
				$this->model->updateUserStatus($user,0);
			}
			return;
		}
		//Change User AJAX
		if(isset($_POST['change'])){
			$username=$_POST['username'];
			$name=$_POST['name']; 
			$phone=$_POST['phone']; 
			$email=$_POST['email'];  
			$type=$_POST['type'];
			//Return 0 if any field is null
			if($username==''||$name==''||$phone==''||$email==''||$type==''){
				echo 0;
				return;
			}
			//Return 2 success
			else if($this->model->updateUserInfo($username,$name,$phone,$email,$type)){
				echo 2;
				return;
			}
			else{
				echo 1;
				return;
			}
		}
		$this->view->lstUser=$this->model->getAllUser();
		$this->view->title="Quản lý thành viên";
		$this->view->menuNum=3;
		$this->view->render("user/index",false);
	}

}