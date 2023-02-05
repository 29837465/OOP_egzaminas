<?php

class OrderProcessor
{
    private $items = [];
    private TotalCalculatorInterface $calculator;

    public function __construct(array $items, TotalCalculatorInterface $totalCalculator)
    {
        $this->items = $items;
        $this->calculator = $totalCalculator;
    }

    public function orderPrice()
    {
        return $this->calculator->calculatePrice($this->items);
    }
}