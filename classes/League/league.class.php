<?php

declare(strict_types = 1);

namespace League;

class League {
	private $name;
	private $players = [];

	public function __construct($name) {
		$this->name = $name;
	}

	public function addTeam(\Team\Team $teamObject) {
		if(in_array($teamObject, $this->teams)) {
			echo '<br>Error: Failed to add ' . $teamObject->getName() . ', Team already exists!';
		} else {
			$this->teams[] = $teamObject;	
		}
	}

	public function getName() {
		return $this->name;
	}

	public function addPlayer(\Player\Player $playerObject, \Team\Team $teamObject) {
		// if(in_array($playerObject, $this->players)) {
		// 	echo '<br>Error: Failed to add ' . $playerObject->getName() . ', Player already exists!';
		// } else {
		// 	$this->players[] = $playerObject;	
		// }
		$this->players[$playerObject->getName()] = [];
		$this->players[$playerObject->getName()]['team'] = $teamObject->getName();
		$this->players[$playerObject->getName()]['age'] = $playerObject->getAge();
		$this->players[$playerObject->getName()]['number'] = $playerObject->getNumber();
		$this->players[$playerObject->getName()]['goals'] = $playerObject->getGoals();
	}

	public function groupByTeam($groupOn) {
	    $grouped = [];
	    foreach($this->players as $key => $val) {
	        $grouped[$val[$groupOn]][$key] = $val;
	    }
	    return $grouped;
	}

	public function displayTeams() {
		foreach($this->teams as $team) {
			echo '<h3>' . $team->getName() . '</h3>';
			echo '<table><tr><th>Name</th><th>Age</th><th>Number</th><th>Goals</th></tr>';
			foreach ($team->getPlayers() as $player) {
				echo '<tr>';
				echo '<td>' . $player->getName() . '</td>';
				echo '<td>' . $player->getAge() . '</td>';
				echo '<td>' . $player->getNumber() . '</td>';
				echo '<td>' . $player->getGoals() . '</td>';
				echo '</tr>';
			}
			echo '</table>';
		}
	}
}