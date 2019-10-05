<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermanentaddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('permanentaddress')){
            Schema::create('permanentaddress', function (Blueprint $table) {
                $table->integer('permanentaddress_id',true);
                $table->text('address_1')->nullable();
                $table->text('address_2')->nullable();
                $table->text('city')->nullable();
                $table->text('state')->nullable();
                $table->integer('country_id')->nullable();
                $table->text('postal_code')->nullable();
                // $table->timestamp('CreationDate')->default(DB::raw('CURRENT_TIMESTAMP'));
                $table->boolean('IsActive')->nullable();
                $table->rememberToken();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permanentaddress');
        //
    }
}
