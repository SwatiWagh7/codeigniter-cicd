<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/employee', 'Employee::index');
$routes->get('/employee/create', 'Employee::create');
$routes->post('/employee/store', 'Employee::store');
$routes->get('/', 'Dashboard::index');
