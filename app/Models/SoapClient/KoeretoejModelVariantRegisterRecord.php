<?php
namespace App\Models\SoapClient;
class KoeretoejModelVariantRegisterRecord
{

    /**
     * @var int $ModelVariantId
     */
    protected $ModelVariantId = null;

    /**
     * @var int $TypeId
     */
    protected $TypeId = null;

    /**
     * @var string $TypeNavn
     */
    protected $TypeNavn = null;

    /**
     * @var int $FabrikatId
     */
    protected $FabrikatId = null;

    /**
     * @var string $FabrikatNavn
     */
    protected $FabrikatNavn = null;

    /**
     * @var string $ModelserieNavn
     */
    protected $ModelserieNavn = null;

    /**
     * @var int $KarosseritypeId
     */
    protected $KarosseritypeId = null;

    /**
     * @var string $KarosseritypeNavn
     */
    protected $KarosseritypeNavn = null;

    /**
     * @var int $DoereAntal
     */
    protected $DoereAntal = null;

    /**
     * @var string $KarosserilaengdetypeId
     */
    protected $KarosserilaengdetypeId = null;

    /**
     * @var string $DrivhjultypeId
     */
    protected $DrivhjultypeId = null;

    /**
     * @var int $Modelseriegenerationsnummer
     */
    protected $Modelseriegenerationsnummer = null;

    /**
     * @var int $Modelseriefaceliftnummer
     */
    protected $Modelseriefaceliftnummer = null;

    /**
     * @var int $AkselafstandMM
     */
    protected $AkselafstandMM = null;

    /**
     * @var int $SporviddeForMM_nedre
     */
    protected $SporviddeForMM_nedre = null;

    /**
     * @var int $SporviddeForMM_oevre
     */
    protected $SporviddeForMM_oevre = null;

    /**
     * @var int $SporviddeBagMM_nedre
     */
    protected $SporviddeBagMM_nedre = null;

    /**
     * @var int $SporviddeBagMM_oevre
     */
    protected $SporviddeBagMM_oevre = null;

    /**
     * @var int $SiddepladserAntal
     */
    protected $SiddepladserAntal = null;

    /**
     * @var int $AirbagsAntal
     */
    protected $AirbagsAntal = null;

    /**
     * @var int $SikkerhedsstjernerAntal
     */
    protected $SikkerhedsstjernerAntal = null;

    /**
     * @var int $LaengdeMM_nedre
     */
    protected $LaengdeMM_nedre = null;

    /**
     * @var int $LaengdeMM_oevre
     */
    protected $LaengdeMM_oevre = null;

    /**
     * @var int $BreddeMM_nedre
     */
    protected $BreddeMM_nedre = null;

    /**
     * @var int $BreddeMM_oevre
     */
    protected $BreddeMM_oevre = null;

    /**
     * @var int $HoejdeMM_nedre
     */
    protected $HoejdeMM_nedre = null;

    /**
     * @var int $HoejdeMM_oevre
     */
    protected $HoejdeMM_oevre = null;

    /**
     * @var string $DrivmiddeltypeId
     */
    protected $DrivmiddeltypeId = null;

    /**
     * @var string $DrivmiddeltypeNavn
     */
    protected $DrivmiddeltypeNavn = null;

    /**
     * @var int $CylindreAntal
     */
    protected $CylindreAntal = null;

    /**
     * @var int $SlagvolumenCCM
     */
    protected $SlagvolumenCCM = null;

    /**
     * @var string $MotorstoerrelseLiterBetegnelse
     */
    protected $MotorstoerrelseLiterBetegnelse = null;

    /**
     * @var int $MaksimalEffektHKBetegnelse
     */
    protected $MaksimalEffektHKBetegnelse = null;

    /**
     * @var int $MaksimalEffektKW
     */
    protected $MaksimalEffektKW = null;

    /**
     * @var int $MaksimalEffektVedOMDRprMin
     */
    protected $MaksimalEffektVedOMDRprMin = null;

    /**
     * @var int $MaksimaltDrejningsmomentNM
     */
    protected $MaksimaltDrejningsmomentNM = null;

    /**
     * @var int $MaksimalDrejningsmomentVedOMDRprMin
     */
    protected $MaksimalDrejningsmomentVedOMDRprMin = null;

    /**
     * @var int $EUmiljoenormnummer
     */
    protected $EUmiljoenormnummer = null;

    /**
     * @var string $MotormaerkningskoderCSV
     */
    protected $MotormaerkningskoderCSV = null;

    /**
     * @var int $TransmissiontypeId
     */
    protected $TransmissiontypeId = null;

    /**
     * @var string $TransmissiontypeNavn
     */
    protected $TransmissiontypeNavn = null;

    /**
     * @var int $GearAntal
     */
    protected $GearAntal = null;

    /**
     * @var int $ModelId
     */
    protected $ModelId = null;

    /**
     * @var string $ModelNavn
     */
    protected $ModelNavn = null;

    /**
     * @var string $Variantbetegnelse
     */
    protected $Variantbetegnelse = null;

    /**
     * @var string $ModelTillaegsbetegnelse
     */
    protected $ModelTillaegsbetegnelse = null;

    /**
     * @var string $Udstyrsniveaubetegnelse
     */
    protected $Udstyrsniveaubetegnelse = null;

    /**
     * @var string $KarosseriTillaegsbetegnelse
     */
    protected $KarosseriTillaegsbetegnelse = null;

    /**
     * @var string $MotorTillaegsbetegnelse
     */
    protected $MotorTillaegsbetegnelse = null;

    /**
     * @var string $TransmissionTillaegsbetegnelse
     */
    protected $TransmissionTillaegsbetegnelse = null;

    /**
     * @var string $SupplerendeVariantbetegnelse
     */
    protected $SupplerendeVariantbetegnelse = null;

    /**
     * @var int $EgenvaegtKG_nedre
     */
    protected $EgenvaegtKG_nedre = null;

    /**
     * @var int $EgenvaegtKG_oevre
     */
    protected $EgenvaegtKG_oevre = null;

    /**
     * @var int $KoereklarvaegtKG_nedre
     */
    protected $KoereklarvaegtKG_nedre = null;

    /**
     * @var int $KoereklarvaegtKG_oevre
     */
    protected $KoereklarvaegtKG_oevre = null;

    /**
     * @var int $TotalvaegtKG_nedre
     */
    protected $TotalvaegtKG_nedre = null;

    /**
     * @var int $TotalvaegtKG_oevre
     */
    protected $TotalvaegtKG_oevre = null;

    /**
     * @var string $ESP
     */
    protected $ESP = null;

    /**
     * @var string $ABS
     */
    protected $ABS = null;

    /**
     * @var string $DPF
     */
    protected $DPF = null;

    /**
     * @var float $DrivmiddelforbrugKMprL
     */
    protected $DrivmiddelforbrugKMprL = null;

    /**
     * @var int $ELforbrugWhprKM
     */
    protected $ELforbrugWhprKM = null;

    /**
     * @var float $CO2udledningGRAMprKM
     */
    protected $CO2udledningGRAMprKM = null;

    /**
     * @var int $TophastighedKMprTIME
     */
    protected $TophastighedKMprTIME = null;

    /**
     * @var float $Accelerationsevne0til100kmtS
     */
    protected $Accelerationsevne0til100kmtS = null;

    /**
     * @var string $EFtypegodkendelsesnummerCSV
     */
    protected $EFtypegodkendelsesnummerCSV = null;

    /**
     * @var string $DKtypegodkendelsesnummerCSV
     */
    protected $DKtypegodkendelsesnummerCSV = null;

    /**
     * @var string $CRMmaerkekodeCSV
     */
    protected $CRMmaerkekodeCSV = null;

    /**
     * @var string $DMRmaerkemodelvarianttypeIdCSV
     */
    protected $DMRmaerkemodelvarianttypeIdCSV = null;

    /**
     * @var string $DMRmodelgruppeIdCSV
     */
    protected $DMRmodelgruppeIdCSV = null;

    /**
     * @var int $AargangNysalg
     */
    protected $AargangNysalg = null;

    /**
     * @var int $StandardprisId
     */
    protected $StandardprisId = null;

    /**
     * @var int $NyprisKR
     */
    protected $NyprisKR = null;

    /**
     * @var boolean $NyprisErEstimeret
     */
    protected $NyprisErEstimeret = null;

    /**
     * @var boolean $NyprisErPlusMoms
     */
    protected $NyprisErPlusMoms = null;

    /**
     * @var int $NyprisMomsbeloebKR
     */
    protected $NyprisMomsbeloebKR = null;

    /**
     * @var \DateTime $DatoOprettet
     */
    protected $DatoOprettet = null;

    /**
     * @var \DateTime $DatoSenestRettet
     */
    protected $DatoSenestRettet = null;

    /**
     * @var \DateTime $DatoDeaktiveret
     */
    protected $DatoDeaktiveret = null;

    /**
     * @param int $ModelVariantId
     * @param int $TypeId
     * @param int $FabrikatId
     * @param int $KarosseritypeId
     * @param int $DoereAntal
     * @param int $Modelseriegenerationsnummer
     * @param int $Modelseriefaceliftnummer
     * @param int $AkselafstandMM
     * @param int $SporviddeForMM_nedre
     * @param int $SporviddeForMM_oevre
     * @param int $SporviddeBagMM_nedre
     * @param int $SporviddeBagMM_oevre
     * @param int $SiddepladserAntal
     * @param int $AirbagsAntal
     * @param int $SikkerhedsstjernerAntal
     * @param int $LaengdeMM_nedre
     * @param int $LaengdeMM_oevre
     * @param int $BreddeMM_nedre
     * @param int $BreddeMM_oevre
     * @param int $HoejdeMM_nedre
     * @param int $HoejdeMM_oevre
     * @param int $CylindreAntal
     * @param int $SlagvolumenCCM
     * @param int $MaksimalEffektHKBetegnelse
     * @param int $MaksimalEffektKW
     * @param int $MaksimalEffektVedOMDRprMin
     * @param int $MaksimaltDrejningsmomentNM
     * @param int $MaksimalDrejningsmomentVedOMDRprMin
     * @param int $EUmiljoenormnummer
     * @param int $TransmissiontypeId
     * @param int $GearAntal
     * @param int $ModelId
     * @param int $EgenvaegtKG_nedre
     * @param int $EgenvaegtKG_oevre
     * @param int $KoereklarvaegtKG_nedre
     * @param int $KoereklarvaegtKG_oevre
     * @param int $TotalvaegtKG_nedre
     * @param int $TotalvaegtKG_oevre
     * @param float $DrivmiddelforbrugKMprL
     * @param int $ELforbrugWhprKM
     * @param float $CO2udledningGRAMprKM
     * @param int $TophastighedKMprTIME
     * @param float $Accelerationsevne0til100kmtS
     * @param int $AargangNysalg
     * @param int $StandardprisId
     * @param int $NyprisKR
     * @param boolean $NyprisErEstimeret
     * @param boolean $NyprisErPlusMoms
     * @param int $NyprisMomsbeloebKR
     * @param \DateTime $DatoOprettet
     * @param \DateTime $DatoSenestRettet
     * @param \DateTime $DatoDeaktiveret
     */
    public function __construct($ModelVariantId, $TypeId, $FabrikatId, $KarosseritypeId, $DoereAntal, $Modelseriegenerationsnummer, $Modelseriefaceliftnummer, $AkselafstandMM, $SporviddeForMM_nedre, $SporviddeForMM_oevre, $SporviddeBagMM_nedre, $SporviddeBagMM_oevre, $SiddepladserAntal, $AirbagsAntal, $SikkerhedsstjernerAntal, $LaengdeMM_nedre, $LaengdeMM_oevre, $BreddeMM_nedre, $BreddeMM_oevre, $HoejdeMM_nedre, $HoejdeMM_oevre, $CylindreAntal, $SlagvolumenCCM, $MaksimalEffektHKBetegnelse, $MaksimalEffektKW, $MaksimalEffektVedOMDRprMin, $MaksimaltDrejningsmomentNM, $MaksimalDrejningsmomentVedOMDRprMin, $EUmiljoenormnummer, $TransmissiontypeId, $GearAntal, $ModelId, $EgenvaegtKG_nedre, $EgenvaegtKG_oevre, $KoereklarvaegtKG_nedre, $KoereklarvaegtKG_oevre, $TotalvaegtKG_nedre, $TotalvaegtKG_oevre, $DrivmiddelforbrugKMprL, $ELforbrugWhprKM, $CO2udledningGRAMprKM, $TophastighedKMprTIME, $Accelerationsevne0til100kmtS, $AargangNysalg, $StandardprisId, $NyprisKR, $NyprisErEstimeret, $NyprisErPlusMoms, $NyprisMomsbeloebKR, \DateTime $DatoOprettet, \DateTime $DatoSenestRettet, \DateTime $DatoDeaktiveret)
    {
      $this->ModelVariantId = $ModelVariantId;
      $this->TypeId = $TypeId;
      $this->FabrikatId = $FabrikatId;
      $this->KarosseritypeId = $KarosseritypeId;
      $this->DoereAntal = $DoereAntal;
      $this->Modelseriegenerationsnummer = $Modelseriegenerationsnummer;
      $this->Modelseriefaceliftnummer = $Modelseriefaceliftnummer;
      $this->AkselafstandMM = $AkselafstandMM;
      $this->SporviddeForMM_nedre = $SporviddeForMM_nedre;
      $this->SporviddeForMM_oevre = $SporviddeForMM_oevre;
      $this->SporviddeBagMM_nedre = $SporviddeBagMM_nedre;
      $this->SporviddeBagMM_oevre = $SporviddeBagMM_oevre;
      $this->SiddepladserAntal = $SiddepladserAntal;
      $this->AirbagsAntal = $AirbagsAntal;
      $this->SikkerhedsstjernerAntal = $SikkerhedsstjernerAntal;
      $this->LaengdeMM_nedre = $LaengdeMM_nedre;
      $this->LaengdeMM_oevre = $LaengdeMM_oevre;
      $this->BreddeMM_nedre = $BreddeMM_nedre;
      $this->BreddeMM_oevre = $BreddeMM_oevre;
      $this->HoejdeMM_nedre = $HoejdeMM_nedre;
      $this->HoejdeMM_oevre = $HoejdeMM_oevre;
      $this->CylindreAntal = $CylindreAntal;
      $this->SlagvolumenCCM = $SlagvolumenCCM;
      $this->MaksimalEffektHKBetegnelse = $MaksimalEffektHKBetegnelse;
      $this->MaksimalEffektKW = $MaksimalEffektKW;
      $this->MaksimalEffektVedOMDRprMin = $MaksimalEffektVedOMDRprMin;
      $this->MaksimaltDrejningsmomentNM = $MaksimaltDrejningsmomentNM;
      $this->MaksimalDrejningsmomentVedOMDRprMin = $MaksimalDrejningsmomentVedOMDRprMin;
      $this->EUmiljoenormnummer = $EUmiljoenormnummer;
      $this->TransmissiontypeId = $TransmissiontypeId;
      $this->GearAntal = $GearAntal;
      $this->ModelId = $ModelId;
      $this->EgenvaegtKG_nedre = $EgenvaegtKG_nedre;
      $this->EgenvaegtKG_oevre = $EgenvaegtKG_oevre;
      $this->KoereklarvaegtKG_nedre = $KoereklarvaegtKG_nedre;
      $this->KoereklarvaegtKG_oevre = $KoereklarvaegtKG_oevre;
      $this->TotalvaegtKG_nedre = $TotalvaegtKG_nedre;
      $this->TotalvaegtKG_oevre = $TotalvaegtKG_oevre;
      $this->DrivmiddelforbrugKMprL = $DrivmiddelforbrugKMprL;
      $this->ELforbrugWhprKM = $ELforbrugWhprKM;
      $this->CO2udledningGRAMprKM = $CO2udledningGRAMprKM;
      $this->TophastighedKMprTIME = $TophastighedKMprTIME;
      $this->Accelerationsevne0til100kmtS = $Accelerationsevne0til100kmtS;
      $this->AargangNysalg = $AargangNysalg;
      $this->StandardprisId = $StandardprisId;
      $this->NyprisKR = $NyprisKR;
      $this->NyprisErEstimeret = $NyprisErEstimeret;
      $this->NyprisErPlusMoms = $NyprisErPlusMoms;
      $this->NyprisMomsbeloebKR = $NyprisMomsbeloebKR;
      $this->DatoOprettet = $DatoOprettet->format(\DateTime::ATOM);
      $this->DatoSenestRettet = $DatoSenestRettet->format(\DateTime::ATOM);
      $this->DatoDeaktiveret = $DatoDeaktiveret->format(\DateTime::ATOM);
    }

    /**
     * @return int
     */
    public function getModelVariantId()
    {
      return $this->ModelVariantId;
    }

    /**
     * @param int $ModelVariantId
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setModelVariantId($ModelVariantId)
    {
      $this->ModelVariantId = $ModelVariantId;
      return $this;
    }

    /**
     * @return int
     */
    public function getTypeId()
    {
      return $this->TypeId;
    }

    /**
     * @param int $TypeId
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setTypeId($TypeId)
    {
      $this->TypeId = $TypeId;
      return $this;
    }

    /**
     * @return string
     */
    public function getTypeNavn()
    {
      return $this->TypeNavn;
    }

    /**
     * @param string $TypeNavn
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setTypeNavn($TypeNavn)
    {
      $this->TypeNavn = $TypeNavn;
      return $this;
    }

    /**
     * @return int
     */
    public function getFabrikatId()
    {
      return $this->FabrikatId;
    }

    /**
     * @param int $FabrikatId
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setFabrikatId($FabrikatId)
    {
      $this->FabrikatId = $FabrikatId;
      return $this;
    }

    /**
     * @return string
     */
    public function getFabrikatNavn()
    {
      return $this->FabrikatNavn;
    }

    /**
     * @param string $FabrikatNavn
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setFabrikatNavn($FabrikatNavn)
    {
      $this->FabrikatNavn = $FabrikatNavn;
      return $this;
    }

    /**
     * @return string
     */
    public function getModelserieNavn()
    {
      return $this->ModelserieNavn;
    }

    /**
     * @param string $ModelserieNavn
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setModelserieNavn($ModelserieNavn)
    {
      $this->ModelserieNavn = $ModelserieNavn;
      return $this;
    }

    /**
     * @return int
     */
    public function getKarosseritypeId()
    {
      return $this->KarosseritypeId;
    }

    /**
     * @param int $KarosseritypeId
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setKarosseritypeId($KarosseritypeId)
    {
      $this->KarosseritypeId = $KarosseritypeId;
      return $this;
    }

    /**
     * @return string
     */
    public function getKarosseritypeNavn()
    {
      return $this->KarosseritypeNavn;
    }

    /**
     * @param string $KarosseritypeNavn
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setKarosseritypeNavn($KarosseritypeNavn)
    {
      $this->KarosseritypeNavn = $KarosseritypeNavn;
      return $this;
    }

    /**
     * @return int
     */
    public function getDoereAntal()
    {
      return $this->DoereAntal;
    }

    /**
     * @param int $DoereAntal
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setDoereAntal($DoereAntal)
    {
      $this->DoereAntal = $DoereAntal;
      return $this;
    }

    /**
     * @return string
     */
    public function getKarosserilaengdetypeId()
    {
      return $this->KarosserilaengdetypeId;
    }

    /**
     * @param string $KarosserilaengdetypeId
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setKarosserilaengdetypeId($KarosserilaengdetypeId)
    {
      $this->KarosserilaengdetypeId = $KarosserilaengdetypeId;
      return $this;
    }

    /**
     * @return string
     */
    public function getDrivhjultypeId()
    {
      return $this->DrivhjultypeId;
    }

    /**
     * @param string $DrivhjultypeId
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setDrivhjultypeId($DrivhjultypeId)
    {
      $this->DrivhjultypeId = $DrivhjultypeId;
      return $this;
    }

    /**
     * @return int
     */
    public function getModelseriegenerationsnummer()
    {
      return $this->Modelseriegenerationsnummer;
    }

    /**
     * @param int $Modelseriegenerationsnummer
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setModelseriegenerationsnummer($Modelseriegenerationsnummer)
    {
      $this->Modelseriegenerationsnummer = $Modelseriegenerationsnummer;
      return $this;
    }

    /**
     * @return int
     */
    public function getModelseriefaceliftnummer()
    {
      return $this->Modelseriefaceliftnummer;
    }

    /**
     * @param int $Modelseriefaceliftnummer
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setModelseriefaceliftnummer($Modelseriefaceliftnummer)
    {
      $this->Modelseriefaceliftnummer = $Modelseriefaceliftnummer;
      return $this;
    }

    /**
     * @return int
     */
    public function getAkselafstandMM()
    {
      return $this->AkselafstandMM;
    }

    /**
     * @param int $AkselafstandMM
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setAkselafstandMM($AkselafstandMM)
    {
      $this->AkselafstandMM = $AkselafstandMM;
      return $this;
    }

    /**
     * @return int
     */
    public function getSporviddeForMM_nedre()
    {
      return $this->SporviddeForMM_nedre;
    }

    /**
     * @param int $SporviddeForMM_nedre
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setSporviddeForMM_nedre($SporviddeForMM_nedre)
    {
      $this->SporviddeForMM_nedre = $SporviddeForMM_nedre;
      return $this;
    }

    /**
     * @return int
     */
    public function getSporviddeForMM_oevre()
    {
      return $this->SporviddeForMM_oevre;
    }

    /**
     * @param int $SporviddeForMM_oevre
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setSporviddeForMM_oevre($SporviddeForMM_oevre)
    {
      $this->SporviddeForMM_oevre = $SporviddeForMM_oevre;
      return $this;
    }

    /**
     * @return int
     */
    public function getSporviddeBagMM_nedre()
    {
      return $this->SporviddeBagMM_nedre;
    }

    /**
     * @param int $SporviddeBagMM_nedre
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setSporviddeBagMM_nedre($SporviddeBagMM_nedre)
    {
      $this->SporviddeBagMM_nedre = $SporviddeBagMM_nedre;
      return $this;
    }

    /**
     * @return int
     */
    public function getSporviddeBagMM_oevre()
    {
      return $this->SporviddeBagMM_oevre;
    }

    /**
     * @param int $SporviddeBagMM_oevre
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setSporviddeBagMM_oevre($SporviddeBagMM_oevre)
    {
      $this->SporviddeBagMM_oevre = $SporviddeBagMM_oevre;
      return $this;
    }

    /**
     * @return int
     */
    public function getSiddepladserAntal()
    {
      return $this->SiddepladserAntal;
    }

    /**
     * @param int $SiddepladserAntal
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setSiddepladserAntal($SiddepladserAntal)
    {
      $this->SiddepladserAntal = $SiddepladserAntal;
      return $this;
    }

    /**
     * @return int
     */
    public function getAirbagsAntal()
    {
      return $this->AirbagsAntal;
    }

    /**
     * @param int $AirbagsAntal
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setAirbagsAntal($AirbagsAntal)
    {
      $this->AirbagsAntal = $AirbagsAntal;
      return $this;
    }

    /**
     * @return int
     */
    public function getSikkerhedsstjernerAntal()
    {
      return $this->SikkerhedsstjernerAntal;
    }

    /**
     * @param int $SikkerhedsstjernerAntal
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setSikkerhedsstjernerAntal($SikkerhedsstjernerAntal)
    {
      $this->SikkerhedsstjernerAntal = $SikkerhedsstjernerAntal;
      return $this;
    }

    /**
     * @return int
     */
    public function getLaengdeMM_nedre()
    {
      return $this->LaengdeMM_nedre;
    }

    /**
     * @param int $LaengdeMM_nedre
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setLaengdeMM_nedre($LaengdeMM_nedre)
    {
      $this->LaengdeMM_nedre = $LaengdeMM_nedre;
      return $this;
    }

    /**
     * @return int
     */
    public function getLaengdeMM_oevre()
    {
      return $this->LaengdeMM_oevre;
    }

    /**
     * @param int $LaengdeMM_oevre
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setLaengdeMM_oevre($LaengdeMM_oevre)
    {
      $this->LaengdeMM_oevre = $LaengdeMM_oevre;
      return $this;
    }

    /**
     * @return int
     */
    public function getBreddeMM_nedre()
    {
      return $this->BreddeMM_nedre;
    }

    /**
     * @param int $BreddeMM_nedre
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setBreddeMM_nedre($BreddeMM_nedre)
    {
      $this->BreddeMM_nedre = $BreddeMM_nedre;
      return $this;
    }

    /**
     * @return int
     */
    public function getBreddeMM_oevre()
    {
      return $this->BreddeMM_oevre;
    }

    /**
     * @param int $BreddeMM_oevre
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setBreddeMM_oevre($BreddeMM_oevre)
    {
      $this->BreddeMM_oevre = $BreddeMM_oevre;
      return $this;
    }

    /**
     * @return int
     */
    public function getHoejdeMM_nedre()
    {
      return $this->HoejdeMM_nedre;
    }

    /**
     * @param int $HoejdeMM_nedre
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setHoejdeMM_nedre($HoejdeMM_nedre)
    {
      $this->HoejdeMM_nedre = $HoejdeMM_nedre;
      return $this;
    }

    /**
     * @return int
     */
    public function getHoejdeMM_oevre()
    {
      return $this->HoejdeMM_oevre;
    }

    /**
     * @param int $HoejdeMM_oevre
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setHoejdeMM_oevre($HoejdeMM_oevre)
    {
      $this->HoejdeMM_oevre = $HoejdeMM_oevre;
      return $this;
    }

    /**
     * @return string
     */
    public function getDrivmiddeltypeId()
    {
      return $this->DrivmiddeltypeId;
    }

    /**
     * @param string $DrivmiddeltypeId
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setDrivmiddeltypeId($DrivmiddeltypeId)
    {
      $this->DrivmiddeltypeId = $DrivmiddeltypeId;
      return $this;
    }

    /**
     * @return string
     */
    public function getDrivmiddeltypeNavn()
    {
      return $this->DrivmiddeltypeNavn;
    }

    /**
     * @param string $DrivmiddeltypeNavn
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setDrivmiddeltypeNavn($DrivmiddeltypeNavn)
    {
      $this->DrivmiddeltypeNavn = $DrivmiddeltypeNavn;
      return $this;
    }

    /**
     * @return int
     */
    public function getCylindreAntal()
    {
      return $this->CylindreAntal;
    }

    /**
     * @param int $CylindreAntal
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setCylindreAntal($CylindreAntal)
    {
      $this->CylindreAntal = $CylindreAntal;
      return $this;
    }

    /**
     * @return int
     */
    public function getSlagvolumenCCM()
    {
      return $this->SlagvolumenCCM;
    }

    /**
     * @param int $SlagvolumenCCM
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setSlagvolumenCCM($SlagvolumenCCM)
    {
      $this->SlagvolumenCCM = $SlagvolumenCCM;
      return $this;
    }

    /**
     * @return string
     */
    public function getMotorstoerrelseLiterBetegnelse()
    {
      return $this->MotorstoerrelseLiterBetegnelse;
    }

    /**
     * @param string $MotorstoerrelseLiterBetegnelse
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setMotorstoerrelseLiterBetegnelse($MotorstoerrelseLiterBetegnelse)
    {
      $this->MotorstoerrelseLiterBetegnelse = $MotorstoerrelseLiterBetegnelse;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaksimalEffektHKBetegnelse()
    {
      return $this->MaksimalEffektHKBetegnelse;
    }

    /**
     * @param int $MaksimalEffektHKBetegnelse
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setMaksimalEffektHKBetegnelse($MaksimalEffektHKBetegnelse)
    {
      $this->MaksimalEffektHKBetegnelse = $MaksimalEffektHKBetegnelse;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaksimalEffektKW()
    {
      return $this->MaksimalEffektKW;
    }

    /**
     * @param int $MaksimalEffektKW
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setMaksimalEffektKW($MaksimalEffektKW)
    {
      $this->MaksimalEffektKW = $MaksimalEffektKW;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaksimalEffektVedOMDRprMin()
    {
      return $this->MaksimalEffektVedOMDRprMin;
    }

    /**
     * @param int $MaksimalEffektVedOMDRprMin
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setMaksimalEffektVedOMDRprMin($MaksimalEffektVedOMDRprMin)
    {
      $this->MaksimalEffektVedOMDRprMin = $MaksimalEffektVedOMDRprMin;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaksimaltDrejningsmomentNM()
    {
      return $this->MaksimaltDrejningsmomentNM;
    }

    /**
     * @param int $MaksimaltDrejningsmomentNM
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setMaksimaltDrejningsmomentNM($MaksimaltDrejningsmomentNM)
    {
      $this->MaksimaltDrejningsmomentNM = $MaksimaltDrejningsmomentNM;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaksimalDrejningsmomentVedOMDRprMin()
    {
      return $this->MaksimalDrejningsmomentVedOMDRprMin;
    }

    /**
     * @param int $MaksimalDrejningsmomentVedOMDRprMin
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setMaksimalDrejningsmomentVedOMDRprMin($MaksimalDrejningsmomentVedOMDRprMin)
    {
      $this->MaksimalDrejningsmomentVedOMDRprMin = $MaksimalDrejningsmomentVedOMDRprMin;
      return $this;
    }

    /**
     * @return int
     */
    public function getEUmiljoenormnummer()
    {
      return $this->EUmiljoenormnummer;
    }

    /**
     * @param int $EUmiljoenormnummer
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setEUmiljoenormnummer($EUmiljoenormnummer)
    {
      $this->EUmiljoenormnummer = $EUmiljoenormnummer;
      return $this;
    }

    /**
     * @return string
     */
    public function getMotormaerkningskoderCSV()
    {
      return $this->MotormaerkningskoderCSV;
    }

    /**
     * @param string $MotormaerkningskoderCSV
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setMotormaerkningskoderCSV($MotormaerkningskoderCSV)
    {
      $this->MotormaerkningskoderCSV = $MotormaerkningskoderCSV;
      return $this;
    }

    /**
     * @return int
     */
    public function getTransmissiontypeId()
    {
      return $this->TransmissiontypeId;
    }

    /**
     * @param int $TransmissiontypeId
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setTransmissiontypeId($TransmissiontypeId)
    {
      $this->TransmissiontypeId = $TransmissiontypeId;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransmissiontypeNavn()
    {
      return $this->TransmissiontypeNavn;
    }

    /**
     * @param string $TransmissiontypeNavn
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setTransmissiontypeNavn($TransmissiontypeNavn)
    {
      $this->TransmissiontypeNavn = $TransmissiontypeNavn;
      return $this;
    }

    /**
     * @return int
     */
    public function getGearAntal()
    {
      return $this->GearAntal;
    }

    /**
     * @param int $GearAntal
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setGearAntal($GearAntal)
    {
      $this->GearAntal = $GearAntal;
      return $this;
    }

    /**
     * @return int
     */
    public function getModelId()
    {
      return $this->ModelId;
    }

    /**
     * @param int $ModelId
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setModelId($ModelId)
    {
      $this->ModelId = $ModelId;
      return $this;
    }

    /**
     * @return string
     */
    public function getModelNavn()
    {
      return $this->ModelNavn;
    }

    /**
     * @param string $ModelNavn
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setModelNavn($ModelNavn)
    {
      $this->ModelNavn = $ModelNavn;
      return $this;
    }

    /**
     * @return string
     */
    public function getVariantbetegnelse()
    {
      return $this->Variantbetegnelse;
    }

    /**
     * @param string $Variantbetegnelse
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setVariantbetegnelse($Variantbetegnelse)
    {
      $this->Variantbetegnelse = $Variantbetegnelse;
      return $this;
    }

    /**
     * @return string
     */
    public function getModelTillaegsbetegnelse()
    {
      return $this->ModelTillaegsbetegnelse;
    }

    /**
     * @param string $ModelTillaegsbetegnelse
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setModelTillaegsbetegnelse($ModelTillaegsbetegnelse)
    {
      $this->ModelTillaegsbetegnelse = $ModelTillaegsbetegnelse;
      return $this;
    }

    /**
     * @return string
     */
    public function getUdstyrsniveaubetegnelse()
    {
      return $this->Udstyrsniveaubetegnelse;
    }

    /**
     * @param string $Udstyrsniveaubetegnelse
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setUdstyrsniveaubetegnelse($Udstyrsniveaubetegnelse)
    {
      $this->Udstyrsniveaubetegnelse = $Udstyrsniveaubetegnelse;
      return $this;
    }

    /**
     * @return string
     */
    public function getKarosseriTillaegsbetegnelse()
    {
      return $this->KarosseriTillaegsbetegnelse;
    }

    /**
     * @param string $KarosseriTillaegsbetegnelse
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setKarosseriTillaegsbetegnelse($KarosseriTillaegsbetegnelse)
    {
      $this->KarosseriTillaegsbetegnelse = $KarosseriTillaegsbetegnelse;
      return $this;
    }

    /**
     * @return string
     */
    public function getMotorTillaegsbetegnelse()
    {
      return $this->MotorTillaegsbetegnelse;
    }

    /**
     * @param string $MotorTillaegsbetegnelse
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setMotorTillaegsbetegnelse($MotorTillaegsbetegnelse)
    {
      $this->MotorTillaegsbetegnelse = $MotorTillaegsbetegnelse;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransmissionTillaegsbetegnelse()
    {
      return $this->TransmissionTillaegsbetegnelse;
    }

    /**
     * @param string $TransmissionTillaegsbetegnelse
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setTransmissionTillaegsbetegnelse($TransmissionTillaegsbetegnelse)
    {
      $this->TransmissionTillaegsbetegnelse = $TransmissionTillaegsbetegnelse;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupplerendeVariantbetegnelse()
    {
      return $this->SupplerendeVariantbetegnelse;
    }

    /**
     * @param string $SupplerendeVariantbetegnelse
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setSupplerendeVariantbetegnelse($SupplerendeVariantbetegnelse)
    {
      $this->SupplerendeVariantbetegnelse = $SupplerendeVariantbetegnelse;
      return $this;
    }

    /**
     * @return int
     */
    public function getEgenvaegtKG_nedre()
    {
      return $this->EgenvaegtKG_nedre;
    }

    /**
     * @param int $EgenvaegtKG_nedre
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setEgenvaegtKG_nedre($EgenvaegtKG_nedre)
    {
      $this->EgenvaegtKG_nedre = $EgenvaegtKG_nedre;
      return $this;
    }

    /**
     * @return int
     */
    public function getEgenvaegtKG_oevre()
    {
      return $this->EgenvaegtKG_oevre;
    }

    /**
     * @param int $EgenvaegtKG_oevre
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setEgenvaegtKG_oevre($EgenvaegtKG_oevre)
    {
      $this->EgenvaegtKG_oevre = $EgenvaegtKG_oevre;
      return $this;
    }

    /**
     * @return int
     */
    public function getKoereklarvaegtKG_nedre()
    {
      return $this->KoereklarvaegtKG_nedre;
    }

    /**
     * @param int $KoereklarvaegtKG_nedre
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setKoereklarvaegtKG_nedre($KoereklarvaegtKG_nedre)
    {
      $this->KoereklarvaegtKG_nedre = $KoereklarvaegtKG_nedre;
      return $this;
    }

    /**
     * @return int
     */
    public function getKoereklarvaegtKG_oevre()
    {
      return $this->KoereklarvaegtKG_oevre;
    }

    /**
     * @param int $KoereklarvaegtKG_oevre
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setKoereklarvaegtKG_oevre($KoereklarvaegtKG_oevre)
    {
      $this->KoereklarvaegtKG_oevre = $KoereklarvaegtKG_oevre;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalvaegtKG_nedre()
    {
      return $this->TotalvaegtKG_nedre;
    }

    /**
     * @param int $TotalvaegtKG_nedre
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setTotalvaegtKG_nedre($TotalvaegtKG_nedre)
    {
      $this->TotalvaegtKG_nedre = $TotalvaegtKG_nedre;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalvaegtKG_oevre()
    {
      return $this->TotalvaegtKG_oevre;
    }

    /**
     * @param int $TotalvaegtKG_oevre
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setTotalvaegtKG_oevre($TotalvaegtKG_oevre)
    {
      $this->TotalvaegtKG_oevre = $TotalvaegtKG_oevre;
      return $this;
    }

    /**
     * @return string
     */
    public function getESP()
    {
      return $this->ESP;
    }

    /**
     * @param string $ESP
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setESP($ESP)
    {
      $this->ESP = $ESP;
      return $this;
    }

    /**
     * @return string
     */
    public function getABS()
    {
      return $this->ABS;
    }

    /**
     * @param string $ABS
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setABS($ABS)
    {
      $this->ABS = $ABS;
      return $this;
    }

    /**
     * @return string
     */
    public function getDPF()
    {
      return $this->DPF;
    }

    /**
     * @param string $DPF
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setDPF($DPF)
    {
      $this->DPF = $DPF;
      return $this;
    }

    /**
     * @return float
     */
    public function getDrivmiddelforbrugKMprL()
    {
      return $this->DrivmiddelforbrugKMprL;
    }

    /**
     * @param float $DrivmiddelforbrugKMprL
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setDrivmiddelforbrugKMprL($DrivmiddelforbrugKMprL)
    {
      $this->DrivmiddelforbrugKMprL = $DrivmiddelforbrugKMprL;
      return $this;
    }

    /**
     * @return int
     */
    public function getELforbrugWhprKM()
    {
      return $this->ELforbrugWhprKM;
    }

    /**
     * @param int $ELforbrugWhprKM
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setELforbrugWhprKM($ELforbrugWhprKM)
    {
      $this->ELforbrugWhprKM = $ELforbrugWhprKM;
      return $this;
    }

    /**
     * @return float
     */
    public function getCO2udledningGRAMprKM()
    {
      return $this->CO2udledningGRAMprKM;
    }

    /**
     * @param float $CO2udledningGRAMprKM
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setCO2udledningGRAMprKM($CO2udledningGRAMprKM)
    {
      $this->CO2udledningGRAMprKM = $CO2udledningGRAMprKM;
      return $this;
    }

    /**
     * @return int
     */
    public function getTophastighedKMprTIME()
    {
      return $this->TophastighedKMprTIME;
    }

    /**
     * @param int $TophastighedKMprTIME
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setTophastighedKMprTIME($TophastighedKMprTIME)
    {
      $this->TophastighedKMprTIME = $TophastighedKMprTIME;
      return $this;
    }

    /**
     * @return float
     */
    public function getAccelerationsevne0til100kmtS()
    {
      return $this->Accelerationsevne0til100kmtS;
    }

    /**
     * @param float $Accelerationsevne0til100kmtS
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setAccelerationsevne0til100kmtS($Accelerationsevne0til100kmtS)
    {
      $this->Accelerationsevne0til100kmtS = $Accelerationsevne0til100kmtS;
      return $this;
    }

    /**
     * @return string
     */
    public function getEFtypegodkendelsesnummerCSV()
    {
      return $this->EFtypegodkendelsesnummerCSV;
    }

    /**
     * @param string $EFtypegodkendelsesnummerCSV
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setEFtypegodkendelsesnummerCSV($EFtypegodkendelsesnummerCSV)
    {
      $this->EFtypegodkendelsesnummerCSV = $EFtypegodkendelsesnummerCSV;
      return $this;
    }

    /**
     * @return string
     */
    public function getDKtypegodkendelsesnummerCSV()
    {
      return $this->DKtypegodkendelsesnummerCSV;
    }

    /**
     * @param string $DKtypegodkendelsesnummerCSV
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setDKtypegodkendelsesnummerCSV($DKtypegodkendelsesnummerCSV)
    {
      $this->DKtypegodkendelsesnummerCSV = $DKtypegodkendelsesnummerCSV;
      return $this;
    }

    /**
     * @return string
     */
    public function getCRMmaerkekodeCSV()
    {
      return $this->CRMmaerkekodeCSV;
    }

    /**
     * @param string $CRMmaerkekodeCSV
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setCRMmaerkekodeCSV($CRMmaerkekodeCSV)
    {
      $this->CRMmaerkekodeCSV = $CRMmaerkekodeCSV;
      return $this;
    }

    /**
     * @return string
     */
    public function getDMRmaerkemodelvarianttypeIdCSV()
    {
      return $this->DMRmaerkemodelvarianttypeIdCSV;
    }

    /**
     * @param string $DMRmaerkemodelvarianttypeIdCSV
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setDMRmaerkemodelvarianttypeIdCSV($DMRmaerkemodelvarianttypeIdCSV)
    {
      $this->DMRmaerkemodelvarianttypeIdCSV = $DMRmaerkemodelvarianttypeIdCSV;
      return $this;
    }

    /**
     * @return string
     */
    public function getDMRmodelgruppeIdCSV()
    {
      return $this->DMRmodelgruppeIdCSV;
    }

    /**
     * @param string $DMRmodelgruppeIdCSV
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setDMRmodelgruppeIdCSV($DMRmodelgruppeIdCSV)
    {
      $this->DMRmodelgruppeIdCSV = $DMRmodelgruppeIdCSV;
      return $this;
    }

    /**
     * @return int
     */
    public function getAargangNysalg()
    {
      return $this->AargangNysalg;
    }

    /**
     * @param int $AargangNysalg
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setAargangNysalg($AargangNysalg)
    {
      $this->AargangNysalg = $AargangNysalg;
      return $this;
    }

    /**
     * @return int
     */
    public function getStandardprisId()
    {
      return $this->StandardprisId;
    }

    /**
     * @param int $StandardprisId
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setStandardprisId($StandardprisId)
    {
      $this->StandardprisId = $StandardprisId;
      return $this;
    }

    /**
     * @return int
     */
    public function getNyprisKR()
    {
      return $this->NyprisKR;
    }

    /**
     * @param int $NyprisKR
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setNyprisKR($NyprisKR)
    {
      $this->NyprisKR = $NyprisKR;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNyprisErEstimeret()
    {
      return $this->NyprisErEstimeret;
    }

    /**
     * @param boolean $NyprisErEstimeret
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setNyprisErEstimeret($NyprisErEstimeret)
    {
      $this->NyprisErEstimeret = $NyprisErEstimeret;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNyprisErPlusMoms()
    {
      return $this->NyprisErPlusMoms;
    }

    /**
     * @param boolean $NyprisErPlusMoms
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setNyprisErPlusMoms($NyprisErPlusMoms)
    {
      $this->NyprisErPlusMoms = $NyprisErPlusMoms;
      return $this;
    }

    /**
     * @return int
     */
    public function getNyprisMomsbeloebKR()
    {
      return $this->NyprisMomsbeloebKR;
    }

    /**
     * @param int $NyprisMomsbeloebKR
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setNyprisMomsbeloebKR($NyprisMomsbeloebKR)
    {
      $this->NyprisMomsbeloebKR = $NyprisMomsbeloebKR;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatoOprettet()
    {
      if ($this->DatoOprettet == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatoOprettet);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatoOprettet
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setDatoOprettet(\DateTime $DatoOprettet)
    {
      $this->DatoOprettet = $DatoOprettet->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatoSenestRettet()
    {
      if ($this->DatoSenestRettet == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatoSenestRettet);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatoSenestRettet
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setDatoSenestRettet(\DateTime $DatoSenestRettet)
    {
      $this->DatoSenestRettet = $DatoSenestRettet->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatoDeaktiveret()
    {
      if ($this->DatoDeaktiveret == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatoDeaktiveret);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatoDeaktiveret
     * @return KoeretoejModelVariantRegisterRecord
     */
    public function setDatoDeaktiveret(\DateTime $DatoDeaktiveret)
    {
      $this->DatoDeaktiveret = $DatoDeaktiveret->format(\DateTime::ATOM);
      return $this;
    }

}
