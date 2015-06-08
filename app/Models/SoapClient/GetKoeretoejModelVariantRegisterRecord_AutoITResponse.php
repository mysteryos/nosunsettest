<?php
namespace App\Models\SoapClient;
class GetKoeretoejModelVariantRegisterRecord_AutoITResponse
{

    /**
     * @var ArrayOfKoeretoejModelVariantRegisterRecord $GetKoeretoejModelVariantRegisterRecord_AutoITResult
     */
    protected $GetKoeretoejModelVariantRegisterRecord_AutoITResult = null;

    /**
     * @param ArrayOfKoeretoejModelVariantRegisterRecord $GetKoeretoejModelVariantRegisterRecord_AutoITResult
     */
    public function __construct($GetKoeretoejModelVariantRegisterRecord_AutoITResult)
    {
      $this->GetKoeretoejModelVariantRegisterRecord_AutoITResult = $GetKoeretoejModelVariantRegisterRecord_AutoITResult;
    }

    /**
     * @return ArrayOfKoeretoejModelVariantRegisterRecord
     */
    public function getGetKoeretoejModelVariantRegisterRecord_AutoITResult()
    {
      return $this->GetKoeretoejModelVariantRegisterRecord_AutoITResult;
    }

    /**
     * @param ArrayOfKoeretoejModelVariantRegisterRecord $GetKoeretoejModelVariantRegisterRecord_AutoITResult
     * @return GetKoeretoejModelVariantRegisterRecord_AutoITResponse
     */
    public function setGetKoeretoejModelVariantRegisterRecord_AutoITResult($GetKoeretoejModelVariantRegisterRecord_AutoITResult)
    {
      $this->GetKoeretoejModelVariantRegisterRecord_AutoITResult = $GetKoeretoejModelVariantRegisterRecord_AutoITResult;
      return $this;
    }

}
