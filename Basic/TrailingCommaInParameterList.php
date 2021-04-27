<?php

function orderFood(string $store, string $item)
{

}

orderFood(
    "KFC",
    "Paket Hemat 1 tanpa CD nya",
);

$listOrder = [
    "store" => "KFC",
    "item" => "Paket Hmat 1 tanpa CD nya",
    "delivery_pricec" => "12.000",
    "discount" => "5.000",
    "total" => "38.000",
    "driver" => "Jamal",
];

print_r($listOrder);