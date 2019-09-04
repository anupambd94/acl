<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToCurrentaddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('currentaddress', function(Blueprint $table)
		{
			$table->foreign('country_id', 'country_id')->references('country_id')->on('countries')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('currentaddress', function(Blueprint $table)
		{
			$table->dropForeign('country_id');
		});
    }
}
