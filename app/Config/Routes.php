<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/education', 'Education::index');
$routes->get('/about_me', 'About_me::index');
