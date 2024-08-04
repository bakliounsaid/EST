<?php

use App\Livewire\Admin\Login;
use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Managers\Index as ManagersIndex;
use App\Livewire\Admin\Managers\Show as ManagersShow;
use App\Livewire\Admin\Managers\Edit as ManagersEdit;
use App\Livewire\Admin\Managers\Add as ManagersAdd;
use App\Livewire\Admin\Players\Index as PlayersIndex;
use App\Livewire\Admin\Players\Show as PlayersShow;
use App\Livewire\Admin\Players\Edit as PlayersEdit;
use App\Livewire\Admin\Players\Add as PlayersAdd;
use App\Livewire\Admin\Matches\Index as MatchesIndex;
use App\Livewire\Admin\Matches\Show as MatchesShow;
use App\Livewire\Admin\Matches\Edit as MatchesEdit;
use App\Livewire\Admin\Matches\Add as MatchesAdd;
use App\Livewire\Admin\Training\Index as TrainingIndex;
use App\Livewire\Admin\Training\Show as TrainingShow;
use App\Livewire\Admin\Training\Edit as TrainingEdit;
use App\Livewire\Admin\Training\Add as TrainingAdd;
use App\Livewire\Admin\Categories\Index as CategoriesIndex;
use App\Livewire\Admin\Categories\Show as CategoriesShow;
use App\Livewire\Admin\Categories\Edit as CategoriesEdit;
use App\Livewire\Admin\Categories\Add as CategoriesAdd;
use App\Livewire\Admin\Settings\Index as SettingsIndex;
use App\Livewire\Admin\Profile\Index as ProfileIndex;
use App\Livewire\Admin\Dashboard\Index as DashboardIndex;


Route::name('admin.')->middleware('guest')->group(function () {
    Route::get('/login', Login::class)->name('login');
});
Route::name('admin.')->middleware('auth')->group(function () {

    Route::get('/', DashboardIndex::class)->name('dashboard.index');
    Route::get('/settings', SettingsIndex::class)->name('settings.index');
    Route::get('/profile', ProfileIndex::class)->name('profile.index');

    Route::name('managers.')->group(function () {
        Route::get('/managers', ManagersIndex::class)->name('index');
        Route::get('/managers/{manager}', ManagersShow::class)->name('show');;
        Route::get('/managers/{id}/edit', ManagersEdit::class)->name('edit');
        Route::get('/add', ManagersAdd::class)->name('add');
    });
    Route::name('categories.')->group(function () {
        Route::get('/categories', CategoriesIndex::class)->name('index');
        Route::get('/categories/{categorie}', CategoriesShow::class)->name('show');
        Route::get('/categories/{id}/edit', CategoriesEdit::class)->name('edit');
        Route::get('/add', CategoriesAdd::class)->name('add');
    });
    Route::name('players.')->group(function () {
        Route::get('/players', PlayersIndex::class)->name('index');
        Route::get('/players/{player}', PlayersShow::class)->name('show');
        Route::get('/players/{id}/edit', PlayersEdit::class)->name('edit');
        Route::get('/add', PlayersAdd::class)->name('add');
    });
    Route::name('matches.')->group(function () {
        Route::get('/matches', MatchesIndex::class)->name('index');
        Route::get('/matches/{matche}', MatchesShow::class)->name('show');
        Route::get('/matches/{id}/edit', MatchesEdit::class)->name('edit');
        Route::get('/add', MatchesAdd::class)->name('add');
    });
    Route::name('training.')->group(function () {
        Route::get('/training', TrainingIndex::class)->name('index');
        Route::get('/training/{training}', TrainingShow::class)->name('show');
        Route::get('/training/{id}/edit', TrainingEdit::class)->name('edit');
       Route::get('/add', TrainingAdd::class)->name('add');
    });
});
