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
                $table->text('first_name', 65535);
                $table->text('last_name', 65535);
                $table->text('username', 65535);
                $table->text('email');
                $table->text('password')->nullable();
                $table->text('mobile')->nullable();
                $table->text('nric_fin_wp')->nullable();
                $table->text('gender', 65535)->nullable();
                $table->enum('merital_status', ['SINGLE', 'MARRIED','DIVORCED'])->nullable();
                $table->dateTime('birth_date')->nullable();
                $table->dateTime('expected_join_date')->nullable();
                $table->dateTime('confirmatin_date')->nullable();
                $table->dateTime('termination_date')->nullable();
                $table->integer('probation_periods')->nullable();
                $table->dateTime('leave_start_date')->nullable();
                $table->dateTime('pin_expire_date')->nullable();
                $table->enum('id_types', ['SPASS', 'WP', 'PR', 'CITIZENSHIP', 'EP'])->nullable();
                $table->enum('holiday_types', ['PH', 'MC', 'LOCAL', 'SINGAPUR'])->nullable();
                $table->enum('job_types', ['FULLTIME', 'PARTTIME', 'FLEXI', 'NONE'])->nullable()->default('NONE');
                $table->enum('salary_types', ['FIXED', 'HOURLY', 'DAILY', 'NONE'])->nullable()->default('NONE');
                $table->integer('days_per_week')->nullable()->nullable();
                $table->integer('total_hours_per_year')->nullable()->nullable();
                $table->integer('rate_per_hour')->nullable()->nullable();
                $table->text('profile_image')->nullable();
                $table->integer('photo_id')->index('photo_id')->nullable();
                $table->integer('department_id')->index('department_id')->nullable();
                $table->integer('section_id')->index('section_id')->nullable();
                $table->integer('designation_id')->index('designation_id')->nullable();
                $table->integer('currentaddress_id')->index('currentaddress_id')->nullable();
                $table->integer('permanentaddress_id')->index('permanentaddress_id')->nullable();
                $table->integer('educationdetails_id')->index('educationdetails_id')->nullable();
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
