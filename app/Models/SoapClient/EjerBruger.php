<?php
namespace App\Models\SoapClient;
class EjerBruger
{

    /**
     * @var string $CVR_CPR
     */
    protected $CVR_CPR = null;

    /**
     * @var EjerBrugerForholdType $EjerBrugerForhold
     */
    protected $EjerBrugerForhold = null;

    /**
     * @var EjerBrugerEnhedsType $EjerBrugerType
     */
    protected $EjerBrugerType = null;

    /**
     * @var string $HusBogstav
     */
    protected $HusBogstav = null;

    /**
     * @var string $HusNummer
     */
    protected $HusNummer = null;

    /**
     * @var string $Navn
     */
    protected $Navn = null;

    /**
     * @var string $PostDistrikt
     */
    protected $PostDistrikt = null;

    /**
     * @var string $PostNummer
     */
    protected $PostNummer = null;

    /**
     * @var boolean $Primaer
     */
    protected $Primaer = null;

    /**
     * @var string $ProduktionEnhedNummer
     */
    protected $ProduktionEnhedNummer = null;

    /**
     * @var string $SENummer
     */
    protected $SENummer = null;

    /**
     * @var string $VejNavn
     */
    protected $VejNavn = null;

    /**
     * @param EjerBrugerForholdType $EjerBrugerForhold
     * @param EjerBrugerEnhedsType $EjerBrugerType
     * @param boolean $Primaer
     */
    public function __construct($EjerBrugerForhold, $EjerBrugerType, $Primaer)
    {
      $this->EjerBrugerForhold = $EjerBrugerForhold;
      $this->EjerBrugerType = $EjerBrugerType;
      $this->Primaer = $Primaer;
    }

    /**
     * @return string
     */
    public function getCVR_CPR()
    {
      return $this->CVR_CPR;
    }

    /**
     * @param string $CVR_CPR
     * @return EjerBruger
     */
    public function setCVR_CPR($CVR_CPR)
    {
      $this->CVR_CPR = $CVR_CPR;
      return $this;
    }

    /**
     * @return EjerBrugerForholdType
     */
    public function getEjerBrugerForhold()
    {
      return $this->EjerBrugerForhold;
    }

    /**
     * @param EjerBrugerForholdType $EjerBrugerForhold
     * @return EjerBruger
     */
    public function setEjerBrugerForhold($EjerBrugerForhold)
    {
      $this->EjerBrugerForhold = $EjerBrugerForhold;
      return $this;
    }

    /**
     * @return EjerBrugerEnhedsType
     */
    public function getEjerBrugerType()
    {
      return $this->EjerBrugerType;
    }

    /**
     * @param EjerBrugerEnhedsType $EjerBrugerType
     * @return EjerBruger
     */
    public function setEjerBrugerType($EjerBrugerType)
    {
      $this->EjerBrugerType = $EjerBrugerType;
      return $this;
    }

    /**
     * @return string
     */
    public function getHusBogstav()
    {
      return $this->HusBogstav;
    }

    /**
     * @param string $HusBogstav
     * @return EjerBruger
     */
    public function setHusBogstav($HusBogstav)
    {
      $this->HusBogstav = $HusBogstav;
      return $this;
    }

    /**
     * @return string
     */
    public function getHusNummer()
    {
      return $this->HusNummer;
    }

    /**
     * @param string $HusNummer
     * @return EjerBruger
     */
    public function setHusNummer($HusNummer)
    {
      $this->HusNummer = $HusNummer;
      return $this;
    }

    /**
     * @return string
     */
    public function getNavn()
    {
      return $this->Navn;
    }

    /**
     * @param string $Navn
     * @return EjerBruger
     */
    public function setNavn($Navn)
    {
      $this->Navn = $Navn;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostDistrikt()
    {
      return $this->PostDistrikt;
    }

    /**
     * @param string $PostDistrikt
     * @return EjerBruger
     */
    public function setPostDistrikt($PostDistrikt)
    {
      $this->PostDistrikt = $PostDistrikt;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostNummer()
    {
      return $this->PostNummer;
    }

    /**
     * @param string $PostNummer
     * @return EjerBruger
     */
    public function setPostNummer($PostNummer)
    {
      $this->PostNummer = $PostNummer;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPrimaer()
    {
      return $this->Primaer;
    }

    /**
     * @param boolean $Primaer
     * @return EjerBruger
     */
    public function setPrimaer($Primaer)
    {
      $this->Primaer = $Primaer;
      return $this;
    }

    /**
     * @return string
     */
    public function getProduktionEnhedNummer()
    {
      return $this->ProduktionEnhedNummer;
    }

    /**
     * @param string $ProduktionEnhedNummer
     * @return EjerBruger
     */
    public function setProduktionEnhedNummer($ProduktionEnhedNummer)
    {
      $this->ProduktionEnhedNummer = $ProduktionEnhedNummer;
      return $this;
    }

    /**
     * @return string
     */
    public function getSENummer()
    {
      return $this->SENummer;
    }

    /**
     * @param string $SENummer
     * @return EjerBruger
     */
    public function setSENummer($SENummer)
    {
      $this->SENummer = $SENummer;
      return $this;
    }

    /**
     * @return string
     */
    public function getVejNavn()
    {
      return $this->VejNavn;
    }

    /**
     * @param string $VejNavn
     * @return EjerBruger
     */
    public function setVejNavn($VejNavn)
    {
      $this->VejNavn = $VejNavn;
      return $this;
    }

}
