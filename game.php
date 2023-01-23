<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level choice</title>
       <link rel="stylesheet" href="css/style.css"> 
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
        $gamesCount = $_POST["gamesCount"];
        $gamesCount++;
        if(isset($_POST["choice"])){
            $choice = $_POST["choice"];
        }
        $coinEasy = rand(0, 1);
        $coinMedium = rand(0, 2);
        $coinHard = rand(0, 3);
        $counOrel = $_POST["counOrel"];
        $counReshka = $_POST["counReshka"];
        $counOrel = $_POST["counOrel"];
        $counReshka = $_POST["counReshka"];
        if (isset($_POST["choice"])) {
            echo "<p class='gamesCount'>$gamesCount / 10 games</p>";
        if ($level == "hard") {
            if($coinHard == 0){
                $counOrel++;
            }
            if($coinHard == 1){
                $counReshka++;
            }
            if($coinHard == 2){
                if($choice == 0){
                    $counReshka++;
                }else{
                    $counOrel++;
                }
            }if($coinHard == 3){
                if($choice == 0){
                    $counReshka++;
                }else{
                    $counOrel++;
                }
            }
            if ($coinHard == $choice) {
                $result2++;
                if($choice == 0){
                    echo "<img src='images/eagle-emblem_38348.png' alt='orel' width='100px'>";
                    echo "<p>Orel win</p>";
                }else{
                    echo "<img src='images/number_circle_one_icon_172321.png' alt='reska' width='100px'>";
                    echo "<p class='hover'>Reszka win</p>";
                }
            } else {
                if($choice == 0){
                    echo "<img src='images/number_circle_one_icon_172321.png' alt='reska' width='100px'>";
                    echo "<p class='hover'>Orel lose</p>";
                }else{
                    echo "<img src='images/eagle-emblem_38348.png' alt='orel' width='100px'>";
                    echo "<p class='hover'>Reszka lose</p>";
                }
            }
        } else if ($level == "medium") {
            if($coinMedium == 0){
                $counOrel++;
            }
            if($coinMedium == 1){
                $counReshka++;
            }
            if($coinMedium == 2){
                if($choice == 0){
                    $counReshka++;
                }else{
                    $counOrel++;
                }
            }
            if ($coinMedium == $choice) {
                $result1++;
                if($choice == 0){
                    echo "<img src='images/eagle-emblem_38348.png' alt='orel' width='100px'>";
                    echo "<p class='hover'>Orel win</p>";
                }else{
                    echo "<img src='images/number_circle_one_icon_172321.png' alt='reska' width='100px'>";
                    echo "<p class='hover'>Reszka win</p>";
                }
            } else {
                if($choice == 0){
                    echo "<img src='images/number_circle_one_icon_172321.png' alt='reska' width='100px'>";
                    echo "<p class='hover'>Orel lose</p>";
                }else{
                    echo "<img src='images/eagle-emblem_38348.png' alt='orel' width='100px'>";
                    echo "<p class='hover'>Reszka lose</p>";
                }
            }
        } else if ($level == "easy") {
            if($coinEasy == 0){
                $counOrel++;
            }
            if($coinEasy == 1){
                $counReshka++;
            }
            if ($coinEasy == $choice) {
                $result++;
                if($choice == 0){
                    echo "<img src='images/eagle-emblem_38348.png' alt='orel' width='100px'>";
                    echo "<p class='hover'>Orel win</p>";
                }else{
                    echo "<img src='images/number_circle_one_icon_172321.png' alt='reska' width='100px'>";
                    echo "<p class='hover'>Reszka win</p>";
                }
            } else {
                if($choice == 0){
                    echo "<img src='images/number_circle_one_icon_172321.png' alt='reska' width='100px'>";
                    echo "<p class='hover'>Orel lose</p>";
                }else{
                    echo "<img src='images/eagle-emblem_38348.png' alt='orel' width='100px'>";
                    echo "<p class='hover'>Reszka lose</p>";
                }
            }
        }
    }

?>
    <form class="gameForm" action="<?php
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
    <input type="hidden" name="gamesCount" value="<?php echo "$gamesCount"; ?>">
    <input type="hidden" name="level" value="<?php echo "$level"; ?>">
    <input type="hidden" name="counOrel" value="<?php echo "$counOrel"; ?>">
    <input type="hidden" name="counReshka" value="<?php echo "$counReshka"; ?>">
    <input type="hidden" name="counOrel" value="<?php echo "$counOrel"; ?>">
    <input type="hidden" name="counReshka" value="<?php echo "$counReshka"; ?>">
    <p><?php echo($level); ?></p>
    <label class="coin"><input type="submit" name="choice" value="0"></label>
    <label class="coin1"><input type="submit" name="choice" value="1"></label>
    </form>
</body>
</html>