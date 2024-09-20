<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Exo POO_Football</title>
</head>
<body>
    

<?php

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});

// ---------------------------------------------
// ------------------ Country ------------------
// ---------------------------------------------

$country1 = new Country("France");
$country2 = new Country("Espagne");
$country3 = new Country("Angleterre");
$country4 = new Country("Italie");
$country5 = new Country("Portugal");

// ---------------------------------------------
// ------------------- Team --------------------
// ---------------------------------------------

$team1 = new Team("PSG", $country1, "1970-08-12");
$team2 = new Team("Racing Club Stras", $country1, "1906-06-10");
$team3 = new Team("FC Barcelone", $country2, "1899-11-19");
$team4 = new Team("Juventus", $country4, "1897-11-01");
$team5 = new Team("Manchester United", $country3, "1878-01-01");
$team6 = new Team("Real Madrid", $country2, "1902-03-06");

// ---------------------------------------------
// ------------------ Player -------------------
// ---------------------------------------------


$player1 = new Player("Kylian", "Mbappé", "1998-12-20", $country1);
$player2 = new Player("Cristiano", "Ronaldo", "1985-02-5", $country5);
$player3 = new Player("Lionel", "Messi", "1987-06-24", $country5);
$player4 = new Player("Neymar", "Junior", "1992-02-5", $country5);

// ---------------------------------------------
// ------------------ Career -------------------
// ---------------------------------------------

$career1 = new Career($player1, $team1, "2017");

$career2 = new Career($player2, $team6, "2009");
$career3 = new Career($player2, $team4, "2018");
$career4 = new Career($player2, $team5, "2021");

$career5 = new Career($player3, $team3, "2004");
$career6 = new Career($player3, $team1, "2021");

$career7 = new Career($player4, $team3, "2013");
$career8 = new Career($player4, $team1, "2017");


// ---------------------------------------------
// ------------------ Front --------------------
// ---------------------------------------------


?>

<div id="wrapper">
    <main>
        <div class="containerCountry">
            <?php 
            echo $country1->displayInfo();
            echo $country2->displayInfo();
            echo $country3->displayInfo();
            echo $country4->displayInfo();
            echo $country5->displayInfo();
            ?>
        </div>
        <div class="containerTeam">
            <?php 
            echo $team1->displayInfo();
            echo $team2->displayInfo();
            echo $team3->displayInfo();
            echo $team4->displayInfo();
            echo $team5->displayInfo();
            echo $team6->displayInfo();
            ?>
        </div>
        <div class="containerPlayer">
            <?php 
            echo $player1->displayInfo();
            echo $player2->displayInfo();
            echo $player3->displayInfo();
            echo $player4->displayInfo();
            ?>
        </div>
    </main>
</div>
</body>
</html>