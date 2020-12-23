<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenant', function (Blueprint $table) {
            $table->id();
            $table->string('tenant_name');
            $table->string('tenant_localname');
            $table->string('resident_card');
            $table->string('driving_lic');
            $table->string('passport');
            $table->string('mobile');
            $table->string('telephone');
            $table->string('email');
            $table->string('alternate_contact');
            $table->string('country');
            $table->string('state');
            $table->string('provine');
            $table->string('area');
            $table->string('city');
            $table->text('landmark');
            $table->text('other_details');
            $table->string('tenant_spouse');
            $table->string('blood_group');
            $table->string('tenant_work');
            $table->string('photo');
            $table->string('birthdate');
            $table->string('tenant_cr');
            $table->string('sponser_name');
            $table->enum('status',['active','inactive']);
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
        Schema::dropIfExists('tenant');
    }
}
