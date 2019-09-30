<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Validator;
use Session;

//Using Database Tables
use App\Employees;
use App\Departments;
use App\Sections;
use App\Designations;


// using Requests
use App\Http\Requests\EmployeeCreate;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $roles = Role::all();
            if (!Auth::user()->hasPermissionTo('Employee Management')) {
                abort('401');
            } else {
                
                // return view('employees.index',)->with('roles', $roles);
                return view('employees.index',compact('roles', 'users', 'userCount'));
            }
       
        
        // return view('employees.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        $permissions = Permission::all();
        $departments = $data = Departments::select('department_id','department_name')->get();
        $designations = $data = Designations::select('designation_id','designation_name')->get();
        if (!Auth::user()->hasPermissionTo('Employee Management')) {
            abort('401');
        } else {
        return view('employees.create', ['permissions'=>$permissions, 'departments'=>$departments, 'designations'=>$designations, 'roles'=>$roles]);
        }
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeCreate $request)
    {
        $roles = Role::all();

            if (!Auth::user()->hasPermissionTo('Employee Management')) {
                abort('401');
            } else {

                $status = "Initial";
                $class = "";
                $data = $request;
                // $data->setAttribute('country', $countryId);
                $password = Hash::make($data['password']);
                $key = Hash::make('bdecomit');
                $toDate = Carbon::now();
        
                $register = Employees::create([
                'first_name'=>$data['firstName'],
                'last_name'=>$data['lastName'],
                'username'=>$data['username'],
                'email'=>$data['email'],
                'password'=>$password,
                'mobile'=>$data['phone'],
                'nric_fin_wp'=>$data['wp'],
                'gender'=>$data['gender'],
                'merital_status'=>$data['meritalStatus'],// ['SINGLE', 'MARRIED','DIVORCED']);
                'birth_date'=>$data['birthDate'],
                'expected_join_date'=>$data['joinDate'],
                'confirmatin_date'=>$data['confirmationDate'],
                'termination_date'=>$data['TerminationDate'],
                'probation_periods'=>$data['probation'],
                'leave_start_date'=>$data['leaveStartDate'],
                'pin_expire_date'=>$data['wpExpiryDate'],
                'id_types'=>$data['idType'],// ['SPASS', 'WP', 'PR', 'CITIZENSHIP', 'EP']);
                'holiday_types'=>$data['holidayType'],// ['PH', 'MC', 'LOCAL', 'SINGAPUR']);
                'job_types'=>$data['jobType'],// ['FULLTIME', 'PARTTIME', 'FLEXI', 'NONE'])->default('NONE');
                'salary_types'=>$data['salaryType'],// ['FIXED', 'HOURLY', 'DAILY', 'NONE'])->default('NONE');
                'days_per_week'=>$data['daysPerWeek'],
                'total_hours_per_year'=>$data['hoursPerYear'],
                'rate_per_hour'=>$data['ratePerHour'],
                'profile_image'=>$data['photo'],
                'department_id'=>1,
                'section_id'=>1,
                'designation_id'=>1,
                'currentaddress_id'=>1,
                'permanentaddress_id'=>1,
                'IsActive'=>1
                ]);
        
                if($register){
                    $status = "Thank you for register";
                    $class = "success";
                }else{
                    $status = "not reigstered";
                    $class = "danger";
                }
        
        
                return redirect('employee_create')->with('status',$status);
                // return view('employees.index')->with('roles', $roles);
                // return response()->json($request);
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $roles = Role::all();

            if (!Auth::user()->hasPermissionTo('Employee Management')) {
                abort('401');
            } else {
                return view('employees.index')->with('roles', $roles);
            }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles = Role::all();

            if (!Auth::user()->hasPermissionTo('Employee Management')) {
                abort('401');
            } else {
                return view('employees.index')->with('roles', $roles);
            }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $roles = Role::all();

            if (!Auth::user()->hasPermissionTo('Employee Management')) {
                abort('401');
            } else {
                return view('employees.index')->with('roles', $roles);
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $roles = Role::all();

        if (!Auth::user()->hasPermissionTo('Employee Management')) {
            abort('401');
        } else {
            return view('employees.index')->with('roles', $roles);
        }
    }

    public function getSection(Request $request){

        $data = Sections::select('section_id','section_name')->where('department_id',$request->departmentId)->get();
        return response()->json($data);
     }
}
