<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewpostController;
use App\Http\Controllers\JobsingleController;   
use App\Http\Controllers\ContactController;

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
Route::get('/', [IndexController::class, 'index']);
Route::get('/about',[AboutController::class, 'about']);
Route::get('/blog',[BlogController::class, 'blog']);
Route::get('/category',[CategoryController::class, 'category']);
Route::get('/newpost',[NewpostController::class, 'newpost']);
Route::get('/jobsingle',[JobsingleController::class, 'jobsingle']);
Route::get('/contact',[ContactController::class, 'contact']);


Route::post('/create-job', 
[NewPostController::class,'create'])->name('job.create');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
