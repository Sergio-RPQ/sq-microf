<?php
   
   namespace core;

   abstract class BaseController{

	   	protected $dadosView;
	   	private $viewPath;
	   	private $layoutPath;
	   	protected $basePathApp;

	   	public function __construct(){
	   		$this->dadosView = new \stdClass;
	   		$this->$basePathApp = BASE_PATH;
	   	}

	   	protected function renderView($viewPathInfo, $layout = null){
	   		$this->viewPath = $viewPathInfo;
	   		$this->layoutPath = $layout;
	   		if($this->layoutPath)
	   			$this->loadBaseLayout();
	   		else
	   			$this->loadContent();
	   	}

	   	protected function loadContent(){
	   		if(file_exists(__DIR__.'/../app/views/'.$this->viewPath.'.phtml')){
	   			require_once __DIR__.'/../app/views/'.$this->viewPath.'.phtml';
	   		}
	   		else{
	   			echo 'Não foi possível carregar o arquivo da view.';
	   		}
	   	}

	   	protected function loadBaseLayout(){
	   		if(file_exists(__DIR__.'/../app/views/'.$this->layoutPath.'.phtml')){
	   			require_once __DIR__.'/../app/views/'.$this->layoutPath.'.phtml';
	   		}
	   		else{
	   			echo 'Não foi possível carregar o layout base.';
	   		}
	   	}

   }