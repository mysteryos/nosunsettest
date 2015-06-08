<?php
/* 
 * Name: Car
 * Description: Car Table on Interview Database
 * Note: Eloquent is Laravel's ORM.
 */

namespace App\Models\Db;

class Car extends \Eloquent {

    //Table Name
    protected $table = "dbo.Cars";
    //Primary Key Name
    protected $id = "Id";

    /*
     * Fetch list of Vehicules matched by manufacturer and model with engine volume or year
     *
     * @param string $manufacturer
     * @param string $model
     * @param integer $engine_volume
     * @param integer $year
     * @param integer $limit
     * 
     * @return \Illuminate\Support\Collection
     */

    public function getPreciseList($manufacturer,$model,$model_code,$year,$limit=10)
    {
        //Start Orm
        $query = self::query();

        //Manufacturer Name
        $query->where('Manufacturerttxt','=',$manufacturer);

        //Model Name
        $query->where('Modeltxt','=',$model,'AND');

        //Variant Code
        $query->where('Markcode','LIKE',"$model_code%",'AND');

        //Model Year
        $query->where('ModelYear','=',$year,'AND');

        $query->take($limit);

        $query->orderBy('DateAdded');

        return $query->get();
    }

}

