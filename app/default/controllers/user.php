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
			if (!preg_match("/^[a-zA-Z-' ]*$/",$this->vn_str_filter($name))) {
				$this->view->nameError = "Tên chỉ bao gồm kí tự và khoảng trắng";
				$submitable = false;
			}

			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$this->view->emailError = "Email không đúng định dạng";
				$submitable = false;
			}else{
				if($this->model->checkRegisterEmail($email) != false){
					$this->view->emailError = "Email đã tồn tại";
					$submitable = false;
				}
			}

			if (!preg_match("/^\S{8,}$/",$psw)) {
				$this->view->pswError = "Phải gồm 8 kí tự trở lên";
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

			if (!preg_match("/^[a-zA-Z][a-zA-Z0-9]+$/",$this->vn_str_filter($username))) {
				$this->view->nameError = "Tên đăng nhập chỉ được sử dụng chữ, số và phải bắt đầu bởi chữ cái";
				$submitable = false;
			}else{
				if($this->model->checkRegisterUserName($username) != false){
					$this->view->userNameError = "Tên đăng nhập đã tồn tại";
					$submitable = false;
				}
			}

			if($submitable){
				//handlesubmit
				$result = $this->model->insertUser($username,$psw,$email,$name,$phone);
				header("Location:" . "/login");
			}
		}
		$this->view->render("user/register", false);

	}
	private function vn_str_filter($str){
        $unicode = array(
            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
            'd'=>'đ',
            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
            'i'=>'í|ì|ỉ|ĩ|ị',
            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
            'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
			'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'D'=>'Đ',
            'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
            'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
        );
        
       foreach($unicode as $nonUnicode=>$uni){
            $str = preg_replace("/($uni)/i", $nonUnicode, $str);
       }
		return $str;
    }
	// public function product_detail(){
		
	// }
}