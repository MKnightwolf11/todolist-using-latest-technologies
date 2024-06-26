<?php
include 'db.php';

// Function to get all tasks
function getTasks() {
    global $conn;
    $sql = "SELECT * FROM tasks";
    $result = $conn->query($sql);
    $tasks = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $tasks[] = $row;
        }
    }
    return $tasks;
}

// Function to add a new task
function addTask($task_name, $task_description) {
    global $conn;
    $sql = "INSERT INTO tasks (task_name, task_description) VALUES ('$task_name', '$task_description')";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

// Function to delete a task
function deleteTask($task_id) {
    global $conn;
    $sql = "DELETE FROM tasks WHERE task_id=$task_id";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

// Function to update a task
function updateTask($task_id, $task_name, $task_description) {
    global $conn;
    $sql = "UPDATE tasks SET task_name='$task_name', task_description='$task_description' WHERE task_id=$task_id";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}
?>