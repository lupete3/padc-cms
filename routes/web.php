<?php

use App\Http\Controllers\ApropoController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExpertiseController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PartenaireController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ZoneController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs.all');
Route::get('/faire-un-don', [CompteController::class, 'dons'])->name('comptes.all');
Route::get('/blog/{slug:slug}', [HomeController::class, 'show'])->name('blog.show');
Route::get('/nos-expertises', [ExpertiseController::class, 'expertises'])->name('expertises.all');
Route::get('/expertise/{expertise}', [ExpertiseController::class, 'showSingle'])->name('expertises.single');


Route::get('/zones-intervention', [ZoneController::class, 'zones'])->name('zones.all');
Route::get('/zones/{slug:slug}', [ZoneController::class, 'single'])->name('zone.show');

Route::get('/blog/category/{slug:slug}', [HomeController::class, 'showByCategory'])->name('blogs.category');

Route::get('/apropos', [ApropoController::class, 'show'])->name('apropos');
Route::get('/qui-sommes-nous', [ApropoController::class, 'index'])->name('apropos.index');
Route::put('/apropos/{apropo}', [ApropoController::class, 'update'])->name('apropos.update');

Route::get('sendbasicemail',[MailController::class, 'basic_email'])->name('sendbasicemail');
Route::post('contact',[MailController::class, 'send_email'])->name('send_email');
Route::get('contact',[MailController::class, 'index'])->name('contact');
Route::get('sendattachmentemail',[MailController::class, 'attachment_email'])->name('sendattachmentemail');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->prefix('admin')->group( function () {
    
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/categories/{category}/edit', [CategoryController::class, 'show'])->name('categories.show');
    Route::put('/categories/{category}/update', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/categories/{category}/destroy', [CategoryController::class, 'destroy'])->name('categories.delete');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
    
    Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');
    Route::get('/faq/{faq}/edit', [FaqController::class, 'show'])->name('faq.show');
    Route::put('/faq/{faq}/update', [FaqController::class, 'update'])->name('faq.update');
    Route::delete('/faq/{faq}/destroy', [FaqController::class, 'destroy'])->name('faq.delete');
    Route::get('/faq/create', [FaqController::class, 'create'])->name('faq.create');
    Route::post('/faq/store', [FaqController::class, 'store'])->name('faq.store');
    
    Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
    Route::get('/blogs/{blog}/edit', [BlogController::class, 'show'])->name('blogs.show');
    Route::put('/blogs/{blog}/update', [BlogController::class, 'update'])->name('blogs.update');
    Route::delete('/blogs/{blog}/destroy', [BlogController::class, 'destroy'])->name('blogs.delete');
    Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
    Route::post('/blogs/store', [BlogController::class, 'store'])->name('blogs.store');
    
    Route::get('/zones', [ZoneController::class, 'index'])->name('zones.index');
    Route::get('/zones/{zone}/edit', [ZoneController::class, 'show'])->name('zones.show');
    Route::put('/zones/{zone}/update', [ZoneController::class, 'update'])->name('zones.update');
    Route::delete('/zones/{zone}/destroy', [ZoneController::class, 'destroy'])->name('zones.delete');
    Route::get('/zones/create', [ZoneController::class, 'create'])->name('zones.create');
    Route::post('/zones/store', [ZoneController::class, 'store'])->name('zones.store');

    Route::get('/nos-expertises', [ExpertiseController::class, 'index'])->name('expertises.index');
    Route::put('/expertises/{expertise}/update', [ExpertiseController::class, 'update'])->name('expertises.update');
    Route::get('/expertises/{expertise}/edit', [ExpertiseController::class, 'show'])->name('expertises.show');
    Route::delete('/expertises/{expertise}/destroy', [ExpertiseController::class, 'destroy'])->name('expertises.delete');
    Route::get('/expertises', [ExpertiseController::class, 'create'])->name('expertises.create');
    Route::post('/expertises/store', [ExpertiseController::class, 'store'])->name('expertises.store');

    Route::get('/nos-partenaires', [PartenaireController::class, 'index'])->name('partenaires.index');
    Route::put('/partenaires/{partenaire}/update', [PartenaireController::class, 'update'])->name('partenaires.update');
    Route::get('/partenaires/{partenaire}/edit', [PartenaireController::class, 'show'])->name('partenaires.show');
    Route::delete('/partenaires/{partenaire}/destroy', [PartenaireController::class, 'destroy'])->name('partenaires.delete');
    Route::get('/partenaires', [PartenaireController::class, 'create'])->name('partenaires.create');
    Route::post('/partenaires/store', [PartenaireController::class, 'store'])->name('partenaires.store');

    Route::get('/nos-compte', [CompteController::class, 'index'])->name('comptes.index');
    Route::put('/comptes/{compte}/update', [CompteController::class, 'update'])->name('comptes.update');
    Route::get('/comptes/{compte}/edit', [CompteController::class, 'show'])->name('comptes.show');
    Route::delete('/comptes/{compte}/destroy', [CompteController::class, 'destroy'])->name('comptes.delete');
    Route::get('/comptes', [CompteController::class, 'create'])->name('comptes.create');
    Route::post('/comptes/store', [CompteController::class, 'store'])->name('comptes.store');
    
    Route::get('/details', [DetailController::class, 'show'])->name('details.edit');
    Route::put('/details/{detail}/update', [DetailController::class, 'update'])->name('details.update');
    
    

});


require __DIR__.'/auth.php';
