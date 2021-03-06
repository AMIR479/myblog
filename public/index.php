<?php

use Router\Router;
use App\Exceptions\NotFoundException;

require '../vendor/autoload.php';

define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);
define('DB_NAME', 'blogphp');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PWD', 'root');

$router = new Router($_GET['url']);

// Route Accueil
$router->get('/', 'App\Controllers\BlogController@welcome');

// Routes Blogs
$router->get('/posts', 'App\Controllers\BlogController@index');
$router->get('/posts/:id', 'App\Controllers\BlogController@show');
$router->post('/comment/create/:id', 'App\Controllers\BlogController@addComment');
$router->get('/tags/:id', 'App\Controllers\BlogController@tag');

// Routes User
$router->get('/login', 'App\Controllers\UserController@login');
$router->post('/login', 'App\Controllers\UserController@loginPost');
$router->get('/logout', 'App\Controllers\UserController@logout');
$router->get('/register', 'App\Controllers\UserController@register');
$router->post('/register', 'App\Controllers\UserController@registerPost');
$router->get('/user', 'App\Controllers\UserController@user');

// Routes Contacts
$router->get('/contact', 'App\Controllers\ContactController@welcome');
$router->post('/posts/contact', 'App\Controllers\ContactController@sendMsg');

// Routes Admin
$router->get('/admin/posts', 'App\Controllers\Admin\PostController@index');
$router->get('/admin/comments', 'App\Controllers\Admin\PostController@comments');
$router->get('/admin/posts/create', 'App\Controllers\Admin\PostController@create');
$router->post('/admin/posts/create', 'App\Controllers\Admin\PostController@createPost');
$router->post('/admin/posts/delete/:id', 'App\Controllers\Admin\PostController@destroy');
$router->post('/admin/comment/confirmed/:id', 'App\Controllers\Admin\PostController@confirmed');
$router->get('/admin/posts/edit/:id', 'App\Controllers\Admin\PostController@edit');
$router->post('/admin/posts/edit/:id', 'App\Controllers\Admin\PostController@update');


try {
    $router->run();
} catch (NotFoundException $e) {

    return $e->error404();
}
