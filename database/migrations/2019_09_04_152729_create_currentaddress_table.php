<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurrentaddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('currentaddress')){
            Schema::create('currentaddress', function (Blueprint $table) {
                $table->integer('currentaddress_id',true);
                $table->text('address_1');
                $table->text('address_2')->nullable();
                $table->text('city');
                $table->text('state');
                $table->integer('country_id')->index('country_id');
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
        Schema::dropIfExists('currentaddress');
        //
    }
}
