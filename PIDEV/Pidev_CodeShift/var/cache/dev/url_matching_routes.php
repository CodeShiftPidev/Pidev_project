<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/voyage' => [[['_route' => 'app_voyage', '_controller' => 'App\\Controller\\VoyageController::index'], null, null, null, false, false, null]],
        '/add-voyage' => [[['_route' => 'add-voyage', '_controller' => 'App\\Controller\\VoyageController::add_voyage'], null, null, null, false, false, null]],
        '/list-voyage' => [[['_route' => 'list-voyage', '_controller' => 'App\\Controller\\VoyageController::list_voyage'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/delete\\-voyage/([^/]++)(*:31)'
                .'|/edit\\-voyage/([^/]++)(*:60)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:98)'
                    .'|wdt/([^/]++)(*:117)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:163)'
                            .'|router(*:177)'
                            .'|exception(?'
                                .'|(*:197)'
                                .'|\\.css(*:210)'
                            .')'
                        .')'
                        .'|(*:220)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        31 => [[['_route' => 'delete-voyage', '_controller' => 'App\\Controller\\VoyageController::delete_voyage'], ['id'], null, null, false, true, null]],
        60 => [[['_route' => 'edit-voyage', '_controller' => 'App\\Controller\\VoyageController::edit_voyage'], ['id'], null, null, false, true, null]],
        98 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        117 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        163 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        177 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        197 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        210 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        220 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
