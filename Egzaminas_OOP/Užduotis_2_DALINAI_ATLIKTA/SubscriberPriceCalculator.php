<?php

class SubscriberPriceCalculator implements TotalCalculatorInterface
{
    public function calculatePrice(array $items): float
    {
        $sum = 0;
        foreach ($items as $item) 
        {
            $sum = $item->getPrice();
        }

        return $sum * 0.9;

    }    
    
}