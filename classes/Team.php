<?php


class Team {

    private string $_name;
    private Country $_country;
    private DateTime $_creationDate;
    private array $players;


    public function __construct(string $name, Country $country, string $creationDate) {
        $this->_name = $name;
        $this->_country = $country;
        $this->_creationDate = new DateTime($creationDate);
        $this->players = array()
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


    public function addPlayer($player){
        $this->players[] = $player;
    }
    

    public function displayInfo(){
        $result = '<div class="cardTeam">';
        $result .= '<h4>'.$this.'</h4>';
        $result .= '<p><small>'.$this->getCountry().' - '.$this->getCreationDate()->format('Y').'</small></p>';
        $result .= '<article class="card-textTeam">';
        foreach($this->players as $career) {
            $result .= '<p><small>'.$career->getPlayer().' ('.$career->getEnterDate().')</small></p>';
        }
        $result .= '</article><br>';
        $result .= '</div>';
        return $result;
    }

    public function __toString() {
        return $this->getName();
    }

}

    