<?php
require 'Controllers/TaskController.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'showTasks';
$controller = new TaskController();

switch ($action) {
    case 'showTasks':
        $controller->showTasks();
        break;
    case 'addTask':
        $controller->addTask();
        break;
    case 'completeTask':
        $controller->completeTask();
        break;
    default:
        echo "Action non valide";
}
?>