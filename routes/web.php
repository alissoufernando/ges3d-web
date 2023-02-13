<?php

use App\Http\Livewire\Dashboard\Agents\AddAgentsComponent;
use App\Http\Livewire\Dashboard\Agents\EditAgentsComponent;
use App\Http\Livewire\Dashboard\Agents\ListeAgentsComponent;
use App\Http\Livewire\Dashboard\Alerts\ListeAlertComponent;
use App\Http\Livewire\Dashboard\Articles\AddArticleComponent;
use App\Http\Livewire\Dashboard\Articles\EditArticleComponent;
use App\Http\Livewire\Dashboard\Articles\ListeArticleComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Site\WelcomeComponent;
use App\Http\Livewire\Dashboard\DashboardComponent;
use App\Http\Livewire\Dashboard\Products\ListeProductComponent;
use App\Http\Livewire\Dashboard\Utilisateurs\AddUserComponent;
use App\Http\Livewire\Dashboard\Utilisateurs\EditUserComponent;
use App\Http\Livewire\Dashboard\Utilisateurs\ListeUsersComponent;

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

Route::get('/', WelcomeComponent::class)->name('welcome');
Route::get('/dashboard', DashboardComponent::class)->name('dashboard');

Route::get('/users', ListeUsersComponent::class)->name('dashboard.liste-users');
Route::get('/user', AddUserComponent::class)->name('dashboard.add-users');
Route::get('/useredit', EditUserComponent::class)->name('dashboard.edit-users');

Route::get('/agents', ListeAgentsComponent::class)->name('dashboard.liste-agents');
Route::get('/agent', AddAgentsComponent::class)->name('dashboard.add-agents');
Route::get('/agentedit', EditAgentsComponent::class)->name('dashboard.edit-agents');

Route::get('/alerts', ListeAlertComponent::class)->name('dashboard.liste-alerts');

Route::get('/articles', ListeArticleComponent::class)->name('dashboard.liste-articles');
Route::get('/article', AddArticleComponent::class)->name('dashboard.add-articles');
Route::get('/articledit', EditArticleComponent::class)->name('dashboard.edit-articles');

Route::get('/products', ListeProductComponent::class)->name('dashboard.liste-product');
Route::get('/product', AddArticleComponent::class)->name('dashboard.add-product');
Route::get('/productedit', EditArticleComponent::class)->name('dashboard.edit-product');




