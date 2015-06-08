<?php
namespace App\Models\SoapClient;
class GetKoeretoejModelVariantRegisterRecord_AutoIT
{

    /**
     * @var \DateTime $datoSenestRettet
     */
    protected $datoSenestRettet = null;

    /**
     * @param \DateTime $datoSenestRettet
     */
    public function __construct(\DateTime $datoSenestRettet)
    {
      $this->datoSenestRettet = $datoSenestRettet->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getDatoSenestRettet()
    {
      if ($this->datoSenestRettet == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->datoSenestRettet);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $datoSenestRettet
     * @return GetKoeretoejModelVariantRegisterRecord_AutoIT
     */
    public function setDatoSenestRettet(\DateTime $datoSenestRettet)
    {
      $this->datoSenestRettet = $datoSenestRettet->format(\DateTime::ATOM);
      return $this;
    }

}
