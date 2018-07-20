<?php

namespace App\Voce;

class Jabuka implements Vocka
{
    protected $crvljiva_sansa = [1,1,0,0,0,0,0,0,0,0];
    
    function crvljiva()
    {
        if ($this->crvljiva_sansa[rand(0, 9)] == 1)
            return true;
        else
            return false;
    }

    function zapremina()
    {
        $interval = rand(1, 3);
        return $interval * 100 / 1000; // litar
    }

    function verovatnoca()
    {
        return 0.2;
    }
}