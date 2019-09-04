<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employees', function(Blueprint $table)
		{
			$table->foreign('photo_id', 'photo_id')->references('photo_id')->on('employee_photos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('department_id', 'department_id')->references('department_id')->on('departments')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('section_id', 'section_id')->references('section_id')->on('sections')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('designation_id', 'designation_id')->references('designation_id')->on('designations')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('currentaddress_id', 'currentaddress_id')->references('currentaddress_id')->on('currentaddress')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('permanentaddress_id', 'permanentaddress_id')->references('permanentaddress_id')->on('permanentaddress')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('educationdetails_id', 'educationdetails_id')->references('educationdetails_id')->on('educationdetails')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employees', function(Blueprint $table)
		{
			$table->dropForeign('photo_id');
			$table->dropForeign('department_id');
			$table->dropForeign('section_id');
			$table->dropForeign('designation_id');
			$table->dropForeign('currentaddress_id');
			$table->dropForeign('permanentaddress_id');
			$table->dropForeign('educationdetails_id');
		});
    }
}
