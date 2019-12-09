<?php
if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index');
//
Route::get('/createrole_role_permission', function () {
    // $role = Role::create(['name'=>'Super Admin']);
    // $permission = Permission::create(['name' => 'Supper Permission']);

    // auth()->user()->assignRole('Super Admin');
    // auth()->user()->givePermissionTo('Supper Permission');
});
// Route::get('/', 'PostController@index')->name('home');

Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');

// routs for HRM start
//******************************************************************* */
Route::resource('posts', 'PostController');
Route::resource('employees', 'EmployeeController');
Route::resource('designations', 'EmployeeDesignationController');
Route::resource('departments', 'EmployeeDepartmentController');
Route::resource('attendances', 'EmployeeAttendanceController');
Route::resource('leaves', 'EmployeeLeaveTypeController');
Route::resource('paydeads', 'EmployeePayHeadController');

Route::get('/getSections', 'EmployeeController@getSection')->name('getSections');
Route::get('employee_create', 'EmployeeController@create')->name('employee_create');
Route::post('employee_create', 'EmployeeController@store');

Route::get('department_create', 'EmployeeDepartmentController@create')
    ->name('department_create');
Route::post('department_create', 'EmployeeDepartmentController@store');
Route::post('department_update', 'EmployeeDepartmentController@update');
// Route::post('department_edit', 'EmployeeDepartmentController@editDepartment');
Route::get('/edit_department/{id}', 'EmployeeDepartmentController@edit')->name('edit_department');
Route::post('/edit_department/{id}', 'EmployeeDepartmentController@editDepartment');

Route::get('designation_create', 'EmployeeDesignationController@create')
    ->name('designation_create');
Route::post('designation_create', 'EmployeeDesignationController@store');
Route::post('designation_update', 'EmployeeDesignationController@update');
Route::get('/edit_designation/{id}', 'EmployeeDesignationController@edit')->name('edit_designation');
Route::post('/edit_designation/{id}', 'EmployeeDesignationController@editDesignation');
// Routs for ajax calls

Route::post('/addDepartment', 'EmployeeController@addDepartment')
    ->name('addDepartment');
Route::post('/addSection', 'EmployeeController@addSection')
    ->name('addSection');
Route::post('/addDesignation', 'EmployeeController@addDesignation')
    ->name('addDesignation');

// routs for HRM end
//******************************************************************* */
//---------------------------------------------------------------------
// routs for Project start
//******************************************************************* */

Route::resource('projects', 'ProjectsController');
Route::get('/projects.customer', 'ProjectsController@customer')->name('projects.customer');
Route::get('/projects.customer_create', 'ProjectsController@create_customer')->name('projects.customer_create');

Route::get('/projects.customer.save', 'ProjectsController@customer')->name('projects.customer.save');
Route::post('/projects.customer.save', 'ProjectsController@customerSave');

// routs for Project end
//******************************************************************* */
//---------------------------------------------------------------------

//---------------------------------------------------------------------
// routs for Inventory start
//******************************************************************* */

// For Category 
Route::resource('categories', 'CategoriesController');
Route::get('category_create', 'CategoriesController@create')
    ->name('category_create');
Route::post('category_create', 'CategoriesController@store');
Route::post('category_update', 'CategoriesController@update');
Route::get('/edit_category/{id}', 'CategoriesController@edit')->name('edit_category');
Route::post('/edit_category/{id}', 'CategoriesController@editCategory');

Route::resource('items', 'ItemsController');
Route::get('/items.pending', 'ItemsController@pendingItems')->name('items.pending');
Route::post('items.update', 'ItemsController@update');
Route::get('/items.stock', 'ItemsController@stock')->name('items.stock');
Route::get('/items.stock.new', 'ItemsController@stock_create')->name('items.stock.new');
// Route::get('/items.stock.edit{id}', 'ItemsController@stock_edit')->name('items.stock');
Route::get('/items.assets', 'ItemsController@assets')->name('items.assets');
Route::get('/items.assets.new', 'ItemsController@assets_create')->name('items.assets.new');
// Route::get('/items.assets', 'ItemsController@assets')->name('items.assets');

// Route::get('/projects.customer_create', 'ProjectsController@create_customer')->name('projects.customer_create');

// Route::get('/projects.customer.save', 'ProjectsController@customer')->name('projects.customer.save');
// Route::post('/projects.customer.save', 'ProjectsController@customerSave');

// routs for Inventory end
//******************************************************************* */
//---------------------------------------------------------------------


// routs for income start
//******************************************************************* */

// For Category 
Route::resource('income', 'IncomeController');
Route::get('income.invoices', 'IncomeController@invoices')
    ->name('income.invoices');
Route::get('income.quotation', 'IncomeController@quotation')
    ->name('income.quotation');
Route::get('income.customers', 'IncomeController@customers')
    ->name('income.customers');
Route::get('income.leads', 'IncomeController@leads')
    ->name('income.leads');

// routs for Inventory end
//******************************************************************* */
//---------------------------------------------------------------------

// routs for Expense start
//******************************************************************* */

// For Category 
Route::resource('expense', 'ExpenseController');
Route::get('expense.invoices', 'ExpenseController@invoices')
    ->name('expense.invoices');
Route::get('expense.quotation', 'ExpenseController@quotation')
    ->name('expense.quotation');
Route::get('expense.vendors', 'ExpenseController@vendors')
    ->name('expense.vendors');
// Route::get('/items.assets', 'ItemsController@assets')->name('items.assets');

// Route::get('/projects.customer_create', 'ProjectsController@create_customer')->name('projects.customer_create');

// Route::get('/projects.customer.save', 'ProjectsController@customer')->name('projects.customer.save');
// Route::post('/projects.customer.save', 'ProjectsController@customerSave');

// routs for Inventory end
//******************************************************************* */
//---------------------------------------------------------------------
