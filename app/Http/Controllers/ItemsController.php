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
                ->select('item_id', 'item_name', 'item_amount', 'item_quantity', 'transaction', 'IsActive')
                ->where('IsActive', '=', '1')
                ->paginate(10);

            // return view('employees.index',)->with('roles', $roles);
            // return response()->json($items);

            return view('inventory.items.index', compact('items'));
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
    public function pendingItems()
    {
        if (!Auth::user()->hasPermissionTo('Inventory Management')) {
            abort('401');
        } else {
            $items = \DB::table('items')
                ->select('item_id', 'item_name', 'item_amount', 'item_quantity', 'transaction', 'IsActive')
                ->where('IsApproved', '=', '0')
                // ->where('is')
                ->paginate(10);

            // return view('employees.index',)->with('roles', $roles);
            // return response()->json($items);

            return view('inventory.items.pending', compact('items'));
        }
        // return view('inventory.items.pending');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Auth::user()->hasPermissionTo('Inventory Management')) {
            abort('401');
        } else {
            $this->validate($request, [
                'title' => 'required',
                'amount' => 'required',
                'transaction_type' => 'required',
            ]);

            if (isset($request->isActive)) {
                $isActive = 1;
            } else {
                $isActive = 0;
            }
            $status = "Initial";
            $class = "";
            $data = $request;
            $register = Items::create([
                'item_name' => $data['title'],
                'item_amount' => $data['amount'],
                'item_quantity' => $data['quantity'],
                'barcode' => $data['barcode'],
                'transaction' => $data['transaction_type'],
                'IsAllowCommission' => $data['allowcommission'],
                'IsApproved' => 0,
                'IsActive' => 1
            ]);

            if ($register) {
                $status = "Item " . $data['title'] . " (" . $data['quantity'] . ") Successfully Created.";
                $class = "success";
            } else {
                $status = "not reigstered";
                $class = "danger";
            }

            // return response()->json($request);        
            return redirect()->back()->with('status', $status);
            // return view('employees.index',)->with('roles', $roles);
            // return response()->json($request);

            // return view('inventory.items.index',compact('items'));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function show(Items $items)
    { }

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
    public function update(Request $request)
    {
        if (!Auth::user()->hasPermissionTo('Inventory Management')) {
            abort('401');
        } else {
            if ($request->option == 'validate') {
                foreach ($request->idList as $id) {
                    $result = Items::where('item_id', $id)
                        ->update(array('IsApproved' => 1));
                }
            } else if ($request->option == 'remove') {
                foreach ($request->idList as $id) {
                    $result = Items::where('item_id', $id)
                        ->update(array('IsActive' => 0));
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
     * @param  \App\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function destroy(Items $items)
    {
        //
    }
}
