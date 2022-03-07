<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserrController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PaketCucianController;

use App\Http\Controllers\Simulasi1Controller;


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

// 
// Route::resource('home',HomeController::class); //->middleware('auth');
// Route::resource('outlet',OutletController::class)->middleware('auth');
// Route::resource('member',MemberController::class)->middleware('auth');
// Route::resource('paket',PaketController::class)->middleware('auth');
// Route::resource('userr',UserrController::class)->middleware('auth');
// Route::resource('transaksi',TransaksiController::class);


//Route::resource('paket_cucian', PaketCucianController::class);

 
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route :: group(['prefix' => 'a', 'middleware' =>['isAdmin', 'auth']], function(){ 
  Route::get( 'home', [HomeController :: class, 'index'])->name('a.home'); 
  Route::resource('/member',MemberController::class)->middleware('auth');
  Route::get('Export/MemberExport', [MemberController::class, 'exportData'])->name('export-member');
  Route::resource('/outlet', OutletController :: class);
  Route::post('outlet/import', [OutletController::class, 'importData'])->name('import-outlet');
  Route::get('Export/OutletExport', [OutletController::class, 'exportData'])->name('export-outlet');
  Route::resource('/transaksi', TransaksiController:: class);
  Route::get('Export/TransaksiExport', [TransaksiController::class, 'exportData'])->name('export-transaksi'); 
  Route::resource('/userr',UserrController::class);
  Route::get('Export/UserrExport', [UserrController::class, 'exportData'])->name('export-userr'); 
  Route::get('/laporan', [LaporanController:: class, 'index']); 
  Route::resource('/barang',BarangController::class);
  Route::post('import/barang', [BarangController::class, 'importData'])->name('import-barang');
  Route::get('Export/BarangExport', [BarangController::class, 'exportData'])->name('export-barang');
  Route::resource('/paket_cucian', PaketCucianController:: class);
  Route::get('export/paket_cucian', [PaketCucianController::class, 'exportData'])->name('export-paket_cucian');
  Route::post('paket_cucian/import', [PaketCucianController::class, 'importData'])->name('import-PaketCucian');
  // Route::resource('/simulasi1',Simulasi1Controller::class)->middleware('auth');
  Route::get('data_karyawan',[Simulasi1Controller::class, 'index'])->middleware('auth');
});
  
Route::group(['prefix' => 'k', 'middleware' =>['isKasir', 'auth']], function(){ 
  Route::get('home', [HomeController::class, 'index'])->name('k.home'); 
  Route::resource('member',MemberController::class)->middleware('auth');
  // Route::resource('paket',PaketCucianController::class);
  // Route::get('export/paket_cucian', [PaketCucianController::class, 'exportData'])->name('export-paket_cucian');
  // Route::post('paket_cucian/import', [PaketCucianController::class, 'importData'])->name('Emport-PaketCucian');
  Route::resource('transaksi', TransaksiController :: class);
  Route::get('laporan', [LaporanController:: class, 'index']);
});
  
Route::group(['prefix'=>'o','middleware' =>['isOwner', 'auth']], function(){ 
  Route::get('home', [HomeController:: class, 'index'])->name ('o.home'); 
  Route::get('laporan', [LaporanController:: class, 'index']); 
});


Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);
 
 
    Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');