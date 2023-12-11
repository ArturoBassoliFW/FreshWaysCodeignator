<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/([a-zA-Z0-9-_]+)/', 'InnerPageRouting::innerRouting/$1');

$routes->get('/', 'Home::index');
