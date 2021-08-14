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

                <!-- component -->
                <!-- This is an example component -->
                <div class="pt-2 relative mx-auto text-gray-600">
                    <input
                        class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                        type="search" name="search" placeholder="Search">
                    <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
                        <svg class="text-gray-400 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                            viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                            xml:space="preserve" width="512px" height="512px">
                            <path
                                d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>
    {{-- sección contenido --}}
    <section class="mt-24">
        <h1 class="uppercase text-gray-500 text-center text-3xl mb-6">Contenido</h1>
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
                <article class="bg-white shadow-lg rounded overflow-hidden">
                    <img class="h-36 w-full object-cover" src="{{ Storage::url($course->image->url) }}" alt="">
                    <div class="px-6 py-4">
                        <h1 class="text-xl text-gray-700 mb-2 leading-6">{{ Str::limit($course->title, 40, '...') }}
                        </h1>
                        <p class="text-gray-500 text-sm mb-2">Prof:{{ $course->teacher->name }}</p>
                        <div class="flex">
                            <ul class="flex text-sm text-yellow-400">
                                <li class="mr-1"><i
                                        class="fas fa-star text-{{ $course->rating >= 1 ? 'yellow' : 'gray' }}-400"></i>
                                </li>
                                <li class="mr-1"><i
                                        class="fas fa-star text-{{ $course->rating >= 2 ? 'yellow' : 'gray' }}-400"></i>
                                </li>
                                <li class="mr-1"><i
                                        class="fas fa-star text-{{ $course->rating >= 3 ? 'yellow' : 'gray' }}-400"></i>
                                </li>
                                <li class="mr-1"><i
                                        class="fas fa-star text-{{ $course->rating >= 4 ? 'yellow' : 'gray' }}-400"></i>
                                </li>
                                <li class="mr-1"><i
                                        class="fas fa-star text-{{ $course->rating == 5 ? 'yellow' : 'gray' }}-400"></i>
                                </li>
                            </ul>
                            <p class="text-sm text-gray-500 ml-auto">
                                <i class="fas fa-users"></i>
                                ({{ $course->students_count }})
                            </p>
                        </div>
                        <a href="{{ route('courses.show', $course) }}"
                            class="block mt-2 w-full bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded text-center">
                            Más información
                        </a>
                    </div>

                </article>
            @endforeach
        </div>
    </section>
</x-app-layout>
