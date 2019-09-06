<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Session;

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
                return view('employees.index')->with('roles', $roles);
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
        $permissions = Permission::all();

        if (!Auth::user()->hasPermissionTo('Employee Management')) {
            abort('401');
        } else {
        return view('employees.create', ['permissions'=>$permissions]);
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
        $roles = Role::all();

            if (!Auth::user()->hasPermissionTo('Employee Management')) {
                abort('401');
            } else {
                return view('employees.index')->with('roles', $roles);
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
}
