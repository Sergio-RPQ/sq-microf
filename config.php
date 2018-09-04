<?php
	$sep = DIRECTORY_SEPARATOR;
	$server = $_SERVER['HTTP_HOST'];
	$cssBootstrap = __DIR__.$sep.'vendor'.$sep.'twbs'.$sep.'bootstrap'.$sep.'dist'.$sep.'css'.$sep; 
	$arrayConfig = array('rootpath' 	=> __DIR__,
						 'sp'			=> $sep,
						 'cssbootstrap'	=> $cssBootstrap,
						 'host'			=> $server,
						 'cdnbootstrap_css' => 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',
						 'cdnbootstrap_js'	=> 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js',
						);
	return $arrayConfig;