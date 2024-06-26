<?php
include 'functions.php';

if (isset($_GET['id'])) {
    $task_id = $_GET['id'];
    
    if (deleteTask($task_id)) {
        header("Location: index.php");
    } else {
        echo "Error deleting task.";
    }
}
?>