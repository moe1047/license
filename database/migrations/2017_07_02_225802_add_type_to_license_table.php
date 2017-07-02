<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTypeToLicenseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('licenses', function (Blueprint $table) {
            $table->string('type');
            $table->string('no_of_fishing_boats');
            $table->string('processing_method');
            $table->string('type_of_exploited_fishes');
            $table->string('fish_quantities_cached_yearly');
            $table->string('selling_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
