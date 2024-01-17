<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->longText('note_content')->nullable();
            $table->enum('type_note',['script','no_script'])->default('no_script');
            $table->dateTime('last_opn')->nullable();
            $table->timestamps();
            $table->tinyInteger('is_active')->default('1'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notes');
    }
}
