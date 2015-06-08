<?php
namespace App\Models\SoapClient;
class GetVehicleInformationByReg
{

    /**
     * @var string $registreringsNummer
     */
    protected $registreringsNummer = null;

    /**
     * @param string $registreringsNummer
     */
    public function __construct($registreringsNummer)
    {
      $this->registreringsNummer = $registreringsNummer;
    }

    /**
     * @return string
     */
    public function getRegistreringsNummer()
    {
      return $this->registreringsNummer;
    }

    /**
     * @param string $registreringsNummer
     * @return GetVehicleInformationByReg
     */
    public function setRegistreringsNummer($registreringsNummer)
    {
      $this->registreringsNummer = $registreringsNummer;
      return $this;
    }

}
