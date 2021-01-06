<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment', function (Blueprint $table) {
            $table->id();
            $table->string('voucher_no');
            $table->string('voucher_date');
            $table->string('agreement_no');
            $table->string('tenant_name');
            $table->string('payment_date');
            $table->string('month');
            $table->string('payment_type');
            $table->string('cheque_no')->nullable();
            $table->string('cheque_date')->nullable();
            $table->string('rent_amount');
            $table->string('paid_amount')->nullable();
            $table->string('balance_amount')->nullable();
            $table->enum('status',["unpaid","paid","partially"])->nullable();
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
        Schema::dropIfExists('_payment');
    }
}
