<?php

Class OrderProcessor
{
    private float $items = CinemaTicket[
        1 => '10 EUR',
        2 => '14 EUR',
        3 => '8 EUR'
    ];

    var_dump($items);
    public float $calculator;

    public function __construct(float $calculator)
    {
        $this->calculator = $calculator;
    }

    public function addItem (CinemaTicket $ticket)
    {
        $this->ticket = $ticket;
    }

    public function getList($items)
    {
        $this->items[CinemaTicket] = $item;
    }

    public function calculatePrice(): float;
    {
        
    }
}