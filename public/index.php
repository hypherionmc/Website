<?php

require 'vendor/autoload.php';

// Create app
$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true
    ]
]);

// Get container
$container = $app->getContainer();

// Register component on container
$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig('templates', [
        'debug' => true,
        'cache' => 'compilation_cache'
    ]);

    // Instantiate and add Slim specific extension
    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));
    $view->addExtension(new Twig_Extension_Debug());

    return $view;
};

// Add 404 page handler
$container['notFoundHandler'] = function ($c) {
    return function ($request, $response) use ($c) {
        return $c['view']->render($response, '404.twig')->withStatus(404);
    };
};

// Redirect to common index pages to root
$app->redirect('/index', '/');
$app->redirect('index.php', '/');

// Good old enderio.com
$app->get("/", function ($req, $resp, $args) {
    return $this->view->render($resp, "index.twig", ['page_title' => 'Home', 'page_desc' => 'Home Page']);
});

// April fools page turned announcement page
$app->get("/4", function ($req, $resp, $args) {
		$fooledTime = 1522598400;
		$time = time();
		$fool = isset($_GET['fool']) ? $_GET['fool'] == 'true' : $fooledTime > $time;

		return $this->view->render($resp, "4.twig", ['page_title' => $fool ? '4.0' : '5.0', 'page_desc' => 'The Future.', 'fool' => $fool, 'refresh_time' => ($fooledTime - $time) + 30]);
});

// Proxy /5 to /4
$app->get("/5", function ($req, $resp, $args) use ($app) {
		return $app->subRequest('GET', '/4');
});

$app->get("/newhome", function ($req, $resp, $args) {
		$modules = [
			'Base' => 'base',
			'Machines' => 'machines'
		];

		return $this->view->render($resp, 'newhome.twig', ['page_title' => 'Home', 'page_desc' => 'Home Page', 'modules' => $modules]);
});

// Run app
$app->run();

?>
