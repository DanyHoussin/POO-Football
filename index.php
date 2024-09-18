<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Exo_Hotel</title>
</head>
<body>
    

<?php

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});

$country1 = new Country("France");
$country2 = new Country("Espagne");
$country3 = new Country("Angleterre");
$country4 = new Country("Italie");
$country5 = new Country("Portugal");

$team1 = new Team("PSG", $country1, "1970-08-12");
$team2 = new Team("Racing Club Stras", $country1, "1906-06-10");
$team3 = new Team("FC Barcelone", $country2, "1899-11-19");
$team4 = new Team("Juventus", $country4, "1897-11-01");
$team5 = new Team("Manchester United", $country3, "1878-01-01");
$team6 = new Team("Real Madrid", $country2, "1902-03-06");

$player1 = new Player("Kylian", "Mbappé", "1998-12-20", $country1);
$player2 = new Player("Cristiano", "Ronaldo", "1985-02-5", $country5);
$player3 = new Player("Lionel", "Messi", "1987-06-24", $country5);
$player4 = new Player("Neymar", "Junior", "1992-02-5", $country5);

$career1 = new Career($player1, $team1, "2017");

// $joueur1->addTeamsCareer($team1);

// $joueur2->addTeamsCareer($team6);
// $joueur2->addTeamsCareer($team4);
// $joueur2->addTeamsCareer($team5);

// $joueur3->addTeamsCareer($team3);
// $joueur3->addTeamsCareer($team1);

// $joueur4->addTeamsCareer($team3);
// $joueur4->addTeamsCareer($team1);
?>

<div id="wrapper">
    <main>
        <div class="containerCountry">
            <?php 
            echo $country1->displayInfo();
            echo $country2->displayInfo()."<br>";
            echo $country3->displayInfo()."<br>";
            echo $country4->displayInfo()."<br>";
            echo $country5->displayInfo()."<br>";
            ?>
        </div>
        <div class="containerTeam">
            <?php 
            echo $team1->displayInfo()."<br>";
            echo $team2->displayInfo()."<br>";
            echo $team3->displayInfo()."<br>";
            echo $team4->displayInfo()."<br>";
            echo $team5->displayInfo()."<br>";
            echo $team6->displayInfo()."<br>";
            ?>
        </div>
        <div class="containerPlayer">
            <?php 
            echo $player1->displayInfo()."<br>";
            echo $player2->displayInfo()."<br>";
            echo $player3->displayInfo()."<br>";
            echo $player4->displayInfo()."<br>";
            ?>
        </div>
    </main>
</div>
</body>
</html>






<!-- Brouillon -->



<!-- <div class="cardCountry">
    <article class="card-textCountry">
        <h4> < ?php echo $country1->getName();?></h4>
        <p> < ?php echo $country1->displayTeams();?>          </p>
    </article>
</div>
<div class="cardCountry">
    <article class="card-textCountry">
        <h4> < ?php echo $country2->getName();?></h4>
        <p> < ?php echo $country2->displayTeams();?>          </p>
    </article>
</div>
<div class="cardCountry">
    <article class="card-textCountry">
        <h4> < ?php echo $country3->getName();?></h4>
        <p> < ?php echo $country3->displayTeams();?>          </p>
    </article>
</div>
<div class="cardCountry">
    <article class="card-textCountry">
        <h4> < ?php echo $country4->getName();?></h4>
        <p> < ?php echo $country4->displayTeams();?>          </p>
    </article>
</div>
<div class="cardCountry">
    <article class="card-textCountry">
        <h4> < ?php echo $country5->getName();?></h4>
        <p> < ?php echo $country5->displayTeams();?>          </p>
    </article>
</div> -->