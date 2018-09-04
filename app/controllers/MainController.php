<?php

	namespace app\controllers;

	use core\BaseController;
	use core\Helper;

	 class MainController extends BaseController{

	 	public function index(array $param){
	 		//echo "Home";
	 		//var_dump($param);
	 		
	 		$this->dadosView->nome = 'Sergio Ricardo';
	 		
	 		$this->renderView('home/index', 'baselayout');
	 	}


	}