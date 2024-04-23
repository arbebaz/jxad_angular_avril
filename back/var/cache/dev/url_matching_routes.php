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
        '/artistes' => [[['_route' => 'app_artistes', '_controller' => 'App\\Controller\\ArtistesController::index'], null, null, null, false, false, null]],
        '/monPanier' => [[['_route' => 'get_cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/delete/all/cart' => [[['_route' => 'delete_all_cart', '_controller' => 'App\\Controller\\CartController::deleteCartById'], null, null, null, false, false, null]],
        '/categorie' => [[['_route' => 'app_categorie', '_controller' => 'App\\Controller\\CategorieController::index'], null, null, null, false, false, null]],
        '/commande' => [[['_route' => 'app_commande', '_controller' => 'App\\Controller\\CommandeController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/contact/success' => [[['_route' => 'app_success', '_controller' => 'App\\Controller\\ContactController::success'], null, null, null, false, false, null]],
        '/error' => [[['_route' => 'app_error', '_controller' => 'App\\Controller\\ErrorController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/instrumental' => [[['_route' => 'app_instrumental', '_controller' => 'App\\Controller\\InstrumentalController::index'], null, null, null, false, false, null]],
        '/lookup' => [[['_route' => 'app_lookup', '_controller' => 'App\\Controller\\LookupController::index'], null, null, null, false, false, null]],
        '/mentions/legales' => [[['_route' => 'app_mentions_legales', '_controller' => 'App\\Controller\\MentionsLegalesController::index'], null, null, null, false, false, null]],
        '/mentions/legales/cgv' => [[['_route' => 'app_cgv', '_controller' => 'App\\Controller\\MentionsLegalesController::cgv'], null, null, null, false, false, null]],
        '/mentions/legales/cgu' => [[['_route' => 'app_cgu', '_controller' => 'App\\Controller\\MentionsLegalesController::cgu'], null, null, null, false, false, null]],
        '/musique' => [[['_route' => 'app_musique', '_controller' => 'App\\Controller\\MusiqueController::index'], null, null, null, false, false, null]],
        '/parole' => [[['_route' => 'app_parole', '_controller' => 'App\\Controller\\ParoleController::index'], null, null, null, false, false, null]],
        '/produits' => [[['_route' => 'app_produits', '_controller' => 'App\\Controller\\ProduitsController::index'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'app_profil', '_controller' => 'App\\Controller\\ProfilController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/stripe' => [[['_route' => 'app_stripe', '_controller' => 'App\\Controller\\StripeController::index'], null, null, null, false, false, null]],
        '/stripe/create-charge' => [[['_route' => 'app_stripe_charge', '_controller' => 'App\\Controller\\StripeController::createCharge'], null, ['POST' => 0], null, false, false, null]],
        '/test' => [[['_route' => 'app_test', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/videos' => [[['_route' => 'app_videos', '_controller' => 'App\\Controller\\VideoController::index'], null, null, null, false, false, null]],
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
                .'|/add/cart/([^/]++)(*:187)'
                .'|/de(?'
                    .'|lete/cart/([^/]++)(*:219)'
                    .'|crease/cart/([^/]++)(*:247)'
                .')'
                .'|/categorie(?'
                    .'|_(?'
                        .'|update/([^/]++)(*:288)'
                        .'|de(?'
                            .'|lete/([^/]++)(*:314)'
                            .'|tails/([^/]++)(*:336)'
                        .')'
                    .')'
                    .'|/([^/]++)(*:355)'
                .')'
                .'|/pro(?'
                    .'|duits_(?'
                        .'|update/([^/]++)(*:395)'
                        .'|de(?'
                            .'|lete/([^/]++)(*:421)'
                            .'|tails/([^/]++)(*:443)'
                        .')'
                    .')'
                    .'|fil_update/([^/]++)(*:472)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:517)'
                .'|/user_(?'
                    .'|update/([^/]++)(*:549)'
                    .'|de(?'
                        .'|lete/([^/]++)(*:575)'
                        .'|tails/([^/]++)(*:597)'
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
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        187 => [[['_route' => 'post_cart', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        219 => [[['_route' => 'delete_cart', '_controller' => 'App\\Controller\\CartController::delete'], ['id'], null, null, false, true, null]],
        247 => [[['_route' => 'decrease_cart', '_controller' => 'App\\Controller\\CartController::decrease'], ['id'], null, null, false, true, null]],
        288 => [[['_route' => 'categorie_update', '_controller' => 'App\\Controller\\CategorieController::categorie_update'], ['id'], null, null, false, true, null]],
        314 => [[['_route' => 'categorie_delete', '_controller' => 'App\\Controller\\CategorieController::categorie_delete'], ['id'], null, null, false, true, null]],
        336 => [[['_route' => 'categorie_details', '_controller' => 'App\\Controller\\CategorieController::categorie_details'], ['id'], null, null, false, true, null]],
        355 => [[['_route' => 'categorie_produits', '_controller' => 'App\\Controller\\CategorieController::details_produits'], ['id'], null, null, false, true, null]],
        395 => [[['_route' => 'produits_update', '_controller' => 'App\\Controller\\ProduitsController::produits_update'], ['id'], null, null, false, true, null]],
        421 => [[['_route' => 'produits_delete', '_controller' => 'App\\Controller\\ProduitsController::produits_delete'], ['id'], null, null, false, true, null]],
        443 => [[['_route' => 'produits_details', '_controller' => 'App\\Controller\\ProduitsController::produits_details'], ['id'], null, null, false, true, null]],
        472 => [[['_route' => 'profil_update', '_controller' => 'App\\Controller\\ProfilController::profil'], ['id'], null, null, false, true, null]],
        517 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        549 => [[['_route' => 'user_update', '_controller' => 'App\\Controller\\UserController::user_update'], ['id'], null, null, false, true, null]],
        575 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::user_delete'], ['id'], null, null, false, true, null]],
        597 => [
            [['_route' => 'user_details', '_controller' => 'App\\Controller\\UserController::user_details'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
