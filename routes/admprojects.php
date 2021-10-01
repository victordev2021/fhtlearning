<?php

use App\Http\Livewire\ProyectoAdmin;
use Illuminate\Support\Facades\Route;

Route::redirect('', 'admprojects/projects');
Route::get('projects', ProyectoAdmin::class)->middleware('can:Leer proyecto')->name('projects.index');
