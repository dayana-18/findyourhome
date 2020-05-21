<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'appartement_index' => [[], ['_controller' => 'App\\Controller\\AppartementController::index'], [], [['text', '/appartement/']], [], []],
    'appartement_new' => [[], ['_controller' => 'App\\Controller\\AppartementController::create'], [], [['text', '/appartement/new']], [], []],
    'appartement_show' => [['numappart'], ['_controller' => 'App\\Controller\\AppartementController::show'], [], [['variable', '/', '[^/]++', 'numappart'], ['text', '/appartement']], [], []],
    'appartement_edit' => [['numappart'], ['_controller' => 'App\\Controller\\AppartementController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'numappart'], ['text', '/appartement']], [], []],
    'appartement_delete' => [['numappart'], ['_controller' => 'App\\Controller\\AppartementController::delete'], [], [['variable', '/', '[^/]++', 'numappart'], ['text', '/appartement']], [], []],
    'visiter_new' => [['numappart'], ['_controller' => 'App\\Controller\\AppartementController::createVisitedem'], [], [['text', '/visite/new'], ['variable', '/', '[^/]++', 'numappart'], ['text', '/appartement']], [], []],
    'liste_demandes' => [['numappart'], ['_controller' => 'App\\Controller\\AppartementController::listeVisite'], [], [['text', '/demandes'], ['variable', '/', '[^/]++', 'numappart'], ['text', '/appartement']], [], []],
    'arrondissement_index' => [[], ['_controller' => 'App\\Controller\\ArrondissementController::index'], [], [['text', '/arrondissement/']], [], []],
    'arrondissement_new' => [[], ['_controller' => 'App\\Controller\\ArrondissementController::createnew'], [], [['text', '/arrondissement/new']], [], []],
    'arrondissement_show' => [['arrondisseDem'], ['_controller' => 'App\\Controller\\ArrondissementController::show'], [], [['variable', '/', '[^/]++', 'arrondisseDem'], ['text', '/arrondissement']], [], []],
    'arrondissement_edit' => [['arrondisseDem'], ['_controller' => 'App\\Controller\\ArrondissementController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'arrondisseDem'], ['text', '/arrondissement']], [], []],
    'arrondissement_delete' => [['arrondisseDem'], ['_controller' => 'App\\Controller\\ArrondissementController::delete'], [], [['variable', '/', '[^/]++', 'arrondisseDem'], ['text', '/arrondissement']], [], []],
    'client_list' => [[], ['_controller' => 'App\\Controller\\ClientController::index'], [], [['text', '/client/']], [], []],
    'client_new' => [[], ['_controller' => 'App\\Controller\\ClientController::createnew'], [], [['text', '/client/new']], [], []],
    'client_show' => [['id'], ['_controller' => 'App\\Controller\\ClientController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/client']], [], []],
    'client_edit' => [['id'], ['_controller' => 'App\\Controller\\ClientController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/client']], [], []],
    'client_delete' => [['id'], ['_controller' => 'App\\Controller\\ClientController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/client']], [], []],
    'demandes_appts' => [['id'], ['_controller' => 'App\\Controller\\ClientController::mesDemandesAppartement'], [], [['text', '/demandes'], ['variable', '/', '[^/]++', 'id'], ['text', '/client']], [], []],
    'visites_liste' => [['id'], ['_controller' => 'App\\Controller\\ClientController::mesDemandesVisite'], [], [['text', '/visites'], ['variable', '/', '[^/]++', 'id'], ['text', '/client']], [], []],
    'cotisation' => [[], ['_controller' => 'App\\Controller\\CotisationController::index'], [], [['text', '/cotisation']], [], []],
    'demande_index' => [[], ['_controller' => 'App\\Controller\\DemandeController::index'], [], [['text', '/demande/']], [], []],
    'demande_new' => [[], ['_controller' => 'App\\Controller\\DemandeController::createnew'], [], [['text', '/demande/new']], [], []],
    'demande_show' => [['numDem'], ['_controller' => 'App\\Controller\\DemandeController::show'], [], [['variable', '/', '[^/]++', 'numDem'], ['text', '/demande']], [], []],
    'demande_edit' => [['numDem'], ['_controller' => 'App\\Controller\\DemandeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'numDem'], ['text', '/demande']], [], []],
    'demande_delete' => [['numDem'], ['_controller' => 'App\\Controller\\DemandeController::delete'], [], [['variable', '/', '[^/]++', 'numDem'], ['text', '/demande']], [], []],
    'client_recherche' => [['numDem'], ['_controller' => 'App\\Controller\\DemandeController::rechercheDemande'], [], [['text', '/recherche'], ['variable', '/', '[^/]++', 'numDem'], ['text', '/demande']], [], []],
    'locataire_list' => [[], ['_controller' => 'App\\Controller\\LocataireController::index'], [], [['text', '/locataire/']], [], []],
    'locataire_new' => [[], ['_controller' => 'App\\Controller\\LocataireController::createnew'], [], [['text', '/locataire/new']], [], []],
    'locataire_show' => [['id'], ['_controller' => 'App\\Controller\\LocataireController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/locataire']], [], []],
    'locataire_edit' => [['id'], ['_controller' => 'App\\Controller\\LocataireController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/locataire']], [], []],
    'locataire_delete' => [['id'], ['_controller' => 'App\\Controller\\LocataireController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/locataire']], [], []],
    'proprietaire_list' => [[], ['_controller' => 'App\\Controller\\ProprietaireController::index'], [], [['text', '/proprietaire/']], [], []],
    'proprietaire_new' => [[], ['_controller' => 'App\\Controller\\ProprietaireController::createnew'], [], [['text', '/proprietaire/new']], [], []],
    'proprietaire_show' => [['id'], ['_controller' => 'App\\Controller\\ProprietaireController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/proprietaire']], [], []],
    'proprietaire_edit' => [['id'], ['_controller' => 'App\\Controller\\ProprietaireController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/proprietaire']], [], []],
    'proprietaire_delete' => [['id'], ['_controller' => 'App\\Controller\\ProprietaireController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/proprietaire']], [], []],
    'liste_appartements' => [['id'], ['_controller' => 'App\\Controller\\ProprietaireController::mesAppartements'], [], [['text', '/liste-appartements'], ['variable', '/', '[^/]++', 'id'], ['text', '/proprietaire']], [], []],
    'visites_demande' => [['id'], ['_controller' => 'App\\Controller\\ProprietaireController::mesDemandesVisite'], [], [['text', '/liste-demandes'], ['variable', '/', '[^/]++', 'id'], ['text', '/proprietaire']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'utilisateur_list' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::index'], [], [['text', '/utilisateur/utilisateurs']], [], []],
    'utilisateur_new' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::createnew'], [], [['text', '/utilisateur/new']], [], []],
    'utilisateur_show' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/utilisateur']], [], []],
    'utilisateur_edit' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/utilisateur']], [], []],
    'utilisateur_delete' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/utilisateur']], [], []],
    'visiterdem_index' => [[], ['_controller' => 'App\\Controller\\VisiterdemController::index'], [], [['text', '/visiterdem/']], [], []],
    'visiterdem_new' => [[], ['_controller' => 'App\\Controller\\VisiterdemController::createnew'], [], [['text', '/visiterdem/new']], [], []],
    'visiterdem_show' => [['numvisite'], ['_controller' => 'App\\Controller\\VisiterdemController::show'], [], [['variable', '/', '[^/]++', 'numvisite'], ['text', '/visiterdem']], [], []],
    'visiterdem_edit' => [['numvisite'], ['_controller' => 'App\\Controller\\VisiterdemController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'numvisite'], ['text', '/visiterdem']], [], []],
    'visiterdem_delete' => [['numvisite'], ['_controller' => 'App\\Controller\\VisiterdemController::delete'], [], [['variable', '/', '[^/]++', 'numvisite'], ['text', '/visiterdem']], [], []],
    'sonata_admin_redirect' => [[], ['_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'sonata_admin_dashboard', 'permanent' => 'true'], [], [['text', '/admin/']], [], []],
    'sonata_admin_dashboard' => [[], ['_controller' => 'Sonata\\AdminBundle\\Action\\DashboardAction'], [], [['text', '/admin/dashboard']], [], []],
    'sonata_admin_retrieve_form_element' => [[], ['_controller' => 'sonata.admin.action.retrieve_form_field_element'], [], [['text', '/admin/core/get-form-field-element']], [], []],
    'sonata_admin_append_form_element' => [[], ['_controller' => 'sonata.admin.action.append_form_field_element'], [], [['text', '/admin/core/append-form-field-element']], [], []],
    'sonata_admin_short_object_information' => [['_format'], ['_controller' => 'sonata.admin.action.get_short_object_description', '_format' => 'html'], ['_format' => 'html|json'], [['variable', '.', 'html|json', '_format'], ['text', '/admin/core/get-short-object-description']], [], []],
    'sonata_admin_set_object_field_value' => [[], ['_controller' => 'sonata.admin.action.set_object_field_value'], [], [['text', '/admin/core/set-object-field-value']], [], []],
    'sonata_admin_search' => [[], ['_controller' => 'Sonata\\AdminBundle\\Action\\SearchAction'], [], [['text', '/admin/search']], [], []],
    'sonata_admin_retrieve_autocomplete_items' => [[], ['_controller' => 'sonata.admin.action.retrieve_autocomplete_items'], [], [['text', '/admin/core/get-autocomplete-items']], [], []],
    'admin_app_appartement_list' => [[], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.appartement', '_sonata_name' => 'admin_app_appartement_list'], [], [['text', '/admin/app/appartement/list']], [], []],
    'admin_app_appartement_create' => [[], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.appartement', '_sonata_name' => 'admin_app_appartement_create'], [], [['text', '/admin/app/appartement/create']], [], []],
    'admin_app_appartement_batch' => [[], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.appartement', '_sonata_name' => 'admin_app_appartement_batch'], [], [['text', '/admin/app/appartement/batch']], [], []],
    'admin_app_appartement_edit' => [['id'], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.appartement', '_sonata_name' => 'admin_app_appartement_edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/app/appartement']], [], []],
    'admin_app_appartement_delete' => [['id'], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.appartement', '_sonata_name' => 'admin_app_appartement_delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/app/appartement']], [], []],
    'admin_app_appartement_show' => [['id'], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.appartement', '_sonata_name' => 'admin_app_appartement_show'], [], [['text', '/show'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/app/appartement']], [], []],
    'admin_app_appartement_export' => [[], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.appartement', '_sonata_name' => 'admin_app_appartement_export'], [], [['text', '/admin/app/appartement/export']], [], []],
    'admin_app_demande_list' => [[], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.demande', '_sonata_name' => 'admin_app_demande_list'], [], [['text', '/admin/app/demande/list']], [], []],
    'admin_app_demande_create' => [[], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.demande', '_sonata_name' => 'admin_app_demande_create'], [], [['text', '/admin/app/demande/create']], [], []],
    'admin_app_demande_batch' => [[], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.demande', '_sonata_name' => 'admin_app_demande_batch'], [], [['text', '/admin/app/demande/batch']], [], []],
    'admin_app_demande_edit' => [['id'], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.demande', '_sonata_name' => 'admin_app_demande_edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/app/demande']], [], []],
    'admin_app_demande_delete' => [['id'], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.demande', '_sonata_name' => 'admin_app_demande_delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/app/demande']], [], []],
    'admin_app_demande_show' => [['id'], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.demande', '_sonata_name' => 'admin_app_demande_show'], [], [['text', '/show'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/app/demande']], [], []],
    'admin_app_demande_export' => [[], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.demande', '_sonata_name' => 'admin_app_demande_export'], [], [['text', '/admin/app/demande/export']], [], []],
    'admin_app_arrondissement_list' => [[], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.arrondissement', '_sonata_name' => 'admin_app_arrondissement_list'], [], [['text', '/admin/app/arrondissement/list']], [], []],
    'admin_app_arrondissement_create' => [[], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.arrondissement', '_sonata_name' => 'admin_app_arrondissement_create'], [], [['text', '/admin/app/arrondissement/create']], [], []],
    'admin_app_arrondissement_batch' => [[], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.arrondissement', '_sonata_name' => 'admin_app_arrondissement_batch'], [], [['text', '/admin/app/arrondissement/batch']], [], []],
    'admin_app_arrondissement_edit' => [['id'], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.arrondissement', '_sonata_name' => 'admin_app_arrondissement_edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/app/arrondissement']], [], []],
    'admin_app_arrondissement_delete' => [['id'], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.arrondissement', '_sonata_name' => 'admin_app_arrondissement_delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/app/arrondissement']], [], []],
    'admin_app_arrondissement_show' => [['id'], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.arrondissement', '_sonata_name' => 'admin_app_arrondissement_show'], [], [['text', '/show'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/app/arrondissement']], [], []],
    'admin_app_arrondissement_export' => [[], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.arrondissement', '_sonata_name' => 'admin_app_arrondissement_export'], [], [['text', '/admin/app/arrondissement/export']], [], []],
    'admin_app_utilisateur_list' => [[], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.utilisateur', '_sonata_name' => 'admin_app_utilisateur_list'], [], [['text', '/admin/app/utilisateur/list']], [], []],
    'admin_app_utilisateur_create' => [[], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.utilisateur', '_sonata_name' => 'admin_app_utilisateur_create'], [], [['text', '/admin/app/utilisateur/create']], [], []],
    'admin_app_utilisateur_batch' => [[], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.utilisateur', '_sonata_name' => 'admin_app_utilisateur_batch'], [], [['text', '/admin/app/utilisateur/batch']], [], []],
    'admin_app_utilisateur_edit' => [['id'], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.utilisateur', '_sonata_name' => 'admin_app_utilisateur_edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/app/utilisateur']], [], []],
    'admin_app_utilisateur_delete' => [['id'], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.utilisateur', '_sonata_name' => 'admin_app_utilisateur_delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/app/utilisateur']], [], []],
    'admin_app_utilisateur_show' => [['id'], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.utilisateur', '_sonata_name' => 'admin_app_utilisateur_show'], [], [['text', '/show'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/app/utilisateur']], [], []],
    'admin_app_utilisateur_export' => [[], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.utilisateur', '_sonata_name' => 'admin_app_utilisateur_export'], [], [['text', '/admin/app/utilisateur/export']], [], []],
    'accueil' => [[], ['_controller' => 'App\\Controller\\AccueilController::index'], [], [['text', '/']], [], []],
    'profil' => [[], ['_controller' => 'App\\Controller\\ProfilController::index'], [], [['text', '/index']], [], []],
];