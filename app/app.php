<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissors.php";

    session_start();
    if(empty($_SESSION['list_of_actions'])) {
        $_SESSION['list_of_actions'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(),array('twig.path'=>__DIR__.'/../views'

  ));


      $app->get("/", function() use ($app) {

        return $app['twig']->render('home_view.html.twig');

    });
    

    $app->get("/home_view", function() use ($app) {
        return $app['twig']->render('home_view.html.twig');

    });

    $app->get("/home_view", function() use ($app){
      $game = new RockPaperScissors;
      $result = $game-> rock($_GET['player_1'], $game->getPlayer());
      return $app['twig']->render('rock_paper_scissors_results.html.twig', array('result' => $results));
    });
    $app->get("/home_view", function() use ($app){
      $game2 = RockPaperScissors:: getAll() [0];
      $game2->setPlayer2($_GET['player_2']);
      $result = $game2-> rock($game2->getPlayer1(), $game2->getPlayer2());
      return $app['twig']->render('rock_paper_scissors_results.html.twig', array('result' => $results));
    });

    return $app;





 ?>
