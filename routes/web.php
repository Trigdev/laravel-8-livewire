<?php

use App\Http\Livewire\Form; 
use App\Http\Livewire\Home; 
use App\Http\Livewire\Post; 
use App\Http\Livewire\Action; 
use App\Http\Livewire\Product; 
use App\Http\Livewire\Contact;
use App\Http\Livewire\Images;
use App\Http\Livewire\User;
use App\Http\Livewire\Users;
use App\Http\Livewire\Students;
use App\Http\Livewire\Uploads;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/post', Post::class); 
Route::get('/home/{name?}', Home::class); 
Route::get('/form', Form::class); 
Route::get('/action', Action::class); 
Route::get('/users', User::class); 
Route::get('/product', Product::class); 
Route::get('/contact', Contact::class); 
Route::get('/all-users', Users::class); 
Route::get('/students', Students::class); 
Route::get('/uploads', Uploads::class); 
Route::get('/upload-images', Images::class);