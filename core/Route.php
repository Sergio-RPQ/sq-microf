<?php

namespace core;

class Route {
    
    private $routes;
    private $controller;
    private $action;
    private $params;
    
    public function __construct(array $routes){
        $this->routes = $routes;
        echo $this->run();
    }
    
    private function getUrl(){
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);//Retorna string da url solicitada
    }

    private function getRequestParams(){

        $obj = new \stdClass;

        foreach($_GET as $key => $value){
            $obj->get->$key = $value;
        }
        foreach($_POST as $key => $value){
            $obj->post->$key = $value;
        }

        return $obj;
    }
    
    private function run(){
        // RETORNO RUN
        // 0 - Rota existente no arquivo de rotas. Rota válida.
        // 1 - Rota não existe no arquivo de rotas. Rota inválida.
        $returndata = array('rotavalida'          => false,
                            'controlleraction'    => "");

        //$rotavalidacao = 1;
        $rotainformada =  explode('/', $this->getUrl());
        
        if ($rotainformada[1] == ""){
            
            for($i = 0; $i < count($this->routes); $i++){
                if($this->routes[$i][0] == "/"){
                    $returndata['rotavalida']       = true;
                    $returndata['controlleraction'] = $this->routes[$i][1];
                    break;        
                }
            }
        }
            
        for($i = 0; $i < count($this->routes); $i++){

            if($returndata['rotavalida'])
                break;

            $rotaconfigurada = explode('/', $this->routes[$i][0]);

            if(count($rotainformada) != count($rotaconfigurada))
                continue;
            else{

                $this->params = array();
                $ctparams = 0;

                for($ii = 0; $ii < count($rotainformada); $ii++){
                    $primeiro = substr($rotaconfigurada[$ii], 0, 1);
                    $ultimo   = substr($rotaconfigurada[$ii], -1, 1);
                    if ($primeiro=='{' && $ultimo=='}'){
                        $this->params[$ctparams] = $rotainformada[$ii];
                        $ctparams++; 
                        continue;
                    }

                    if($rotainformada[$ii] != $rotaconfigurada[$ii]){
                        $returndata['rotavalida'] = false;
                        $returndata['controlleraction'] = "";
                        break;
                    }
                    else{
                        $returndata['rotavalida'] = true;
                        $returndata['controlleraction'] = $this->routes[$i][1];
                        continue;
                    }
                }
            }
        }

        if($returndata['rotavalida']){
            $ctrlAction = explode('@', $returndata['controlleraction']);
            $this->controller   = $ctrlAction[0];
            $this->action       = (String)$ctrlAction[1];
            $action = $this->action;
            $arrayParams = (array)$this->params;

            $objController = Container::iniciarController($this->controller);

            $objController->$action($arrayParams, $this->getRequestParams());

            //echo '<br>';
            //echo 'Action :'.$ctrlAction[1];
            //var_dump($this->params);
        }
        else{
            echo "Rota inválida";
        }
        
    }
    
    
}