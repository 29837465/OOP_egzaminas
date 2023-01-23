<?php

class NewCustomerPriceCalculator implements TotalCalculatorInterface
{
    //naujo vartotojo nuolaida -> praeina per visus ticket, taiko nuolaida tik pirmam itemui 20%
    Return 'Naujo vartotojo kainos skaičiavimas: ' . $this->calculatePrice() * 0.8;
}




