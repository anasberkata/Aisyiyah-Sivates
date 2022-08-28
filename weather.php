<?php

include('weather-class.inc.php'); // This has all the code.

$w = new Weather('50.799995', '-1.065545'); // Input the Latitude and Longitude
echo $w->getLocation()->getWeather()->sayHuman();
// Ouput~: Portsmouth, England, PO4 8 | Partly Cloudy 4°C, Humidity: 93%, Wind: N at 8 mph

?>