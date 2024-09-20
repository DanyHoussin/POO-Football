<?php


class Player {

    private string $_firstName;
    private string $_lastName;
    private DateTime $_dateBirth;
    private Country $_nationality;
    private array $teamsCareer;



    public function __construct(string $firstName, string $lastName, string $dateBirth, Country $nationality) {
        $this->_firstName = $firstName;
        $this->_lastName = $lastName;
        $this->_dateBirth = new DateTime($dateBirth);
        $this->_nationality = $nationality;
        $this->teamsCareer = array();
        $nationality->addPlayer($this);
    }

    public function getFirstName() {
        return $this->_firstName;
    }
    public function getLastName() {
        return $this->_lastName;
    }
    public function getDateBirth() {
        return $this->_dateBirth;
    }
    public function getNationality() {
        return $this->_nationality;
    }


    public function setFirstName(string $firstName) {
        $this->_firstName = $firstName;
    }
    public function setLastName(string $lastName) {
        $this->_lastName = $lastName;
    }
    public function setDateBirth(string $dateBirth) {
        $this->_dateBirth = new DateTime($dateBirth);
    }
    public function setNationality(Country $nationality) {
        $this->_nationality = $nationality;
    }
    

    public function addTeamsCareer($team){
        $this->teamsCareer[] = $team;
    }
    public function getAge() {
        $date = new DateTime();
        $age = $date->diff($this->getDateBirth(), true); 
        return $age->y;
    }

    public function displayInfo(){
        $result = '<div class="cardPlayer">';
        $result .= '<h4>'.$this.'</h4>';
        $result .= '<p><small>'.$this->getNationality().' - '.$this->getAge().' ans</small></p>';
        $result .= '<article class="card-textPlayer">';
        foreach($this->teamsCareer as $career) {
            $result .= '<p><small>'.$career->getTeam().' ('.$career->getEnterDate().')</small></p>';
        }
        $result .= '</article><br>';
        $result .= '</div>';
        return $result;
    }

    public function __toString() {
        return $this->getFirstName()." ".$this->getLastName();
    }

    
}

    