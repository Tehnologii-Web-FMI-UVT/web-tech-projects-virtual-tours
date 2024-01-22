<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/services', 'Home::services');
$routes->get('/ar_vr', 'Home::ar_Vr');
$routes->get('/order_tours', 'Home::order_tours');

$routes->get('/for_agencies', 'Home::for_agencies');
$routes->get('/for_hotels', 'Home::for_hotels');
$routes->get('/for_airbnb', 'Home::for_airbnb');
$routes->get('/tour_price_calculator', 'Home::tour_price_calculator');
$routes->get('/contact_sales', 'Home::contact_sales');



$routes->group("user",function($routes){
    $routes->get('home','UserController::index',['as'=>'user.home']);
});
$routes->get('language/switch/(:segment)', 'LanguageSwitcher::switch/$1');

//login register
$routes->group('', ['namespace' => 'Myth\Auth\Controllers'], function ($routes) {
    // Login/out
    $routes->get('login', 'AuthController::login', ['as' => 'login']);
    $routes->post('login', 'AuthController::attemptLogin');
    $routes->get('logout', 'AuthController::logout');

    // Registration
    $routes->get('register', 'AuthController::register', ['as' => 'register']);
    $routes->post('register', 'AuthController::attemptRegister');
    $routes->get('activate-account', 'AuthController::activateAccount');

    // ... Add other auth routes as needed
});

// $routes->get('/agency-main', 'AgencyMain::index', ['filter' => 'login']); // or 'auth' if you named it that way in Filters.php

$routes->get('/Home', 'Home::index');

// $routes->get('/oxia', 'Oxia\Home::index');
// $routes->get('/oxia/manage_properties', 'Oxia\Home::manage_properties');

$routes->get('setup-agency', 'SetupAgencyController::index', ['filter' => 'login']);
$routes->post('/setup-agency/submit', 'SetupAgencyController::submit');


$routes->get('all_properties', 'Allproperties::index');
$routes->get('properties/view/(:num)', 'PropertyController::view/$1');

// app/Config/Routes.php

$routes->get('properties/map-data', 'PropertyController::mapData');
$routes->get('properties/agency-map-data', 'PropertyController::getAgencyPlaces');

$routes->get('/fetchHotProperties', 'PropertyController::fetchHotProperties');
$routes->post('property/addProperty', 'PropertyController::addProperty');
$routes->get('properties/edit/(:num)', 'PropertyController::editProperty/$1');
$routes->post('properties/update/(:num)', 'PropertyController::updateProperty/$1');

// app/Config/Routes.php
$routes->post('/agency/add_property', 'PropertyController::addProperty');
$routes->get('agency-main', 'AgencyMain::index');

$routes->get('/agency-main/manage-properties', 'AgencyMain::manage_properties');
$routes->get('/agency-main/create-property', 'AgencyMain::create_property'); // Link to form for adding new property
$routes->post('agency-main/save-property', 'AgencyMain::save_property'); // Form submission for creating new property
$routes->get('agency-main/edit-property/(:num)', 'AgencyMain::edit_property/$1'); // Edit form for a property
$routes->post('agency-main/update-property/(:num)', 'AgencyMain::update_property/$1'); // Form submission for updating property
$routes->get('agency-main/delete-property/(:num)', 'AgencyMain::delete_property/$1'); // Delete a property
$routes->get('properties/manage', 'PropertyController::manageProperties');
// Add routes for create, update, delete methods as well



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
