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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/appartement' => [[['_route' => 'appartement_index', '_controller' => 'App\\Controller\\AppartementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/appartement/new' => [[['_route' => 'appartement_new', '_controller' => 'App\\Controller\\AppartementController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/arrondissement' => [[['_route' => 'arrondissement_index', '_controller' => 'App\\Controller\\ArrondissementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/arrondissement/new' => [[['_route' => 'arrondissement_new', '_controller' => 'App\\Controller\\ArrondissementController::createnew'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/client' => [[['_route' => 'client_list', '_controller' => 'App\\Controller\\ClientController::index'], null, ['GET' => 0], null, true, false, null]],
        '/client/new' => [[['_route' => 'client_new', '_controller' => 'App\\Controller\\ClientController::createnew'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cotisation' => [[['_route' => 'cotisation', '_controller' => 'App\\Controller\\CotisationController::index'], null, null, null, false, false, null]],
        '/demande' => [[['_route' => 'demande_index', '_controller' => 'App\\Controller\\DemandeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/demande/new' => [[['_route' => 'demande_new', '_controller' => 'App\\Controller\\DemandeController::createnew'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/locataire' => [[['_route' => 'locataire_list', '_controller' => 'App\\Controller\\LocataireController::index'], null, ['GET' => 0], null, true, false, null]],
        '/locataire/new' => [[['_route' => 'locataire_new', '_controller' => 'App\\Controller\\LocataireController::createnew'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/proprietaire' => [[['_route' => 'proprietaire_list', '_controller' => 'App\\Controller\\ProprietaireController::index'], null, ['GET' => 0], null, true, false, null]],
        '/proprietaire/new' => [[['_route' => 'proprietaire_new', '_controller' => 'App\\Controller\\ProprietaireController::createnew'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/utilisateur/utilisateurs' => [[['_route' => 'utilisateur_list', '_controller' => 'App\\Controller\\UtilisateurController::index'], null, ['GET' => 0], null, false, false, null]],
        '/utilisateur/new' => [[['_route' => 'utilisateur_new', '_controller' => 'App\\Controller\\UtilisateurController::createnew'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/visiterdem' => [[['_route' => 'visiterdem_index', '_controller' => 'App\\Controller\\VisiterdemController::index'], null, ['GET' => 0], null, true, false, null]],
        '/visiterdem/new' => [[['_route' => 'visiterdem_new', '_controller' => 'App\\Controller\\VisiterdemController::createnew'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin' => [[['_route' => 'sonata_admin_redirect', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'sonata_admin_dashboard', 'permanent' => 'true'], null, null, null, true, false, null]],
        '/admin/dashboard' => [[['_route' => 'sonata_admin_dashboard', '_controller' => 'Sonata\\AdminBundle\\Action\\DashboardAction'], null, null, null, false, false, null]],
        '/admin/core/get-form-field-element' => [[['_route' => 'sonata_admin_retrieve_form_element', '_controller' => 'sonata.admin.action.retrieve_form_field_element'], null, null, null, false, false, null]],
        '/admin/core/append-form-field-element' => [[['_route' => 'sonata_admin_append_form_element', '_controller' => 'sonata.admin.action.append_form_field_element'], null, null, null, false, false, null]],
        '/admin/core/set-object-field-value' => [[['_route' => 'sonata_admin_set_object_field_value', '_controller' => 'sonata.admin.action.set_object_field_value'], null, null, null, false, false, null]],
        '/admin/search' => [[['_route' => 'sonata_admin_search', '_controller' => 'Sonata\\AdminBundle\\Action\\SearchAction'], null, null, null, false, false, null]],
        '/admin/core/get-autocomplete-items' => [[['_route' => 'sonata_admin_retrieve_autocomplete_items', '_controller' => 'sonata.admin.action.retrieve_autocomplete_items'], null, null, null, false, false, null]],
        '/admin/app/appartement/list' => [[['_route' => 'admin_app_appartement_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.appartement', '_sonata_name' => 'admin_app_appartement_list'], null, null, null, false, false, null]],
        '/admin/app/appartement/create' => [[['_route' => 'admin_app_appartement_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.appartement', '_sonata_name' => 'admin_app_appartement_create'], null, null, null, false, false, null]],
        '/admin/app/appartement/batch' => [[['_route' => 'admin_app_appartement_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.appartement', '_sonata_name' => 'admin_app_appartement_batch'], null, null, null, false, false, null]],
        '/admin/app/appartement/export' => [[['_route' => 'admin_app_appartement_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.appartement', '_sonata_name' => 'admin_app_appartement_export'], null, null, null, false, false, null]],
        '/admin/app/demande/list' => [[['_route' => 'admin_app_demande_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.demande', '_sonata_name' => 'admin_app_demande_list'], null, null, null, false, false, null]],
        '/admin/app/demande/create' => [[['_route' => 'admin_app_demande_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.demande', '_sonata_name' => 'admin_app_demande_create'], null, null, null, false, false, null]],
        '/admin/app/demande/batch' => [[['_route' => 'admin_app_demande_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.demande', '_sonata_name' => 'admin_app_demande_batch'], null, null, null, false, false, null]],
        '/admin/app/demande/export' => [[['_route' => 'admin_app_demande_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.demande', '_sonata_name' => 'admin_app_demande_export'], null, null, null, false, false, null]],
        '/admin/app/arrondissement/list' => [[['_route' => 'admin_app_arrondissement_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.arrondissement', '_sonata_name' => 'admin_app_arrondissement_list'], null, null, null, false, false, null]],
        '/admin/app/arrondissement/create' => [[['_route' => 'admin_app_arrondissement_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.arrondissement', '_sonata_name' => 'admin_app_arrondissement_create'], null, null, null, false, false, null]],
        '/admin/app/arrondissement/batch' => [[['_route' => 'admin_app_arrondissement_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.arrondissement', '_sonata_name' => 'admin_app_arrondissement_batch'], null, null, null, false, false, null]],
        '/admin/app/arrondissement/export' => [[['_route' => 'admin_app_arrondissement_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.arrondissement', '_sonata_name' => 'admin_app_arrondissement_export'], null, null, null, false, false, null]],
        '/admin/app/utilisateur/list' => [[['_route' => 'admin_app_utilisateur_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.utilisateur', '_sonata_name' => 'admin_app_utilisateur_list'], null, null, null, false, false, null]],
        '/admin/app/utilisateur/create' => [[['_route' => 'admin_app_utilisateur_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.utilisateur', '_sonata_name' => 'admin_app_utilisateur_create'], null, null, null, false, false, null]],
        '/admin/app/utilisateur/batch' => [[['_route' => 'admin_app_utilisateur_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.utilisateur', '_sonata_name' => 'admin_app_utilisateur_batch'], null, null, null, false, false, null]],
        '/admin/app/utilisateur/export' => [[['_route' => 'admin_app_utilisateur_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.utilisateur', '_sonata_name' => 'admin_app_utilisateur_export'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/index' => [[['_route' => 'profil', '_controller' => 'App\\Controller\\ProfilController::index'], null, null, null, false, false, null]],
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
                .'|/a(?'
                    .'|ppartement/([^/]++)(?'
                        .'|(*:196)'
                        .'|/(?'
                            .'|edit(*:212)'
                            .'|visite/new(*:230)'
                            .'|demandes(*:246)'
                        .')'
                        .'|(*:255)'
                    .')'
                    .'|rrondissement/([^/]++)(?'
                        .'|(*:289)'
                        .'|/edit(*:302)'
                        .'|(*:310)'
                    .')'
                    .'|dmin/(?'
                        .'|core/get\\-short\\-object\\-description(?:\\.(html|json))?(*:381)'
                        .'|app/(?'
                            .'|a(?'
                                .'|ppartement/([^/]++)/(?'
                                    .'|edit(*:427)'
                                    .'|delete(*:441)'
                                    .'|show(*:453)'
                                .')'
                                .'|rrondissement/([^/]++)/(?'
                                    .'|edit(*:492)'
                                    .'|delete(*:506)'
                                    .'|show(*:518)'
                                .')'
                            .')'
                            .'|demande/([^/]++)/(?'
                                .'|edit(*:552)'
                                .'|delete(*:566)'
                                .'|show(*:578)'
                            .')'
                            .'|utilisateur/([^/]++)/(?'
                                .'|edit(*:615)'
                                .'|delete(*:629)'
                                .'|show(*:641)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/client/([^/]++)(?'
                    .'|(*:672)'
                    .'|/(?'
                        .'|edit(*:688)'
                        .'|demandes(*:704)'
                        .'|visites(*:719)'
                    .')'
                    .'|(*:728)'
                .')'
                .'|/demande/([^/]++)(?'
                    .'|(*:757)'
                    .'|/(?'
                        .'|edit(*:773)'
                        .'|recherche(*:790)'
                    .')'
                    .'|(*:799)'
                .')'
                .'|/locataire/([^/]++)(?'
                    .'|(*:830)'
                    .'|/edit(*:843)'
                    .'|(*:851)'
                .')'
                .'|/proprietaire/([^/]++)(?'
                    .'|(*:885)'
                    .'|/(?'
                        .'|edit(*:901)'
                        .'|liste\\-(?'
                            .'|appartements(*:931)'
                            .'|demandes(*:947)'
                        .')'
                    .')'
                    .'|(*:957)'
                .')'
                .'|/utilisateur/([^/]++)(?'
                    .'|(*:990)'
                    .'|/edit(*:1003)'
                    .'|(*:1012)'
                .')'
                .'|/visiterdem/([^/]++)(?'
                    .'|(*:1045)'
                    .'|/edit(*:1059)'
                    .'|(*:1068)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        196 => [[['_route' => 'appartement_show', '_controller' => 'App\\Controller\\AppartementController::show'], ['numappart'], ['GET' => 0], null, false, true, null]],
        212 => [[['_route' => 'appartement_edit', '_controller' => 'App\\Controller\\AppartementController::edit'], ['numappart'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        230 => [[['_route' => 'visiter_new', '_controller' => 'App\\Controller\\AppartementController::createVisitedem'], ['numappart'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        246 => [[['_route' => 'liste_demandes', '_controller' => 'App\\Controller\\AppartementController::listeVisite'], ['numappart'], ['GET' => 0], null, false, false, null]],
        255 => [[['_route' => 'appartement_delete', '_controller' => 'App\\Controller\\AppartementController::delete'], ['numappart'], ['DELETE' => 0], null, false, true, null]],
        289 => [[['_route' => 'arrondissement_show', '_controller' => 'App\\Controller\\ArrondissementController::show'], ['arrondisseDem'], ['GET' => 0], null, false, true, null]],
        302 => [[['_route' => 'arrondissement_edit', '_controller' => 'App\\Controller\\ArrondissementController::edit'], ['arrondisseDem'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        310 => [[['_route' => 'arrondissement_delete', '_controller' => 'App\\Controller\\ArrondissementController::delete'], ['arrondisseDem'], ['DELETE' => 0], null, false, true, null]],
        381 => [[['_route' => 'sonata_admin_short_object_information', '_controller' => 'sonata.admin.action.get_short_object_description', '_format' => 'html'], ['_format'], null, null, false, true, null]],
        427 => [[['_route' => 'admin_app_appartement_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.appartement', '_sonata_name' => 'admin_app_appartement_edit'], ['id'], null, null, false, false, null]],
        441 => [[['_route' => 'admin_app_appartement_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.appartement', '_sonata_name' => 'admin_app_appartement_delete'], ['id'], null, null, false, false, null]],
        453 => [[['_route' => 'admin_app_appartement_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.appartement', '_sonata_name' => 'admin_app_appartement_show'], ['id'], null, null, false, false, null]],
        492 => [[['_route' => 'admin_app_arrondissement_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.arrondissement', '_sonata_name' => 'admin_app_arrondissement_edit'], ['id'], null, null, false, false, null]],
        506 => [[['_route' => 'admin_app_arrondissement_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.arrondissement', '_sonata_name' => 'admin_app_arrondissement_delete'], ['id'], null, null, false, false, null]],
        518 => [[['_route' => 'admin_app_arrondissement_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.arrondissement', '_sonata_name' => 'admin_app_arrondissement_show'], ['id'], null, null, false, false, null]],
        552 => [[['_route' => 'admin_app_demande_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.demande', '_sonata_name' => 'admin_app_demande_edit'], ['id'], null, null, false, false, null]],
        566 => [[['_route' => 'admin_app_demande_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.demande', '_sonata_name' => 'admin_app_demande_delete'], ['id'], null, null, false, false, null]],
        578 => [[['_route' => 'admin_app_demande_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.demande', '_sonata_name' => 'admin_app_demande_show'], ['id'], null, null, false, false, null]],
        615 => [[['_route' => 'admin_app_utilisateur_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.utilisateur', '_sonata_name' => 'admin_app_utilisateur_edit'], ['id'], null, null, false, false, null]],
        629 => [[['_route' => 'admin_app_utilisateur_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.utilisateur', '_sonata_name' => 'admin_app_utilisateur_delete'], ['id'], null, null, false, false, null]],
        641 => [[['_route' => 'admin_app_utilisateur_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.utilisateur', '_sonata_name' => 'admin_app_utilisateur_show'], ['id'], null, null, false, false, null]],
        672 => [[['_route' => 'client_show', '_controller' => 'App\\Controller\\ClientController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        688 => [[['_route' => 'client_edit', '_controller' => 'App\\Controller\\ClientController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        704 => [[['_route' => 'demandes_appts', '_controller' => 'App\\Controller\\ClientController::mesDemandesAppartement'], ['id'], ['GET' => 0], null, false, false, null]],
        719 => [[['_route' => 'visites_liste', '_controller' => 'App\\Controller\\ClientController::mesDemandesVisite'], ['id'], ['GET' => 0], null, false, false, null]],
        728 => [[['_route' => 'client_delete', '_controller' => 'App\\Controller\\ClientController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        757 => [[['_route' => 'demande_show', '_controller' => 'App\\Controller\\DemandeController::show'], ['numDem'], ['GET' => 0], null, false, true, null]],
        773 => [[['_route' => 'demande_edit', '_controller' => 'App\\Controller\\DemandeController::edit'], ['numDem'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        790 => [[['_route' => 'client_recherche', '_controller' => 'App\\Controller\\DemandeController::rechercheDemande'], ['numDem'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        799 => [[['_route' => 'demande_delete', '_controller' => 'App\\Controller\\DemandeController::delete'], ['numDem'], ['DELETE' => 0], null, false, true, null]],
        830 => [[['_route' => 'locataire_show', '_controller' => 'App\\Controller\\LocataireController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        843 => [[['_route' => 'locataire_edit', '_controller' => 'App\\Controller\\LocataireController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        851 => [[['_route' => 'locataire_delete', '_controller' => 'App\\Controller\\LocataireController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        885 => [[['_route' => 'proprietaire_show', '_controller' => 'App\\Controller\\ProprietaireController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        901 => [[['_route' => 'proprietaire_edit', '_controller' => 'App\\Controller\\ProprietaireController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        931 => [[['_route' => 'liste_appartements', '_controller' => 'App\\Controller\\ProprietaireController::mesAppartements'], ['id'], ['GET' => 0], null, false, false, null]],
        947 => [[['_route' => 'visites_demande', '_controller' => 'App\\Controller\\ProprietaireController::mesDemandesVisite'], ['id'], ['GET' => 0], null, false, false, null]],
        957 => [[['_route' => 'proprietaire_delete', '_controller' => 'App\\Controller\\ProprietaireController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        990 => [[['_route' => 'utilisateur_show', '_controller' => 'App\\Controller\\UtilisateurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1003 => [[['_route' => 'utilisateur_edit', '_controller' => 'App\\Controller\\UtilisateurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1012 => [[['_route' => 'utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1045 => [[['_route' => 'visiterdem_show', '_controller' => 'App\\Controller\\VisiterdemController::show'], ['numvisite'], ['GET' => 0], null, false, true, null]],
        1059 => [[['_route' => 'visiterdem_edit', '_controller' => 'App\\Controller\\VisiterdemController::edit'], ['numvisite'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1068 => [
            [['_route' => 'visiterdem_delete', '_controller' => 'App\\Controller\\VisiterdemController::delete'], ['numvisite'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
