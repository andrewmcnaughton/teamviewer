<?php
declare(strict_types = 1);
include 'includes/autoloader.inc.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
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

	echo '<h3>' . $tottenham->getName() . '</h3>';
	$tottenham->listPlayers();

	?>

</body>
</html>