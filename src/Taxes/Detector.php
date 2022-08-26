<?php

namespace App\Taxes;

class Detector {

  public $seuil;

  public function __construct($seuil)
  {
    $this->seuil = $seuil;
  }

  public function detect(float $prix) : bool {
    return $prix > $this->seuil ? true : false;
  }

}