<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CetakPdfController;
use App\Http\Controllers\DetailGradeController;
use App\Http\Controllers\DetailProduct;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PengambilanController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransaksiController;
use App\Models\About;
use App\Models\Category;
use App\Models\Feature;
use App\Models\Pengambilan;
use App\Models\Penjualan;
use App\Models\Process;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
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

// Route Admin
// Route::get('/dashboard', function () {
//     return view('admin.index')
// });
// Route::get('/adminproduk', function () {
//     return view('admin.produk.index');
// });
// Route::get('/adminpengambilan', function () {
//     return view('admin.pengambilan.index');
// });
// Route::get('/adminpenjualan', function () {
//     return view('admin.penjualan.index');
// });
// Route::get('/adminprodukcreate', function () {
//     return view('admin.produk.create');
// });

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index', [
            'jumlah_produk' => Product::count(),
            'jumlah_kategori' => Category::count(),
            'jumlah_pengambil' => Pengambilan::count(),
            'jumlah_terjual' => Penjualan::count()
        ]);
    });
    Route::get('/transaksipenjualan/{id}', [TransaksiController::class, 'penjualan']);
    Route::resource('/adminproduk', ProductController::class);
    Route::resource('/adminkategori', CategoryController::class);
    Route::resource('/admingrade', DetailGradeController::class);
    Route::resource('/adminpengambilan', PengambilanController::class);
    Route::get('/pengambilan_pdf', [CetakPdfController::class, 'cetak_pdf']);
    Route::get('/pengambilan/search', [PengambilanController::class, 'search']);
    Route::resource('/adminpenjualan', PenjualanController::class);
    Route::get('/penjualan_pdf', [CetakPdfController::class, 'cetakpdf']);
    Route::get('/penjualan/search', [PenjualanController::class, 'search']);
    Route::resource('/laporan', LaporanController::class);
    Route::resource('/adminprocess', ProcessController::class);
    Route::resource('/adminabout', AboutController::class);
    Route::resource('/adminfeature', FeatureController::class);
});

//message 
Route::resource('/adminmessage', MessageController::class);
// Route Landingpage
Route::get('/', function () {
    return view(
        'landingpage.home',
        [
            'title' => 'home',
            'about' => About::all(),
            'feature' => Feature::all(),
            'process' => Process::all()
        ]

    );
});
Route::get('/about', function () {
    return view('landingpage.about', [
        'about' => About::all()
    ]);
});
Route::get('/journey', function () {
    return view('landingpage.journey');
});
Route::get('/feature', function () {
    return view('landingpage.feature', [
        'feature' => Feature::all(),
        'process' => Process::all()
    ]);
});
Route::get('/product', function () {
    return view('landingpage.product', [
        'produkR' => Product::where('status', '1')->get(),
        'produkG' => Product::where('status', '2')->get(),
        'produkP' => Product::where('status', '3')->get(),
    ]);
});
Route::get('/productdetail/{id}', [DetailProduct::class, 'show']);
Route::get('/team', function () {
    return view('landingpage.team');
});
Route::get('/contact', function () {
    return view('landingpage.contact');
});

Route::get('/login', [HomeController::class, 'index'])->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/mig', function () {
    // Call and Artisan command from within your application.
    Artisan::call('migrate:fresh');
    Artisan::call('db:seed');
});

Route::get('/cc', function () {
    // Call and Artisan command from within your application.
    Artisan::call('config:clear');
});
