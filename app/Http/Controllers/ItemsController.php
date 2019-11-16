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

use App\Items;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::user()->hasPermissionTo('Inventory Management')) {
            abort('401');
        } else {
        $items = \DB::table('items')
        ->select('item_id', 'item_name', 'item_amount', 'item_quantity', 'transaction')
        // ->where('is')
        ->paginate(10);
            
            // return view('employees.index',)->with('roles', $roles);
            // return response()->json($items);
        
            return view('inventory.items.index',compact('items'));
        
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
        return view('inventory.items.create');
        //
    }
    public function stock()
    {
        return view('inventory.items.stock');
        //
    }
    public function assets()
    {
        return view('inventory.items.assets');
        //
    }
    public function stock_create()
    {
        return view('inventory.items.stock_create');
        //
    }
    public function assets_create()
    {
        return view('inventory.items.assets_create');
        //
    }
    public function pendingItems(){
        
        return view('inventory.items.pending');
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
     * @param  \App\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function show(Items $items)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function edit(Items $items)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Items $items)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function destroy(Items $items)
    {
        //
    }
}
