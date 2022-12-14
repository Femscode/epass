<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\UtilityController;

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

// Route::get('/', function () {
//     return view('frontend.home');
// });
// the real route
Route::view('/','frontend.index');
Route::get('/checkin', [UtilityController::class, 'checkin'])->name('checkin');

// Route::any('/', [MarketController::class, 'index'])->name('home');

Route::any('logout', [RegisteredUserController::class, 'logout'])->name('logout');
Route::get('get_department', [UtilityController::class, 'get_department'])->name('get_department');
Route::get('get_company', [UtilityController::class, 'get_company'])->name('get_company');
Route::get('get_staff', [UtilityController::class, 'get_staff'])->name('get_staff');

Route::any('cthostel/{slug}/{id}', [MarketController::class, 'cthostel'])->name('cthostel');


//route for dashboard
Route::group(['middleware' => 'auth'], function () {
//route for contest

    

//end route for contest
    //route for payment
    Route::get('dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::get('staff_dashboard', [App\Http\Controllers\StaffController::class, 'index'])->name('staff_dashboard');
    Route::get('pending_visit', [App\Http\Controllers\StaffController::class, 'pending_visit'])->name('pending_visit');
    Route::get('profile', [App\Http\Controllers\StaffController::class, 'profile'])->name('profile');
    Route::any('update_profile', [App\Http\Controllers\StaffController::class, 'update_profile'])->name('update_profile');
    Route::get('approved_visit', [App\Http\Controllers\StaffController::class, 'approved_visit'])->name('approved_visit');
    Route::get('records', [App\Http\Controllers\StaffController::class, 'in_records'])->name('records');
    Route::get('out_records', [App\Http\Controllers\StaffController::class, 'out_records'])->name('out_records');
    Route::get('staff_checkin', [App\Http\Controllers\StaffController::class, 'staff_checkin'])->name('staff_checkin');
    Route::get('visitor_checkin', [App\Http\Controllers\StaffController::class, 'visitor_checkin'])->name('visitor_checkin');
    Route::get('security_dashboard', [App\Http\Controllers\SecurityController::class, 'index'])->name('security_dashboard');
    Route::get('security_checkin', [App\Http\Controllers\SecurityController::class, 'security_checkin'])->name('security_checkin');
    Route::get('approve_visitor', [App\Http\Controllers\SecurityController::class, 'approve_visitor'])->name('approve_visitor');
    Route::get('departments', [App\Http\Controllers\DashboardController::class, 'departments'])->name('departments');
    Route::get('staffs', [App\Http\Controllers\DashboardController::class, 'staffs'])->name('staffs');
    Route::get('permissions', [App\Http\Controllers\DashboardController::class, 'permissions'])->name('permissions');
    Route::post('set_permission', [App\Http\Controllers\DashboardController::class, 'set_permission'])->name('set_permission');
    Route::get('role/{uuid}', [App\Http\Controllers\DashboardController::class, 'role'])->name('role');
    Route::post('add_department', [App\Http\Controllers\DashboardController::class, 'add_department'])->name('add_department');
    Route::post('add_staff', [App\Http\Controllers\DashboardController::class, 'add_staff'])->name('add_staff');
    Route::get('edit_staff', [App\Http\Controllers\DashboardController::class, 'edit_staff'])->name('edit_staff');
    Route::post('update_staff', [App\Http\Controllers\DashboardController::class, 'update_staff'])->name('update_staff');
    Route::any('delete_staff', [App\Http\Controllers\DashboardController::class, 'delete_staff'])->name('delete_staff');
    Route::post('update_department', [App\Http\Controllers\DashboardController::class, 'update_department'])->name('update_department');
    Route::any('delete_department', [App\Http\Controllers\DashboardController::class, 'delete_department'])->name('delete_department');
    Route::post('save_checkin', [App\Http\Controllers\UtilityController::class, 'save_checkin'])->name('save_checkin');
    Route::post('save_checkin_user', [App\Http\Controllers\UtilityController::class, 'save_checkin_user'])->name('save_checkin_user');
    Route::get('view_checkin/{id}', [App\Http\Controllers\UtilityController::class, 'view_checkin'])->name('view_checkin');
    Route::get('allow_visitor/{id}', [App\Http\Controllers\UtilityController::class, 'allow_visitor'])->name('allow_visitor');
    Route::get('checkout/{id}', [App\Http\Controllers\UtilityController::class, 'checkout'])->name('checkout');
    Route::any('checkpass', [App\Http\Controllers\UtilityController::class, 'checkpass'])->name('checkpass');
    Route::post('/pay', [App\Http\Controllers\PaymentController::class, 'redirectToGateway'])->name('pay');
    Route::get('/superadmin', [App\Http\Controllers\AdminController::class, 'index'])->name('superadmin');
    Route::post('/create_role', [App\Http\Controllers\AdminController::class, 'create_role'])->name('create_role');
    Route::post('/create_role', [App\Http\Controllers\AdminController::class, 'create_role'])->name('create_role');
});
// Route::any('{slug}', [MarketController::class, 'vendor_page'])->name('vendor_page');

require __DIR__ . '/auth.php';
