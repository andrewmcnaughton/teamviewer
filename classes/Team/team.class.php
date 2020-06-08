<?php 

namespace Team;

class Team {
	private $name;
	private $players = [];

	public function __construct($name) {
		$this->name = $name;
	}

	public function addPlayer(\Player\Player $playerObject, \League\League $leagueObject) {

		// Check if player alrady exists in the league, eo ensure no double ups

		if(in_array($playerObject, $leagueObject->getLeaguePlayers())) {
			echo 'Error: Failed to add ' . $playerObject->getName() . ' to ' . $this->name . ', player already exists!';
		} else {
			$this->players[] = $playerObject;	
		}

	}

	public function getName() {
		return $this->name;
	}

	public function getPlayers() {
		return $this->players;
	}

	public function tablePlayers() {
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

