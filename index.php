<?php
require_once __DIR__.'/vendor/autoload.php';
use ToDoManager\ToDoMgr;
$app = new Silex\Application();

$app->get('/', function () {
	return '<a href="/todo">c\'mere</a>';
});

$app->get('/todo/', function () {
	$result = new ToDoMgr('todo.xml');
	return $result;
});

$app->run();
?>