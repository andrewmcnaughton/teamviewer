<?php

declare(strict_types = 1);

namespace Player;

class Player {
	private $name;
	private $age;
	private $number;
	private $goals;

	public function __construct(string $name, int $age, int $number, int $goals) {
		$this->name = $name;
		$this->age = $age;
		$this->number = $number;
		$this->goals = $goals;
	}

	public function getName() {
		return $this->name;
	}

	public function getAge() {
		return $this->age;
	}

	public function getNumber() {
		return $this->number;
	}

	public function getGoals() {
		return $this->goals;
	}			
}