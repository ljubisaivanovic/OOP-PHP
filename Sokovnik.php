<?php

namespace App\Sokovnik;

class Sokovnik
{
    protected static $instance;
    protected $posuda = null;
    protected $kapacitet = 30; // kilogrami

    protected function __construct() {}

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    public function postaviPosudu(Posuda $posuda)
    {
        $this->posuda = $posuda;
    }
    
    public function iscediVoceIzPosude()
    {
        $cediljka = new Cediljka($this->posuda);
        $iscedjeno = $cediljka->iscediVoce($this->kapacitet);

        echo $iscedjeno ? "Uspesno iscedjeno" : "Nije uspesno iscedjeno";
    }
}

