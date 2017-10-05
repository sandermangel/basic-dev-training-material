<?php

class Fee
{
    /**
     * @param float $price
     * @return float
     */
    public function calculatedAmount(float $price)
    {
        return 1.50 + ($price * 0.05);
    }
}