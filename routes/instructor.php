<?php

use App\Http\Controllers\Instructor\CourseController;
use App\Http\Livewire\Instructor\CourseCurriculum;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\InstructorCourses;
use App\Http\Livewire\Instructor\CoursesStudents;

Route::redirect('', 'instructor/courses', 301);
// Route::get('courses', InstructorCourses::class)->middleware('can:Leer cursos')->name('courses.index');
Route::resource('courses', CourseController::class)->names('courses');
Route::get('courses/{course}/curriculum', CourseCurriculum::class)->middleware('can:Actualizar cursos')->name('courses.curriculum');
Route::get('courses/{course}/goals', [CourseController::class, 'goals'])->name('courses.goals');
Route::get('courses/{course}/students', CoursesStudents::class)->middleware('can:Actualizar cursos')->name('courses.students');
