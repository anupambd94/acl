<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('countries')){
            Schema::create('countries', function (Blueprint $table) {
                $table->integer('country_id',true);
                $table->string('country_name')->unique();
                $table->string('country_code')->unique();
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
        Schema::dropIfExists('countries');
        //
    }
}
