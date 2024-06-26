<?php
include 'functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task_name = $_POST['task_name'];
    $task_description = $_POST['task_description'];
    
    if (addTask($task_name, $task_description)) {
        header("Location: index.php");
    } else {
        echo "Error adding task.";
    }
}
?>