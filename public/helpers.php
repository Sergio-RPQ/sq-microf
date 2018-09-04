<?php
	
	function obterBootstrap($pathAssets){

			$arrayPath = explode('/', $pathAssets);
			$ctpath = (count($arrayPath) -1);
			$returnpath = '';

			for($i =0; $i < $ctpath; $i++){
				$returnpath .= $arrayPath[$i].'/';
			}
			$returnpath .= 'vendor';
			return $returnpath;
	}

	$varbootstrap = '';
	$varbootstrap .= '<link rel="stylesheet" type="text/css" ';
	$varbootstrap .= ' href="'.obterBootstrap(__DIR__).'/twbs/bootstrap/dist/css/bootstrap.min.css'.'" />';
	echo $varbootstrap;