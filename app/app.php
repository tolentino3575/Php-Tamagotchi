<?php

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__.'/../src/tamagotchi.php';

    session_start();
    if (empty($_SESSION['tamagotchi'])) {
    $_SESSION['tamagotchi'] = array();

    var_dump[array('tamagotchi')];

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('start.html.twig', array('tamagotchi' => Tamagotchi::getAll()));
    });

    $app->post("/status", function() use ($app) {
        $tam = new Tamagotchi($_POST['name']);
        return $app['twig']->render('status.html.twig');
    });

    $app->post("/food", function() use ($app) {
        return $app['twig']->render('food.html.twig');
    });
    return $app;
}
// $my_food = $tam->getFood();
// $tam->setFood($my_food + 1);
 ?>
