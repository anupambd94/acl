<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('employees')){
            Schema::create('employees', function (Blueprint $table) {
                $table->integer('employee_id',true);
                $table->text('first_name', 65535)->nullable();
                $table->text('last_name', 65535)->nullable();
                $table->text('username', 65535)->nullable();
                $table->text('email');
                $table->text('password');
                $table->text('mobile');
                $table->text('nric_fin_wp');
                $table->text('gender', 65535)->nullable();
                $table->enum('merital_status', ['SINGLE', 'MARRIED','DIVORCED']);
                $table->dateTime('expected_join_date');
                $table->dateTime('confirmatin_date');
                $table->dateTime('termination_date');
                $table->integer('probation_periods');
                $table->dateTime('leave_start_date');
                $table->dateTime('pin_expire_date');
                $table->enum('id_types', ['SPASS', 'WP', 'PR', 'CITIZENSHIP', 'EP']);
                $table->enum('holiday_types', ['PH', 'MC', 'LOCAL', 'SINGAPUR']);
                $table->enum('job_types', ['FULLTIME', 'PARTTIME', 'FLEXI', 'NONE'])->default('NONE');
                $table->enum('salary_types', ['FIXED', 'HOURLY', 'DAILY', 'NONE'])->default('NONE');
                $table->integer('days_per_week')->default(0);
                $table->integer('total_hours_per_year')->default(0);
                $table->integer('rate_per_hour')->default(0);
                $table->integer('photo_id')->index('photo_id');
                $table->integer('department_id')->index('department_id');
                $table->integer('section_id')->index('section_id');
                $table->integer('designation_id')->index('designation_id');
                $table->integer('currentaddress_id')->index('currentaddress_id');
                $table->integer('permanentaddress_id')->index('permanentaddress_id');
                $table->integer('educationdetails_id')->index('educationdetails_id');
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
        Schema::dropIfExists('employees');
        //
    }
}
