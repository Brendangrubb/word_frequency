<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/RepeatCounter.php';

    use Symfony\Component\Debug\Debug;
    Debug::enable();

    $app = new Silex\Application();
    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path'=>__DIR__.'/../views'));


    $app->get('/', function() use ($app) {

        return $app['twig']->render('home.html.twig');
    });

    $app->post('/result', function() use ($app) {
        $new_count = new RepeatCounter;
        $input1 = $_POST['input1'];
        $input2 = $_POST['input2'];
        $result = $new_count->countRepeats($input1, $input2);

        return $app['twig']->render('result.html.twig', array('result' => $result, 'input1' => $input1, 'input2' => $input2));
    });

    return $app;
?>
