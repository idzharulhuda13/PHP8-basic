<?php

require_once("data/book.php");

$category = new Category();
$category->setName("$100 startup");
$category->setAvailable(true);

$category->setName(" ");
echo "Name : {$category->getName()}" . PHP_EOL;
echo "Available : {$category->isAvailable()}" . PHP_EOL;

