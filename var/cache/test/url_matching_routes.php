<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Core\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/createUser' => [[['_route' => 'createUser', '_controller' => 'App\\Core\\Controller\\HomeController::createUser'], null, null, null, false, false, null]],
        '/bezpieczna' => [[['_route' => 'bezpieczna', '_controller' => 'App\\Core\\Controller\\HomeController::secure'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'admin_users', '_controller' => 'App\\Core\\Controller\\HomeController::adminUsers'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'welcome', '_controller' => 'App\\Core\\Controller\\HomeController::welcome'], null, null, null, false, false, null]],
        '/rejestracja' => [[['_route' => 'registration', '_controller' => 'App\\User\\Controller\\AuthController::registration'], null, null, null, false, false, null]],
        '/logowanie' => [[['_route' => 'login', '_controller' => 'App\\User\\Controller\\AuthController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\User\\Controller\\AuthController::logout'], null, null, null, false, false, null]],
        '/post' => [[['_route' => 'post', '_controller' => 'App\\Post\\Controller\\PostController::create'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
    ],
    [ // $dynamicRoutes
    ],
    null, // $checkCondition
];
