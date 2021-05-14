<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSailorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sailors', function (Blueprint $table) {
            $table->increments('sailor_id');
            $table->string('sailor_name');
            $table->date('date_of_birth');
            $table->string('marital_status');
            $table->string('address');
            $table->float('height');
            $table->float('weight');
            $table->string('blood_type');
            $table->integer('shoe_size');
            $table->string('job_status');
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
        Schema::dropIfExists('sailors');
    }
}
