<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ContactController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/contacts', [ContactController::class, 'all'])
    ->name('api.contact.all');

Route::get('/contacts/trash', [ContactController::class, 'trash'])
    ->name('api.contact.trash');

Route::get('/contacts/{id}', [ContactController::class, 'find'])
    ->name('api.contact.find');

Route::delete('/contacts/delete', [ContactController::class, 'delete'])
    ->name('api.contact.delete');
    
Route::post('/contacts/restore', [ContactController::class, 'restore'])
    ->name('api.contact.restore');
