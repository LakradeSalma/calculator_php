<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="test.php" method="get">
        number1:<input type="number" name="n1">
        <br>
        number2:<input type="number" name="n2">
        <br><br>
        <input type="submit">
    </form>
    <br>
    Answer : 
    <?php 
      echo $_GET['n1']+$_GET['n2'];
    ?>
</body>
</html>