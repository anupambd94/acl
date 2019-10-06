<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Session;

//Using Database Tables
use App\Employees;
use App\Departments;
use App\Sections;
use App\Designations;
use App\Currentaddress;
use App\Permanentaddress;

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
        $departments = Departments::all();
        $designations = Designations::all();

        // $employees = Employees::all()->paginate(10);
            $employees = \DB::table('employees')
            ->join('departments','employees.department_id','=','departments.department_id')
            ->join('designations','employees.designation_id','=','designations.designation_id')
            ->select('employees.employee_id','employees.first_name','employees.last_name','employees.email',\DB::raw('departments.department_name AS department'),\DB::raw('designations.designation_name AS designation'))
            ->paginate(10);
            // $userInfo = \DB::table('users')
            // ->join('countries', 'users.CountryId', '=', 'countries.CountryId')
            // ->join('cities', 'users.CityId', '=', 'cities.CityId')
            // ->join('locations', 'users.LocationId', '=', 'locations.LocationId')
            // ->join('bloodgroups', 'users.BloodGroupId', '=', 'bloodgroups.BloodGroupId')
            // ->select(\DB::raw('id AS BloodDonarId'),'users.DateOfBirth','FullName','email','MobileNumber','BloodGroupName',\DB::raw('cities.Name AS City'),\DB::raw('countries.Name AS Country'),\DB::raw('countries.Code AS CountryCode'),'LocationName', 'Gender', 'users.IsActive',\DB::raw('TIMESTAMPDIFF(YEAR, DATE(DateOfBirth), current_date) AS age'))
            // ->paginate(20);

            if (!Auth::user()->hasPermissionTo('Employee Management')) {
                abort('401');
            } else {
                
                // return view('employees.index',)->with('roles', $roles);
                // return response()->json($employees);

                return view('employees.index',compact('roles', 'users', 'userCount','employees','departments','designations'));
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
                $id = \DB::getPdo()->lastInsertId();
                $hasImage =  $request->hasFile('image2');
                if ($request->hasFile('image2')) {
                    $data = $request->input('2');
                    $photo = $request->file('image2')->getClientOriginalName();
                    $destination = public_path() . '/uploads/';
                    $request->file('image2')->move($destination, $photo);
                    $data['image2'] = $photo;
                    }
//Insert Employee Permanent Address
                    $EmployeepermanentAddress = new Permanentaddress();
                    $EmployeepermanentAddress->address_1 = $data['paddress1'];
                    $EmployeepermanentAddress->address_2 = $data['paddress2'];
                    $EmployeepermanentAddress->city = $data['pcity'];
                    $EmployeepermanentAddress->state = $data['pstate'];
                    $EmployeepermanentAddress->country_id = $data['pcountry'];
                    $EmployeepermanentAddress->postal_code = $data['ppostal_code'];
                    $EmployeepermanentAddress->IsActive = 1;

                    if ($EmployeepermanentAddress->save()) {
                        $PermanentAddressId = $EmployeepermanentAddress->id;
                    }else{
                        $PermanentAddressId = 0 ;
                    }

//Insert Employee Current Address
                    $EmployeeCurrentAddress = new Currentaddress();
                    $EmployeeCurrentAddress->address_1 = $data['address1'];
                    $EmployeeCurrentAddress->address_2 = $data['address2'];
                    $EmployeeCurrentAddress->city = $data['city'];
                    $EmployeeCurrentAddress->state = $data['state'];
                    $EmployeeCurrentAddress->country_id = $data['country'];
                    $EmployeeCurrentAddress->postal_code = $data['postal_code'];
                    $EmployeeCurrentAddress->IsActive = 1;

                    if ($EmployeeCurrentAddress->save()) {
                        $currentAddressId = $EmployeeCurrentAddress->id;
                    }else{
                        $currentAddressId = 0 ;
                    }                    
                    

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
                'profile_image'=>$data['image'],
                'department_id'=>$data['department'],
                'section_id'=>$data['section'],
                'designation_id'=>$data['designation'],
                'currentaddress_id'=>$currentAddressId,
                'permanentaddress_id'=>$PermanentAddressId,
                'IsActive'=>1
                ]);
        
                if($register){
                    $status = "Employee Successfully Created.";
                    $class = "success";
                }else{
                    $status = "not reigstered";
                    $class = "danger";
                }
                    // $image = file_get_contents($path);
                    // $file = Input::file('image');
                // return response()->json($request);        
                return redirect('employee_create')->with('status',$status);
                // return view('employees.index')->with('roles', $roles);
                // return $status;
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
        // var_dump($data);
        if($data){
            return response()->json($data);
        }
     }

     public function addDepartment(Request $request){
        $NewDepartment = new Departments();

        $NewDepartment->department_name = $request->departmentName;
        $NewDepartment->IsActive = 1;
        if ($NewDepartment->save()) {
            $newDepartmentId = $NewDepartment->id;
        }else{
            $newDepartmentId = 0 ;
        } 

        return response()->json(array('departmentId'=> $newDepartmentId));

     }

     public function addSection(Request $request){
        $NewSection = new Sections();

        $NewSection->section_name= $request->section_name;
        $NewSection->department_id= $request->department_id;
        $NewSection->IsActive = 1;
        if ($NewSection->save()) {
            $newSectiontId = $NewSection->id;
        }else{
            $newSectiontId = 0 ;
        } 

        return response()->json(array('sectionId'=> $newSectiontId));
     }

     public function addDesignation(Request $request){
        $NewDesignation = new Designations();

        $NewDesignation->designation_name= $request->designationName;
        $NewDesignation->IsActive = 1;
        if ($NewDesignation->save()) {
            $newDesignationId = $NewDesignation->id;
        }else{
            $newDesignationId = 0 ;
        } 


        return response()->json(array('designationId'=> $newDesignationId));

     }
}
