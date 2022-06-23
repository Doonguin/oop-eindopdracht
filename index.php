<?php

include_once('classes/cilinder.class.php');
include_once('classes/vierkant.class.php');
include_once('classes/driehoek.class.php');

$vierkant = new Vierkant(5);
$cilinder = new Cilinder(2, 2);
$driehoek = new Driehoek(7, 4);

echo "Oppervlakte vierkant: " . $vierkant->berekenOppervlakte();
echo "<br>Oppervlakte cilinder: " . $cilinder->berekenOppervlakte();
echo "<br>Oppervlakte driehoek: " . $driehoek->berekenOppervlakte();

?>