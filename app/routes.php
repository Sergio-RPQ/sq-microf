<?php 
    
    /*
     * Local que será utilizado para configurar as rotas do framework
     * */

    $routes[] = ['/', 'PrincipalController@index'];
    $routes[] = ['/posts', 'PostsController@index'];
    $routes[] = ['/posts/{id}/show', 'PostController@showPosts'];
    $routes[] = ['/contatos/show', 'ContatoController@showContatos'];
    
    return $routes;