<?php


class Country {

    private string $_name;
    private array $player;
    private array $teams;


    public function __construct(string $name) {
        $this->_name = $name;
        $this->players = array();
        $this->teams = array();
    }

    public function getName() {
        return $this->_name;
    }

    public function setName(string $name) {
        $this->_name = $name;
    }


    public function addPlayer(Player $player){
        $this->players[] = $player;
    }
    public function addTeam(Team $team){
        $this->teams[] = $team;
    }
    
    public function displayTeams(){
        foreach($this->teams as $team) {
            echo $team->getName()."<br>";
        }
    }

    public function displayInfo(){
        $result = '<div class="cardCountry">';
        $result .= '<h4>'.$this.'</h4>';
        $result .= '<article class="card-textCountry">';
        foreach($this->teams as $team) {
            $result .= '<p><small>'.$team.'</small></p>';
        }
        $result .= '</article><br>';
        $result .= '</div>';
        return $result;
    }

    public function __toString() {
        return $this->getName();
    }

}
