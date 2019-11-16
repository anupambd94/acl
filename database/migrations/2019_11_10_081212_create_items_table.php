<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('item_id');
            $table->string('item_name')->unique();
            $table->integer('item_amount');
            $table->integer('item_quantity')->nullable();
            $table->string('barcode')->nullable();
            $table->enum('transaction', ['For Sale', 'Asset','Rent']);
            $table->boolean('IsActive');
            $table->boolean('IsAllowCommission');
            $table->boolean('IsApproved');
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
        Schema::dropIfExists('items');
    }
}
