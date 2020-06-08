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

	// This seems so janky
	public function averageAge() {
		$totalAge = 0;
		$count = 0;
		foreach($this->getPlayers() as $player) {
			$totalAge = $totalAge + $player->getAge();
			$count++;
		}

		echo '<br>Average age in ' . $this->name . ' = ' . $totalAge / $count;

	}

	// This seems so janky, can I reuse the allPlayers from above?
	public function mostGoals() {
		$goals = 0;
		$highestScorer = '';
		$allPlayers = [];

		foreach($this->teams as $team) {
			$allPlayers = array_merge($allPlayers, $team->getPlayers());
		}

		foreach($allPlayers as $player) {
			if($player->getGoals() > $goals) {
				$highestScorer = $player->getName();
				$goals = $player->getGoals();
			}
		}

		echo '<br><br>Highest goal scorer is ' . $highestScorer . ' with ' . $goals;
	}
}