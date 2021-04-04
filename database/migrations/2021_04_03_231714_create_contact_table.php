<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact', function (Blueprint $table) {
            $table->id();
            $table->string('ContactHead');
            $table->string('ContactHeadText');
            $table->string('ContactAdressHead');
            $table->string('ContactAdressHeadSub');
            $table->string('ContactTelHead');
            $table->string('ContactTelHeadSub');
            $table->string('ContactMailHead');
            $table->string('ContactMailHeadSub');

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
        Schema::dropIfExists('contact');
    }
}
