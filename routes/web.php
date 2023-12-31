<?php

    use App\Http\Controllers\BooksController;
    use App\Http\Controllers\ProfileController;
    use App\Http\Middleware\HandleInertiaRequests;
  use App\Models\Book;
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
    return view('welcome', [
      'books' => Book::all(),
    ]);
})->name('home');

Route::get('/api/dashboard', function () {
    return view('dashboard', [
      'userbook' => Auth::user()->books,
      'user' => Auth::user(),
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/api/books', [BooksController::class, 'index'])
        ->name('book');
    Route::get('/api/books/{id}', [BooksController::class, 'show'])
        ->name('book.show');
    Route::post('/api/books/add', [BooksController::class, 'add'])
        ->name('book.add');
    Route::delete('/api/books/{id}/delete', [BooksController::class, 'destroy'])
        ->name('book.delete');
    Route::get('/api/books/{id}/edit', [BooksController::class, 'edit'])
        ->name('book.edit');
    Route::put('/api/books/{id}/update', [BooksController::class, 'update'])
        ->name('book.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/api/user', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/api/user/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/api/user/logout', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
