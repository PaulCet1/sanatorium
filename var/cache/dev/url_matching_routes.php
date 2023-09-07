<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/places_listing' => [[['_route' => 'places_listing', '_controller' => 'App\\Place\\Controller\\Listing'], null, ['GET' => 0], null, false, false, null]],
        '/place_edit' => [[['_route' => 'place_edit', '_controller' => 'App\\Place\\Controller\\Edit'], null, ['GET' => 0], null, false, false, null]],
        '/place_create' => [[['_route' => 'place_create', '_controller' => 'App\\Place\\Controller\\Create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'user_show', '_controller' => 'App\\User\\Controller\\Show'], null, ['GET' => 0], null, false, false, null]],
        '/users' => [[['_route' => 'user_listing', '_controller' => 'App\\User\\Controller\\Listing'], null, ['GET' => 0], null, false, false, null]],
        '/reservation' => [[['_route' => 'reservation_listing', '_controller' => 'App\\Reservation\\Controller\\Listing'], null, ['GET' => 0], null, false, false, null]],
        '/rejestracja' => [[['_route' => 'registration', '_controller' => 'App\\User\\Controller\\AuthController::registration'], null, null, null, false, false, null]],
        '/logowanie' => [[['_route' => 'login', '_controller' => 'App\\User\\Controller\\AuthController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\User\\Controller\\AuthController::logout'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Core\\Controller\\HomeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'welcome', '_controller' => 'App\\Core\\Controller\\HomeController::welcome'], null, ['GET' => 0], null, false, false, null]],
        '/access_denied' => [[['_route' => 'access_denied', '_controller' => 'App\\Core\\Controller\\AccessDenied'], null, ['GET' => 0], null, false, false, null]],
        '/treatments_show' => [[['_route' => 'treatments_show', '_controller' => 'App\\Treatment\\Controller\\Show'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
