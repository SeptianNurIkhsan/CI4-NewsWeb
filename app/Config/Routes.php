<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/login', 'Auth::login', ['as' => 'login']);
$routes->post('/login', 'Auth::loginPost');
$routes->get('/logout', 'Auth::logout');

$routes->get('/register', 'Auth::register');
$routes->post('/register', 'Auth::registerPost');
$routes->get('/login', 'Auth::login', ['as' => 'login']);
$routes->post('/login', 'Auth::loginPost');
$routes->get('/logout', 'Auth::logout');

$routes->group('admin', ['filter' => 'role:admin'], function($routes) {
    $routes->get('posts', 'Admin\Post::index');
    $routes->get('posts/create', 'Admin\Post::create');
    $routes->post('posts/store', 'Admin\Post::store');
    $routes->get('posts/edit/(:num)', 'Admin\Post::edit/$1');
    $routes->post('posts/update/(:num)', 'Admin\Post::update/$1');
    $routes->get('posts/delete/(:num)', 'Admin\Post::delete/$1');
});

$routes->group('pengelola', ['filter' => 'role:pengelola'], function($routes) {
    $routes->get('/', 'Pengelola\Dashboard::index');
    $routes->get('posts', 'Pengelola\Post::index'); // Pengelola can view their posts
    $routes->get('posts/create', 'Pengelola\Post::create'); // Pengelola can create posts
    $routes->post('posts/store', 'Pengelola\Post::store'); // Pengelola can store new posts
    $routes->get('posts/edit/(:num)', 'Pengelola\Post::edit/$1'); // Pengelola can edit posts
    $routes->post('posts/update/(:num)', 'Pengelola\Post::update/$1'); // Pengelola can update posts
});

$routes->get('/', 'Post::index');
$routes->get('/post/(:num)', 'Post::detail/$1');
$routes->get('/all-posts', 'Post::allPosts');