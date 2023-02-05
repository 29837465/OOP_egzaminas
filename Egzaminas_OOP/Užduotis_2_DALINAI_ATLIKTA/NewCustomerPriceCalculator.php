<?php

class NewCustomerPriceCalculator implements TotalCalculatorInterface
{
    public function calculatePrice(array $items): float
    {
        $sum = 0;
        foreach ($items as $item)
        {
            $sum = $item->getPrice();
        }
    
        Return ($item * 0.8) + $sum;
    }
}

