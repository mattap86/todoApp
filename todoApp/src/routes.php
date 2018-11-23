<?php

// Front End
$app->get('/todos', 'DisplayTodosController');

//Back End
$app->post('/api/addTodo', 'AddTodoController');
$app->post('/api/completeTodo', 'CompleteTodoController');
$app->post('/api/deleteTodo', 'DeleteTodoController');
