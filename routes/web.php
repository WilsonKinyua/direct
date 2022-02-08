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

// search showroom
Route::post('/search-showroom', 'HomePageController@SearchQuery')->name('search.query-showroom');
Route::get('/search/showroom/keyword={query}', 'HomePageController@showroomSearch')->name('showroom.search');

// advanced search
Route::post('/advanced/search', 'HomePageController@advancedSearchQuery')->name('advanced.search.query');
Route::get('/advanced-search/year={year}/make={make}/price={price}', 'HomePageController@advancedSearch')->name('advanced.search');

// showroom messages
Route::resource('/showroom-messages', 'ShowroomMessagesController');

// contact us
Route::resource('/contact-us', 'ContactUsController');

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
    Route::get("showroom/{showroom}/delete", 'ShowroomController@destroy')->name('showrooms.delete');
    Route::get("showroom/{showroom}/status", 'ShowroomController@updateShowroomStatus')->name('showrooms.status');
    Route::get('showrooms-admins', 'ShowroomController@showroomAdminList')->name('showrooms.admin.list');
    Route::get('showroom-admin/{user}/delete', 'ShowroomController@destroyShowroomAdmin')->name('showrooms.admin.delete');
    Route::post('showroom-admin/create', 'ShowroomController@createShowroomAdmin')->name('showrooms.admin.create');
    Route::put('showroom-admin/{user}/update', 'ShowroomController@updateShowroomAdmin')->name('showrooms.admin.update');

    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::post('users/media', 'UsersController@storeMedia')->name('users.storeMedia');
    Route::post('users/ckmedia', 'UsersController@storeCKEditorImages')->name('users.storeCKEditorImages');
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');
    Route::get('profile/account','UsersController@profile')->name('user.profile');
    Route::put('profile/account/{user}','UsersController@updateProfile')->name('user.profile.update');

    // staff
    Route::resource('staffs','StaffController');
    Route::get('staffs/{staff}/delete', 'StaffController@destroy')->name('staffs.delete');
    Route::put('staffs/{staff}/update', 'StaffController@update')->name('staffs.update');
    // all staffs
    Route::get('all/showrooms/staffs', 'StaffController@allStaffs')->name('all.staffs');

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
