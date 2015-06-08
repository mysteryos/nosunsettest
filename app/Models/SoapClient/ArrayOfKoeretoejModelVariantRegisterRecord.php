<?php
namespace App\Models\SoapClient;
class ArrayOfKoeretoejModelVariantRegisterRecord
{

    /**
     * @var KoeretoejModelVariantRegisterRecord[] $KoeretoejModelVariantRegisterRecord
     */
    protected $KoeretoejModelVariantRegisterRecord = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KoeretoejModelVariantRegisterRecord[]
     */
    public function getKoeretoejModelVariantRegisterRecord()
    {
      return $this->KoeretoejModelVariantRegisterRecord;
    }

    /**
     * @param KoeretoejModelVariantRegisterRecord[] $KoeretoejModelVariantRegisterRecord
     * @return ArrayOfKoeretoejModelVariantRegisterRecord
     */
    public function setKoeretoejModelVariantRegisterRecord(array $KoeretoejModelVariantRegisterRecord)
    {
      $this->KoeretoejModelVariantRegisterRecord = $KoeretoejModelVariantRegisterRecord;
      return $this;
    }

}
