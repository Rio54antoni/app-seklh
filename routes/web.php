<?php

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Kepalasekolah;
use App\Models\Matapelajaran;
use App\Models\Profilsekolah;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AgamaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\JeniskController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\Adm_userController;
use App\Http\Controllers\Adm_adminController;
use App\Http\Controllers\UserManagerController;
use App\Http\Controllers\KepalasekolahController;
use App\Http\Controllers\MatapelajaranController;
use App\Http\Controllers\ProfilsekolahController;
use App\Http\Controllers\Adm_superadminController;

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
Route::middleware(['auth', 'super_admin:admin'])->group(function () {
    Route::group(['prefix' => 'super-admin'], function () {
        Route::get('/dashboard', [Adm_superadminController::class, 'index'])->name('super_admin.index');
        Route::get('/akses', [Adm_superadminController::class, 'akses'])->name('super_admin.akses');
        Route::resource('users', 'App\Http\Controllers\Super_admin\UserController');
        Route::resource('profilsekolahs', 'App\Http\Controllers\Super_admin\ProfilsekolahController');
        Route::resource('kepalasekolahs', 'App\Http\Controllers\Super_admin\KepalasekolahController');
        Route::resource('murids', 'App\Http\Controllers\Super_admin\MuridController');
        Route::resource('matapelajarans', 'App\Http\Controllers\Super_admin\MatapelajaranController');
        Route::resource('kelas', 'App\Http\Controllers\Super_admin\KelasController');
        Route::resource('gurus', 'App\Http\Controllers\Super_admin\GuruController');
        Route::resource('agamas', 'App\Http\Controllers\Super_admin\AgamaController');
        Route::resource('statuses', 'App\Http\Controllers\Super_admin\StatusController');
        Route::resource('jabatans', 'App\Http\Controllers\Super_admin\JabatanController');
        Route::resource('jenisks', 'App\Http\Controllers\Super_admin\JeniskController');
    });
});

//route dari admin
Route::middleware(['auth', 'admin:admin'])->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/dashboard', [Adm_adminController::class, 'index'])->name('admin.index');

        // Route::resource('profilsekolahs', ProfilsekolahController::class)->names('admin.profil');
        // Route::resource('kepalasekolahs', KepalasekolahController::class)->names('admin.kepalasekolah');
        // Route::resource('gurus', GuruController::class)->names('admin.guru');
        // Route::resource('murids', MuridController::class)->names('admin.murid');
        // Route::resource('matapelajarans', MatapelajaranController::class)->names('admin.matapelajaran');
        // Route::resource('kelas', KelasController::class)->names('admin.kelas');
        // Route::resource('agamas', AgamaController::class)->names('admin.agama');
        // Route::resource('statuses', StatusController::class)->names('admin.status');
        // Route::resource('jabatans', JabatanController::class)->names('admin.jabatan');
        // Route::resource('jenisks', JeniskController::class)->names('admin.jeniskelamin');
    });
});


Route::middleware(['auth', 'user:user'])->group(function () {
    Route::group(['prefix' => 'user'], function () {
        Route::get('/dashboard', [Adm_userController::class, 'index'])->name('user.index');
    });
});





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
