	<?php
require_once APP_PATH . '/app/config/controller.php';

class Posts extends Controller{
	public function index(){
		$info= $this->verify();
		if(!$info){
			header("Location:" . "/login");
		}
		else if($info["type"]!=1)
			header("Location:" . "/");
		if(isset($_GET['detail'])){
			$this->view->render("posts/detail",false);
			return;	
		}
		$this->view->title="Bài viết";
		$this->view->menuNum=5;
		$this->view->render("posts/index",false);
	}
}