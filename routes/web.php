<?php

// Public routes
// Route::get('/',function(){
//     return redirect()->route('login');
// });
Route::get('/', 'HomePageController@index')->name('public.home');
Route::get('/local-stock', 'LocalStockController@index')->name('local.stock');
Route::get('/vehicle/{vehicle}', 'HomePageController@carDetails')->name('vehicle.details');
Route::get('/showroom/{showroom}', 'ShowroomDetailsController@index')->name('showroom.details');
Route::get('showrooms', 'HomePageController@showroomList')->name('showrooms.list');


// admin home route
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

// activate showroom account
Route::get('/showroom/activate/{token}', 'Admin\ShowroomController@activateShowroomAdminAccount')->name('showroom.activate');
Route::post('/showroom/account/password', 'Admin\ShowroomController@updateShowroomAdminAccountPassword')->name('showroom.account.password');
Route::post('/showroom/register', 'HomePageController@registerShowroom')->name('showroom.register');

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {


    // ================================== superadmin ===========================
    // showrooms
    Route::post('showrooms/media', 'ShowroomController@storeMedia')->name('showrooms.storeMedia');
    Route::post('showrooms/ckmedia', 'ShowroomController@storeCKEditorImages')->name('showrooms.storeCKEditorImages');
    Route::resource('showrooms', 'ShowroomController');

    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Inventory
    Route::delete('inventories/destroy', 'InventoryController@massDestroy')->name('inventories.massDestroy');
    Route::post('inventories/media', 'InventoryController@storeMedia')->name('inventories.storeMedia');
    Route::post('inventories/ckmedia', 'InventoryController@storeCKEditorImages')->name('inventories.storeCKEditorImages');
    Route::resource('inventories', 'InventoryController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
