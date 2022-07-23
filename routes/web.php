<?php

Route::redirect('/', 'login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
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

    // Car
    Route::delete('cars/destroy', 'CarController@massDestroy')->name('cars.massDestroy');
    Route::resource('cars', 'CarController');

    // Color
    Route::delete('colors/destroy', 'ColorController@massDestroy')->name('colors.massDestroy');
    Route::resource('colors', 'ColorController');

    // CarModel
    Route::delete('carModels/destroy', 'CarModelController@massDestroy')->name('carModels.massDestroy');
    Route::resource('carModels', 'CarModelController');

    // Franchise
    Route::delete('franchises/destroy', 'FranchiseController@massDestroy')->name('franchises.massDestroy');
    Route::resource('franchises', 'FranchiseController');

    // Manufacturer
    Route::delete('manufacturers/destroy', 'ManufacturerController@massDestroy')->name('manufacturers.massDestroy');
    Route::resource('manufacturers', 'ManufacturerController');

    // Year
    Route::delete('years/destroy', 'YearController@massDestroy')->name('years.massDestroy');
    Route::resource('years', 'YearController');

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
