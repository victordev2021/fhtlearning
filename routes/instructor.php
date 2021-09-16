<?php

use App\Http\Controllers\Instructor\CourseController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\InstructorCourses;

Route::redirect('', 'instructor/courses', 301);
// Route::get('courses', InstructorCourses::class)->middleware('can:Leer cursos')->name('courses.index');
Route::resource('courses', CourseController::class)->names('courses');
