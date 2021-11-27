<?php
require_once APP_PATH . '/app/config/model.php';

class NewsModel extends Model{
	public function __construct(){
		parent::__construct();
		$this->setTable("news");
	}

	public function getNews(){
		
	}
}