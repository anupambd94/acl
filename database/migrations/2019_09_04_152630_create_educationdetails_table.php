<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('educationdetails')){
            Schema::create('educationdetails', function (Blueprint $table) {
                $table->integer('educationdetails_id',true);
                $table->text('highestdegree');
                $table->text('cirtificate_1')->nullable();
                $table->text('cirtificate_2')->nullable();
                $table->text('special_qualification')->nullable();
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
        Schema::dropIfExists('educationdetails');
        //
    }
}
