<?php 

	error_reporting(E_ALL ^ E_WARNING);

	$arrayConfig = require_once __DIR__.'/../config.php';
	define(BASE_PATH, $arrayConfig['rootpath']);
	define(SEP, $arrayConfig['sp']);
	define(CSS_BOOTSTRAP, $arrayConfig['cssbootstrap']);
	define(SERVER, $arrayConfig['host']);

    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../core/bootstrap.php';

    

    
    
    
    
   
    
    