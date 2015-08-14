<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    //Form route
    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    //Result route
    $app->get("/results", function() use ($app) {
        $my_RepeatCounter = new RepeatCounter;
        $word_repeats = $my_RepeatCounter->countRepeats(
            $_GET['word'], $_GET['phrase']
        );

        // Pass twig word and phrase so we can display them with results
        return $app['twig']->render('results.html.twig', array(
            'word_repeats' => $word_repeats,
            'word' => $_GET['word'],
            'phrase' => $_GET['phrase']
        ));
    });

    return $app;
 ?>
