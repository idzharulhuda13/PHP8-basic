<?php

require_once("data/car.php");

//object
$tesla = new car("model s", "red");
//object->property
$tesla->type = "Model 3";
$tesla->paint = "red";
$tesla->tire = "yokohama";

var_dump($tesla);