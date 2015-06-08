<?php
namespace App\Models\SoapClient;
class GetVehicleInformationByStelResponse
{

    /**
     * @var VehicleInformation $GetVehicleInformationByStelResult
     */
    protected $GetVehicleInformationByStelResult = null;

    /**
     * @param VehicleInformation $GetVehicleInformationByStelResult
     */
    public function __construct($GetVehicleInformationByStelResult)
    {
      $this->GetVehicleInformationByStelResult = $GetVehicleInformationByStelResult;
    }

    /**
     * @return VehicleInformation
     */
    public function getGetVehicleInformationByStelResult()
    {
      return $this->GetVehicleInformationByStelResult;
    }

    /**
     * @param VehicleInformation $GetVehicleInformationByStelResult
     * @return GetVehicleInformationByStelResponse
     */
    public function setGetVehicleInformationByStelResult($GetVehicleInformationByStelResult)
    {
      $this->GetVehicleInformationByStelResult = $GetVehicleInformationByStelResult;
      return $this;
    }

}
