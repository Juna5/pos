<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->int('total_transaction');
            $table->string('voucher_code');
            $table->float('dsc');
            $table->float('delivery_fee');
            $table->date('date');
            $table->string('transaction_hour');
            $table->string('customer_name');
            $table->string('payment_method');
            $table->string('store_name');

            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->string('created_ip')->nullable();
            $table->string('updated_ip')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('master_transactions');
    }
}
