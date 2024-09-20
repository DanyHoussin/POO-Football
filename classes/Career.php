<?php


class Career {

    private Player $_player;
    private Team $_team;
    private string $_enterDate;


    public function __construct(Player $player, Team $team, string $enterDate) {
        $this->_player = $player;
        $this->_team = $team;
        $this->_enterDate = $enterDate;
        $team->addPlayer($this);
        $player->addTeamsCareer($this);
    }

    public function getPlayer() {
        return $this->_player;
    }
    public function getTeam() {
        return $this->_team;
    }
    public function getEnterDate() {
        return $this->_enterDate;
    }

    public function setPlayer(Player $player) {
        $this->_player = $player;
    }
    public function setTeam(Team $team) {
        $this->_team = $team;
    }
    public function setEnterDate(string $enterDate) {
        $this->_enterDate = $enterDate;
    }


}
