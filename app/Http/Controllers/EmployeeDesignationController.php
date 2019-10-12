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

//Using Database Tables
// use App\Employees;
// use App\Departments;
// use App\Sections;
use App\Designations;
// use App\Currentaddress;
// use App\Permanentaddress;

class EmployeeDesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $designations = \DB::table('designations')
        ->select('designation_id','designation_name','IsActive')->paginate(10);

        if (!Auth::user()->hasPermissionTo('Employee Management')) {
            abort('401');
        } else {
            
            // return view('employees.index',)->with('roles', $roles);
            // return response()->json($employees);

            return view('designations.index',compact('roles','designations'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        if (!Auth::user()->hasPermissionTo('Employee Management')) {
            abort('401');
        } else {
        return view('designations.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(isset($request->isActive)){
            $isActive = 1;
        }else{
            $isActive = 0;
        }
                $status = "Initial";
                $class = "";
                // $isActive  = 1;
                $data = $request;
                // // $data->setAttribute('country', $countryId);
                // $password = Hash::make($data['password']);
                // $key = Hash::make('bdecomit');
                // $toDate = Carbon::now();
                // $id = \DB::getPdo()->lastInsertId();
                // $hasImage =  $request->hasFile('image2');
                  
                    

                $register = Designations::create([
                'designation_name'=>$data['name'],
                'designation_description'=>$data['description'],
                'IsActive'=>$isActive
                ]);
        
                if($register){
                    $status = "Designation ".$data['name']." Successfully Created.";
                    $class = "success";
                }else{
                    $status = "not created";
                    $class = "danger";
                }
                    // $image = file_get_contents($path);
                    // $file = Input::file('image');
                    
                // return response()->json($request);        
                return redirect('designation_create')->with('status',$status);
                // return view('employees.index')->with('roles', $roles);
                // return $status;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
