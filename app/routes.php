<?php 
    
    /*
     * Local que será utilizado para configurar as rotas do framework
     * */

    //A rota (/) é a raiz e deve sempre existir 
    $routes[] = ['/', 'MainController@index'];

    //Demais rotas 
    $routes[] = ['/posts', 'PostController@index'];
    $routes[] = ['/posts/{id}/show', 'PostController@showPosts'];
    $routes[] = ['/contatos/show', 'ContatoController@showContatos'];
    $routes[] = ['/empresa/{idempresa}/contato/{idcontato}', 'EmpresaController@mostarContato'];
    
    return $routes;