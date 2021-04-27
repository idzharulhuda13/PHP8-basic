<?php

require_once("data/shipping.php");

$delivery = new Shipping("Huda", "Jakarta", "08213141", 25000);

// echo $delivery->contact;
echo $delivery->getContact();

$customer = new Customer("Jaka", "Jakarta", "124567", 200000);

echo $customer->getTotalTransactions();