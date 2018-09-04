<?php
	
	namespace app\controllers;

	class PostController{


		public function index(array $param){

			echo 'Página inicial Posts. ';
			var_dump($param);
		}

		public function showPosts(array $param, $obj){

			echo 'O post que será exibido é :'.$param[0];
			echo '<br>'.$obj->get->nome;
			echo '<br>'.$obj->get->sexo;
			echo '<br>'.$obj->get->idade;
		}

	}