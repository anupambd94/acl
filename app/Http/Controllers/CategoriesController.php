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
use App\Categories;

class CategoriesController extends Controller
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
        $categories = \DB::table('categories')
        ->select('category_id', 'category_name', 'parent_id', 'IsActive')->paginate(10);
            
            // return view('employees.index',)->with('roles', $roles);
            // return response()->json($employees);
        
            return view('inventory.categories.index',compact('categories'));
        
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Auth::user()->hasPermissionTo('Inventory Management')) {
            abort('401');
        } else {
        $categories = \DB::table('categories')
        ->select('category_id', 'category_name')->get();
            
            // return view('employees.index',)->with('roles', $roles);
            // return response()->json($employees);
        
            return view('inventory.categories.create',compact('categories'));
        
        }       //
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
                'category_name' => 'required|unique:categories,category_name'
            ]);
        
            if (isset($request->isActive)) {
                $isActive = 1;
            } else {
                $isActive = 0;
            }
            $status = "Initial";
            $class = "";
            $data = $request;
            $register = Categories::create([
                'category_name' => $data['category_name'],
                'parent_id' => $data['parent'],
                'IsActive' => $isActive
            ]);

            if ($register) {
                $status = "Category " . $data['name'] . " Successfully Created.";
                $class = "success";
            } else {
                $status = "not reigstered";
                $class = "danger";
            }
            // $image = file_get_contents($path);
            // $file = Input::file('image');

            // return response()->json($request);        
            return redirect()->back()->with('status', $status);
            // return view('employees.index')->with('roles', $roles);
            // return $status;
        
            // return view('inventory.categories.create',compact('categories'));
        
        }  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Categories $categories)
    {
        if (!Auth::user()->hasPermissionTo('Inventory Management')) {
            abort('401');
        } else {
            $category = Categories::where('category_id', $id)->get();
            // return response()->json($department);
            return view('inventory.categories.edit', compact('department'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if (!Auth::user()->hasPermissionTo('Inventory Management')) {
            abort('401');
        } else {
            if ($request->option == 'publish') {
                foreach ($request->idList as $id) {
                    $result = Categories::where('category_id', $id)
                        ->update(array('isActive' => 1));
                }
            } else if ($request->option == 'unpublish') {
                foreach ($request->idList as $id) {
                    $result = Categories::where('category_id', $id)
                        ->update(array('isActive' => 0));
                }
            } else { }

            if ($result) {
                $status = 'Category Updated successfully';
            } else {
                $status = 'Not updated.';
            }

            return response()->json($status);
        }
    }

    public function editCategory(Request $request, $id)
    {
        if (!Auth::user()->hasPermissionTo('Inventory Management')) {
            abort('401');
        } else {
            if (isset($request->isActive)) {
                $isActive = 1;
            } else {
                $isActive = 0;
            }
            $result = Categories::where('category_id', $id)
                ->update(array(
                    'category_name' => $request->category_name,
                    'parent_id' => $request->parent,
                    'isActive' => $isActive
                ));
            $category = Categories::where('category_id', $id)->get();
            if ($result) {
                $status = 'Category Updated successfully';
            } else {
                $status = 'Not updated.';
            }

            return redirect()->back()->with(['status' => $status, 'category' => $category]);
            // return response()->json($request);        
            // return redirect('designation_create')->with('status',$status);
            // return view('employees.index')->with('roles', $roles);
            // return $status;
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories $categories)
    {
        //
    }
}
