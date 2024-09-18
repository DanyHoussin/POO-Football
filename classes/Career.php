<?php


class Career {

    private Player $_player;
    private Team $_team;
    private string $_enterDate;


    public function __construct(Player $player, Team $team, string $enterDate) {
        $this->_player = $player;
        $this->_team = $team;
        $this->_enterDate = $enterDate;
        $team->addPlayer($this->_player);
    }

    public function getName() {
        return $this->_name;
    }

    public function setName(string $name) {
        $this->_name = $name;
    }


    public function addTeamsCareer(Team $team){
        $this->teamsCareer[] = $team;
        $team->addPlayer($this);
    }

    public function displayInfo(){
        $result = '<div class="cardCountry">';
        $result .= '<h4>'.$this->getName().'</h4>';
        $result .= '<article class="card-textCountry">';
        foreach($this->teams as $team) {
            $result .= '<p><small>'.$team->getName().'</small></p>';
        }
        $result .= '</article><br>';
        $result .= '</div><br>';
        return $result;
    }


}
