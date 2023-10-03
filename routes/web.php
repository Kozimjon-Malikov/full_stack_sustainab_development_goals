<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CardAimController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\TarjimaController;
use App\Http\Controllers\AllEventsController;
use App\Http\Controllers\Frontend\ArticlesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\App;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/locale/{lang}', function ($lang) {
    if (session($lang, ['en', 'ru', 'uz'])) {
        session()->put('locale', $lang);
    } else {
        return redirect()->back();
    }
    return redirect()->back();
});
Route::resources([
    '/all-events' => AllEventsController::class,
    '/view-page' => ViewController::class,
    '/articles' => ArticlesController::class,
    '/all-articles' => ArticlesController::class,

]);
Route::get('/admin/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    Route::resource('sdg-category', CategoryController::class);
    Route::resource('pages', PagesController::class);
    Route::resource('banner', BannerController::class);
    Route::resource('news', NewsController::class);
    Route::resource('/tarjima', TarjimaController::class);
    Route::resource('/cards',CardAimController::class);
});
require __DIR__ . '/auth.php';
