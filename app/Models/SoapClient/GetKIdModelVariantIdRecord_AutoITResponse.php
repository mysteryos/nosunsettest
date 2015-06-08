<?php
namespace App\Models\SoapClient;
class GetKIdModelVariantIdRecord_AutoITResponse
{

    /**
     * @var ArrayOfKIdModelVariantIdRecord $GetKIdModelVariantIdRecord_AutoITResult
     */
    protected $GetKIdModelVariantIdRecord_AutoITResult = null;

    /**
     * @param ArrayOfKIdModelVariantIdRecord $GetKIdModelVariantIdRecord_AutoITResult
     */
    public function __construct($GetKIdModelVariantIdRecord_AutoITResult)
    {
      $this->GetKIdModelVariantIdRecord_AutoITResult = $GetKIdModelVariantIdRecord_AutoITResult;
    }

    /**
     * @return ArrayOfKIdModelVariantIdRecord
     */
    public function getGetKIdModelVariantIdRecord_AutoITResult()
    {
      return $this->GetKIdModelVariantIdRecord_AutoITResult;
    }

    /**
     * @param ArrayOfKIdModelVariantIdRecord $GetKIdModelVariantIdRecord_AutoITResult
     * @return GetKIdModelVariantIdRecord_AutoITResponse
     */
    public function setGetKIdModelVariantIdRecord_AutoITResult($GetKIdModelVariantIdRecord_AutoITResult)
    {
      $this->GetKIdModelVariantIdRecord_AutoITResult = $GetKIdModelVariantIdRecord_AutoITResult;
      return $this;
    }

}
