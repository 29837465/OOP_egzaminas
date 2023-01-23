<?php

interface TotalCalculatorInterface
{
    public function calculatePrice()
    {
        
    }
}

class CinemaTicket
{
    public string $filmoPavadinimas;
    public string $vieta;
    public DateTime $seansoData;
    public float $kaina;
    
    public function __construct(string $filmoPavadinimas, string $vieta, DateTime $seansoData, float $kaina)
    {
        $this->filmoPavadinimas = $filmoPavadinimas;
        $this->vieta = $vieta;
        $this->seansoData = $seansoData;
        $this->kaina = $kaina;

    }

}
