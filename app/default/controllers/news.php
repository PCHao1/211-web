<?php
require_once APP_PATH . '/app/config/controller.php';

class News extends Controller{
	public function index(){
		$this->view->news_1 = $this->model->getNews_1();
		$this->view->news_2 = $this->model->getNews_2();
		
		$this->view->news_3 = $this->model->getNews_3();
		
		$this->view->render("news/index", false);
	}
}