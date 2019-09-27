<?php
if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
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
Route::get('/createrole_role_permission',function(){
    // $role = Role::create(['name'=>'Super Admin']);
    // $permission = Permission::create(['name' => 'Supper Permission']);

    // auth()->user()->assignRole('Super Admin');
    // auth()->user()->givePermissionTo('Supper Permission');
});
// Route::get('/', 'PostController@index')->name('home');

Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');

Route::resource('posts', 'PostController');
Route::resource('employees', 'EmployeeController');
Route::resource('designations', 'EmployeeDesignationController');
Route::resource('departments', 'EmployeeDepartmentController');
Route::resource('attendances', 'EmployeeAttendanceController');
Route::resource('leaves', 'EmployeeLeaveTypeController');
Route::resource('paydeads', 'EmployeePayHeadController');

Route::get('/getSections', 'EmployeeController@getSection')->name('getSections');

