<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $levelGame = $_POST["levelGame"];
        $levelGame2 = $_POST["levelGame2"];
        $result1 = $_POST;
        if($_POST["result1"]){
            $result1 = $_POST["result1"];
            echo "$result1 / 10";
        }else{
            $result1 = 0;
        }
        if($_POST["result2"]){
            $result2 = $_POST["result2"];
            echo "$result2 / 10";
        }else{
            $result2 = 0;
        }
        $level = $_POST["level"];
        $result = $_POST["result"];
        if($_POST["result"]){
            echo "$result / 10";
        }
        if($levelGame = "medium"){
            $disabled1 = "<!-- undisabled --";
        }
        ?>
        <form action="index.php" method="post">
        <input type="hidden" name="result" value="<?php echo "$result"; ?>">
        <input type="hidden" name="result1" value="<?php echo "$result1"; ?>">
        <input type="hidden" name="level" value="<?php echo "$level"; ?>">
        <input type="hidden"  name="levelGame" value="<?php echo "$levelGame"; ?>">
        <input type="hidden"  name="levelGame2" value="<?php echo "$levelGame2"; ?>">
        <input type="hidden"  name="disabled1" value="<?php echo "$disabled1"; ?>">
        <button type="submit">На першу сторінку</button>
        </form>
</body>
</html>