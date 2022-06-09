<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    $valorPing=0;
    $valorPong=0;

    
    if(isset($_GET['valorPing'])) {
        $valorPing=$_GET['valorPing']+1;
    }
    elseif(isset($_POST['valorPong'])) {
        $valorPong=$_POST['valorPong']+1;
    }


?>

    <div>
        <form action="ping.php" method="GET">
            <input type="text" name="valorPing" value =<?php echo $valorPing?>>
            <input type="text" name="valorPong" value =<?php echo $valorPong?>>
            <input type="submit" value="Ping??">
        </form>

        <form action="pong.php" method="POST">
            <input type="text" name="valorPong" value =<?php echo $valorPong?>>
            <input type="submit" value="Pong??">
        </form>
    </div>

</body>
</html>