<?php


class Country {

    private string $_name;
    private array $players = array();
    private array $teams = array();


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
        $result = '<div class="cardCountry"><br>';
        $result .= '<article class="card-textCountry"><br>';
        $result .= '<h4>'.$this->getName().'</h4>';
        foreach($this->teams as $team) {
            $result .= '<p>'.$team->getName().'</p>';
        }
        $result .= '</article><br>';
        $result .= '</div><br>';
        return $result;
    }


}
