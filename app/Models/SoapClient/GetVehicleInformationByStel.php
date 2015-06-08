<?php
namespace App\Models\SoapClient;
class GetVehicleInformationByStel
{

    /**
     * @var string $stelNummer
     */
    protected $stelNummer = null;

    /**
     * @param string $stelNummer
     */
    public function __construct($stelNummer)
    {
      $this->stelNummer = $stelNummer;
    }

    /**
     * @return string
     */
    public function getStelNummer()
    {
      return $this->stelNummer;
    }

    /**
     * @param string $stelNummer
     * @return GetVehicleInformationByStel
     */
    public function setStelNummer($stelNummer)
    {
      $this->stelNummer = $stelNummer;
      return $this;
    }

}
