<?php
require_once 'Models/Task.php';

class TaskController {
    public function showTasks() {
        // Simulez une liste de tâches (en pratique, vous utiliseriez une base de données)
        $tasks = [
            new Task(1, 'Acheter du lait', false),
            new Task(2, 'Aller à la gym', true),
            new Task(3, 'Apprendre le MVC', false)
        ];

        include 'Views/task_list.php';
    }

    public function addTask() {
        // Logique pour ajouter une tâche (traitement du formulaire, par exemple)
        // Rediriger l'utilisateur vers la liste des tâches après l'ajout
        header('Location: index.php?action=showTasks');
    }

    public function completeTask() {
        // Logique pour marquer une tâche comme terminée (en utilisant un formulaire ou une requête AJAX)
        // Rediriger l'utilisateur vers la liste des tâches après la modification
        header('Location: index.php?action=showTasks');
    }
}
