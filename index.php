

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <div>
        Enter side of Triangle <br>
        <form action="" method="post">
            Name: <input type="text" name="name"><br>
            Side1: <input type="text" name="side1"><br>
            Side2: <input type="text" name="side2"><br>
            Side3: <input type="text" name="side3"><br>
            <button type="submit">OK</button>
        </form>
    </div>
</div>
</body>
</html>


<?php
include_once 'Triangle.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $side1 = $_POST['side1'];
    $side2 = $_POST['side2'];
    $side3 = $_POST['side3'];

    $triangle = new Triangle($name);
    $triangle->setSide1($side1);
    $triangle->setSide2($side2);
    $triangle->setSide3($side3);

    echo $triangle->toString();
}


?>