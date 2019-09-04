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
                $table->text('address_1');
                $table->text('address_2')->nullable();
                $table->text('city');
                $table->text('state');
                $table->integer('country_id');
                $table->text('postal_code');
                // $table->timestamp('CreationDate')->default(DB::raw('CURRENT_TIMESTAMP'));
                $table->boolean('IsActive');
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
