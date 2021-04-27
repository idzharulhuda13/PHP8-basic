<?php

require_once("data/car.php");

//object
$tesla = new Car("model s", "red");
//object->function
$tesla->detailEngine("tesla model S");

return $tesla;