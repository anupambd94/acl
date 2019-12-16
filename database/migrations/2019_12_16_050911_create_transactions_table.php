<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('transaction_id');
            $table->string('transaction_name')->unique();
            // $table->dateTime('start_date')->nullable();
            $table->integer('parent_id')->nullable();
            $table->string('color')->nullable();
            $table->decimal('budget')->nullable();
            // $table->integer('customer_id')->index('customer_id')->nullable();
            $table->boolean('IsActive');
            $table->rememberToken();
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
        Schema::dropIfExists('transactions');
    }
}
