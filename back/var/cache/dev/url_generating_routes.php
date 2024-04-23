<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_artistes' => [[], ['_controller' => 'App\\Controller\\ArtistesController::index'], [], [['text', '/artistes']], [], [], []],
    'get_cart' => [[], ['_controller' => 'App\\Controller\\CartController::index'], [], [['text', '/monPanier']], [], [], []],
    'post_cart' => [['id'], ['_controller' => 'App\\Controller\\CartController::add'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/add/cart']], [], [], []],
    'delete_cart' => [['id'], ['_controller' => 'App\\Controller\\CartController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/delete/cart']], [], [], []],
    'delete_all_cart' => [[], ['_controller' => 'App\\Controller\\CartController::deleteCartById'], [], [['text', '/delete/all/cart']], [], [], []],
    'decrease_cart' => [['id'], ['_controller' => 'App\\Controller\\CartController::decrease'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/decrease/cart']], [], [], []],
    'app_categorie' => [[], ['_controller' => 'App\\Controller\\CategorieController::index'], [], [['text', '/categorie']], [], [], []],
    'categorie_update' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::categorie_update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/categorie_update']], [], [], []],
    'categorie_delete' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::categorie_delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/categorie_delete']], [], [], []],
    'categorie_details' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::categorie_details'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/categorie_details']], [], [], []],
    'categorie_produits' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::details_produits'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/categorie']], [], [], []],
    'app_commande' => [[], ['_controller' => 'App\\Controller\\CommandeController::index'], [], [['text', '/commande']], [], [], []],
    'app_contact' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], [], []],
    'app_success' => [[], ['_controller' => 'App\\Controller\\ContactController::success'], [], [['text', '/contact/success']], [], [], []],
    'app_error' => [[], ['_controller' => 'App\\Controller\\ErrorController::index'], [], [['text', '/error']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'app_instrumental' => [[], ['_controller' => 'App\\Controller\\InstrumentalController::index'], [], [['text', '/instrumental']], [], [], []],
    'app_lookup' => [[], ['_controller' => 'App\\Controller\\LookupController::index'], [], [['text', '/lookup']], [], [], []],
    'app_mentions_legales' => [[], ['_controller' => 'App\\Controller\\MentionsLegalesController::index'], [], [['text', '/mentions/legales']], [], [], []],
    'app_cgv' => [[], ['_controller' => 'App\\Controller\\MentionsLegalesController::cgv'], [], [['text', '/mentions/legales/cgv']], [], [], []],
    'app_cgu' => [[], ['_controller' => 'App\\Controller\\MentionsLegalesController::cgu'], [], [['text', '/mentions/legales/cgu']], [], [], []],
    'app_musique' => [[], ['_controller' => 'App\\Controller\\MusiqueController::index'], [], [['text', '/musique']], [], [], []],
    'app_parole' => [[], ['_controller' => 'App\\Controller\\ParoleController::index'], [], [['text', '/parole']], [], [], []],
    'app_produits' => [[], ['_controller' => 'App\\Controller\\ProduitsController::index'], [], [['text', '/produits']], [], [], []],
    'produits_update' => [['id'], ['_controller' => 'App\\Controller\\ProduitsController::produits_update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/produits_update']], [], [], []],
    'produits_delete' => [['id'], ['_controller' => 'App\\Controller\\ProduitsController::produits_delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/produits_delete']], [], [], []],
    'produits_details' => [['id'], ['_controller' => 'App\\Controller\\ProduitsController::produits_details'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/produits_details']], [], [], []],
    'app_profil' => [[], ['_controller' => 'App\\Controller\\ProfilController::index'], [], [['text', '/profil']], [], [], []],
    'profil_update' => [['id'], ['_controller' => 'App\\Controller\\ProfilController::profil'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/profil_update']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_forgot_password_request' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::request'], [], [['text', '/reset-password']], [], [], []],
    'app_check_email' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], [], [['text', '/reset-password/check-email']], [], [], []],
    'app_reset_password' => [['token'], ['token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/reset-password/reset']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_stripe' => [[], ['_controller' => 'App\\Controller\\StripeController::index'], [], [['text', '/stripe']], [], [], []],
    'app_stripe_charge' => [[], ['_controller' => 'App\\Controller\\StripeController::createCharge'], [], [['text', '/stripe/create-charge']], [], [], []],
    'app_test' => [[], ['_controller' => 'App\\Controller\\TestController::index'], [], [['text', '/test']], [], [], []],
    'app_user' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user']], [], [], []],
    'user_update' => [['id'], ['_controller' => 'App\\Controller\\UserController::user_update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user_update']], [], [], []],
    'user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::user_delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user_delete']], [], [], []],
    'user_details' => [['id'], ['_controller' => 'App\\Controller\\UserController::user_details'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user_details']], [], [], []],
    'app_videos' => [[], ['_controller' => 'App\\Controller\\VideoController::index'], [], [['text', '/videos']], [], [], []],
];