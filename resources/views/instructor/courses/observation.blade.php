<x-instructor-layout :course="$course">
    <h1 class="uppercase text-2xl font-bold">observaciones del curso</h1>
    <hr class="mt-2 mb-6">
    <div>
        {!! $course->observation->body !!}
    </div>
</x-instructor-layout>
