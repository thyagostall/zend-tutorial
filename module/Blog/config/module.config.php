<?php
/**
 * Created by PhpStorm.
 * User: thyago
 * Date: 23/02/2017
 * Time: 20:45
 */
use Zend\Router\Http\Literal;
use Blog\Controller;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [
            'blog' => [
                'type' => Literal::class,
                'options' => [
                    'route' => '/blog',
                    'defaults' => [
                        'controller' => Controller\ListController::class,
                        'action' => 'index',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\ListController::class => InvokableFactory::class,
        ],
    ],
];