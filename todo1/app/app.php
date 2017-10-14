<?php
require_once __DIR__."/../vendor/autoload.php";
require_once __DIR__."/../src/Task.php";

$app = new Silex\Application();

//register twig
$app->register(new Silex\Provider\TwigServiceProvider(), [
    'twig.path' => __DIR__."/../views"
]);
//Routing
session_start();
if(empty($_SESSION['alltasks'])){
    $_SESSION['alltasks'] = [];
}
$app->get('',function() use($app){
    return $app['twig']->render('all_task.php',['tasks' => Task::getAll()]);
});

$app->get('create_task',function() use($app){
    return $app['twig']->render('create_task.php');
});

$app->post('/result',function() use($app){
    $task = new Task($_POST['description']);
    $task->save();
    return $app['twig']->render('result_task.php', ['task'=>$task]);
});

$app->post('/delete_tasks',function() use($app){
    Task::clearAll();
    return $app['twig']->render('all_task.php');
});



return $app;
?>