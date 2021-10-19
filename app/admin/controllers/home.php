<?php
require_once APP_PATH . '/app/config/controller.php';

class Home extends Controller{
	public function index(){
		

		$this->view->title="DASHBOARD";

		$this->view->render("home/index",false);
		$this->view->render("home/index");
	}
}