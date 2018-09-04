<?php 

	namespace core;

	class Helper{

		private $baseAssetsPath;

		public function __construct($pathAssets){

			$arrayPath = explode('/', $pathAssets);
			$ctpath = (count($arrayPath) -1);
			$returnpath = '';

			for($i =0; $i < $ctpath; $i++){
				$returnpath .= $arrayPath[$i].'/';
			}
			$returnpath .= 'vendor';
			$this->baseAssetsPath = $returnpath;
		}

		private function getBaseAssetsPath(){
			return $this->baseAssetsPath;
		}

		public function getAsset($pathAsset){
			return $this->getBaseAssetsPath().$pathAsset;
		}

	}