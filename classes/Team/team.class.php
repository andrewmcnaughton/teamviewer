<?php 

namespace Team;

class Team {
	private $name;
	private $players = [];

	public function __construct($name) {
		$this->name = $name;
	}

	public function addPlayer(\Player\Player $playerObject) {
		if(in_array($playerObject, $this->players)) {
			echo 'Error: Failed to add ' . $playerObject->getName() . ', Player already exists!';
		} else {
			$this->players[] = $playerObject;	
		}
	}

	public function getName() {
		return $this->name;
	}

	public function listPlayers() {
		foreach ($this->players as $player) {
			echo '<tr>';
			echo '<td>' . $player->getName() . '</td>';
			echo '<td>' . $player->getAge() . '</td>';
			echo '<td>' . $player->getNumber() . '</td>';
			echo '<td>' . $player->getGoals() . '</td>';
			echo '</tr>';
		}
	}
}

?>

