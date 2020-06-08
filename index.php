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
	$premierLeague = new League\League('Premier League');
	$tottenham = new Team\Team('Spurs');
	$arsenal = new Team\Team('Arsenal');
	$premierLeague->addTeam($tottenham);
	$premierLeague->addTeam($arsenal);

	$harryKane = new Player\Player('Harry Kane', 27, 10, 200);
	$dayoScholing = new Player\Player('Dayo Scholing', 29, 7, 15);
	$nickBendtner = new Player\Player('Nicklas Bendtner', 32, 52, 24);

	$tottenham->addPlayer($harryKane, $premierLeague);
	$tottenham->addPlayer($dayoScholing, $premierLeague);
	$arsenal->addPlayer($nickBendtner, $premierLeague);
	$arsenal->addPlayer($dayoScholing, $premierLeague);

	echo '<h3>' . $tottenham->getName() . '</h3>';?>
	<table>
	  <tr>
	    <th>Name</th>
	    <th>Age</th>
	    <th>Number</th>
	    <th>Goals</th>
	  </tr>
	  <tr>
			<?php $tottenham->tablePlayers();?>    
	  </tr>
	</table>

	<?php echo '<h3>' . $arsenal->getName() . '</h3>';?>
	<table>
	  <tr>
	    <th>Name</th>
	    <th>Age</th>
	    <th>Number</th>
	    <th>Goals</th>
	  </tr>
	  <tr>
			<?php $arsenal->tablePlayers();?>    
	  </tr>
	</table>		
	

</body>
</html>