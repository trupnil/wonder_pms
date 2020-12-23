<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgreementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agreements', function (Blueprint $table) {
            $table->id();
            $table->string('agreement_no');
            $table->integer('user_id')->default(1);
            $table->integer('tenant_id');
            $table->integer('unit_id');
            $table->integer('unit_type_id');
            $table->integer('property_id');
            $table->integer('property_type_id');
            $table->string('tenant_name');
            $table->string('resident_card');
            $table->string('passport');
            $table->string('telephone');
            $table->string('mobile');
            $table->string('tenant_work');
            $table->string('sponser_name');
            $table->string('tenant_cr');
            $table->string('unit_type_name');
            $table->string('unit_name');
            $table->string('period_of');
            $table->string('agreement_start');
            $table->string('agreement_end');
            $table->string('document_attach');
            $table->string('monthly_rent');
            $table->string('payment_type');
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
        Schema::dropIfExists('agreements');
    }
}
