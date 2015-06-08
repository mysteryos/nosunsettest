<?php
namespace App\Models\SoapClient;
class VehicleInformation
{

    /**
     * @var string $AnvendelseNavn
     */
    protected $AnvendelseNavn = null;

    /**
     * @var string $AnvendelseNummer
     */
    protected $AnvendelseNummer = null;

    /**
     * @var string $EgenVaegt
     */
    protected $EgenVaegt = null;

    /**
     * @var ArrayOfEjerBruger $EjerBrugere
     */
    protected $EjerBrugere = null;

    /**
     * @var \DateTime $FoersteRegistreringDato
     */
    protected $FoersteRegistreringDato = null;

    /**
     * @var guid $Id
     */
    protected $Id = null;

    /**
     * @var string $Karrosseri
     */
    protected $Karrosseri = null;

    /**
     * @var string $KarrosseriNummer
     */
    protected $KarrosseriNummer = null;

    /**
     * @var string $KoeretoejIdent
     */
    protected $KoeretoejIdent = null;

    /**
     * @var string $Maerke
     */
    protected $Maerke = null;

    /**
     * @var string $MaerkeNummer
     */
    protected $MaerkeNummer = null;

    /**
     * @var string $Model
     */
    protected $Model = null;

    /**
     * @var string $ModelNummer
     */
    protected $ModelNummer = null;

    /**
     * @var ArrayOfVehicleInformation $MoreVehicles
     */
    protected $MoreVehicles = null;

    /**
     * @var float $MotorEffekt
     */
    protected $MotorEffekt = null;

    /**
     * @var float $MotorEffektHK
     */
    protected $MotorEffektHK = null;

    /**
     * @var string $RegistreringsNummer
     */
    protected $RegistreringsNummer = null;

    /**
     * @var string $StelNummer
     */
    protected $StelNummer = null;

    /**
     * @var string $TotalVaegt
     */
    protected $TotalVaegt = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var string $TypeGodkendelseNummer
     */
    protected $TypeGodkendelseNummer = null;

    /**
     * @var string $TypeNummer
     */
    protected $TypeNummer = null;

    /**
     * @var string $Variant
     */
    protected $Variant = null;

    /**
     * @var string $VariantNummer
     */
    protected $VariantNummer = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAnvendelseNavn()
    {
      return $this->AnvendelseNavn;
    }

    /**
     * @param string $AnvendelseNavn
     * @return VehicleInformation
     */
    public function setAnvendelseNavn($AnvendelseNavn)
    {
      $this->AnvendelseNavn = $AnvendelseNavn;
      return $this;
    }

    /**
     * @return string
     */
    public function getAnvendelseNummer()
    {
      return $this->AnvendelseNummer;
    }

    /**
     * @param string $AnvendelseNummer
     * @return VehicleInformation
     */
    public function setAnvendelseNummer($AnvendelseNummer)
    {
      $this->AnvendelseNummer = $AnvendelseNummer;
      return $this;
    }

    /**
     * @return string
     */
    public function getEgenVaegt()
    {
      return $this->EgenVaegt;
    }

    /**
     * @param string $EgenVaegt
     * @return VehicleInformation
     */
    public function setEgenVaegt($EgenVaegt)
    {
      $this->EgenVaegt = $EgenVaegt;
      return $this;
    }

    /**
     * @return ArrayOfEjerBruger
     */
    public function getEjerBrugere()
    {
      return $this->EjerBrugere;
    }

    /**
     * @param ArrayOfEjerBruger $EjerBrugere
     * @return VehicleInformation
     */
    public function setEjerBrugere($EjerBrugere)
    {
      $this->EjerBrugere = $EjerBrugere;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFoersteRegistreringDato()
    {
      if ($this->FoersteRegistreringDato == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->FoersteRegistreringDato);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $FoersteRegistreringDato
     * @return VehicleInformation
     */
    public function setFoersteRegistreringDato(\DateTime $FoersteRegistreringDato)
    {
      $this->FoersteRegistreringDato = $FoersteRegistreringDato->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return guid
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param guid $Id
     * @return VehicleInformation
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getKarrosseri()
    {
      return $this->Karrosseri;
    }

    /**
     * @param string $Karrosseri
     * @return VehicleInformation
     */
    public function setKarrosseri($Karrosseri)
    {
      $this->Karrosseri = $Karrosseri;
      return $this;
    }

    /**
     * @return string
     */
    public function getKarrosseriNummer()
    {
      return $this->KarrosseriNummer;
    }

    /**
     * @param string $KarrosseriNummer
     * @return VehicleInformation
     */
    public function setKarrosseriNummer($KarrosseriNummer)
    {
      $this->KarrosseriNummer = $KarrosseriNummer;
      return $this;
    }

    /**
     * @return string
     */
    public function getKoeretoejIdent()
    {
      return $this->KoeretoejIdent;
    }

    /**
     * @param string $KoeretoejIdent
     * @return VehicleInformation
     */
    public function setKoeretoejIdent($KoeretoejIdent)
    {
      $this->KoeretoejIdent = $KoeretoejIdent;
      return $this;
    }

    /**
     * @return string
     */
    public function getMaerke()
    {
      return $this->Maerke;
    }

    /**
     * @param string $Maerke
     * @return VehicleInformation
     */
    public function setMaerke($Maerke)
    {
      $this->Maerke = $Maerke;
      return $this;
    }

    /**
     * @return string
     */
    public function getMaerkeNummer()
    {
      return $this->MaerkeNummer;
    }

    /**
     * @param string $MaerkeNummer
     * @return VehicleInformation
     */
    public function setMaerkeNummer($MaerkeNummer)
    {
      $this->MaerkeNummer = $MaerkeNummer;
      return $this;
    }

    /**
     * @return string
     */
    public function getModel()
    {
      return $this->Model;
    }

    /**
     * @param string $Model
     * @return VehicleInformation
     */
    public function setModel($Model)
    {
      $this->Model = $Model;
      return $this;
    }

    /**
     * @return string
     */
    public function getModelNummer()
    {
      return $this->ModelNummer;
    }

    /**
     * @param string $ModelNummer
     * @return VehicleInformation
     */
    public function setModelNummer($ModelNummer)
    {
      $this->ModelNummer = $ModelNummer;
      return $this;
    }

    /**
     * @return ArrayOfVehicleInformation
     */
    public function getMoreVehicles()
    {
      return $this->MoreVehicles;
    }

    /**
     * @param ArrayOfVehicleInformation $MoreVehicles
     * @return VehicleInformation
     */
    public function setMoreVehicles($MoreVehicles)
    {
      $this->MoreVehicles = $MoreVehicles;
      return $this;
    }

    /**
     * @return float
     */
    public function getMotorEffekt()
    {
      return $this->MotorEffekt;
    }

    /**
     * @param float $MotorEffekt
     * @return VehicleInformation
     */
    public function setMotorEffekt($MotorEffekt)
    {
      $this->MotorEffekt = $MotorEffekt;
      return $this;
    }

    /**
     * @return float
     */
    public function getMotorEffektHK()
    {
      return $this->MotorEffektHK;
    }

    /**
     * @param float $MotorEffektHK
     * @return VehicleInformation
     */
    public function setMotorEffektHK($MotorEffektHK)
    {
      $this->MotorEffektHK = $MotorEffektHK;
      return $this;
    }

    /**
     * @return string
     */
    public function getRegistreringsNummer()
    {
      return $this->RegistreringsNummer;
    }

    /**
     * @param string $RegistreringsNummer
     * @return VehicleInformation
     */
    public function setRegistreringsNummer($RegistreringsNummer)
    {
      $this->RegistreringsNummer = $RegistreringsNummer;
      return $this;
    }

    /**
     * @return string
     */
    public function getStelNummer()
    {
      return $this->StelNummer;
    }

    /**
     * @param string $StelNummer
     * @return VehicleInformation
     */
    public function setStelNummer($StelNummer)
    {
      $this->StelNummer = $StelNummer;
      return $this;
    }

    /**
     * @return string
     */
    public function getTotalVaegt()
    {
      return $this->TotalVaegt;
    }

    /**
     * @param string $TotalVaegt
     * @return VehicleInformation
     */
    public function setTotalVaegt($TotalVaegt)
    {
      $this->TotalVaegt = $TotalVaegt;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return VehicleInformation
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getTypeGodkendelseNummer()
    {
      return $this->TypeGodkendelseNummer;
    }

    /**
     * @param string $TypeGodkendelseNummer
     * @return VehicleInformation
     */
    public function setTypeGodkendelseNummer($TypeGodkendelseNummer)
    {
      $this->TypeGodkendelseNummer = $TypeGodkendelseNummer;
      return $this;
    }

    /**
     * @return string
     */
    public function getTypeNummer()
    {
      return $this->TypeNummer;
    }

    /**
     * @param string $TypeNummer
     * @return VehicleInformation
     */
    public function setTypeNummer($TypeNummer)
    {
      $this->TypeNummer = $TypeNummer;
      return $this;
    }

    /**
     * @return string
     */
    public function getVariant()
    {
      return $this->Variant;
    }

    /**
     * @param string $Variant
     * @return VehicleInformation
     */
    public function setVariant($Variant)
    {
      $this->Variant = $Variant;
      return $this;
    }

    /**
     * @return string
     */
    public function getVariantNummer()
    {
      return $this->VariantNummer;
    }

    /**
     * @param string $VariantNummer
     * @return VehicleInformation
     */
    public function setVariantNummer($VariantNummer)
    {
      $this->VariantNummer = $VariantNummer;
      return $this;
    }

}
