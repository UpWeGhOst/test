<?php
require_once __DIR__.'/vendor/autoload.php';
use ToDoManager\ToDoMgr;
$app = new Silex\Application();

$app->get('/', function () {
	return '<a href="/todo">c\'mere</a>';
});

$app->get('/todo/', function () {
	$mgr = new ToDoMgr('todo.xml');
	$result = $mgr->toString();
	return $result;
});

$app->run();
?>