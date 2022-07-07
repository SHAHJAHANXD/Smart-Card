<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\OfferController;
use App\Http\Controllers\Admin\AdvertismentsController;
use App\Http\Controllers\Admin\RegionController;
use App\Http\Controllers\Admin\BuyerController;
use App\Http\Controllers\Admin\TraderController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\AreaController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\MerchantController;
use App\Http\Controllers\BranchesController;
use App\Models\Merchant;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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

Route::group(['middleware' => 'auth'], function () {
    Route::resource('category', CategoryController::class);
    Route::resource('branch', BranchesController::class);
    Route::resource('package', PackageController::class);
    Route::resource('offer', OfferController::class);
    Route::resource('advertisment', AdvertismentsController::class);
    Route::resource('region', RegionController::class);
    //Route::post('state/select',[StateController::class,'delete'])->name('delete');
    Route::resource('state', StateController::class);
    Route::resource('city', CityController::class);
    Route::resource('area', AreaController::class);
    Route::resource('buyer', BuyerController::class);
    Route::get('trader/offers/{id}', [TraderController::class, 'offers']);
    Route::get('trader/advertisments/{id}', [TraderController::class, 'advertisment']);
    Route::resource('trader', TraderController::class);
    Route::post('delete', [RegionController::class, 'delete'])->name('delete');
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [FrontendController::class, 'indexx'])->name('indexx');

Route::prefix('merchant')->group(
    function () {
        Route::get('/', [FrontendController::class, 'index'])->name('index');
        Route::get('/page-register', [FrontendController::class, 'register'])->name('merchant.page.register');
        Route::post('/page-register', [MerchantController::class, 'postregister'])->name('merchant.post.register');
        Route::get('/page-login', [FrontendController::class, 'login'])->name('merchant.page.login');
        Route::post('/authenticate', [MerchantController::class, 'authenticate'])->name('merchant.page.authenticate');

        Route::get('/brand', [FrontendController::class, 'brand'])->name('merchant.brand');
        Route::get('/shop-details', [FrontendController::class, 'shopdetails'])->name('merchant.shopdetails');

        Route::get('/logout', [MerchantController::class, 'merchantlogout'])->name('merchant.logout');
        Route::get('/verify-account', [MerchantController::class, 'verifymerchantaccount'])->name('merchant.account');
        Route::post('/verify', [MerchantController::class, 'verifymerchant'])->name('verifyEmail');
        Route::get('/resend-otp', [MerchantController::class, 'resend'])->name('ResendOTP');
        Route::group(
            ['middleware' => 'auth:merchant'],
            function () {
                Route::get('/features', [FrontendController::class, 'merchantfeatures'])->name('merchantfeatures');
                Route::middleware('NoRedirect')->group(
                    function () {

                        Route::get('/page-account', [FrontendController::class, 'merchantaccount'])->name('merchantaccount');
                        Route::get('/user-account', [FrontendController::class, 'useraccount'])->name('merchant.useraccount');
                        Route::get('/profile', [MerchantController::class, 'profile'])->name('merchant.profile');
                        Route::get('/payments', [MerchantController::class, 'payments'])->name('merchant.payments');
                        Route::get('/statistics', [MerchantController::class, 'statistics'])->name('merchant.statistics');
                        Route::get('/buy-points', [MerchantController::class, 'points'])->name('merchant.points');
                        Route::get('/messages', [MerchantController::class, 'messages'])->name('merchant.messages');
                        Route::get('/add-offer', [MerchantController::class, 'offer'])->name('merchant.offer');
                        Route::post('/add-offer', [OfferController::class, 'postoffer'])->name('merchant.post.offer');
                        Route::get('/advertisment', [MerchantController::class, 'advertisment'])->name('merchant.advertisment');
                    }
                );
            }
        );
    }
);
