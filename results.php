<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css"> 
</head>
<body>
    <?php
        $money = $_POST["money"];
        $levelGame = $_POST["levelGame"];
        $levelGame2 = $_POST["levelGame2"];
        $result1 = $_POST;
        $result2 = $_POST["result2"];
        $counOrel = $_POST["counOrel"];
        $counReshka = $_POST["counReshka"];
        $counOrel = $_POST["counOrel"];
        $counReshka = $_POST["counReshka"];
        $skinCheck = $_POST["skinCheck"];
        if($_POST["result1"]){
            $result1 = $_POST["result1"];
            echo "<h2 class='statH2'>Статистика</h2>";
            echo "<div class='statistic'>
                <h3>Orel</h3>
                <p>$counOrel</p>
            </div>";
            echo "<div class='statistic'>
            <h3>Reshka</h3>
            <p>$counReshka</p>
        </div>";
            if($result1 >= 5){
                $money += 2;
                echo "<h1>!!!YOU WIN!!!</h1>";
            }else{
                echo "<h1>!!!YOU LOSE!!!</h1>";
            }
            echo "<p>$result1 / 10</p>";
        }else{
            $result1 = 0;
        }
        if($_POST["result2"]){
            echo "<h2 class='statH2'>Статистика</h2>";
            echo "<div class='statistic'>
                <h3>Orel</h3>
                <p>$counOrel</p>
            </div>";
            echo "<div class='statistic'>
            <h3>Reshka</h3>
            <p>$counReshka</p>
        </div>";
            if($result2 >= 5){
                $money += 3;
                echo "<h1>!!!YOU WIN!!!</h1>";
            }else{
                echo "<h1>!!!YOU LOSE!!!</h1>";
            }
            $result2 = $_POST["result2"];
            echo "<p>$result2 / 10</p>";
        }else{
            $result2 = 0;
        }
        $level = $_POST["level"];
        $result = $_POST["result"];
        if($_POST["result"]){
            echo "<h2 class='statH2'>Статистика</h2>";
            echo "<div class='statistic'>
                <h3>Orel</h3>
                <p>$counOrel</p>
            </div>";
            echo "<div class='statistic'>
            <h3>Reshka</h3>
            <p>$counReshka</p>
        </div>";
            if($result >= 5){
            $money += 1;
                echo "<h1>!!!YOU WIN!!!</h1>";
            }else{
                echo "<h1>!!!YOU LOSE!!!</h1>";
            }
            echo "<p>$result / 10</p>";
        }else{
            $result = 5;
        }
        if($levelGame = "medium"){
            $disabled1 = "";
        }
        ?>
        <form action="index.php" method="post">
        <input type="hidden" name="result" value="<?php echo "$result"; ?>">
        <input type="hidden" name="result1" value="<?php echo "$result1"; ?>">
        <input type="hidden" name="result2" value="<?php echo "$result2"; ?>">
        <input type="hidden" name="level" value="<?php echo "$level"; ?>">
        <input type="hidden"  name="levelGame" value="<?php echo "$levelGame"; ?>">
        <input type="hidden"  name="levelGame2" value="<?php echo "$levelGame2"; ?>">
        <input type="hidden"  name="disabled1" value="<?php echo "$disabled1"; ?>">
        <input type="hidden" name="money" value="<?php echo "$money";?>">
        <input type="hidden" name="skinCheck" value="<?php echo "$skinCheck";?>">
        <button type="submit">На першу сторінку</button>
        </form>
        <?php
        ?>
</body>
</html>