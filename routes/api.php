<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}
);

Route::group(['middleware' => 'auth'], function () {

    Route::get('/user', 'AdminController@Admin_login')->name('user');

    Route::group(['middleware' => 'admin'], function () {
    });
    Route::get('/user', 'AdminController@Admin_login')->name('admin');

});

Route::group([
    'middleware' => 'api',
    // 'namespace' => 'App\Http\Controller',
    'prefix' => 'auth',

], function ($router) {

    //user login**
    Route::get('index', 'Register@index');
    Route::post('login', 'Register@login');
    Route::post('registration', 'Register@registration');
    Route::get('userProfile', 'Register@userProfile');

    //admin Login**
    Route::post('Admin_login', 'AdminController@Admin_login');
    Route::post('Admin_register', 'AdminController@Admin_register');

    //ticket_template**
    Route::post('ticket_template', 'Ticket_templateController@ticket_template');

    // Route::get('/ticket_template', 'Ticket_templateController@ticket_template');
    Route::get('user_template_request', 'Ticket_templateController@user_template_request');

    // Route::post('ticket_template_status', 'Ticket_templateController@ticket_template_status');

    //Ticket_template update
    Route::get('edit-records', 'TicketTemplateUpdateController@index');
    Route::get('show', 'TicketTemplateUpdateController@show');
    Route::get('ticket_template_show', 'TicketTemplateUpdateController@ticket_template_show');
    Route::get('ticket_template_update', 'TicketTemplateUpdateController@ticket_template_update');
    Route::post('ticket_template_update', 'TicketTemplateUpdateController@ticket_template_update');

    //transaction
    Route::post('transaction', 'TransactionController@transaction');
    Route::post('transaction_update', 'TransactionUpdateController@transaction_update');

    // Route::post('login', 'AuthController@login');
    // // Route::post('login', ['as' => 'login', 'use' => 'AuthController@login']);
    // Route::post('register', 'AuthController@register');
    // Route::post('logout', 'AuthController@logout');
    // // Route::post('logout', 'Api\AuthController@logout')->name('logout');

    // Route::post('refresh', 'AuthController@refresh');
    // // Route::get('user_profile', 'AuthController@userProfile');
    // Route::get('/user_Profile', 'AuthController@userProfile')->name('userProfile');
    // // Route::get('/code', 'HomeController@code')->name('code');
}
);

// Route::middleware('jwt.auth:api')->group(function () {
//     Route::apiResource('category', 'API\\CategoryController');
// });

// Route::group(['middleware' => ['web'], 'namespace' => 'Auth'], function () {
//     Route::auth();
// });

// ticket_template function


