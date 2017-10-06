<?php

class Shipping
{
    /**
     * @param float $price
     * @return float
     */
    public function feeAmount(float $price)
    {
        return $price > 5 ? 1 : 2;
    }
}