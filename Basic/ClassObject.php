<?php

class Order{}

$check_class = new Order();

var_dump(get_class($check_class));
var_dump($check_class::class);