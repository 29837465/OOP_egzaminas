<?php

class SubscriberPriceCalculator implements TotalCalculatorInterface
{
    //su subscriberio nuolaida -> praiena per visus ticketus, sudeda ju suma ir taiko  10% nuolaida
    Return 'Su subcriberio 10% nuolaida kainos skaičiavimas: ' . $this->calculatePrice() * 0.9;
    
}