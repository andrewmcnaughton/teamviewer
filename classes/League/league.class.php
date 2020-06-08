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

	// This only works for first team
	public function getPlayers() {
		foreach($this->teams as $team) {
			return $team->getPlayers();
		}
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