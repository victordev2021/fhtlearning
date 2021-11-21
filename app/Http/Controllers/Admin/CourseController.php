<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApprovedCourse;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::where('status', 2)->paginate(5);
        return view('admin.courses.index', compact('courses'));
    }
    public function show(Course $course)
    {
        $this->authorize('revision', $course);
        return view('admin.courses.show', compact('course'));
        // return $course;
    }
    public function approved(Course $course)
    {
        $this->authorize('revision', $course);
        if (!$course->lessons || !$course->goals || !$course->requirements || !$course->image) {
            // dd('entro XD');
            return back()->with('info', 'No se puede publicar un curso que no esté completo.');
        }
        $course->status = 3;
        $course->save();
        //Envio de correo electrónico
        $mail = new ApprovedCourse($course);
        Mail::to($course->teacher->email)->send($mail);
        return redirect()->route('admin.courses.index')->with('info', 'El curso se publico con éxito.');
    }
}