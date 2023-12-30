<?php

    use App\Http\Controllers\BooksController;
    use App\Http\Controllers\ProfileController;
    use App\Http\Middleware\HandleInertiaRequests;
  use Illuminate\Support\Facades\Auth;
  use Illuminate\Support\Facades\Route;
    use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
    use Inertia\Inertia;

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

Route::get('/dashboard', function () {
    return view('dashboard', [
      'userbook' => Auth::user()->books,
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/book', [BooksController::class, 'index'])
        ->name('book');
    Route::post('/book/add', [BooksController::class, 'add'])
        ->name('book.add');
    Route::delete('/book/{id}/delete', [BooksController::class, 'destroy'])
        ->name('book.delete');
    Route::get('/book/{id}/edit', [BooksController::class, 'edit'])
        ->name('book.edit');
    Route::put('/book/{id}/update', [BooksController::class, 'update'])
        ->name('book.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
