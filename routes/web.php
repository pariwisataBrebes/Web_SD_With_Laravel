<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LectureAndStaffController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPageController::class, 'index'])->name('landing.index');
Route::get('/profil/sekolah', [LandingPageController::class, 'profilSekolah'])->name('landing.profil.sekolah');
Route::get('/profil/guru', [LandingPageController::class, 'profilGuru'])->name('landing.profil.guru');
Route::get('/profil/siswa', [LandingPageController::class, 'profilSiswa'])->name('landing.profil.siswa');
Route::get('/lomba', [LandingPageController::class, 'lombaIndex'])->name('landing.lomba.index');
Route::get('/kontak', [LandingPageController::class, 'kontakIndex'])->name('landing.kontak.index');

Route::get('/news', [LandingPageController::class, 'newsIndex'])->name('landing.news.index');
Route::get('/news/{slug}', [LandingPageController::class, 'newsShow'])->name('landing.news.show');

Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/login', [AuthController::class, 'loginProcess'])->name('auth.loginProcess');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::group(['middleware'=> ['auth']], function () {
    Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::get('/admin/news', [NewsController::class, 'index'])->name('news.index');
    Route::get('/admin/news/all', [NewsController::class, 'all'])->name('news.all');
    Route::get('/admin/news/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('/admin/news/store', [NewsController::class, 'store'])->name('news.store');
    Route::get('/admin/news/edit/{id}', [NewsController::class, 'edit'])->name('news.edit');
    Route::put('/admin/news/change/{id}', [NewsController::class, 'change'])->name('news.change');
    Route::delete('/admin/news/destroy/{id}', [NewsController::class, 'destroy'])->name('news.destroy');

    Route::get('/admin/lecture-staff', [LectureAndStaffController::class, 'index'])->name('lecture-staff.index');
    Route::get('/admin/lecture-staff/all', [LectureAndStaffController::class, 'all'])->name('lecture-staff.all');
    Route::get('/admin/lecture-staff/create', [LectureAndStaffController::class, 'create'])->name('lecture-staff.create');
    Route::post('/admin/lecture-staff/store', [LectureAndStaffController::class, 'store'])->name('lecture-staff.store');
    Route::get('/admin/lecture-staff/edit/{id}', [LectureAndStaffController::class, 'edit'])->name('lecture-staff.edit');
    Route::put('/admin/lecture-staff/change/{id}', [LectureAndStaffController::class, 'change'])->name('lecture-staff.change');
    Route::delete('/admin/lecture-staff/destroy/{id}', [LectureAndStaffController::class, 'destroy'])->name('lecture-staff.destroy');

});
