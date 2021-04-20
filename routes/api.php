<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CityMemberController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MemberSpecializationController;
use App\Http\Controllers\SpecializationController;
use App\Http\Controllers\specializationsController;
use App\Http\Controllers\SpecializationVerticalController;
use App\Http\Controllers\VerticalController;
use GuzzleHttp\Middleware;
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
// Route::get('/verticals',[VerticalController::class ,'index']);

// Route::post('/verticals' ,[VerticalController::class , 'store']);


Route::resource('verticals', VerticalController::class);
Route::resource('cities', CityController::class);
Route::resource('citymembers', CityMemberController::class);
Route::resource('members', MemberController::class);
Route::resource('districts', DistrictController::class);
Route::resource('specializationverticals',SpecializationVerticalController::class);
Route::resource('memberspecializations', MemberSpecializationController::class);
Route::post('/register',[AuthController::class ,'register']);
Route::post('/logout',[AuthController::class ,'logout']);



Route::group(['middleware' =>['auth:sanctum']], function (){
    Route::resource('specializations', SpecializationController::class);
    Route::post('/logout',[AuthController::class ,'logout']);

});
