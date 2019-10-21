<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $fillable = [
               'first_name',
                'last_name',
                'username',
                'email',
                'password',
                'mobile',
                'nric_fin_wp',
                'gender',
                'merital_status',// ['SINGLE', 'MARRIED','DIVORCED']);
                'expected_join_date',
                'confirmatin_date',
                'termination_date',
                'probation_periods',
                'leave_start_date',
                'pin_expire_date',
                'id_types',// ['SPASS', 'WP', 'PR', 'CITIZENSHIP', 'EP']);
                'holiday_types',// ['PH', 'MC', 'LOCAL', 'SINGAPUR']);
                'job_types',// ['FULLTIME', 'PARTTIME', 'FLEXI', 'NONE'])->default('NONE');
                'salary_types',// ['FIXED', 'HOURLY', 'DAILY', 'NONE'])->default('NONE');
                'days_per_week',
                'total_hours_per_year',
                'rate_per_hour',
                'photo_id',
                'department_id',
                'section_id',
                'designation_id',
                'currentaddress_id',
                'permanentaddress_id',
                'educationdetails_id',
                 'IsActive'
    ];

    public function photo(){
        return $this->belingsTo('App\Photos');
    }
    public function department(){
        return $this->belingsTo('App\Departments');
    }
    public function section(){
        return $this->belingsTo('App\Sections');
    }
    public function designation(){
        return $this->belingsTo('App\Designation');
    }
    public function currentAddress(){
        return $this->belingsTo('App\CurrentAddress');
    }
    public function PermanentAddress(){
        return $this->belingsTo('App\Departments');
    }
    public function education(){
        return $this->belingsTo('App\Educations');
    }
}
