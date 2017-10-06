<?php

require __DIR__ . '/ProductPrice.php';
require __DIR__ . '/Fee.php';
require __DIR__ . '/Tax.php';
require __DIR__ . '/Shipping.php';

/*
 * fee: 12
 * shipping: 1
 * tax: 2,73
 * total: 15.73
 */

$productPrice = new ProductPrice();
echo $productPrice->retailPrice(10, 'NL');
