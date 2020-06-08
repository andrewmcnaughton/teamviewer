<?php

declare(strict_types = 1);

namespace League;

class League {
	private $name;
	private $teams = [];

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

	// Is there a better way to do this?
	public function getPlayers() {
		$allPlayers = [];

		foreach($this->teams as $team) {
			$allPlayers = array_merge($allPlayers, $team->getPlayers());
		}

		return $allPlayers;
	}

	public function averageAge() {
		$totalAge = 0;
		$count = 0;
		foreach($this->getPlayers() as $player) {
			$totalAge = $totalAge + $player->getAge();
			$count++;
		}
		return $totalAge / $count;

	}

}