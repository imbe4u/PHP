<?php
session_start();
$days = [];
$tasks = [];

function addTask(&$days, &$tasks) {
    $days[] = $_POST['workday'];
    $tasks[] = $_POST['task'];
}

function displayTasks($days, $tasks) {
    for ($i = 0; $i < count($days); $i++) {
        echo "Day: " . $days[$i] . " - Task: " . $tasks[$i] . "<br>";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add'])) {
        addTask($days, $tasks);
        $_SESSION['days'] = $days;
        $_SESSION['tasks'] = $tasks;
    }

    if (isset($_POST['display'])) {
        $days = $_SESSION['days'] ?? [];
        $tasks = $_SESSION['tasks'] ?? [];
        displayTasks($days, $tasks);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="day">Enter the Day (Monday to Sunday):</label>
        <input type="text" name="workday">
        <label for="work">Enter the task:</label>
        <input type="text" name="task">
        <button type="submit" name="add">Add</button>
        <button type="submit" name="display">Display</button>
    </form>
</body>
</html>
