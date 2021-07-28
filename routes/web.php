<?php

use App\Http\Controllers\ControllerCustomer;
use App\Http\Controllers\DataHandleController;
use App\Http\Controllers\DemoValidate;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventTeamplateController;
use App\Http\Controllers\LayoutController;
use App\Http\Requests\EventRequest;
use Illuminate\Support\Facades\Route;

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
    return 'welcome';
});
//Customer
Route::get('/customer/register', [ControllerCustomer::class, 'register']);
Route::post('/customer/register', [ControllerCustomer::class, 'registerSuccess']);

//DataHanddle
Route::get('/data-handle/{id}/path', [DataHandleController::class, 'handlePathVariable']);
Route::get('/data-handle/query-string', [DataHandleController::class, 'handleQueryString']);
Route::get('/data-handle/form', [DataHandleController::class, 'returnForm']);
Route::post('/data-handle/form', [DataHandleController::class, 'ProcessForm']);
//get la dan vao duong link trong trinh duyet /user

//Layout Team Plate
Route::get('', [LayoutController::class, 'masterLayout']);
Route::get('/form', [LayoutController::class, 'create']);
Route::get('/list', [LayoutController::class, 'list']);

//Event
Route::get('/event/events/create', [EventController::class, 'create']);
Route::post('/event/events/', [EventController::class, 'store']);
Route::get('/event/events', [EventController::class, 'index']);

//Event Team Plate
Route::get('/EventTeamplate/event/create', [EventTeamplateController::class, 'create']);
Route::post('/EventTeamplate/event/create', [EventTeamplateController::class, 'store']);
Route::get('/EventTeamplate/event/list', [EventTeamplateController::class, 'list']);
Route::get('/EventTeamplate/event/edit/{id}', [EventTeamplateController::class, 'update']);
Route::post('/EventTeamplate/event/edit/{id}', [EventTeamplateController::class, 'save']);
Route::delete('/EventTeamplate/event/delete/{id}', [EventTeamplateController::class, 'delete']);
Route::get('/EventTeamplate/event/create',[EventRequest::class, 'rules']);




Route::get('/demo/validate/create',[DemoValidate::class, 'create']);
Route::post('/demo/validate/store',[DemoValidate::class, 'store']);
