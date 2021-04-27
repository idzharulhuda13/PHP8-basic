<?php

require_once("data/car.php");

$tesla = new Car("model s", "red");

$tesla->type = "tesla model 3";
$tesla->detailEngine("tesla model s");

return $tesla;