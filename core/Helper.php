<?php 

	namespace core;

	class Helper{

		private $basePath;

		public function __construct(){

			/*
			$arrayPath = explode('/', $pathAssets);
			$ctpath = (count($arrayPath) -1);
			$returnpath = '';

			for($i =0; $i < $ctpath; $i++){
				$returnpath .= $arrayPath[$i].'/';
			}
			
			$this->baseAssetsPath = $returnpath;
			*/
		}

		private function getBaseAssetsPath(){
			return $this->baseAssetsPath;
		}

		public function getAsset($pathAsset){
			return $this->getBaseAssetsPath().$pathAsset;
		}

		public function getCss($arquivocss, $path){
			$varteste  = '';
			$varteste .= 'href="';
			$varteste .= $path;
			$varteste .= $arquivocss;
			$varteste .= '"';
			return $varteste;
		}

	}