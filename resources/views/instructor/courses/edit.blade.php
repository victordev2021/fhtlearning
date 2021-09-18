<x-app-layout>
    <div class="container py-8 grid grid-cols-5">
        <aside>
            <h1 class="font-bold text-lg mb-4">Edición del curso</h1>
            <ul class="text-sm text-gray-600">
                <li class="leading-7 mb-1 border-l-4 pl-2 border-indigo-400"><a href="">Información del curso</a></li>
                <li class="leading-7 mb-1 border-l-4 pl-2 border-gray-300"><a href="">Lecciones del curso</a></li>
                <li class="leading-7 mb-1 border-l-4 pl-2 border-gray-300"><a href="">Metas del curso</a></li>
                <li class="leading-7 mb-1 border-l-4 pl-2 border-gray-300"><a href="">Estudiantes</a></li>
            </ul>
        </aside>
        {{-- formulario edición --}}
        <div class="col-span-4 card">
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
        </div>
    </div>
    <x-slot name="js">
        <script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>
        <script src="{{ asset('js/instructor/courses/form.js') }}"></script>
    </x-slot>
</x-app-layout>
