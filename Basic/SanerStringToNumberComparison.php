<?php

$compare_1 = 0 == "0";
$compare_2 = 0 == "0.0";
$compare_3 = 0 == "kalimat";
$compare_4 = 0 == "";
$compare_5 = 12 == "      12      ";
$compare_6 = 12== "ini adlaah string12";

var_dump($compare_1);
var_dump($compare_2);
var_dump($compare_3);
var_dump($compare_4);
var_dump($compare_5);
var_dump($compare_6);