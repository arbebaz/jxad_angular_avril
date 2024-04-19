<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/monPanier' => [[['_route' => 'get_cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/delete/all/cart' => [[['_route' => 'delete_all_cart', '_controller' => 'App\\Controller\\CartController::deleteCartById'], null, null, null, false, false, null]],
        '/categorie' => [[['_route' => 'app_categorie', '_controller' => 'App\\Controller\\CategorieController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/contact/success' => [[['_route' => 'app_success', '_controller' => 'App\\Controller\\ContactController::success'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/lookup' => [[['_route' => 'app_lookup', '_controller' => 'App\\Controller\\LookupController::index'], null, null, null, false, false, null]],
        '/mentions/legales' => [[['_route' => 'app_mentions_legales', '_controller' => 'App\\Controller\\MentionsLegalesController::index'], null, null, null, false, false, null]],
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
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/add/cart/([^/]++)(*:25)'
                .'|/de(?'
                    .'|lete/cart/([^/]++)(*:56)'
                    .'|crease/cart/([^/]++)(*:83)'
                .')'
                .'|/categorie(?'
                    .'|_(?'
                        .'|update/([^/]++)(*:123)'
                        .'|de(?'
                            .'|lete/([^/]++)(*:149)'
                            .'|tails/([^/]++)(*:171)'
                        .')'
                    .')'
                    .'|/([^/]++)(*:190)'
                .')'
                .'|/pro(?'
                    .'|duits_(?'
                        .'|update/([^/]++)(*:230)'
                        .'|de(?'
                            .'|lete/([^/]++)(*:256)'
                            .'|tails/([^/]++)(*:278)'
                        .')'
                    .')'
                    .'|fil_update/([^/]++)(*:307)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:352)'
                .'|/user_(?'
                    .'|update/([^/]++)(*:384)'
                    .'|de(?'
                        .'|lete/([^/]++)(*:410)'
                        .'|tails/([^/]++)(*:432)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        25 => [[['_route' => 'post_cart', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        56 => [[['_route' => 'delete_cart', '_controller' => 'App\\Controller\\CartController::delete'], ['id'], null, null, false, true, null]],
        83 => [[['_route' => 'decrease_cart', '_controller' => 'App\\Controller\\CartController::decrease'], ['id'], null, null, false, true, null]],
        123 => [[['_route' => 'categorie_update', '_controller' => 'App\\Controller\\CategorieController::categorie_update'], ['id'], null, null, false, true, null]],
        149 => [[['_route' => 'categorie_delete', '_controller' => 'App\\Controller\\CategorieController::categorie_delete'], ['id'], null, null, false, true, null]],
        171 => [[['_route' => 'categorie_details', '_controller' => 'App\\Controller\\CategorieController::categorie_details'], ['id'], null, null, false, true, null]],
        190 => [[['_route' => 'categorie_produits', '_controller' => 'App\\Controller\\CategorieController::details_produits'], ['id'], null, null, false, true, null]],
        230 => [[['_route' => 'produits_update', '_controller' => 'App\\Controller\\ProduitsController::produits_update'], ['id'], null, null, false, true, null]],
        256 => [[['_route' => 'produits_delete', '_controller' => 'App\\Controller\\ProduitsController::produits_delete'], ['id'], null, null, false, true, null]],
        278 => [[['_route' => 'produits_details', '_controller' => 'App\\Controller\\ProduitsController::produits_details'], ['id'], null, null, false, true, null]],
        307 => [[['_route' => 'profil_update', '_controller' => 'App\\Controller\\ProfilController::profil'], ['id'], null, null, false, true, null]],
        352 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        384 => [[['_route' => 'user_update', '_controller' => 'App\\Controller\\UserController::user_update'], ['id'], null, null, false, true, null]],
        410 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::user_delete'], ['id'], null, null, false, true, null]],
        432 => [
            [['_route' => 'user_details', '_controller' => 'App\\Controller\\UserController::user_details'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
