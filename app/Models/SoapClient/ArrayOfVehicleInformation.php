<?php
namespace App\Models\SoapClient;
class ArrayOfVehicleInformation
{

    /**
     * @var VehicleInformation[] $VehicleInformation
     */
    protected $VehicleInformation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return VehicleInformation[]
     */
    public function getVehicleInformation()
    {
      return $this->VehicleInformation;
    }

    /**
     * @param VehicleInformation[] $VehicleInformation
     * @return ArrayOfVehicleInformation
     */
    public function setVehicleInformation(array $VehicleInformation)
    {
      $this->VehicleInformation = $VehicleInformation;
      return $this;
    }

}
