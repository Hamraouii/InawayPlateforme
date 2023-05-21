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
        '/admin' => [[['_route' => 'administration', '_controller' => 'App\\Controller\\AdministrationController::index'], null, null, null, false, false, null]],
        '/admin/ajouterconseiller' => [[['_route' => 'ajouterConseiller', '_controller' => 'App\\Controller\\AdministrationController::ajouterConseiller'], null, null, null, false, false, null]],
        '/conseiller' => [[['_route' => 'conseiller', '_controller' => 'App\\Controller\\ConseillerController::index'], null, null, null, false, false, null]],
        '/conseiller/profil' => [[['_route' => 'profil', '_controller' => 'App\\Controller\\ConseillerController::profil'], null, null, null, false, false, null]],
        '/eleve' => [[['_route' => 'eleve', '_controller' => 'App\\Controller\\EleveController::index'], null, null, null, false, false, null]],
        '/eleve/profil' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\EleveController::profile'], null, null, null, false, false, null]],
        '/connect/facebook' => [[['_route' => 'connect_facebook_start', '_controller' => 'App\\Controller\\FacebookController::connectAction'], null, null, null, false, false, null]],
        '/connect/facebook/check' => [[['_route' => 'connect_facebook_check', '_controller' => 'App\\Controller\\FacebookController::connectCheckAction'], null, null, null, false, false, null]],
        '/header' => [[['_route' => 'app_header', '_controller' => 'App\\Controller\\HeaderController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/concours' => [[['_route' => 'cnc', '_controller' => 'App\\Controller\\HomeController::cnc'], null, null, null, false, false, null]],
        '/evenements' => [[['_route' => 'eve', '_controller' => 'App\\Controller\\HomeController::eve'], null, null, null, false, false, null]],
        '/etudes_superieures' => [[['_route' => 'es', '_controller' => 'App\\Controller\\HomeController::es'], null, null, null, false, false, null]],
        '/lycee' => [[['_route' => 'lycee', '_controller' => 'App\\Controller\\HomeController::lycee'], null, null, null, false, false, null]],
        '/forum' => [[['_route' => 'forum', '_controller' => 'App\\Controller\\HomeController::forum'], null, null, null, false, false, null]],
        '/plus' => [[['_route' => 'plus', '_controller' => 'App\\Controller\\HomeController::plus'], null, null, null, false, false, null]],
        '/plus/concours' => [[['_route' => 'cnc_plus', '_controller' => 'App\\Controller\\HomeController::cnc_plus'], null, null, null, false, false, null]],
        '/plus/evenements' => [[['_route' => 'eve_plus', '_controller' => 'App\\Controller\\HomeController::eve_plus'], null, null, null, false, false, null]],
        '/plus/etudes_superieures' => [[['_route' => 'es_plus', '_controller' => 'App\\Controller\\HomeController::es_plus'], null, null, null, false, false, null]],
        '/forum_plus' => [[['_route' => 'forum_plus', '_controller' => 'App\\Controller\\HomeController::forum_plus'], null, null, null, false, false, null]],
        '/forum/ajouter' => [[['_route' => 'question', '_controller' => 'App\\Controller\\HomeController::ajouterSujet'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'connexion', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'inscription', '_controller' => 'App\\Controller\\SecurityController::inscription'], null, null, null, false, false, null]],
        '/inscription/ajouter' => [[['_route' => 'ajouterUser', '_controller' => 'App\\Controller\\SecurityController::ajouterUser'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
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
                .'|/admin/(?'
                    .'|modifierconseiller/([^/]++)(*:206)'
                    .'|supprimerconseiller/([^/]++)(*:242)'
                    .'|accepterpublication/([^/]++)/([^/]++)(*:287)'
                    .'|refuserpublication/([^/]++)/([^/]++)(*:331)'
                .')'
                .'|/conseiller/(?'
                    .'|publier/([^/]++)(*:371)'
                    .'|modifier/([^/]++)(*:396)'
                .')'
                .'|/eleve/profil/update(?'
                    .'|/([^/]++)(*:437)'
                    .'|Avatar/([^/]++)(*:460)'
                .')'
                .'|/forum_answer/(?'
                    .'|([^/]++)(*:494)'
                    .'|ajouter/([^/]++)(*:518)'
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
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        206 => [[['_route' => 'modifierConseiller', '_controller' => 'App\\Controller\\AdministrationController::modifierConseiller'], ['id'], null, null, false, true, null]],
        242 => [[['_route' => 'supprimerConseiller', '_controller' => 'App\\Controller\\AdministrationController::supprimerConseiller'], ['id'], null, null, false, true, null]],
        287 => [[['_route' => 'accepterPublication', '_controller' => 'App\\Controller\\AdministrationController::accepterpublication'], ['type', 'id'], null, null, false, true, null]],
        331 => [[['_route' => 'refuserPublication', '_controller' => 'App\\Controller\\AdministrationController::refuserpublication'], ['type', 'id'], null, null, false, true, null]],
        371 => [[['_route' => 'publier', '_controller' => 'App\\Controller\\ConseillerController::publier'], ['type'], null, null, false, true, null]],
        396 => [[['_route' => 'modifier', '_controller' => 'App\\Controller\\ConseillerController::modifier'], ['type'], null, null, false, true, null]],
        437 => [[['_route' => 'modifierProfile', '_controller' => 'App\\Controller\\EleveController::modifierProfile'], ['id'], null, null, false, true, null]],
        460 => [[['_route' => 'modifierAvatar', '_controller' => 'App\\Controller\\EleveController::modifierAvatar'], ['id'], null, null, false, true, null]],
        494 => [[['_route' => 'answer', '_controller' => 'App\\Controller\\HomeController::forum_answer'], ['id'], null, null, false, true, null]],
        518 => [
            [['_route' => 'ajouterAnswer', '_controller' => 'App\\Controller\\HomeController::ajouterAnswer'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
