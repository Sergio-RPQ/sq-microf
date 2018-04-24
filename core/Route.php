<?php
namespace core;

class Route {
    
    private $routes;
    
    public function __construct(array $routes){
        $this->routes = $routes;
        $this->run();
    }
    
    private function getUrl(){
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
    
    private function run(){
        
        $rotavalidacao = 'Rota inválida';
        $rotainformada =  explode('/', $this->getUrl());
        
        if ($rotainformada[1] == ""){
            $rotavalidacao = 'Rota válida';
        }
        else{
            
            foreach($this->routes as $rote){
                $rotaconfigurada = explode('/', $rote[0]);
                
                if(count($rotainformada) > count($rotaconfigurada))
                    continue;
                else{
                    
                    for($i = 1; $i < count($rotainformada); $i++){
                        
                        $primeiro = substr($rotaconfigurada[$i], 0, 1);
                        $ultimo   = substr($rotaconfigurada[$i], -1, 1);
                        
                        
                        if ($primeiro=='{' && $ultimo=='}'){
                            $parametro = $rotainformada[$i];
                            echo $parametro;
                            echo "<br />";
                            continue;
                        }
                            
                        if($rotainformada[$i] == $rotaconfigurada[$i]){
                            $rotavalidacao = 'Rota válida';
                        }
                        else{
                            $rotavalidacao = 'Rota inválida';
                            break;
                        }       
                    }
                    
                    
                    if($rotavalidacao == 'Rota válida'){
                        break;
                    }
                }
            }
            
        }
        
        echo $rotavalidacao;
        
    }
    
    
}

