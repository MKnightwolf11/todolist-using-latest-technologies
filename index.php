<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>To-Do List</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>To-Do List</h1>
        <form action="add_task.php" method="POST">
            <input type="text" name="task_name" placeholder="Task Name" required>
            <textarea name="task_description" placeholder="Task Description"></textarea>
            <button type="submit">Add Task</button>
        </form>

        <div class="tasks">
            <?php
            include 'functions.php';
            $tasks = getTasks();
            foreach ($tasks as $task) {
                echo "<div class='task'>";
                echo "<h3>{$task['task_name']}</h3>";
                echo "<p>{$task['task_description']}</p>";
                echo "<a href='delete_task.php?id={$task['task_id']}'>Delete</a>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
</body>
</html>