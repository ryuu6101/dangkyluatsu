<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Web\RegisterController;
use App\Http\Controllers\Admin\SectionController as AdminSectionController;
use App\Http\Controllers\User\SectionController as UserSectionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('web.sections.home.index');
})->name('home');

Route::get('/dang-ky-tap-su', [RegisterController::class, 'intern_register'])->name('intern-register.index');
Route::post('/dang-ky-tap-su', [RegisterController::class, 'intern_register_post'])->name('intern-register.post');
Route::get('/dang-ky-gia-nhap-doan-luat-su/{option}', [RegisterController::class, 'member_register'])->name('member-register.index');
Route::post('/dang-ky-gia-nhap-doan-luat-su', [RegisterController::class, 'member_register_post'])->name('member-register.post');
Route::get('/don-xin-cap-moi-the-luat-su', [RegisterController::class, 'card_issued'])->name('card-issued.index');
Route::get('/don-xin-doi-the-luat-su', [RegisterController::class, 'card_reissued'])->name('card-reissued.index');
Route::post('/get-organization', [RegisterController::class, 'get_organization'])->name('get-organization');

Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['guest'])->group(function() {
    Route::get('dang-nhap', [LoginController::class, 'user_login'])->name('user-login.index');
    Route::post('dang-nhap', [LoginController::class, 'user_auth'])->name('user-login.auth');
    Route::get('admin/login', [LoginController::class, 'admin_login'])->name('admin-login.index');
    Route::post('admin/login', [LoginController::class, 'admin_auth'])->name('admin-login.auth');
});

Route::middleware(['auth.user'])->group(function() {
    Route::get('home', [UserSectionController::class, 'home'])->name('user.home');
    Route::get('bang-tin', [UserSectionController::class, 'dashboard'])->name('dashboard.index');
    Route::get('qua-trinh-cua-toi/{slug}', [UserSectionController::class, 'progress_detail'])->name('my-progress.detail.index');
    Route::get('quan-li-tai-khoan/thong-tin-ca-nhan', [UserSectionController::class, 'my_profile'])->name('account.my-profile.index');
    Route::get('quan-li-tai-khoan/doi-tai-khoan-mat-khau', [UserSectionController::class, 'update_credentials'])->name('account.update-credentials.index');
});

Route::middleware(['auth.admin'])->prefix('admin')->group(function() {
    Route::get('/', [AdminSectionController::class, 'home'])->name('admin.home');
    Route::get('documents', [AdminSectionController::class, 'documents'])->name('admin.documents.index');
    Route::get('document/{id}', [AdminSectionController::class, 'document_detail'])->name('admin.document-detail.index');
    Route::get('accounts', [AdminSectionController::class, 'accounts'])->name('admin.accounts.index');
    Route::get('organizations', [AdminSectionController::class, 'organizations'])->name('admin.organizations.index');
    Route::get('bank-accounts', [AdminSectionController::class, 'bank_accounts'])->name('admin.bank-accounts.index');
    Route::get('mail-config', [AdminSectionController::class, 'mail_config'])->name('admin.mail-config.index');
    Route::get('site-config', [AdminSectionController::class, 'site_config'])->name('admin.site-config.index');
});