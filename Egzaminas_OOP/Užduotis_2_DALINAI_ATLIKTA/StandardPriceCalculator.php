<?php

class StandardPriceCalculator implements TotalCalculatorInterface
{
    public function calculatePrice()
    {
        //standartinis -> praeina per visus ticketus ir sudeda ju kainą
        return 'Standartinis kainos skaičiavimas: ' . $this->calculatePrice();
    }
}