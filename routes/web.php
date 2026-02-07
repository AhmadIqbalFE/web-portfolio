<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', [ProjectController::class, 'public'])->name('home');
Route::get('/project', [ProjectController::class, 'index'])->name('project.index');
Route::get('/contact', [ProjectController::class, 'contact'])->name('contact');
Route::get('/contact', function () { return view('contact'); });
Route::get('/blog', function () { return view('blog'); });

Route::post('/contact', [ProjectController::class, 'sendContact'])
    ->name('contact.send');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {

    Route::get('/dashboard', [ProjectController::class, 'admin'])->name('admin.dashboard');
    Route::get('/project', [ProjectController::class, 'indexAdmin'])->name('admin.project.index');

    Route::get('/project/create', [ProjectController::class, 'create'])->name('project.create');
    Route::post('/project/store', [ProjectController::class, 'store'])->name('project.store');

    Route::get('/project/{project}/edit', [ProjectController::class, 'edit'])->name('project.edit');
    Route::put('/project/{project}', [ProjectController::class, 'update'])->name('project.update');
    Route::delete('/project/{project}', [ProjectController::class, 'destroy'])->name('project.delete');
});

require __DIR__.'/auth.php';

