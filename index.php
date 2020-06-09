<?php
declare(strict_types = 1);
include 'includes/autoloader.inc.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<style type="text/css">
			table {
				border-collapse: collapse;
				border-spacing: 0px;
			}
			table, th, td {
				padding: 5px;
				border: 1px solid black;
			}
		</style>	
		<title></title>
	</head>
	<body>

		<?php

		// Create Premier League
		$premierLeague = new League\League('Premier League');

		// Create Teams
		$tottenham = new Team\Team('Spurs');
		$arsenal = new Team\Team('Arsenal');

		// Add Teams to Premier League
		$premierLeague->addTeam($tottenham);
		$premierLeague->addTeam($arsenal);

		// Create Players, Name, Age, Number, Goals, League
		$harryKane = new Player\Player('Harry Kane', 27, 10, 200, $premierLeague);
		$dayoScholing = new Player\Player('Dayo Scholing', 29, 7, 15, $premierLeague);
		$nickBendtner = new Player\Player('Nicklas Bendtner', 32, 52, 24, $premierLeague);

		// Add Players to Teams
		$tottenham->addPlayer($harryKane, $premierLeague);
		$tottenham->addPlayer($dayoScholing, $premierLeague);
		$arsenal->addPlayer($nickBendtner, $premierLeague);

		// Add duplicate player to test
		$arsenal->addPlayer($nickBendtner, $premierLeague);
		
		// Output Teams
		$tottenham->tablePlayers();
		$arsenal->tablePlayers();

		// Average age of League
		$premierLeague->averageAge();

		// Most Goals
		$premierLeague->mostGoals();

		?>
	</body>
</html>