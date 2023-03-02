<?php

use App\Http\Controllers\Adm_adminController;
use App\Http\Controllers\Adm_superadminController;
use App\Http\Controllers\Adm_userController;
use App\Http\Controllers\AgamaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\JeniskController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\KepalasekolahController;
use App\Http\Controllers\MatapelajaranController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\ProfilsekolahController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserManagerController;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Kepalasekolah;
use App\Models\Matapelajaran;
use App\Models\Profilsekolah;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
// Auth::routes();
//route login
Route::get('/login', [AuthController::class, 'index'])->name('login.index');
Route::post('/proseslogin', [AuthController::class, 'proses_login'])->name('proseslogin.index');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout.index');

//route dari superadmin
Route::middleware(['auth', 'super_admin'])->group(function () {
    Route::group(['prefix' => 'super-admin'], function () {
        Route::get('/dashboard', [Adm_superadminController::class, 'index'])->name('super_admin.index');
        Route::get('/akses', [Adm_superadminController::class, 'akses'])->name('super_admin.akses');
        Route::resource('users', UserController::class);
        Route::resource('profilsekolahs', ProfilsekolahController::class);
        Route::resource('kepalasekolahs', KepalasekolahController::class);
        Route::resource('murids', MuridController::class);
        Route::resource('matapelajarans', MatapelajaranController::class);
        Route::resource('kelas', KelasController::class);
        Route::resource('gurus', GuruController::class);
        Route::resource('agamas', AgamaController::class);
        Route::resource('statuses', StatusController::class);
        Route::resource('jabatans', JabatanController::class);
        Route::resource('jenisks', JeniskController::class);
    });
});

//route dari admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/dashboard', [Adm_adminController::class, 'index'])->name('admin.index');

        Route::resource('gurus', GuruController::class);
        Route::resource('kepalasekolahs', KepalasekolahController::class);
        Route::resource('murids', MuridController::class);
        Route::resource('matapelajarans', MatapelajaranController::class);
        Route::resource('kelas', KelasController::class);
        Route::resource('gurus', GuruController::class);
        Route::resource('agamas', AgamaController::class);
        Route::resource('statuses', StatusController::class);
        Route::resource('jabatans', JabatanController::class);
        Route::resource('jenisks', JeniskController::class);
    });
});


Route::middleware(['auth', 'user:user'])->group(function () {
    Route::group(['prefix' => 'user'], function () {
        Route::get('/dashboard', [Adm_userController::class, 'index'])->name('user.index');
    });
});





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
