<?php

use App\Controller\WelcomeController;
use Psr\Container\ContainerInterface;
use Twig\Environment;
use VegaCore\HttpKernel\HttpKernel;
use VegaCore\HttpKernel\HttpKernelInterface;
use VegaCore\Routing\Router;
use VegaCore\Routing\RouterInterface;

return [
    HttpKernelInterface::class => DI\create(HttpKernel::class)
                                    ->constructor(DI\get(ContainerInterface::class)),

    RouterInterface::class => DI\create(Router::class)->constructor(DI\get('controllers')),

    'controllers' => [
        WelcomeController::class
    ],

    Environment::class => function () {
        $loader = new \Twig\Loader\FilesystemLoader(dirname(__DIR__) . '/templates');
        $twig = new \Twig\Environment($loader, [
            'cache' => dirname(__DIR__) . "/var/cache/twig",
            'auto_reload' => true
        ]);
        return $twig;
    },
];