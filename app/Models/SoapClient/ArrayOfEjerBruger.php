<?php

namespace App\Models\SoapClient;

class ArrayOfEjerBruger
{

    /**
     * @var EjerBruger[] $EjerBruger
     */
    protected $EjerBruger = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EjerBruger[]
     */
    public function getEjerBruger()
    {
      return $this->EjerBruger;
    }

    /**
     * @param EjerBruger[] $EjerBruger
     * @return ArrayOfEjerBruger
     */
    public function setEjerBruger(array $EjerBruger)
    {
      $this->EjerBruger = $EjerBruger;
      return $this;
    }

}
