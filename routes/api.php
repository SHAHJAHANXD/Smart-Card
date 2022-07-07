<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AdvertismentApiController;
use App\Http\Controllers\Api\OfferApiController;
use App\Http\Controllers\Api\UserApiController;
use App\Http\Controllers\Api\PackageApiController;
use App\Http\Controllers\BranchesController;
use App\Http\Controllers\MerchantController;

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

Route::post('user/register', [UserApiController::class, 'register']);
Route::post('user/login', [UserApiController::class, 'login']);
Route::get('regions', [UserApiController::class, 'region']);
Route::post('image/upload', [AdvertismentApiController::class, 'imageupload']);

Route::middleware('auth:sanctum')->group(function () {

    //Users
    Route::post('user/update/{id}', [UserApiController::class, 'update']);
    Route::get('user/get/{id}', [UserApiController::class, 'getmerchant']);

    //addvertisments
    Route::post('add/advertisment', [AdvertismentApiController::class, 'AddAdvertisment']);
    Route::post('update/advertisment/{id}', [AdvertismentApiController::class, 'UpdateAdvertisment']);
    Route::get('delete/advertisment/{id}', [AdvertismentApiController::class, 'DeleteAdvertisment']);
    Route::get('get/all/advertisment/{id}', [AdvertismentApiController::class, 'GetAdvertisment']);

    //offers
    Route::post('add/offer', [OfferApiController::class, 'AddOffer']);
    Route::post('update/offer/{id}', [OfferApiController::class, 'UpdateOffer']);
    Route::get('delete/offer/{id}', [OfferApiController::class, 'DeleteOffer']);
    Route::get('get/all/offer/{id}', [OfferApiController::class, 'GetOffer']);

    //packages
    Route::get('get/all/packages', [PackageApiController::class, 'GetPackage']);
    Route::post('buy/points', [PackageApiController::class, 'BuyPoint']);
    Route::get('user/buy/packages/{id}', [PackageApiController::class, 'GetBuyPackage']);
});
Route::prefix('merchant')->group(
    function () {
        Route::post('/login', [MerchantController::class, 'merchantapilogin'])->name('merchant.login');;
        Route::post('/register', [MerchantController::class, 'register'])->name('merchant.register');
        Route::post('/register-brand', [BranchesController::class, 'registerBrand'])->name('merchant.registerBrand');
        Route::post('/email-verification', [MerchantController::class, 'verification'])->name('merchant.verification');
        Route::post('/verify', [MerchantController::class, 'apiverifymerchant'])->name('api.verifyEmail');
    }
);
