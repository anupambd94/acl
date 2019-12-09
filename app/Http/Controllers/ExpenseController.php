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

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::user()->hasPermissionTo('Expense Management')) {
            abort('401');
        } else {
            // $items = \DB::table('items')
            //     ->select('item_id', 'item_name', 'item_amount', 'item_quantity', 'transaction')
            //     ->where('IsActive', '=', '1')
            //     ->paginate(10);

            // return view('employees.index',)->with('roles', $roles);
            // return response()->json($items);

            return view('expense.orders');
        }
    }
    public function invoices()
    {
        if (!Auth::user()->hasPermissionTo('Expense Management')) {
            abort('401');
        } else {
            // $items = \DB::table('items')
            //     ->select('item_id', 'item_name', 'item_amount', 'item_quantity', 'transaction')
            //     ->where('IsActive', '=', '1')
            //     ->paginate(10);

            // return view('employees.index',)->with('roles', $roles);
            // return response()->json($items);

            return view('expense.invoices');
        }
    }
    public function quotation()
    {
        if (!Auth::user()->hasPermissionTo('Expense Management')) {
            abort('401');
        } else {
            // $items = \DB::table('items')
            //     ->select('item_id', 'item_name', 'item_amount', 'item_quantity', 'transaction')
            //     ->where('IsActive', '=', '1')
            //     ->paginate(10);

            // return view('employees.index',)->with('roles', $roles);
            // return response()->json($items);

            return view('expense.quotation');
        }
    }
    public function vendors()
    {
        if (!Auth::user()->hasPermissionTo('Expense Management')) {
            abort('401');
        } else {
            // $items = \DB::table('items')
            //     ->select('item_id', 'item_name', 'item_amount', 'item_quantity', 'transaction')
            //     ->where('IsActive', '=', '1')
            //     ->paginate(10);

            // return view('employees.index',)->with('roles', $roles);
            // return response()->json($items);

            return view('expense.vendors');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
