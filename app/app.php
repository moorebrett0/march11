<?php

            require_once __DIR__."/../vendor/autoload.php";
            require_once __DIR__."/../src/RoShamBo.php";

            $app = new Silex\Application();

            $app->register(new Silex\Provider\TwigServiceProvider(),   array(
                'twig.path' => __DIR__.'/../views'));


            $app->get("/", function() use ($app) {
                return $app['twig']->render('game.twig');

            });


           return $app;






 ?>
