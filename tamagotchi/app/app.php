<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Tamagotchi.php';

    $app = new Silex\Application();
    //Routing

    $app->register(new Silex\Provider\TwigServiceProvider, [
        "twig.path" => __DIR__."/../views/"
    ]);

    session_start();
    if(empty($_SESSION['alltamagotchies'])){
        $_SESSION['alltamagotchies'] = [];
    }

    $app->get('/', function() use ($app){
        $alive = [];
        foreach($_SESSION['alltamagotchies'] as $tamagotchi){
            $tamagotchi->decrease();
            if($tamagotchi->isAlive){
                $alive[] = $tamagotchi;
            }
        }
        if(empty($alive)){
            unset($_SESSION['alltamagotchies']);
        }
        return $app['twig']->render('home.php',['tamagotchies' => $alive]);
    });

    $app->post('/create_tamagotchi', function() use($app){
        $tamagotchi = new Tamagotchi($_POST['name']);
        $tamagotchi->save();
        return $app->redirect('/');
    });

    return $app;
?>