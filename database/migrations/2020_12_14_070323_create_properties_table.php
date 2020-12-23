<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->integer('property_type_id');
            $table->string('property_name');
            $table->string('property_localname');
            $table->string('property_no');
            $table->string('way_no');
            $table->string('street_no');
            $table->string('landmark');
            $table->string('area');
            $table->string('city');
            $table->string('country');
            $table->integer('user_id')->default(1);
            $table->text('photos');
            $table->enum('status',["active","inactive"]);
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
        Schema::dropIfExists('properties');
    }
}
