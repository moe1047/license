<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVesselLicencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vessel_licences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('licenseNo');
            $table->string('vesselName');
            $table->string('nationality');
            $table->string('countryRegistered')->nullable();
            $table->string('vesselRegNo')->nullable();
            $table->string('lengthBreadthDepth')->nullable();
            $table->string('tonnage')->nullable();
            $table->string('engineType')->nullable();
            $table->string('noOfCrew')->nullable();
            $table->string('otherCraftOnBoard')->nullable();
            $table->string('yearOfConstruction')->nullable();
            $table->string('landingAndTransshippingPort')->nullable();
            $table->string('coldStorageCapacity')->nullable();
            $table->string('processingMethods')->nullable();
            $table->string('speciesToBeFished')->nullable();
            $table->string('quantityPermitted')->nullable();
            $table->string('typesOfFishingGear')->nullable();
            $table->string('areaOfFishing')->nullable();
            $table->string('reportingDetails')->nullable();
            $table->string('owner')->nullable();
            $table->string('address')->nullable();
            $table->string('tell')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->nullable();
            $table->string('agent')->nullable();
            $table->string('agentAddress')->nullable();
            $table->string('agentFax')->nullable();
            $table->string('agentEmail')->nullable();
            $table->string('agentTell')->nullable();
            $table->string('internationalCallSign')->nullable();
            $table->string('normalTransmittingFrequencies')->nullable();
            $table->string('GPS')->nullable();
            $table->string('typeOfEquipment')->nullable();
            $table->string('Transponders')->nullable();
            $table->string('type')->nullable();
            $table->string('identifyingCode')->nullable();
            $table->string('loren')->nullable();
            $table->string('omega')->nullable();
            $table->string('decca')->nullable();
            $table->string('otherEquipment')->nullable();
            $table->string('adioBuoys')->nullable();
            $table->string('epirbs')->nullable();
            $table->date('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vessel_licences');
    }
}
