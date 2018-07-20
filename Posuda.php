<?php

namespace App\Sokovnik;

use App\Voce\Vocka;

class Posuda
{
    public $posuda = [];

    protected $dodavanje_sansa = [1,1,1,1,1,1,1,0,0,0];

    public function dodajVocku(Vocka $vocka)
    {
        if ($this->dodavanje_sansa[rand(0, 9)] == 1)
            if ($vocka->crvljiva() == false)
                array_push($this->posuda, $vocka);
    }
}