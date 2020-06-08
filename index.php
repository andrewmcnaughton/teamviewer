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
	
	$harryKane = new Player\Player('Harry Kane', 27, 10, 200);
	$dayoScholing = new Player\Player('Dayo Scholing', 29, 7, 15);

	$tottenham = new Team\Team('Spurs');
	// $tottenham->addPlayer($harryKane);
	// $tottenham->addPlayer($dayoScholing);
	// $tottenham->addPlayer($dayoScholing);

	// $premierLeague = new League\League('Premier League');
	// $premierLeague->addTeam($tottenham);
	// $premierLeague->addTeam($tottenham);

	// $premierLeague->displayTeams();

	$premierLeague = new League\League('Premier League');
	$premierLeague->addPlayer($harryKane, $tottenham);
	$premierLeague->addPlayer($dayoScholing, $tottenham);

	$premierLeague = $premierLeague->groupByTeam('team');
	print_r($premierLeague);
	?>    

</body>
</html>