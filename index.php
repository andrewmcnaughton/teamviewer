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

    $Tottenham = new Team\Team('Spurs');
    $harryKane = new Player\Player('Harry Kane', 27, 10, 200);
    $dayoScholing = new Player\Player('Dayo Scholing', 29, 7, 15);

    $Tottenham->addPlayer($harryKane);
    $Tottenham->addPlayer($dayoScholing);
    $Tottenham->addPlayer($dayoScholing);
	$Tottenham->listPlayers();

    ?>
    
  </body>
</html>