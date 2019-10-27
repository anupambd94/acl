<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
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
use App\Customers;
use App\Employees;
// use App\Departments;
// use App\Sections;
// use App\Designations;
// use App\Currentaddress;
// use App\Permanentaddress;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $roles = Role::all();
        // $employees = Employees::all();
        // $designations = Designations::all();

        // // $employees = Employees::all()->paginate(10);
            $employees = \DB::table('employees')->get();
            

            if (!Auth::user()->hasPermissionTo('Project Management')) {
                abort('401');
            } else {
                // return view('projects.index');
                // return response()->json($employees);

                return view('projects.index',compact('employees'));
            }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = \DB::table('employees')->get();
            

            if (!Auth::user()->hasPermissionTo('Project Management')) {
                abort('401');
            } else {
                // return view('projects.index');
                // return response()->json($employees);

                return view('projects.create',compact('employees'));
            }
        
    }

    public function customer(){
        $customers = \DB::table('customers')->get();

        return view('projects.customers',compact('customers'));
    
    }

    public function create_customer(){
        return view('projects.customers_create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function customerSave(Request $request){
        $this->validate($request, [
            'profile_pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required',
            'username' => 'required|unique:customers,username',
            'email' => 'email:rfc,dns|unique:customers,email',
        ]);
        $data = $request;
        
          if (!Auth::user()->hasPermissionTo('Project Management')) {
            abort('401');
        } else {
            if (Input::hasFile('profile_pic')) {
                // Store Customer Image in storage
                // --------------------------------------
                $file = $request->file('profile_pic');
       
                // //Display File Name
                // echo 'File Name: '.$file->getClientOriginalName();
                // echo '<br>';
            
                // //Display File Extension
                // echo 'File Extension: '.$file->getClientOriginalExtension();
                // echo '<br>';
            
                // //Display File Real Path
                // echo 'File Real Path: '.$file->getRealPath();
                // echo '<br>';
            
                // //Display File Size
                // echo 'File Size: '.$file->getSize();
                // echo '<br>';
            
                // //Display File Mime Type
                // echo 'File Mime Type: '.$file->getMimeType();
                $fileName = $file->getClientOriginalName();
    
                //Move Uploaded File
                $destinationPath = 'uploads/customer/image';
              }else{
                $fileName = null;
    
              }

          $register = Customers::create([
            'name'=>$data['name'],
            'username'=>$data['username'],
            'email'=>$data['email'],
            'password'=>$data['password'],
            'profile_image'=>$fileName,
            'company'=>$data['company'],
            'contact'=>$data['phone'],
            'website'=>$data['website'],
            'manager'=>$data['instant_messenger'],
            'manager_id'=>$data['im_id'],
            'country'=>$data['country_id'],
            'state'=>$data['state'],
            'city'=>$data['city'],
            'address'=>$data['address'],
            'zip_code'=>$data['zip'],
            'comments' =>$data['comments']
            ]);
    
            if($register){
                $status = "Employee Successfully Created.";
                $class = "success";
                $customerId = $register->id;
                $file->move($destinationPath,$file->getClientOriginalName());
                $employees = \DB::table('employees')->get();
            }else{
                $status = "not reigstered";
                $class = "danger";
            }
            $selectedCustomer = array(
                'id'=> $customerId,
                'name' => $request->name
            );
        }
                // $image = file_get_contents($path);
                // $file = Input::file('image');
            // return response()->json($selectedCustomer);        
            // return view('projects.create',compact('employees','selectedCustomer'));
            return redirect()->back();

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
