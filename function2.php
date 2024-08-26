<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label for="Name" >Name :</label>
    <input type="text" id="name">
    <label for="">Phone nO :</label>
    <input type="number" name="" id="phone">
     
    <?php
    $a=$_POST('name');
    $b=$_POST('phone');
    echo $a;
    echo $b;
    ?>0
</body>
</html>