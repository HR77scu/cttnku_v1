<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('account_nm')->nullable();
            $table->string('account_kategori_id')->nullable();
            $table->string('account_username')->nullable();
            $table->string('account_email')->nullable();
            $table->string('account_password')->nullable();
            $table->string('account_token')->nullable();
            $table->string('account_phone_no')->nullable();
            $table->string('account_detail')->nullable();
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
        Schema::dropIfExists('accounts');
    }
}
