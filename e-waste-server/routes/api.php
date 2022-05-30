<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Categories_companyController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GadgetController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\UserGadgetController;
use App\Http\Controllers\CompanyCategoryController;
use App\Http\Controllers\CompanyGadgetController;
use App\Http\Controllers\GadgetImageController;



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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/users', [UserController::class,'store']); //Create
Route::get('/users', [UserController::class, 'index']); //Read (all)
Route::get('/users/{id}', [UserController::class, 'show']); // Read (one)
Route::put('/users/{id}', [UserController::class, 'update']); //Update
Route::delete('/users/{id}',[UserController::class, 'destroy']); //delete

Route::post('/gadgets', [GadgetController::class, 'store']); //Create
Route::get('/gadgets', [GadgetController::class, 'index']); //Read (all)
Route::get('/gadgets/{id}', [GadgetController::class, 'show']); // Read (one)
Route::put('/gadgets/{id}', [GadgetController::class, 'update']); //Update
Route::delete('/gadgets/{id}',[GadgetController::class, 'destroy']); //delete

Route::post('/companies', [CompanyController::class, 'store']); //Create
Route::get('/companies', [CompanyController::class, 'index']); //Read (all)
Route::get('/companies/{id}', [CompanyController::class, 'show']); // Read (one)
Route::put('/companies/{id}', [CompanyController::class, 'update']); //Update
Route::delete('/companies/{id}',[CompanyController::class, 'destroy']); //delete

Route::post('/images', [ImageController::class, 'store']); //Create
Route::get('/images', [ImageController::class, 'index']); //Read (all)
Route::get('/images/{id}', [ImageController::class, 'show']); // Read (one)
Route::put('/images/{id}', [ImageController::class, 'update']); //Update
Route::delete('/images/{id}',[ImageController::class, 'destroy']); //delete

Route::post('/categories', [CategoryController::class, 'store']); //Create
Route::get('/categories', [CategoryController::class, 'index']); //Read (all)
Route::get('/categories/{id}', [CategoryController::class, 'show']); // Read (one)
Route::put('/categories/{id}', [CategoryController::class, 'update']); //Update
Route::delete('/categories/{id}',[CategoryController::class, 'destroy']); //delete

Route::post('/categories_company', [Categories_companyController::class, 'store']); //Create
Route::get('/categories_company', [Categories_companyController::class, 'index']); //Read (all)
Route::get('/categories_company/{id}', [Categories_companyController::class, 'show']); // Read (one)
Route::put('/categories_company/{id}', [Categories_companyController::class, 'update']); //Update
Route::delete('/categories_company/{id}',[Categories_companyController::class, 'destroy']); //delete


//other custom routes will appear here
//routes needing api resources
Route::resource('users.gadgets', UserGadgetController::class);
Route::resource('gadgets.images', GadgetImageController::class);
Route::resource('companies.gadgets', CompanyGadgetController::class);
Route::resource('companies.categories', CompanyCategoryController::class);


//user login
Route::post('/auth/login', [UserController::class, 'login']);
Route::post('/auth/register', [UserController::class,'store']);

//get user gadgets
// Route::get('/users/gadgets', [GadgetController::class,'userGadgets']);
