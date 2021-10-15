<?php
class Controller{
	protected $view;
	protected $model;

	function __construct(){
		require_once APP_PATH . '/app/config/view.php';
		$this->view = new View();
	}

	public function loadModel($moduleName, $fileName){
		$filePath = APP_PATH . '/app/' . $moduleName . '/models/' . $fileName . '.php';
		if (file_exists($filePath)) {
			require_once $filePath;
			$modelName = $fileName . 'Model';
			$this->model = new $modelName;
		}
	}

	public function loadModelOther($fileName){
		$moduleName = $this->view->moduleName;
		$filePath = APP_PATH . '/app/' . $moduleName . '/models/' . $fileName . '.php';
		if (file_exists($filePath)) {
			require_once $filePath;
			$modelName = $fileName . 'Model';
			return new $modelName;
		}
	}

	public function setView($moduleName){
		$this->view->moduleName = $moduleName;
	}
}