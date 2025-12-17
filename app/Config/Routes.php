<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::view/index');

// Serve the converted static pages from app/Views/pages
$routes->get('(:any)', 'Pages::view/$1');
