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
// use App\Employees;
// use App\Departments;
// use App\Sections;
// use App\Designations;
// use App\Currentaddress;
// use App\Permanentaddress;
use App\Transactions;


class TransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::user()->hasPermissionTo('Settings')) {
            abort('401');
        } else {
            // $items = \DB::table('items')
            //     ->select('item_id', 'item_name', 'item_amount', 'item_quantity', 'transaction', 'IsActive')
            //     ->where('IsActive', '=', '1')
            //     ->paginate(10);

            // return view('employees.index',)->with('roles', $roles);
            // return response()->json($items);

            return view('settings.transactions.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Auth::user()->hasPermissionTo('Settings')) {
            abort('401');
        } else {
            // $items = \DB::table('items')
            //     ->select('item_id', 'item_name', 'item_amount', 'item_quantity', 'transaction', 'IsActive')
            //     ->where('IsActive', '=', '1')
            //     ->paginate(10);

            // return view('employees.index',)->with('roles', $roles);
            // return response()->json($items);

            return view('settings.transactions.create');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transactions  $transactions
     * @return \Illuminate\Http\Response
     */
    public function show(Transactions $transactions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transactions  $transactions
     * @return \Illuminate\Http\Response
     */
    public function edit(Transactions $transactions)
    {
        if (!Auth::user()->hasPermissionTo('Settings')) {
            abort('401');
        } else {
            // $items = \DB::table('items')
            //     ->select('item_id', 'item_name', 'item_amount', 'item_quantity', 'transaction', 'IsActive')
            //     ->where('IsActive', '=', '1')
            //     ->paginate(10);

            // return view('employees.index',)->with('roles', $roles);
            // return response()->json($items);

            return view('settings.transactions.edit');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transactions  $transactions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transactions $transactions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transactions  $transactions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transactions $transactions)
    {
        //
    }
}
