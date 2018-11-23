<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Front End
$app->get('/todos', 'DisplayTodosController');

//Back End
$app->post('/api/', 'CompleteTodoController');
$app->post('/api/', 'DeleteTodoController');
