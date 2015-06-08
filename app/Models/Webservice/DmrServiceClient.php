<?php
/* 
 * Name: Dmr Service Client
 * Description: Process calls to the dmr svc web service through SOAP
 */

namespace App\Models\Webservice;

class DmrServiceClient {

    protected $soapClient;

    protected $result;

    public function __construct(\SoapClient $soapClient)
    {
        $this->soapClient = $soapClient;
    }

    public function getResult()
    {
        return $this->result;
    }

    /*
     * Fetches Vehicule Information from Webservice By Registration Number
     *
     * @param string $registration
     * @return array|boolean
     */
    public function getVehicleInformationByReg($registration)
    {
        //Get Information from web service
        try
        {
            $vehiculeInformation = $this->soapClient->GetVehicleInformationByReg(new \App\Models\SoapClient\GetVehicleInformationByReg($registration));
            $this->result = $vehiculeInformation->getGetVehicleInformationByRegResult();
            return true;
        }
        catch(\Exception $e)
        {
            return false;
        }
    }
}
