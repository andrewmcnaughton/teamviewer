<?php 

namespace Team;

class Team {
	private $name;
	private $players = [];

	public function __construct($name) {
		$this->name = $name;
	}

	public function addPlayer(\Player\Player $player) {
		if(in_array($player, $this->players)) {
			echo 'Error: Failed to add ' . $player->getName() . ', Player already exists!';
		} else {
			$this->players[] = $player;	
		}
	}

	public function getName() {
		return $this->name;
	}
	
	public function listPlayers() {
		foreach ($this->players as $player) {
			echo '<br>' . $player->getName();
		}
	}
}

?>