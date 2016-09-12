<?php
 require_once __DIR__."/../vendor/autoload.php";
 require_once __DIR__."/../src/PingPongGenerator.php";

 date_default_timezone_set('America/Los_Angeles');

 $app = new Silex\Application();
 $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
  ));

 $app->get("/", function() use ($app){
   return $app['twig']->render('home.html.twig');
 });

 $app->post('getResult', function() use($app) {
   $input = $_POST['inputNum'];
   $newPingPong = new PingPongGenerator;
   $output = $newPingPong->generatePingPongArray($input);
   return $app['twig']->render('getResult.html.twig', array('output'=>$output));
 });

return $app;
?>
