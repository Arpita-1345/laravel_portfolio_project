<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\MainPagesController;
use App\Http\Controllers\Backend\maincontroller;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\EducationPagesController;
use App\Http\Controllers\AboutPagesController;
use App\Http\Controllers\PortfolioPagesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Frontend\HomeController;

use App\Models\About;
use PhpParser\Node\Expr\List_;

 Route::get('/', function () {
    return view('welcome');
});
// Route::get('/', function () {
//     return view('pages.index');
// });
// Route::get('/', [PagesController::class,'index'])->name('home');
Route::get('/', [PagesController::class,'index'])->name('welcome');
Route::get('/admin/dashboard',[MainPagesController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/main',[MainPagesController::class, 'index'])->name('admin.main');
Route::post('/update/{id}',[MainPagesController::class, 'update'])->name('admin.main.update');
Route::post('/contact',[ContactFormController::class, 'store'])->name('contact.store');
Route::get('/admin/education/create', [EducationPagesController::class, 'create'])->name('admin.education.create');
Route::put('/admin/education/store', [EducationPagesController::class, 'store'])->name('admin.education.store');
Route::get('admin/education/list', [EducationPagesController::class, 'list'])->name('admin.education.list');
 Route::get('/education/edit/{id}',[EducationPagesController::class, 'edit'])->name('admin.education.edit');
Route::post('/education/update/{id}', [EducationPagesController::class, 'update'])->name('admin.education.update');
Route::delete('/education/destroy/{id}', [EducationPagesController::class, 'destroy'])->name('admin.education.destroy');
Route::get('/admin/about/create', [AboutPagesController::class, 'create'])->name('admin.abouts.create');
Route::put('/admin/about/store', [AboutPagesController::class, 'store'])->name('admin.abouts.store');
Route::get('admin/about/list', [AboutPagesController::class, 'list'])->name('admin.abouts.list');
Route::get('/about/edit/{id}',[AboutPagesController::class, 'edit'])->name('admin.abouts.edit');
Route::post('/about/update/{id}', [AboutPagesController::class, 'update'])->name('admin.abouts.update');
Route::delete('/about/destroy/{id}', [AboutPagesController::class, 'destroy'])->name('admin.abouts.destroy');


Route::get('/admin/portfolios/create', [PortfolioPagesController::class, 'create'])->name('admin.portfolios.create');
Route::put('/admin/portfolios/store', [PortfolioPagesController::class, 'store'])->name('admin.portfolios.store');
Route::get('admin/portfolios/list', [PortfolioPagesController::class, 'list'])->name('admin.portfolios.list');
Route::get('/about/portfolios/{id}',[PortfolioPagesController::class, 'edit'])->name('admin.portfolios.edit');
Route::post('/about/portfolios/{id}', [PortfolioPagesController::class, 'update'])->name('admin.portfolios.update');
Route::delete('/about/portfolios/{id}', [PortfolioPagesController::class, 'destroy'])->name('admin.portfolios.destroy');

Route::get('/admin/contact/create', [ContactFormController::class, 'create'])->name('admin.contact.create');
Route::put('/admin/contact/store', [ContactFormController::class, 'storeemail'])->name('admin.contact.storeemail');
Route::get('admin/contact/list', [ContactFormController::class, 'list'])->name('admin.contact.list');
Route::get('/about/contact/{id}',[ContactFormController::class, 'edit'])->name('admin.contact.edit');
Route::post('/about/contact/{id}', [ContactFormController::class, 'update'])->name('admin.contact.update');
Route::delete('/about/contact/{id}', [ContactFormController::class, 'destroy'])->name('admin.contact.destroy');

Route::post('/contact',[ContactFormController::class, 'store'])->name('contact.store');

//Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/login', function () {
        return view('welcome');
    });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
