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
    <h1>Гра ОРЕЛ чи РЕШКА</h1>
    <form action="game.php" method="post">
        <?php
        $disabled = "disabled";
        $disabled1 = "disabled";
        if(isset($_POST["result"])){
            $result = $_POST["result"];
        }else{
            $result = 0;
        }
        if($_POST){
            $levelGame = $_POST["levelGame"];
            if($levelGame == "medium" && $result > 5 ){
                $disabled = "";
            }else if($levelGame == "notmedium"){
                $disabled = "disabled";
            }
            $levelGame2 = $_POST["levelGame2"];
            if($levelGame2 == "hard"){
                $disabled1 = "";
            }else if($levelGame2 == "nothard"){
                $disabled1 = "disabled";
            }
            $result1 = $_POST["result1"];
        }else{
            $result1 = 0;
            $result2 = 0;
        }
        ?>  
        <input type="hidden" name="game" value="0">
        <input type="hidden" name="gamesCount" value="-1">
        <input type="hidden" name="result" value="<?php $result; ?>">
        <input type="hidden" name="result1" value="<?php $result1; ?>">
        <input type="hidden" name="result2" value="<?php $result2; ?>">
        <input type="hidden" name="counOrel" value="0">
        <input type="hidden" name="counReshka" value="0">
        <select name="level" id="level">
            <option value="easy">easy</option>
            <option value="medium" <?php
            if($result < 5){
                echo "$disabled";
            }
            ?>>medium</option>
            <option value="hard"<?php
            if($result1 < 5){
                echo "$disabled1";
            }
            ?>>hard</option>
        </select>
        <button type="submit">Грати!</button>
    </form>
</body>
</html>