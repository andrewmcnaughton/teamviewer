<?php 

declare(strict_types = 1);

namespace Team;

class Team {
	private $name;
	private $players = [];

	public function __construct($name) {
		$this->name = $name;
	}

	public function addPlayer(\Player\Player $playerObject, \League\League $leagueObject) {

		// BROKEN. Check if player alrady exists in the league, eo ensure no double ups. Only works for first team!

		if(in_array($playerObject, $leagueObject->getPlayers())) {
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
		echo '<h3>' . $this->name . '</h3>';
		echo '<table><tr><th>Name</th><th>Age</th><th>Number</th><th>Goals</th></tr><tr>';

		foreach ($this->players as $player) {
			echo '<tr>';
			echo '<td>' . $player->getName() . '</td>';
			echo '<td>' . $player->getAge() . '</td>';
			echo '<td>' . $player->getNumber() . '</td>';
			echo '<td>' . $player->getGoals() . '</td>';
			echo '</tr>';
		}

	  echo '</tr></table>';		
	}
}

?>

