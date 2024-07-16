<?php

use App\Http\Controllers\Back\AdminController;
use App\Http\Controllers\Back\AnswerController;
use App\Http\Controllers\Back\KelasController;
use App\Http\Controllers\Back\MbtiTypeController;
use App\Http\Controllers\Back\QuestionController;
use App\Http\Controllers\Back\ReportController;
use App\Http\Controllers\Back\TahunAjaranController;
use App\Http\Controllers\Back\UserController;
use App\Http\Controllers\MbtiController;
use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// routes/web.php

Route::get('/mbti', [MbtiController::class, 'index'])->name('mbti.form');
Route::post('/mbti', [MbtiController::class, 'store'])->name('mbti.store');
Route::get('/mbti/result/{id}', [MbtiController::class, 'show'])->name('mbti.result');
Route::get('mbti/result/{id}/pdf', [MbtiController::class, 'downloadPdf'])->name('mbti.result.pdf');

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// admin route
Route::group(['prefix' => 'admin', 'middleware' => ['auth', Admin::class]], function () {
    // filter
    Route::get('kelas/getByTahunAjaran', [KelasController::class, 'getByTahunAjaran'])->name('kelas.getByTahunAjaran');
    Route::get('users/filter', [UserController::class, 'filter'])->name('users.filter');
    Route::get('get-kelas/{tahunAjaranId}', [ReportController::class, 'getKelasByTahunAjaran']);

    Route::get('/', [AdminController::class, 'index']);
    Route::resource('question', QuestionController::class);
    Route::resource('answer', AnswerController::class);
    Route::resource('mbti-types', MbtiTypeController::class);
    Route::resource('users', UserController::class);
    Route::resource('tahun-ajaran', TahunAjaranController::class);
    Route::resource('kelas', KelasController::class);

    // laporan
    Route::get('report', [ReportController::class, 'index'])->name('report.index');
    Route::post('report/search', [ReportController::class, 'search'])->name('report.search');
    Route::post('report/print', [ReportController::class, 'printReport'])->name('report.print');

});

Route::get('403', function () {
    return view('errors.403');
});
