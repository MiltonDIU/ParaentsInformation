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
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\SlidersController;
use App\Http\Controllers\Admin\LinkCategoryController;
use App\Http\Controllers\Admin\LinksController;
use App\Http\Controllers\Admin\NewsLetterController;
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

Route::get('/', [FrontendController::class,'index'])->name('home');
Route::get('/a-to-z', [FrontendController::class,'aToZ'])->name('aToZ');
//after login
Route::get('/newsfeed', [HomeController::class,'newsfeed'])->name('newsfeed');
Route::get('/newsfeed/{id}/', [HomeController::class,'newsfeedDetails'])->name('newsfeed-details');
Route::get('/profile', [HomeController::class,'profile'])->name('profile');


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
        'sliders' => SlidersController::class,
        'link-categories' => LinkCategoryController::class,
        'links' => LinksController::class,
        'news-letters' => NewsLetterController::class,
    ]);

    // News Letter
    Route::delete('news-letters/destroy', [NewsLetterController::class, 'massDestroy'])->name('news-letters.massDestroy');
    Route::post('news-letters/media', [NewsLetterController::class, 'storeMedia'])->name('news-letters.storeMedia');
    Route::post('news-letters/ckmedia', [NewsLetterController::class, 'storeCKEditorImages'])->name('news-letters.storeCKEditorImages');


    // Sliders
    Route::delete('sliders/destroy', [SlidersController::class, 'massDestroy'])->name('sliders.massDestroy');
    Route::post('sliders/media', [SlidersController::class, 'storeMedia'])->name('sliders.storeMedia');
    Route::post('sliders/ckmedia', [SlidersController::class, 'storeCKEditorImages'])->name('sliders.storeCKEditorImages');

    // Link Category
    Route::delete('link-categories/destroy', [LinkCategoryController::class, 'massDestroy'])->name('link-categories.massDestroy');
    Route::post('link-categories/media', [LinkCategoryController::class, 'storeMedia'])->name('link-categories.storeMedia');
    Route::post('link-categories/ckmedia', [LinkCategoryController::class, 'storeCKEditorImages'])->name('link-categories.storeCKEditorImages');


//    Route::resources(['permissions' => SettingsController::class],['except' => ['create', 'store', 'show', 'destroy']]);
    Route::post('settings/media', [SettingsController::class, 'storeMedia'])->name('settings.storeMedia');
    Route::post('settings/ckmedia', [SettingsController::class, 'storeCKEditorImages'])->name('settings.storeCKEditorImages');

    Route::get('settings', [SettingsController::class, 'edit'])->name('settings.edit');
    Route::put('settings', [SettingsController::class, 'update'])->name('settings.update');




    Route::get('/', [HomeController::class, 'index']);
    Route::delete('links/destroy', [LinksController::class, 'massDestroy'])->name('links.massDestroy');
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
