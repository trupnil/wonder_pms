<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit', function (Blueprint $table) {
            $table->id();
            $table->integer('unit_type_id')->default(1);
            $table->integer('property_id');
            $table->integer('property_type_id');
            $table->string('unit_name');
            $table->string('unit_localname');
            $table->text('description');
            $table->text('remark');
            $table->text('photos');
            $table->string('block_no');
            $table->string('floor_no');
            $table->enum('status',['active','inactive']);
            $table->integer('user_id')->default(1);
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
        Schema::dropIfExists('unit');
    }
}
