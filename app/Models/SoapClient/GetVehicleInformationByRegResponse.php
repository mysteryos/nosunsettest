<?php
namespace App\Models\SoapClient;
class GetVehicleInformationByRegResponse
{

    /**
     * @var VehicleInformation $GetVehicleInformationByRegResult
     */
    protected $GetVehicleInformationByRegResult = null;

    /**
     * @param VehicleInformation $GetVehicleInformationByRegResult
     */
    public function __construct($GetVehicleInformationByRegResult)
    {
      $this->GetVehicleInformationByRegResult = $GetVehicleInformationByRegResult;
    }

    /**
     * @return VehicleInformation
     */
    public function getGetVehicleInformationByRegResult()
    {
      return $this->GetVehicleInformationByRegResult;
    }

    /**
     * @param VehicleInformation $GetVehicleInformationByRegResult
     * @return GetVehicleInformationByRegResponse
     */
    public function setGetVehicleInformationByRegResult($GetVehicleInformationByRegResult)
    {
      $this->GetVehicleInformationByRegResult = $GetVehicleInformationByRegResult;
      return $this;
    }

}
