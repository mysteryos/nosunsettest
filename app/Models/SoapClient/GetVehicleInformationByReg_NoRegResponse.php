<?php
namespace App\Models\SoapClient;
class GetVehicleInformationByReg_NoRegResponse
{

    /**
     * @var VehicleInformation $GetVehicleInformationByReg_NoRegResult
     */
    protected $GetVehicleInformationByReg_NoRegResult = null;

    /**
     * @param VehicleInformation $GetVehicleInformationByReg_NoRegResult
     */
    public function __construct($GetVehicleInformationByReg_NoRegResult)
    {
      $this->GetVehicleInformationByReg_NoRegResult = $GetVehicleInformationByReg_NoRegResult;
    }

    /**
     * @return VehicleInformation
     */
    public function getGetVehicleInformationByReg_NoRegResult()
    {
      return $this->GetVehicleInformationByReg_NoRegResult;
    }

    /**
     * @param VehicleInformation $GetVehicleInformationByReg_NoRegResult
     * @return GetVehicleInformationByReg_NoRegResponse
     */
    public function setGetVehicleInformationByReg_NoRegResult($GetVehicleInformationByReg_NoRegResult)
    {
      $this->GetVehicleInformationByReg_NoRegResult = $GetVehicleInformationByReg_NoRegResult;
      return $this;
    }

}
