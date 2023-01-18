<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level choice</title>
</head>
<body>
    <?php
        $result = $_POST["result"];
        $result1 = $_POST["result1"];
        $result2 = $_POST["result2"];
        $level = $_POST["level"];
        if($level !== "medium"){
            $levelGame = "notmedium";
        }else{
            $levelGame = "medium";
        }
        if($level !== "hard"){
            $levelGame2 = "nothard";
        }else{
            $levelGame2 = "hard";
        }
        $game = $_POST["game"];
        $game++;
        if(isset($_POST["choice"])){
            $choice = $_POST["choice"];
        }
        $coin = rand(0, 1);
        if(isset($_POST["choice"])){
            if ($coin == $choice) {
                if ($level == "hard") {
                    $result2++;
                    $coin = rand(0, 3);
                    if ($choice == 0) {
                        echo "Orel Win";
                    } else if ($choice == 1) {
                        echo "Reshka Win";
                    }
                } else if ($level == "medium") {
                    $result1++;
                    $coin = rand(0, 2);
                    if ($choice == 0) {
                        echo "Orel Win";
                    } else if ($choice == 1) {
                        echo "Reshka Win";
                    }
                } else if ($level == "easy") {
                    $result++;
                    $coin = rand(0, 1);
                        if ($choice == 0) {
                            echo "Orel Win";
                        } else if ($choice == 1) {
                            echo "Reshka Win";
                        }
                }
                } else{
                    if ($choice == 0) {
                        echo "Orel Lose";
                    } else if ($choice == 1) {
                        echo "Reshka Lose";
                    }
                }
        }
?>
    <form action="<?php
    if($game < 11){
        echo "game.php";
    }else if($game == 11) {
        echo "results.php";
    }
?>" method="post">
    <input type="hidden"  name="result" value="<?php echo "$result"; ?>">
    <input type="hidden"  name="result1" value="<?php echo "$result1"; ?>">
    <input type="hidden"  name="result2" value="<?php echo "$result2"; ?>">
    <input type="hidden"  name="levelGame" value="<?php echo "$levelGame"; ?>">
    <input type="hidden"  name="levelGame2" value="<?php echo "$levelGame2"; ?>">
    <input type="hidden" name="game" value="<?php echo "$game"; ?>">
    <input type="hidden" name="level" value="<?php echo "$level"; ?>">
    <p><?php echo($level); ?></p>
    <label><input type="submit" name="choice" value="0">Orel</label>
    <label><input type="submit" name="choice" value="1">Reszka</label>
    </form>
</body>
</html>