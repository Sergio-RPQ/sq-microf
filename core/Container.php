<?php

	namespace core;

	class Container{

		public static function iniciarController($controllername){
			$objControler = "app\\controllers\\".$controllername;
			return new $objControler;
		}

	}