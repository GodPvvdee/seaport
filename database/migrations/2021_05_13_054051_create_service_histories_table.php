<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_histories', function (Blueprint $table) {
            $table->increments('sequence_number');
            $table->integer('sailor_id');
            $table->integer('rank_id');
            $table->integer('vessel_id');
            $table->date('sign_on_date');
            $table->date('sign_on_port');
            $table->date('sign_off_date');
            $table->date('sign_off_port');
            $table->integer('contract_perion');
            $table->date('contact_end_date');
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
        Schema::dropIfExists('service_histories');
    }
}
