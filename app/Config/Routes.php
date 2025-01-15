<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/contact', 'Home::contact');

$routes->get('files/suits', 'Productcontroller::suits');

$routes->get('files/saree', 'Productcontroller::saree');


$routes->get('files/orders', 'Productcontroller::orders');

$routes->get('files/dress', 'Productcontroller::dress');

$routes->get('files/dupatta', 'Productcontroller::duppata');

$routes->get('files/cart', 'Productcontroller::cart');

$routes->get('/checkout', 'Productcontroller::checkout');

$routes->get('files/acount', 'Productcontroller::account');

$routes->get('files/wish', 'Productcontroller::wish');

$routes->get('/login', 'AdminController::admin');

$routes->post('/userlogin', 'AdminController::login');

$routes->get('/terms', 'AdminController::term');

$routes->get('/return', 'Admincontroller::back');

$routes->get('/about', 'Admincontroller::about');

$routes->get('/policy', 'AdminController::policy');

$routes->post('files/acount', 'AdminController::register');

$routes->get('product/addproduct', 'Productcontroller::index');



$routes->get('/category', 'Productcontroller::category');
$routes->post('Productcontroller-add', 'Productcontroller::add');

$routes->get('/addcategory', 'Productcontroller::addcategory');

$routes->get('/deletecategory/(:num)', 'Productcontroller::deletecategory/$1');




$routes->post('Productcontroller-updatecategory', 'Productcontroller::updatecategory');


$routes->post('Productcontroller-store', 'Productcontroller::store');

$routes->get('product/allproduct', 'Productcontroller::table');

$routes->get('product/edit/(:num)', 'Productcontroller::edit/$1');

$routes->post('Productcontroller-update/(:num)', 'Productcontroller::update/$1');

$routes->get('product/addproduct/(:num)', 'Productcontroller::delete/$1');

// Route for shop detail
$routes->get('shop-detail/(:num)', 'Productcontroller::shop_detail/$1');


// $routes->get('/product', 'Productcontroller::products');
// $routes->get('/product/(:any)', 'ProductController::productdetail/$1');

// $routes->get('/product/(:segment)', 'Productcontroller::productdetail/$1');

$routes->get('/product/(:segment)', 'ProductController::productdetail/$1');  

// Display product details based on slugus

$routes->get('product-category/(:segment)', 'Productcontroller::producst_category/$1');


$routes->post('/sendemail', 'Productcontroller::sendemail');


$routes->post('/register', 'Productcontroller::useregister');


$routes->get('/thankyouser', 'Productcontroller::thankyou');


// $routes->get('/excel-import', 'Excelcontroller::upload');
// $routes->post('/excel-import/import', 'Excelcontroller::import');




$routes->get('import', 'ProductController::importData');
$routes->post('upload', 'ProductController::uploadData');

$routes->get('/cart', 'CartController::cart');
$routes->post('/cart/add', 'CartController::add');
$routes->get('/cart/remove/(:num)', 'CartController::remove/$1');
$routes->get('/cart/clear', 'CartController::clear');



$routes->get('files/dashboard', 'Productcontroller::dashboard');



$routes->match(['get', 'post'], 'files/loginuser', 'Productcontroller::loginuser');





// $routes->get('product/(:any)', 'ProductController::view/$1');



// $routes->get('/detailduppata', 'DupattaController::shop_detail');
















