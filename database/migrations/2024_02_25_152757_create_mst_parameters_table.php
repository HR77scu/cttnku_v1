<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_parameters', function (Blueprint $table) {
            $table->id();
            $table->string('group_parameter');
            $table->string('parameter_nm');
            $table->string('parameter_field')->nullable();
            $table->string('paramter_cd')->nullable();
            $table->string('parameter_val')->nullable();
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
        Schema::dropIfExists('mst_parameters');
    }
}
