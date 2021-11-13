<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadTypeInformations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lead_type_informations', function (Blueprint $table) {
            $table->id();
            $table->string('lead_information_id')->nullable();          
            $table->string('lead_type')->nullable(); 
            $table->string('pond_no')->nullable(); 
            $table->string('area')->nullable(); 
            $table->string('location')->nullable(); 
            $table->string('pond_water_valid')->nullable(); 
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
        Schema::dropIfExists('lead_type_informations');
    }
}
