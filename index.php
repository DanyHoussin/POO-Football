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

$teams1 = new Team("PSG", $country1);
$teams2 = new Team("Racing Club Stras", $country1);
$teams3 = new Team("FC Barcelone", $country2);
$teams4 = new Team("Juventus", $country4);
$teams5 = new Team("Manchester United", $country3);
$teams6 = new Team("Real Madrid", $country2);

$joueur1 = new Player("Killian", "Mbappe", "2024-02-23", $country1);
$joueur2 = new Player("Cristiano", "Ronaldo", "2024-02-23", $country5);
$joueur3 = new Player("Lionel", "Messi", "2024-02-23", $country5);
$joueur4 = new Player("Neymar", "Junior", "2024-02-23", $country5);
?>


    <main>
        <div class="containerCountry">
            <?php echo $country1->displayInfo()."<br>";
            echo $country2->displayInfo()."<br>";
            echo $country3->displayInfo()."<br>";
            echo $country4->displayInfo()."<br>";
            echo $country5->displayInfo()."<br>";?>
        </div>
    </main>
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