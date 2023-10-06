<!DOCTYPE html>
<html>
<head>
    <title>Liste des tâches</title>
</head>
<body>
    <h1>Liste des tâches</h1>
    <ul>
        <?php foreach ($tasks as $task): ?>
            <li>
                <?php echo $task->title; ?>
                <?php if (!$task->completed): ?>
                    <form action="index.php?action=completeTask" method="post">
                        <input type="hidden" name="taskId" value="<?php echo $task->id; ?>">
                        <button type="submit">Terminée</button>
                    </form>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <h2>Ajouter une tâche</h2>
    <form action="index.php?action=addTask" method="post">
        <input type="text" name="taskTitle" placeholder="Titre de la tâche" required>
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
