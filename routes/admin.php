<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ContactController;

Route::view('/', 'admin.dashboard')->name('dashboard');
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::get('/contacts/trash', [ContactController::class, 'trash'])->name('contacts.trash');
Route::delete('/contacts/force-delete', [ContactController::class, 'forceDelete'])->name('contacts.force_delete');