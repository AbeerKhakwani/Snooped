<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/SnoopTranslator.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.twig');
    });

    $app->get("/snooped", function() use($app) {
        $new_Translator  = new SnoopTranslator;
        $snooped = $new_Translator->translate($_GET['phrase']);
        return $app['twig']->render('snooped.twig', array('result' => $snooped));
    });

    return $app;
?>
