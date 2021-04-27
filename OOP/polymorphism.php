<?php

require_once("data/transportation.php");

$airport = new Airport();
$airport->lion_air = new LionAir("CGK - JPN");
var_dump($airport);

$airport = new Airport();
$airport->lion_air = new BatikAir("JPN - SGP");
var_dump($airport);

$airport = new Airport();
$airport->lion_air = new WingsAir("SGP - CGK");
var_dump($airport);

return flightRute(new LionAir("JPN - CGK"));