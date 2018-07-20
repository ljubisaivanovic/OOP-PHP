<?php

namespace App\Sokovnik;

class Cediljka
{
    protected $posuda = null;
    protected $kolicina_soka = 0;
    protected $cedjenje_sansa = [1,1,1,0,0,0,0,0,0,0];

    public function __construct(Posuda $posuda)
    {
        $this->posuda = $posuda;
    }

    public function iscediVoce($kapacitet)
    {
        $iscedjenoVoce = [];

        foreach($this->posuda->posuda as $vocka)
        {
            if ($this->cedjenje_sansa[rand(0, 9)] == 1)
            {
                array_push($iscedjenoVoce, $vocka);
                $this->kolicina_soka += $vocka->zapremina();

                if ($this->kolicina_soka >= $kapacitet)
                    throw new PremasenKapacitetException();
                else
                    return true;
            }
        }
    }
}