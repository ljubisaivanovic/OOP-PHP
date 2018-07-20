<?php

require_once "Posuda.php";
require_once "Cediljka.php";
require_once "Sokovnik.php";
require_once "Voce/Vocka.php";
require_once "Voce/Jabuka.php";

use App\Sokovnik\Posuda;
use App\Sokovnik\Sokovnik;
use App\Voce\Jabuka;

$sokovnik = Sokovnik::getInstance();
$posuda = new Posuda();

for ($i = 0; $i < 100; $i++)
{
    $jabuka = new Jabuka();
    $posuda->dodajVocku($jabuka);
}

$sokovnik->postaviPosudu($posuda);
$sokovnik->iscediVoceIzPosude();