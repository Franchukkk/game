<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOSS Level</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>If you win you'll have a SPECIAL TICKET</h1>
    <?php
    $resultBoss = $_POST["resultBoss"];
if(isset($_POST["choice"])){
    $coinBoss = rand(0,3);
        if ($coinBoss == $choice) {
            $resultBoss++;
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
    ?>
    <form class="bossForm" action="<?php
        if($resultBoss < 11){
            echo "results.php";
        }else{
            echo "boss.php";
        }
    ?>">
        <p class="levelBoss">Super HARD BOSS level</p>
        <label class="coin"><input type="submit" name="choice" value="0"></label>
        <label class="coin1"><input type="submit" name="choice" value="1"></label>
    </form>
</body>
</html>