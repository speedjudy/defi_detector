<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DefiController;
use App\Http\Controllers\DefiAdminController;
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

Route::controller(DefiController::class)->group(function () {
    Route::get('/', 'first');
    Route::get('/dapps', 'dapps');
    Route::get('/token', 'token');
    Route::get('/partner', 'partner');
    Route::get('/influencer', 'influencer');
    Route::get('/developing', 'developing');
});
Route::controller(DefiAdminController::class)->group(function () {
    Route::get('/adminDefi', 'signin');
    Route::get('/adminDefi/checkuser', 'check_user');
    Route::get('/adminDefi/checktoken', 'check_token');
    Route::get('/adminDefi/changepassword', 'change_pwd');

    Route::get('/admin/dapps', 'dapps');
    Route::get('/admin/dapps/add', 'add');
    Route::get('/admin/dapps/get', 'get');
    Route::get('/admin/dapps/delete', 'delete');

    Route::get('/admin/token', 'token');
    Route::get('/admin/token/add', 'token_add');
    Route::get('/admin/token/get', 'token_get');
    Route::get('/admin/token/delete', 'token_delete');

    Route::get('/admin/partner', 'partner');
    Route::get('/admin/partner/add', 'partner_add');
    Route::get('/admin/partner/get', 'partner_get');
    Route::get('/admin/partner/delete', 'partner_delete');

    Route::get('/admin/influencer', 'influencer');
    Route::get('/admin/influencer/add', 'influencer_add');
    Route::get('/admin/influencer/get', 'influencer_get');
    Route::get('/admin/influencer/delete', 'influencer_delete');

    Route::get('/admin/adsmanage/totalget', 'adsmanage_totalget');
    Route::get('/admin/adsmanage', 'adsmanage');
    Route::post('/admin/adsmanage/add', 'adsmanage_add');
    Route::get('/admin/adsmanage/get', 'adsmanage_get');
    Route::get('/admin/adsmanage/delete', 'adsmanage_delete');

    Route::get('/admin/adsmanage_token', 'adsmanage_token');
    Route::post('/admin/adsmanage_token/add', 'adsmanage_token_add');
    Route::get('/admin/adsmanage_token/get', 'adsmanage_token_get');
    Route::get('/admin/adsmanage_token/delete', 'adsmanage_token_delete');
});
