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
use App\Departments;
// use App\Sections;
use App\Designations;
// use App\Currentaddress;
// use App\Permanentaddress;

class EmployeeDepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = \DB::table('departments')
            ->select('department_id', 'department_name', 'IsActive')->paginate(10);

        if (!Auth::user()->hasPermissionTo('Employee Management')) {
            abort('401');
        } else {

            // return view('employees.index',)->with('roles', $roles);
            // return response()->json($employees);

            return view('departments.index', compact('roles', 'departments'));
        }
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $roles = Role::all();
        // $permissions = Permission::all();
        // $departments = $data = Departments::select('department_id','department_name')->get();
        // $designations = $data = Designations::select('designation_id','designation_name')->get();
        if (!Auth::user()->hasPermissionTo('Employee Management')) {
            abort('401');
        } else {
            return view('departments.create');
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
        if (!Auth::user()->hasPermissionTo('Employee Management')) {
            abort('401');
        } else {

            if (isset($request->isActive)) {
                $isActive = 1;
            } else {
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



            $register = Departments::create([
                'department_name' => $data['name'],
                'department_description' => $data['description'],
                'IsActive' => $isActive
            ]);

            if ($register) {
                $status = "Deparment " . $data['name'] . " Successfully Created.";
                $class = "success";
            } else {
                $status = "not reigstered";
                $class = "danger";
            }
            // $image = file_get_contents($path);
            // $file = Input::file('image');

            // return response()->json($request);        
            return redirect('department_create')->with('status', $status);
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
    { }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!Auth::user()->hasPermissionTo('Employee Management')) {
            abort('401');
        } else {
            $department = Departments::where('department_id', $id)->get();
            // return response()->json($department);
            return view('departments.edit', compact('department'));
        }
    }

    public function editDepartment(Request $request, $id)
    {
        if (!Auth::user()->hasPermissionTo('Employee Management')) {
            abort('401');
        } else {
            if (isset($request->isActive)) {
                $isActive = 1;
            } else {
                $isActive = 0;
            }
            $result = Departments::where('department_id', $id)
                ->update(array(
                    'department_name' => $request->name,
                    'department_description' => $request->description,
                    'isActive' => $isActive
                ));
            $department = Departments::where('department_id', $id)->get();
            if ($result) {
                $status = 'Department Updated successfully';
            } else {
                $status = 'Not updated.';
            }

            return redirect()->back()->with(['status' => $status, 'departmnet' => $department]);
            // return response()->json($request);        
            // return redirect('designation_create')->with('status',$status);
            // return view('employees.index')->with('roles', $roles);
            // return $status;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if (!Auth::user()->hasPermissionTo('Employee Management')) {
            abort('401');
        } else {
            if ($request->option == 'publish') {
                foreach ($request->idList as $id) {
                    $result = Departments::where('department_id', $id)
                        ->update(array('isActive' => 1));
                }
            } else if ($request->option == 'unpublish') {
                foreach ($request->idList as $id) {
                    $result = Departments::where('department_id', $id)
                        ->update(array('isActive' => 0));
                }
            } else { }

            if ($result) {
                $status = 'Profile Updated successfully';
            } else {
                $status = 'Not updated.';
            }

            return response()->json($status);

            // return response()->json($request);        
            // return redirect('designation_create')->with('status',$status);
            // return view('employees.index')->with('roles', $roles);
            // return $status;
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
        //
    }
}
