<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\Lesson;
use Livewire\Component;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CourseStatus extends Component
{
    use AuthorizesRequests;
    public $course, $current;

    public function mount(Course $course)
    {
        $this->course = $course;
        foreach ($course->lessons as $lesson) {
            if (!$lesson->completed) {
                $this->current = $lesson;
                // Indice
                // $this->index = $course->lessons->search($lesson);
                // $this->previous = $course->lessons[$this->index - 1];
                // $this->next = $course->lessons[$this->index + 1];
                break;
            }
        }
        if (!$this->current) {
            $this->current = $this->course->lessons->last();
        }
        $this->authorize('enrolled', $course);
    }
    // Metodos
    public function changeLesson(Lesson $lesson)
    {
        $this->current = $lesson;
        // $this->index = $this->course->lessons->search($lesson);
        // return $lesson;
    }
    public function completed()
    {
        if ($this->current->completed) {
            # Eliminar registro
            $this->current->users()->detach(auth()->user()->id);
        } else {
            # Add registro
            $this->current->users()->attach(auth()->user()->id);
        }
        $this->current = Lesson::find($this->current->id);
        $this->course = Course::find($this->course->id);
    }
    // Propiedades computadas
    public function getIndexProperty()
    {
        return $this->course->lessons->pluck('id')->search($this->current->id);
    }
    public function getPreviousProperty()
    {
        if ($this->index == 0) {
            return null;
        } else {
            return $this->course->lessons[$this->index - 1];
        }
    }
    public function getAdvanceProperty()
    {
        $i = 0;
        foreach ($this->course->lessons as $lesson) {
            if ($lesson->completed) {
                $i++;
            }
        }
        $advance = ($i * 100) / $this->course->lessons->count();
        return round($advance, 2);
    }
    public function getNextProperty()
    {
        if ($this->index == $this->course->lessons->count() - 1) {
            return null;
        } else {
            # code...
            return $this->course->lessons[$this->index + 1];
        }
    }
    public function render()
    {
        return view('livewire.course-status');
    }
}
