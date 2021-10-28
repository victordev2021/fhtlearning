<x-instructor-layout>
    <x-slot name='course'>
        {{ $course->slug }}
    </x-slot>
    <div>
        @livewire('instructor.courses-goals', ['course' => $course], key('courses-golas'.$course->id))
    </div>
    <div class="my-4">
        @livewire('instructor.courses-requirements', ['course' => $course], key('courses-requirements'.$course->id))
    </div>
    <div>
        @livewire('instructor.courses-audiences', ['course' => $course], key('courses-audiences'.$course->id))
    </div>
</x-instructor-layout>
