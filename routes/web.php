<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\Admin\AuditLogsController;
use App\Http\Controllers\UserVerificationController;
use App\Http\Controllers\Admin\CountriesController;
use App\Http\Controllers\Admin\ProfilesController;
use App\Http\Controllers\Admin\SettingsController;
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


Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }
    return redirect()->route('admin.home');
});


Auth::routes(['register' => true]);
Route::get('userVerification/{token}', [UserVerificationController::class ,'approve'])->name('userVerification');
// Admin
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::resources([
        'permissions' => PermissionsController::class,
        'roles' => RolesController::class,
        'users' => UsersController::class,
        'audit-logs' => AuditLogsController::class,
        'countries' => CountriesController::class,
        'profiles' => ProfilesController::class,
        //'settings' => SettingsController::class,
    ]);
    // Settings
//    Route::resources(['permissions' => SettingsController::class],['except' => ['create', 'store', 'show', 'destroy']]);
    Route::post('settings/media', [SettingsController::class, 'storeMedia'])->name('settings.storeMedia');
    Route::post('settings/ckmedia', [SettingsController::class, 'storeCKEditorImages'])->name('settings.storeCKEditorImages');

    Route::get('settings', [SettingsController::class, 'edit'])->name('settings.edit');
    Route::put('settings', [SettingsController::class, 'update'])->name('settings.update');




    Route::get('/', [HomeController::class, 'index']);
    Route::delete('permissions/destroy', [PermissionsController::class, 'massDestroy'])->name('permissions.massDestroy');
    Route::delete('roles/destroy', [RolesController::class, 'massDestroy'])->name('roles.massDestroy');
    Route::delete('users/destroy', [UsersController::class, 'massDestroy'])->name('users.massDestroy');
    Route::delete('countries/destroy', [CountriesController::class, 'massDestroy'])->name('countries.massDestroy');
    Route::delete('profiles/destroy', [ProfilesController::class, 'massDestroy'])->name('profiles.massDestroy');

    Route::post('profiles/media', [ProfilesController::class, 'storeMedia'])->name('profiles.storeMedia');
    Route::post('profiles/ckmedia', [ProfilesController::class, 'storeCKEditorImages'])->name('profiles.storeCKEditorImages');

    // Audit Logs
    //Route::resource('audit-logs', 'AuditLogsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);
});

Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
// Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', [ChangePasswordController::class,'edit'])->name('password.edit');
        Route::post('password', [ChangePasswordController::class,'update'])->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');

        Route::get('my-profile', [ProfilesController::class, 'edit'])->name('my-profile.edit');
        Route::put('my-profile', [ProfilesController::class, 'update'])->name('my-profile.update');
    }
});

// Settings
Route::post('settings/media', 'SettingsController@storeMedia')->name('settings.storeMedia');
Route::post('settings/ckmedia', 'SettingsController@storeCKEditorImages')->name('settings.storeCKEditorImages');
Route::resource('settings', 'SettingsController', ['except' => ['create', 'store', 'show', 'destroy']]);
