<?php

require_once("data/flight.php");

$pilot = new Pilot();
$pilot->name = "huda";
$pilot->information("CGK - JPN");

$copilot = new CoPilot();
$copilot->name = "Rifqi";
$copilot->information("JPN - CGK");