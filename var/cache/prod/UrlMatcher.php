<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/appartement' => [[['_route' => 'appartement_index', '_controller' => 'App\\Controller\\AppartementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/appartement/new' => [[['_route' => 'appartement_new', '_controller' => 'App\\Controller\\AppartementController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/arrondissement' => [[['_route' => 'arrondissement_index', '_controller' => 'App\\Controller\\ArrondissementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/arrondissement/new' => [[['_route' => 'arrondissement_new', '_controller' => 'App\\Controller\\ArrondissementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/client' => [[['_route' => 'client_index', '_controller' => 'App\\Controller\\ClientController::index'], null, ['GET' => 0], null, true, false, null]],
        '/client/new' => [[['_route' => 'client_new', '_controller' => 'App\\Controller\\ClientController::createnew'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/demande' => [[['_route' => 'demande_index', '_controller' => 'App\\Controller\\DemandeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/demande/new' => [[['_route' => 'demande_new', '_controller' => 'App\\Controller\\DemandeController::createnew'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/locataire' => [[['_route' => 'locataire_index', '_controller' => 'App\\Controller\\LocataireController::index'], null, ['GET' => 0], null, true, false, null]],
        '/locataire/new' => [[['_route' => 'locataire_new', '_controller' => 'App\\Controller\\LocataireController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/proprietaire' => [[['_route' => 'proprietaire_index', '_controller' => 'App\\Controller\\ProprietaireController::index'], null, ['GET' => 0], null, true, false, null]],
        '/proprietaire/new' => [[['_route' => 'proprietaire_new', '_controller' => 'App\\Controller\\ProprietaireController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/utilisateur' => [[['_route' => 'utilisateur_index', '_controller' => 'App\\Controller\\UtilisateurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/utilisateur/new' => [[['_route' => 'utilisateur_new', '_controller' => 'App\\Controller\\UtilisateurController::createnew'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/a(?'
                    .'|ppartement/([^/]++)(?'
                        .'|(*:34)'
                        .'|/edit(*:46)'
                        .'|(*:53)'
                    .')'
                    .'|rrondissement/([^/]++)(?'
                        .'|(*:86)'
                        .'|/edit(*:98)'
                        .'|(*:105)'
                    .')'
                    .'|dmin/(?'
                        .'|core/get\\-short\\-object\\-description(?:\\.(html|json))?(*:176)'
                        .'|app/(?'
                            .'|a(?'
                                .'|ppartement/([^/]++)/(?'
                                    .'|edit(*:222)'
                                    .'|delete(*:236)'
                                    .'|show(*:248)'
                                .')'
                                .'|rrondissement/([^/]++)/(?'
                                    .'|edit(*:287)'
                                    .'|delete(*:301)'
                                    .'|show(*:313)'
                                .')'
                            .')'
                            .'|demande/([^/]++)/(?'
                                .'|edit(*:347)'
                                .'|delete(*:361)'
                                .'|show(*:373)'
                            .')'
                            .'|utilisateur/([^/]++)/(?'
                                .'|edit(*:410)'
                                .'|delete(*:424)'
                                .'|show(*:436)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/client/([^/]++)(?'
                    .'|(*:467)'
                    .'|/edit(*:480)'
                    .'|(*:488)'
                .')'
                .'|/demande/([^/]++)(?'
                    .'|(*:517)'
                    .'|/edit(*:530)'
                    .'|(*:538)'
                .')'
                .'|/locataire/([^/]++)(?'
                    .'|(*:569)'
                    .'|/edit(*:582)'
                    .'|(*:590)'
                .')'
                .'|/proprietaire/([^/]++)(?'
                    .'|(*:624)'
                    .'|/edit(*:637)'
                    .'|(*:645)'
                .')'
                .'|/utilisateur/(?'
                    .'|([^/]++)(?'
                        .'|(*:681)'
                        .'|/edit(*:694)'
                        .'|(*:702)'
                    .')'
                    .'|client/([^/]++)/demande/(?'
                        .'|new(*:741)'
                        .'|edit(*:753)'
                        .'|recherche(*:770)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        34 => [[['_route' => 'appartement_show', '_controller' => 'App\\Controller\\AppartementController::show'], ['numappart'], ['GET' => 0], null, false, true, null]],
        46 => [[['_route' => 'appartement_edit', '_controller' => 'App\\Controller\\AppartementController::edit'], ['numappart'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        53 => [[['_route' => 'appartement_delete', '_controller' => 'App\\Controller\\AppartementController::delete'], ['numappart'], ['DELETE' => 0], null, false, true, null]],
        86 => [[['_route' => 'arrondissement_show', '_controller' => 'App\\Controller\\ArrondissementController::show'], ['arrondisseDem'], ['GET' => 0], null, false, true, null]],
        98 => [[['_route' => 'arrondissement_edit', '_controller' => 'App\\Controller\\ArrondissementController::edit'], ['arrondisseDem'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        105 => [[['_route' => 'arrondissement_delete', '_controller' => 'App\\Controller\\ArrondissementController::delete'], ['arrondisseDem'], ['DELETE' => 0], null, false, true, null]],
        176 => [[['_route' => 'sonata_admin_short_object_information', '_controller' => 'sonata.admin.action.get_short_object_description', '_format' => 'html'], ['_format'], null, null, false, true, null]],
        222 => [[['_route' => 'admin_app_appartement_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.appartement', '_sonata_name' => 'admin_app_appartement_edit'], ['id'], null, null, false, false, null]],
        236 => [[['_route' => 'admin_app_appartement_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.appartement', '_sonata_name' => 'admin_app_appartement_delete'], ['id'], null, null, false, false, null]],
        248 => [[['_route' => 'admin_app_appartement_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.appartement', '_sonata_name' => 'admin_app_appartement_show'], ['id'], null, null, false, false, null]],
        287 => [[['_route' => 'admin_app_arrondissement_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.arrondissement', '_sonata_name' => 'admin_app_arrondissement_edit'], ['id'], null, null, false, false, null]],
        301 => [[['_route' => 'admin_app_arrondissement_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.arrondissement', '_sonata_name' => 'admin_app_arrondissement_delete'], ['id'], null, null, false, false, null]],
        313 => [[['_route' => 'admin_app_arrondissement_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.arrondissement', '_sonata_name' => 'admin_app_arrondissement_show'], ['id'], null, null, false, false, null]],
        347 => [[['_route' => 'admin_app_demande_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.demande', '_sonata_name' => 'admin_app_demande_edit'], ['id'], null, null, false, false, null]],
        361 => [[['_route' => 'admin_app_demande_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.demande', '_sonata_name' => 'admin_app_demande_delete'], ['id'], null, null, false, false, null]],
        373 => [[['_route' => 'admin_app_demande_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.demande', '_sonata_name' => 'admin_app_demande_show'], ['id'], null, null, false, false, null]],
        410 => [[['_route' => 'admin_app_utilisateur_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.utilisateur', '_sonata_name' => 'admin_app_utilisateur_edit'], ['id'], null, null, false, false, null]],
        424 => [[['_route' => 'admin_app_utilisateur_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.utilisateur', '_sonata_name' => 'admin_app_utilisateur_delete'], ['id'], null, null, false, false, null]],
        436 => [[['_route' => 'admin_app_utilisateur_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.utilisateur', '_sonata_name' => 'admin_app_utilisateur_show'], ['id'], null, null, false, false, null]],
        467 => [[['_route' => 'client_show', '_controller' => 'App\\Controller\\ClientController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        480 => [[['_route' => 'client_edit', '_controller' => 'App\\Controller\\ClientController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        488 => [[['_route' => 'client_delete', '_controller' => 'App\\Controller\\ClientController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        517 => [[['_route' => 'demande_show', '_controller' => 'App\\Controller\\DemandeController::show'], ['numDem'], ['GET' => 0], null, false, true, null]],
        530 => [[['_route' => 'demande_edit', '_controller' => 'App\\Controller\\DemandeController::edit'], ['numDem'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        538 => [[['_route' => 'demande_delete', '_controller' => 'App\\Controller\\DemandeController::delete'], ['numDem'], ['DELETE' => 0], null, false, true, null]],
        569 => [[['_route' => 'locataire_show', '_controller' => 'App\\Controller\\LocataireController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        582 => [[['_route' => 'locataire_edit', '_controller' => 'App\\Controller\\LocataireController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        590 => [[['_route' => 'locataire_delete', '_controller' => 'App\\Controller\\LocataireController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        624 => [[['_route' => 'proprietaire_show', '_controller' => 'App\\Controller\\ProprietaireController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        637 => [[['_route' => 'proprietaire_edit', '_controller' => 'App\\Controller\\ProprietaireController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        645 => [[['_route' => 'proprietaire_delete', '_controller' => 'App\\Controller\\ProprietaireController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        681 => [[['_route' => 'utilisateur_show', '_controller' => 'App\\Controller\\UtilisateurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        694 => [[['_route' => 'utilisateur_edit', '_controller' => 'App\\Controller\\UtilisateurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        702 => [[['_route' => 'utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        741 => [[['_route' => 'utilisateur_client_demande', '_controller' => 'App\\Controller\\UtilisateurController::creerDemande'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        753 => [[['_route' => 'client_demande_edit', '_controller' => 'App\\Controller\\UtilisateurController::editDemande'], ['id'], null, null, false, false, null]],
        770 => [
            [['_route' => 'client_recherche', '_controller' => 'App\\Controller\\UtilisateurController::rechercheDemande'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
