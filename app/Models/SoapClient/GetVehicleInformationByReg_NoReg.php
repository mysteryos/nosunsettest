<?php
namespace App\Models\SoapClient;
class GetVehicleInformationByReg_NoReg
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
     * @return GetVehicleInformationByReg_NoReg
     */
    public function setRegistreringsNummer($registreringsNummer)
    {
      $this->registreringsNummer = $registreringsNummer;
      return $this;
    }

}
