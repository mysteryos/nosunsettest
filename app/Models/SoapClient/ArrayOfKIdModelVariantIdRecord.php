<?php

namespace App\Models\SoapClient;

class ArrayOfKIdModelVariantIdRecord
{

    /**
     * @var KIdModelVariantIdRecord[] $KIdModelVariantIdRecord
     */
    protected $KIdModelVariantIdRecord = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KIdModelVariantIdRecord[]
     */
    public function getKIdModelVariantIdRecord()
    {
      return $this->KIdModelVariantIdRecord;
    }

    /**
     * @param KIdModelVariantIdRecord[] $KIdModelVariantIdRecord
     * @return ArrayOfKIdModelVariantIdRecord
     */
    public function setKIdModelVariantIdRecord(array $KIdModelVariantIdRecord)
    {
      $this->KIdModelVariantIdRecord = $KIdModelVariantIdRecord;
      return $this;
    }

}
