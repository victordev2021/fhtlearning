<x-instructor-layout>
    <x-slot name="course">
        {{ $course->slug }}
    </x-slot>
    <div class="card-body text-gray-600">
        <h1 class="uppercase text-2xl font-bold">información del curso</h1>
        <hr class="mt-2 mb-6">
        {!! Form::model($course, ['route' => ['instructor.courses.update', $course], 'method' => 'put', 'files' => true]) !!}
        @include('instructor.courses.partials.form')
        <div class="flex justify-end">
            {!! Form::submit('Actualizar información', ['class' => 'form-submit']) !!}
        </div>
        {!! Form::close() !!}
    </div>
    <x-slot name="js">
        <script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>
        <script src="{{ asset('js/instructor/courses/form.js') }}"></script>
    </x-slot>
</x-instructor-layout>
