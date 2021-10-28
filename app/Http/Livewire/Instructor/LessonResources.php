<?php

namespace App\Http\Livewire\Instructor;

use App\Models\Lesson;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class LessonResources extends Component
{
    use WithFileUploads;
    public $lesson, $file;
    public function mount(Lesson $lesson)
    {
        $this->lesson = $lesson;
    }
    public function render()
    {
        return view('livewire.instructor.lesson-resources');
    }
    public function save()
    {
        // dd($url);
        $this->validate([
            'file' => 'required'
        ]);
        // dd($this->file);
        $url = $this->file->store('public/resources');
        // $url = 'resources/' . $this->file->getFilename();
        $this->lesson->resource()->create([
            'url' => $url
        ]);
        $this->lesson = Lesson::find($this->lesson->id);
    }
    public function destroy()
    {
        Storage::delete($this->lesson->resource->url);
        $this->lesson->resource->delete();
        $this->lesson = Lesson::find($this->lesson->id);
    }
    public function download()
    {
        // dd(storage_path('app/public/resources/5bik2dniVZEITwuxD3GATgBwnbhAqUpqAKXMyZJU.jpg'));
        // dd(Storage::url($this->lesson->resource->url));
        // return response()->download(storage_path('app/public/' . $this->lesson->resource->url));
        // dd(Storage::url('resourses/5bik2dniVZEITwuxD3GATgBwnbhAqUpqAKXMyZJU.jpg'));
        // return response()->download('http://127.0.0.1:8000/storage/resources/5bik2dniVZEITwuxD3GATgBwnbhAqUpqAKXMyZJU.jpg');
        return response()->download(storage_path('app/' . $this->lesson->resource->url));
        // return response()->download(Storage::url('resources/5bik2dniVZEITwuxD3GATgBwnbhAqUpqAKXMyZJU.jpg'));
    }
}
