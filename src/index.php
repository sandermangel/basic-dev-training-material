<?php

require __DIR__ . '/ProductPrice.php';
require __DIR__ . '/Fee.php';
require __DIR__ . '/Tax.php';

$productPrice = new ProductPrice();
echo $productPrice->retailPrice(11, 'NL');