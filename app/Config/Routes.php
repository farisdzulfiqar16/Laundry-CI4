<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// ---------------------------------------------
// Route API (kalau suatu hari dibutuhkan)
// ---------------------------------------------
$routes->group('api', function ($routes) {
    // $routes->get('example', 'Api\Example::index');
});

// ---------------------------------------------
// Halaman utama React SPA
// ---------------------------------------------
$routes->get('/', function () {
    return file_get_contents(FCPATH . 'index.html');
});

// ---------------------------------------------
// Fallback untuk semua route SPA React
// ---------------------------------------------
$routes->add('{any}', function () {
    return file_get_contents(FCPATH . 'index.html');
});

// ---------------------------------------------
// Halaman utama React SPA
// ---------------------------------------------
$routes->get('/', function () {
    return file_get_contents(FCPATH . 'index.html');
});

// ---------------------------------------------
// Fallback untuk semua route SPA React
// ---------------------------------------------
$routes->add('{any}', function () {
    return file_get_contents(FCPATH . 'index.html');
});