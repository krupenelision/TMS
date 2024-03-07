<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::group(['middleware' => ['role:super-admin|admin']], function() {



// });



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
 //profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

 //role-permission
    Route::resource('permissions', App\Http\Controllers\PermissionController::class);
  //  Route::get('permissions/{permissionId}/delete', [App\Http\Controllers\PermissionController::class, 'destroy'])->name('permission.delete');

    Route::resource('roles', App\Http\Controllers\RoleController::class);
   // Route::get('roles/{roleId}/delete', [App\Http\Controllers\RoleController::class, 'destroy'])->name('role.delete');
    Route::get('roles/{roleId}/give-permissions', [App\Http\Controllers\RoleController::class, 'addPermissionToRole'])->name('addpermission');
    Route::put('roles/{roleId}/give-permissions', [App\Http\Controllers\RoleController::class, 'givePermissionToRole'])->name('givepermission');

    Route::resource('users', App\Http\Controllers\UserController::class);
   // Route::get('users/{userId}/delete', [App\Http\Controllers\UserController::class, 'destroy'])->name('user.delete');

 //redirect login and dashboard(auth)
    Route::get('/', function () {
    return redirect()->route('login');
    });


    //user route
    Route::resource('/users',UserController::class);

});

require __DIR__.'/auth.php';
