<?php 
/* View */
$router->get('', 'PostController@home');
$router->get("edit", 'PostController@edit');

/* Work with task data */
$router->post('add', 'PostController@store');
$router->post('sort', 'PostController@sort');
$router->post('update', 'PostController@update');
$router->post('setstatus', 'PostController@status');

/* Login */
$router->post('login', 'LoginController@checkUser');
$router->get('logout', 'LoginController@logout');
