<?php
	$sep = DIRECTORY_SEPARATOR;
	$server = $_SERVER['HTTP_HOST'];
	$cssBootstrap = __DIR__.'/'.'vendor'.'/'.'twbs'.'/'.'bootstrap'.'/'.'dist'.'/'.'css'.'/'; 
	$arrayConfig = array('rootpath' 	=> __DIR__,
						 'sp'			=> $sep,
						 'cssbootstrap'	=> $cssBootstrap,
						 'host'			=> $server
						);
	return $arrayConfig;