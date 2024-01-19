<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


 /* Form handling route */


$routes->get('form', 'Form::index');
$routes->post('form', 'Form::submit');


 /* VCard handling route */


$routes->post('/vcard', 'VCard::form_controller/$1');


 /* General page handling route */


$routes->get('/([a-zA-Z0-9-_]+)/', 'InnerPageRouting::innerRouting/$1');
$routes->post('/([a-zA-Z0-9-_]+)/', 'FormRoutingCopy::form_controller/$1');


 /* Index handling route */


$routes->get('/', 'Home::index');
