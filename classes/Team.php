<?php


class Team {

    private string $_name;
    private Country $_country;
    private array $players = array();


    public function __construct(string $name, Country $country) {
        $this->_name = $name;
        $this->_country = $country;
        $country->addTeam($this);
    }

    public function getName() {
        return $this->_name;
    }
    public function getCountry() {
        return $this->_country;
    }


    public function setName(string $name) {
        $this->_name = $name;
    }
    public function setCountry(Country $country) {
        $this->_country = $country;
    }


    public function addPlayer(Player $player){
        $this->players[] = $player;
    }

}

    