<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

if (App::environment('development', 'staging')) {
    Route::get('getlog', function() {
        if (File::exists(storage_path() . '/logs/laravel.log')) {
            return file_get_contents(storage_path() . 'logs/laravel.log');
        }
    });
}

if (App::environment('development', 'staging')) {
    Route::get('clearlog', function() {
        if (File::exists(storage_path() . '/logs/laravel.log')) {
            File::delete(storage_path() . 'logs/laravel.log');
            return 'Log Cleared';
        }
    });
}

Route::get('/', 'LoginController@getIndex');
Route::get('db_seed', function() {
    /*$address = new Address;
    $address->company_id = 0;
    $address->zone_id = 0;
    $address->address = '825 Market Street';
    $address->city = 'Allen';
    $address->state = 'TX';
    $address->zip = '79013';
    $address->created_at = date('Y-m-d h:i:s');
    $address->updated_at = date('Y-m-d h:i:s');
    $address->save();

    $company             = new Company;
    $company->contact_id = 0;
    $company->address_id = 1;
    $company->phone      = '123-123-1234';
    $company->name       = 'Cooperative Computing';
    $company->email      = 'muhammad.irfan@cooperativecomputing.com';
    $company->timezone   = 'EST';
    $company->created_at = date('Y-m-d h:i:s');
    $company->updated_at = date('Y-m-d h:i:s');
    $company->save();

    $user             = new User;
    $user->company_id = 1;
    $user->username   = 'crmadmin';
    $user->password   = Hash::make('sscrm@9820');
    $user->email      = 'muhammad.irfan@cooperativecomputing.com';
    $user->last_login = date('Y-m-d h:i:s');
    $user->created_at = date('Y-m-d h:i:s');
    $user->updated_at = date('Y-m-d h:i:s');
    $user->save();*/
});

Route::resource('/login', 'LoginController');
Route::resource('/logout', 'UsersController@LogOut');
Route::resource('/api/login', 'UserController');
Route::group(array('before' => 'auth'), function() {
    Route::get('/Dashboard', 'DashboardController@showIndex');
    Route::get('/Leads/addLead', 'LeadsController@addLead');
});