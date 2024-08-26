
<html>
<head>
<body>
    <form action="form.php" method="GET">
    <label for="name">Name: </label>
        <input type="text" name="name">
        <label for="name">Address:  </label>
        <input type="text" name="add">
        <label for="name">Roll: </label>
        <input type="text" name="roll">
        <label for="name">Home: </label>
        <input type="text" name="home">

    <button action="submit">Submit</button>
        <?php
$name=$_GET["name"];
$address=$_GET["add"];
$roll=$_GET["roll"];
$home=$_GET["home"];
echo "YOur Name is $name and you live in $address";
?>
        
    </form>
    </body>
    </head>
    </html>
