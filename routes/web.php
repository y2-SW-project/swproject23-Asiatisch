<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
//use Database\seeders\cheeseSeeder
use App\Http\Controllers\User\cheeseController as UsercheeseController;
use App\Http\Controllers\Admin\cheeseController as AdmincheeseController;

use App\Http\Controllers\Admin\CustomerController as AdminCustomerController;
use App\Http\Controllers\user\CustomerController as UserCustomerController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::resource('/cheese',cheeseController::class)->middleware(['auth']);

// Route::delete('/cheese',[(cheeseController::class), 'destroy']);

require __DIR__.'/auth.php';

Route:: get('/home', [HomeController::class,'index'])->name('home');
// this will create all the routes for cheese
// and the route will only be available when a user is log in 

Route::resource('/admin/cheese',AdmincheeseController::class)->middleware(['auth'])->names('admin.cheese');

Route::resource('/admin/customer',AdminCustomerController::class)->middleware(['auth'])->names('admin.customer');

Route::resource('/user/cheese',UsercheeseController::class)->middleware(['auth'])->names('user.cheese')->only(['index','show']);
Route::resource('/user/customer',UserCustomerController::class)->middleware(['auth'])->names('user.customer')->only(['index','show']);