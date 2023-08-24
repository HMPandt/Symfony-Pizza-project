<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\LoginController::showForm'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\PizzaController::showProducts'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\PizzaController::showContact'], null, null, null, false, false, null]],
        '/besteloverzicht' => [[['_route' => 'besteloverzicht', '_controller' => 'App\\Controller\\PizzaController::showOrder'], null, null, null, false, false, null]],
        '/pizzabakker' => [[['_route' => 'bakker', '_controller' => 'App\\Controller\\PizzaController::showBaker'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/p(?'
                    .'|izza(?'
                        .'|s/([^/]++)(*:29)'
                        .'|/([^/]++)/([^/]++)(*:54)'
                    .')'
                    .'|roduct/([^/]++)/([^/]++)(*:86)'
                .')'
                .'|/bestellen/([^/]++)(*:113)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:152)'
                    .'|wdt/([^/]++)(*:172)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:218)'
                            .'|router(*:232)'
                            .'|exception(?'
                                .'|(*:252)'
                                .'|\\.css(*:265)'
                            .')'
                        .')'
                        .'|(*:275)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        29 => [[['_route' => 'pizzas', '_controller' => 'App\\Controller\\PizzaController::showPizza'], ['id'], null, null, false, true, null]],
        54 => [[['_route' => 'create_pizza', '_controller' => 'App\\Controller\\PizzaController::createPizza'], ['name', 'img'], null, null, false, true, null]],
        86 => [[['_route' => 'create_product', '_controller' => 'App\\Controller\\PizzaController::createProduct'], ['name', 'img'], null, null, false, true, null]],
        113 => [[['_route' => 'bestellen', '_controller' => 'App\\Controller\\PizzaController::form'], ['id'], null, null, false, true, null]],
        152 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        172 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        218 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        232 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        252 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        265 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        275 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
