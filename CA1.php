<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="CA1.php" method="GET">
    <label for="date">Enter the Day</label>
<input type="text" name="date">
<button type="submit">Submit</button>

</form>
<br>
<?php
$date=$_GET['date'];

switch ($date) {
    case '1':
        echo "The day is : Monday";
        break;
    
    case '2':
        echo "The day is : Tuesday";
        break;
    case '3':
        echo "The day is : Wednesday";
        break;
    case '4':
        echo "The day is : Thursday";
        break; 
    case '5':
        echo "The day is : Friday";
        break; 
    case '6':
        echo "The day is : Saturday";
        break;
    case '7':
        echo "The day is : Sunday";
        break;
    default:
    echo "Invalid Day";
    break;
}

?>    
</body>
</html>

