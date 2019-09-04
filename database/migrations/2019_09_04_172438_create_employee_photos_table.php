<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('employee_photos')){
            Schema::create('employee_photos', function (Blueprint $table) {
                $table->integer('photo_id',true);
                $table->text('photo_name');
                $table->text('photo_type');
                $table->integer('photo_size')->default(0);               
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
        //
        Schema::dropIfExists('employee_photos');

    }
}
