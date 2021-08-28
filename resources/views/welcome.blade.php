<x-app-layout>
    {{-- sección banner --}}
    <section class="bg-cover" style="background-image: url({{ asset('img/home/sunset-4924334_1920.jpg') }})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">La solución la tenemos nosotros.</h1>
                <p class="text-white text-lg mt-2 mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Consequuntur
                    blanditiis suscipit esse, eos
                    tempora quia odit aliquid ut fuga eaque, commodi dolorem iusto nostrum iure illo pariatur. Optio,
                    odio
                    sint?</p>
                @livewire('search')
            </div>
        </div>
    </section>
    {{-- sección contenido --}}
    <section class="mt-24">
        <h1 class="uppercase text-gray-500 text-center text-3xl mb-6">Proyectos</h1>
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure><img class="rounded-xl h-36 w-full object-cover"
                        src="{{ asset('img/home/swans-6421355_640.jpg') }}" alt="" srcset="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Título</h1>
                </header>
                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eveniet
                    velit deleniti voluptate
                    placeat optio repudiandae.</p>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover"
                        src="{{ asset('img/home/buildings-6497337_640.jpg') }}" alt="" srcset="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Título</h1>
                </header>
                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eveniet
                    velit deleniti voluptate
                    placeat optio repudiandae.</p>
            </article>
            <article>
                <figure><img class="rounded-xl h-36 w-full object-cover"
                        src="{{ asset('img/home/belgium-6497401_640.jpg') }}" alt="" srcset="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Título</h1>
                </header>
                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eveniet
                    velit deleniti voluptate
                    placeat optio repudiandae.</p>
            </article>
            <article>
                <figure><img class="rounded-xl h-36 w-full object-cover"
                        src="{{ asset('img/home/beautiful-6126170_640.jpg') }}" alt="" srcset="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Título</h1>
                </header>
                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eveniet
                    velit deleniti voluptate
                    placeat optio repudiandae.</p>
            </article>
        </div>
    </section>
    {{-- aside que curso llevar --}}
    <section class="mt-24 bg-gray-700 py-12">
        <h1 class="text-center text-white text-3xl">No sabes que curso llevar?</h1>
        <p class="text-white text-md text-center">Lorem ipsum, fugiat. Doloremque similique rem officiis porro aut?
            Fugiat, ipsum quod!</p>
        <div class="flex justify-center">
            <!-- component -->
            <a href="{{ route('courses.index') }}"
                class="mt-4 bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 rounded">
                Catálogo de cursos
            </a>
        </div>
    </section>
    {{-- sección últimos cursos --}}
    <section class="my-24">
        <h1 class="uppercase text-center text-3xl text-gray-600">últimos cursos</h1>
        <p class="text-center text-gray-500 text-sm mb-6">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Impedit, aliquam tenetur nihil illum!</p>
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($courses as $course)
                <x-course-card :course="$course"></x-course-card>
            @endforeach
        </div>
    </section>
</x-app-layout>
