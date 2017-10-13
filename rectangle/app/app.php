<?php
    require_once __DIR__.'/../vendor/autoload.php';

    $app = new Silex\Application();

    $app->get('/hello', function(){
        return "Hi there!";
    });

    return $app;

?>