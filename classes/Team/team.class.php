<?php 

declare(strict_types = 1);

namespace Team;

class Team {
	private $name;
	private $players = [];

	public function __construct($name) {
		$this->name = $name;
	}

	public function getName() {
		return $this->name;
	}

}

?>