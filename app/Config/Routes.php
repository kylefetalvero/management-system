<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

$routes->get('/', 'Home::index');
$routes->get('/tasks', 'Tasks::index');
$routes->get('/profile', 'Users::index');
$routes->get('/about', 'Pages::about');