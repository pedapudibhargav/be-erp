<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Suppliers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('suppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('phone_primary')->unique();
            $table->string('phone_secondary');
            $table->string('contact_person_primary');
            $table->string('contact_person_secondary');
            $table->string('address_line_1');
            $table->string('address_line_2');
            $table->string('state');
            $table->string('city');
            $table->string('pincode');
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
        Schema::dropIfExists('suppliers');
    }
}
