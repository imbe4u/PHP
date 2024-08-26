<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="calculate.php" method="POST">
    enter first number<input type="text" name="n1"><br><br>
    enter second number<input type="text" name="n2"><br><br>
    <input type="submit" value="calculate" name="btn">
    </form>
    <?php
    $a=$_POST['n1'];
    $b=$_POST['n2'];
    echo "sum" : $a+$b;

 ?>

</body>
</html>
