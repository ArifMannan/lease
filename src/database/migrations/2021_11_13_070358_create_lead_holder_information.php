<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadHolderInformation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lead_holder_informations', function (Blueprint $table) {
            $table->id();
            $table->string('lead_information_id')->nullable();          
            $table->string('lead_holder_type')->nullable();          
            $table->string('name')->nullable();          
            $table->string('bangla_name')->nullable();          
            $table->string('father_name')->nullable();          
            $table->string('bangla_father_name')->nullable();          
            $table->string('permanent_address')->nullable();          
            $table->string('bangla_permanent_address')->nullable();          
            $table->string('contact_no')->nullable();          
            $table->string('email')->nullable();          
            $table->string('nid_or_passport')->nullable();          
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
        Schema::dropIfExists('lead_holder_informations');
    }
}
