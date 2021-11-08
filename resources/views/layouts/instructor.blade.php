<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
            {{-- <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header> --}}
        @endif

        <!-- Page Content -->
        <div class="container py-8 grid grid-cols-5">
            <aside>
                <h1 class="font-bold text-lg mb-4">Edición del curso</h1>
                <ul class="text-sm text-gray-600">
                    <li
                        class="leading-7 mb-1 border-l-4 pl-2 @routeIs('instructor.courses.edit', $course) border-indigo-400 @else border-gray-300  @endif">
                        <a href="{{ route('instructor.courses.edit', $course) }}">Información del curso</a>
                    </li>
                    <li
                        class="leading-7 mb-1 border-l-4 pl-2 @routeIs('instructor.courses.curriculum', $course) border-indigo-400 @else border-gray-300  @endif">
                        <a href="{{ route('instructor.courses.curriculum', $course) }}">Lecciones del curso</a>
                    </li>
                    <li
                        class="leading-7 mb-1 border-l-4 pl-2 @routeIs('instructor.courses.goals', $course) border-indigo-400 @else border-gray-300  @endif">
                        <a href="{{ route('instructor.courses.goals', $course) }}">Metas del curso</a>
                    </li>
                    <li
                        class="leading-7 mb-1 border-l-4 pl-2 @routeIs('instructor.courses.students', $course) border-indigo-400 @else border-gray-300  @endif">
                        <a href="{{ route('instructor.courses.students', $course) }}">Estudiantes</a>
                    </li>
                </ul>
            </aside>
            {{-- formulario edición --}}
            <main class="col-span-4 card">
                {{ $slot }}
            </main>
        </div>
    </div>

    @stack('modals')

    @livewireScripts
    @isset($js)
        {{ $js }}
    @endisset
</body>

</html>
