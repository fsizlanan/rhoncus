<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->string('aboutHead');
            $table->string('aboutSubHead');
            $table->text('aboutTextArea');
            $table->string('special11');
            $table->string('special12');
            $table->string('special1About');
            $table->float('special1Price');
            $table->string('special21');
            $table->string('special22');
            $table->string('special2About');
            $table->float('special2Price');
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
        Schema::dropIfExists('about');
    }
}
