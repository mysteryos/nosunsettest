<?php
/* 
 * Name: Car Controller
 * Description: All about cars, wrooom!
 */

namespace App\Http\Controllers;

use \Carbon\Carbon;

class CarController extends Controller {

    protected $data;

    public function __construct(\App\Models\Db\Car $dbTable)
    {
        $this->dbTable = $dbTable;
    }
    
    public function getIndex()
    {
        $this->data['pageTitle'] = "NoSunset Car Test Page";
        return \View::make('car',$this->data);
    }

    /*
     * Fetches Vehicule Information from Dmr webservice by Car Registration Number
     * @return \Illuminate\Support\Facades\Response
     */
    public function getVehicleInformationByRegistration()
    {
        //Expects GET data of name 'registration'
        if(\Input::has('registration'))
        {
            //Call web client service with registration number
            $dmrServiceClient = new \App\Models\Webservice\DmrServiceClient(
                                    new \App\Models\SoapClient\DmrService(),
                                    new \App\Models\Db\Car()
                                );

            $result = $dmrServiceClient->getVehicleInformationByReg(\Input::get('registration'));

            //If web client found a match for the registration number
            if($result !== false)
            {
                //We fetch a list of 10 vehicules from our database
                $webServiceResult = $dmrServiceClient->getResult();
                $carDbResults = $this->dbTable->getPreciseList($webServiceResult->getMaerke(),
                                                                $webServiceResult->getModel(),
                                                                $webServiceResult->getModelNummer(),
                                                                $webServiceResult->getFoersteRegistreringDato()->format('Y'));
                //Generate Car List Html
                $carListHtml = \View::make('carlist',['webServiceResult'=>(array)$webServiceResult,'list'=>$carDbResults])->render();

                return \Response::make($carListHtml);
            }
            else
            {
                //404 not found
                return \Response::make("Unable to find a match to the registration number",404);
            }
        }
        else
        {
            return \Response::make("Please enter the registration number",400);
        }

        return \Response::make("Unable to process your request at this time. Please try again.",500);
    }
}

