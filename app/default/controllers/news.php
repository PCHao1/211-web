<?php
require_once APP_PATH . '/app/config/controller.php';

class News extends Controller{
	public function index(){
		$this->view->news_1 = ["title" => "Tiêu đề cho tin tức có độ ưu tiên lớn nhất"];
		$this->view->news_2 = [
			[
				"title" => "Tiêu đề cho tin tức có độ ưu tiên thứ 2",
				"description" => "Mô tả cho tin tức có độ ưu tiên thứ 2"
			],
			[
				"title" => "Tiêu đề cho tin tức có độ ưu tiên thứ 2",
				"description" => "Mô tả cho tin tức có độ ưu tiên thứ 2"
			],
			[
				"title" => "Tiêu đề cho tin tức có độ ưu tiên thứ 2",
				"description" => "Mô tả cho tin tức có độ ưu tiên thứ 2"
			],
		];
		$this->view->news_3 = [
			[
				"title" => "Tiêu đề cho tin tức có độ ưu tiên thứ 3",
				"description" => "Mô tả cho tin tức có độ ưu tiên thứ 2"
			],
			[
				"title" => "Tiêu đề cho tin tức có độ ưu tiên thứ 3",
				"description" => "Mô tả cho tin tức có độ ưu tiên thứ 2"
			],
			[
				"title" => "Tiêu đề cho tin tức có độ ưu tiên thứ 3",
				"description" => "Mô tả cho tin tức có độ ưu tiên thứ 2"
			],
		];
		
		$this->view->render("news/index", false);
	}
}