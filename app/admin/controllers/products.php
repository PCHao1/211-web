<?php
require_once APP_PATH . '/app/config/controller.php';

class Products extends Controller{
	public function index(){
		$info= $this->verify();
		if(!$info){
			header("Location:" . "/login");
		}
		else if($info["type"]!=1)
			header("Location:" . "/");
		if(isset($_GET['detail'])){
			$this->view->render("products/detail",false);
			return;	
		}
		//AJAX add Product
		if(isset($_POST['add'])){
			$title=$_POST['title'];
			$price=$_POST['price']; 
			$quantity=$_POST['quantity']; 
			$promotion=$_POST['promotion']; 
			$catalog=$_POST['catalog']; 
			$descr=$_POST['descr']; 
			if($title==''||$price==''||$quantity==''||$promotion==''||$catalog==''||$descr==''){
				echo 0;
				return;
			}
			$productid=$this->model->insertProduct($title, $price, $quantity,$promotion, $catalog, $descr);
			$num=0;
			while(isset($_FILES['pic'.$num])){
				$_FILES['pic'.$num];
				if ($_FILES["anh"]["size"] > 2000000)
			      {
			        $num++;
			        continue;
			      }
				$this->model->insertPicture($productid, $num);
			    $target_file="public/images/products/".$productid.'p'.$num.".png";
			    move_uploaded_file($_FILES['pic'.$num]["tmp_name"], $target_file);
			    $num++;
			}
			echo 2;
			return;
		}
		$this->view->lstProducts=$this->model->getAllProducts();
		$this->view->title="Sản phẩm";
		$this->view->menuNum=2;
		$this->view->render("products/index",false);
	}
}

    // if (!isset($_FILES['anh']))
    //   {
    //      $errors[0]='Thiếu ảnh hoặc ảnh lỗi';
    // 		include '../../error/errors.php'; 
    // 		goto next;
    //   }
    // elseif( $_FILES['anh']['type']!="image/png"&&$_FILES['anh']['type']!="image/jpeg"){
    // 		$errors[0]='Thiếu ảnh hoặc sai định dạng ảnh';
    // 		include '../../error/errors.php'; 
    // 		goto next;
    // } 
    // elseif ($_FILES["anh"]["size"] > 2000000)
    //   {
    //      $errors[0]='Ảnh quá lớn';
    // 		include '../../error/errors.php'; 
    // 		goto next;
    //   }
 // $target_file="../../images/product/".$_POST['ISBN'].".png";
 //    $linkanh=$_POST['ISBN'].".png";
 //    move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file);