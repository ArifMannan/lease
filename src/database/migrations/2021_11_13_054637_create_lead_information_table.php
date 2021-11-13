<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lead_informations', function (Blueprint $table) {
            $table->id();
            $table->date('start_date')->nullable();
            $table->date('valid_date')->nullable();
            $table->date('ledge_type')->nullable();
            $table->date('ledge_holder_type')->nullable();
            $table->integer('demand_letter')->default(0);
            $table->integer('showcause_letter')->default(0);
            $table->integer('sanction_letter')->default(0);
            $table->integer('total_amount')->default(0);
            $table->integer('paid_amount')->default(0);
            $table->date('paid_date')->nullable();
            $table->string('pay_order_no')->nullable();
            $table->integer('dues_amount')->nullable();
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
        Schema::dropIfExists('lead_information');
    }
}
