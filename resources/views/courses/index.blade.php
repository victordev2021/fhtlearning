<x-app-layout>
    {{-- Banner cursos --}}
    <section class="bg-cover" style="background-image: url({{ asset('img/courses/courses.jpg') }})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">Capacitación & Cursos.</h1>
                <p class="text-white text-lg mt-2 mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Consequuntur
                    blanditiis suscipit esse, eos
                    tempora quia odit aliquid ut fuga eaque, commodi dolorem iusto nostrum iure illo pariatur. Optio,
                    odio
                    sint?</p>

                <!-- component -->
                <!-- This is an example component -->
                @livewire('search')
            </div>
        </div>
    </section>
    @livewire('courses-index')
</x-app-layout>
