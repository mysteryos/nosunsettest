<?php

namespace App\Models\SoapClient;

class DmrService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
        'GetVehicleInformationByReg' => 'App\Models\SoapClient\GetVehicleInformationByReg',
        'GetVehicleInformationByRegResponse' => 'App\Models\SoapClient\GetVehicleInformationByRegResponse',
        'GetVehicleInformationByStel' => 'App\Models\SoapClient\GetVehicleInformationByStel',
        'GetVehicleInformationByStelResponse' => 'App\Models\SoapClient\GetVehicleInformationByStelResponse',
        'GetVehicleInformationByReg_NoReg' => 'App\Models\SoapClient\GetVehicleInformationByReg_NoReg',
        'GetVehicleInformationByReg_NoRegResponse' => 'App\Models\SoapClient\GetVehicleInformationByReg_NoRegResponse',
        'GetVehicleInformationByStel_NoReg' => 'App\Models\SoapClient\GetVehicleInformationByStel_NoReg',
        'GetVehicleInformationByStel_NoRegResponse' => 'App\Models\SoapClient\GetVehicleInformationByStel_NoRegResponse',
        'GetKoeretoejModelVariantRegisterRecord_AutoIT' => 'App\Models\SoapClient\GetKoeretoejModelVariantRegisterRecord_AutoIT',
        'GetKoeretoejModelVariantRegisterRecord_AutoITResponse' => 'App\Models\SoapClient\GetKoeretoejModelVariantRegisterRecord_AutoITResponse',
        'GetKIdModelVariantIdRecord_AutoIT' => 'App\Models\SoapClient\GetKIdModelVariantIdRecord_AutoIT',
        'GetKIdModelVariantIdRecord_AutoITResponse' => 'App\Models\SoapClient\GetKIdModelVariantIdRecord_AutoITResponse',
        'VehicleInformation' => 'App\Models\SoapClient\VehicleInformation',
        'ArrayOfEjerBruger' => 'App\Models\SoapClient\ArrayOfEjerBruger',
        'EjerBruger' => 'App\Models\SoapClient\EjerBruger',
        'ArrayOfVehicleInformation' => 'App\Models\SoapClient\ArrayOfVehicleInformation',
        'ArrayOfKoeretoejModelVariantRegisterRecord' => 'App\Models\SoapClient\ArrayOfKoeretoejModelVariantRegisterRecord',
        'KoeretoejModelVariantRegisterRecord' => 'App\Models\SoapClient\KoeretoejModelVariantRegisterRecord',
        'ArrayOfKIdModelVariantIdRecord' => 'App\Models\SoapClient\ArrayOfKIdModelVariantIdRecord',
        'KIdModelVariantIdRecord' => 'App\Models\SoapClient\KIdModelVariantIdRecord',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'DmrService.svc')
    {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
              $options['classmap'][$key] = $value;
            }
          }
        $options = array_merge(array (
          'features' => 1,
        ), $options);
        
        parent::__construct($wsdl, $options);
    }

    /**
     * @param GetVehicleInformationByReg $parameters
     * @return GetVehicleInformationByRegResponse
     */
    public function GetVehicleInformationByReg(GetVehicleInformationByReg $parameters)
    {
      return $this->__soapCall('GetVehicleInformationByReg', array($parameters));
    }

    /**
     * @param GetVehicleInformationByStel $parameters
     * @return GetVehicleInformationByStelResponse
     */
    public function GetVehicleInformationByStel(GetVehicleInformationByStel $parameters)
    {
      return $this->__soapCall('GetVehicleInformationByStel', array($parameters));
    }

    /**
     * @param GetVehicleInformationByReg_NoReg $parameters
     * @return GetVehicleInformationByReg_NoRegResponse
     */
    public function GetVehicleInformationByReg_NoReg(GetVehicleInformationByReg_NoReg $parameters)
    {
      return $this->__soapCall('GetVehicleInformationByReg_NoReg', array($parameters));
    }

    /**
     * @param GetVehicleInformationByStel_NoReg $parameters
     * @return GetVehicleInformationByStel_NoRegResponse
     */
    public function GetVehicleInformationByStel_NoReg(GetVehicleInformationByStel_NoReg $parameters)
    {
      return $this->__soapCall('GetVehicleInformationByStel_NoReg', array($parameters));
    }

    /**
     * @param GetKoeretoejModelVariantRegisterRecord_AutoIT $parameters
     * @return GetKoeretoejModelVariantRegisterRecord_AutoITResponse
     */
    public function GetKoeretoejModelVariantRegisterRecord_AutoIT(GetKoeretoejModelVariantRegisterRecord_AutoIT $parameters)
    {
      return $this->__soapCall('GetKoeretoejModelVariantRegisterRecord_AutoIT', array($parameters));
    }

    /**
     * @param GetKIdModelVariantIdRecord_AutoIT $parameters
     * @return GetKIdModelVariantIdRecord_AutoITResponse
     */
    public function GetKIdModelVariantIdRecord_AutoIT(GetKIdModelVariantIdRecord_AutoIT $parameters)
    {
      return $this->__soapCall('GetKIdModelVariantIdRecord_AutoIT', array($parameters));
    }

}
