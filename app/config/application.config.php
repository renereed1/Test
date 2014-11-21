<?php

return array(
    'namespace' => 'Salestream\\Controller',
    'database' => array(
        'host' => '127.0.0.1',
        'db' => 'mycomments',
        'user' => 'root',
        'pass' => ''
    ),
    'routes' => array(
        array(
            'name' => 'create_comment',
            'url' => '/comments',
            'method' => 'POST',
            'controller' => 'comment',
            'action' => 'create'
        ),
        array(
            'name' => 'comments',
            'url' => '/comments',
            'method' => 'GET',
            'controller' => 'comment',
            'action' => 'index'
        ),
        array(
            'name' => 'get_comment',
            'url' => '/comments/{:id}',
            'method' => 'GET',
            'controller' => 'comment',
            'action' => 'show'
        ),
        array(
            'name' => 'update_comment',
            'url' => '/comments/{:id}',
            'method' => 'PUT',
            'controller' => 'comment',
            'action' => 'update'
        ),
        array(
            'name' => 'delete_comment',
            'url' => '/comments/{:id}',
            'method' => 'DELETE',
            'controller' => 'comment',
            'action' => 'delete'
        ),
        array(
            'name' => 'home',
            'url' => '/',
            'method' => 'GET',
            'controller' => 'default',
            'action' => 'index'
        ),
        array(
            'name' => 'contact',
            'url' => '/page/contact',
            'method' => 'GET',
            'controller' => 'page',
            'action' => 'contact'
        ),
        array(
            'name' => 'about',
            'url' => '/page/about',
            'method' => 'GET',
            'controller' => 'page',
            'action' => 'about'
        ),
    ),
    'path_to_views' => __DIR__ . '/../views'
);