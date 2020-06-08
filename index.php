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
	$tottenham->addPlayer($harryKane);
	$tottenham->addPlayer($dayoScholing);
	$tottenham->addPlayer($dayoScholing);

	echo '<h3>' . $tottenham->getName() . '</h3>';?>
	<table>
	  <tr>
	    <th>Name</th>
	    <th>Age</th>
	    <th>Number</th>
	    <th>Goals</th>
	  </tr>
	  <tr>
			<?php $tottenham->listPlayers();?>    
	  </tr>
	</table>	
	

</body>
</html>