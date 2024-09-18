<?php


class Team {

    private string $_name;
    private Country $_country;
    private DateTime $_creationDate;
    private array $players = array();


    public function __construct(string $name, Country $country, string $creationDate) {
        $this->_name = $name;
        $this->_country = $country;
        $this->_creationDate = new DateTime($creationDate);
        $country->addTeam($this);
    }

    public function getName() {
        return $this->_name;
    }
    public function getCountry() {
        return $this->_country;
    }
    public function getCreationDate() {
        return $this->_creationDate;
    }


    public function setName(string $name) {
        $this->_name = $name;
    }
    public function setCountry(Country $country) {
        $this->_country = $country;
    }
    public function setCreationDate(string $creationDate) {
        $this->_creationDate = new DateTime($creationDate);
    }


    public function addPlayer(Player $player){
        $this->players[] = $player;
    }
    

    public function displayInfo(){
        $result = '<div class="cardTeam">';
        $result .= '<h4>'.$this->getName().'</h4>';
        $result .= '<p><small>'.$this->getCountry()->getName().' - '.$this->getCreationDate()->format('Y').'</small></p>';
        $result .= '<article class="card-textTeam">';
        foreach($this->players as $player) {
            $result .= '<p><small>'.$player.'</small></p>';
        }
        $result .= '</article><br>';
        $result .= '</div><br>';
        return $result;
    }

}

    