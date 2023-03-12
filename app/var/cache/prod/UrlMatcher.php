<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/registro' => [[['_route' => 'app_registro', '_controller' => 'App\\Controller\\RegistroController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_tabla', '_controller' => 'App\\Controller\\TablaController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/e(?'
                    .'|ditar/([^/]++)(*:26)'
                    .'|liminar/([^/]++)(*:49)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        26 => [[['_route' => 'app_editar', '_controller' => 'App\\Controller\\EditarController::index'], ['id'], null, null, false, true, null]],
        49 => [
            [['_route' => 'app_eliminar', '_controller' => 'App\\Controller\\EliminarController::index'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
