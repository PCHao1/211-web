<?php
require_once APP_PATH . '/app/config/controller.php';

class News extends Controller{
	public function index(){
		if(isset($_GET['post_id'])){
			$post_id=$_GET['post_id'];
			$this->content($post_id);
			return;
		}
		$this->view->news_1 = $this->model->getNews_1();
		$this->view->news_2 = $this->model->getNews_2();
		
		$this->view->news_3 = $this->model->getNews_3();
		
		$this->view->render("news/index", false);
	}
	public function content($post_id){
		$this->view->content= $post_id;
		$this->view->title = $this->model->getNews($post_id)['title'];
		$this->view->render("/news/content", false);
	}
}