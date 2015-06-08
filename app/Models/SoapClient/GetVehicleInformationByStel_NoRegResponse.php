<?php
namespace App\Models\SoapClient;
class GetVehicleInformationByStel_NoRegResponse
{

    /**
     * @var VehicleInformation $GetVehicleInformationByStel_NoRegResult
     */
    protected $GetVehicleInformationByStel_NoRegResult = null;

    /**
     * @param VehicleInformation $GetVehicleInformationByStel_NoRegResult
     */
    public function __construct($GetVehicleInformationByStel_NoRegResult)
    {
      $this->GetVehicleInformationByStel_NoRegResult = $GetVehicleInformationByStel_NoRegResult;
    }

    /**
     * @return VehicleInformation
     */
    public function getGetVehicleInformationByStel_NoRegResult()
    {
      return $this->GetVehicleInformationByStel_NoRegResult;
    }

    /**
     * @param VehicleInformation $GetVehicleInformationByStel_NoRegResult
     * @return GetVehicleInformationByStel_NoRegResponse
     */
    public function setGetVehicleInformationByStel_NoRegResult($GetVehicleInformationByStel_NoRegResult)
    {
      $this->GetVehicleInformationByStel_NoRegResult = $GetVehicleInformationByStel_NoRegResult;
      return $this;
    }

}
