<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class VesselLicense extends Model
{
    use CrudTrait;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'vessel_licences';
    //protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
     protected $fillable = ['licenseNo','vesselName','nationality','countryRegistered','vesselRegNo','lengthBreadthDepth','tonnage','engineType','noOfCrew','otherCraftOnBoard','yearOfConstruction',
'landingAndTransshippingPort','coldStorageCapacity','processingMethods','speciesToBeFished','quantityPermitted','typesOfFishingGear','areaOfFishing','reportingDetails','owner','address','tell','fax','email',
'agent','agentAddress','agentFax','agentEmail','agentTell','internationalCallSign','normalTransmittingFrequencies','GPS','typeOfEquipment','Transponders','type','identifyingCode','loren','omega',
'decca','otherEquipment','adioBuoys','epirbs','date'];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
    public function getVesselLicenseNameAttribute(){
        return $this->licenseNo." - ".$this->vesselName;
    }
}
