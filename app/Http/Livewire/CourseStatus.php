<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\Lesson;
use Livewire\Component;

class CourseStatus extends Component
{
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
    }
    public function changeLesson(Lesson $lesson)
    {
        $this->current = $lesson;
        // $this->index = $this->course->lessons->search($lesson);
        // return $lesson;
    }
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
