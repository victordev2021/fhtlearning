<div>
    {{-- Navigate --}}
    <div class="bg-gray-200 py-4 mb-14">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex">
            <button class="bg-white shadow h-12 px-4 rounded-lg text-gray-700 mr-2"><i
                    class="fab fa-buffer mr-2"></i>Todos los
                cursos
            </button>
            <!-- Categorías This example requires Tailwind CSS v2.0+ -->
            <div class="relative" x-data="{open:false}">
                <div>
                    <button type="button" class="bg-white shadow h-12 px-4 rounded-lg text-gray-700 mr-2"
                        id="menu-button" aria-expanded="true" aria-haspopup="true" x-on:click="open=!open">
                        <i class="fas fa-tag mr-2"></i>
                        Categorías
                        <!-- Heroicon name: solid/chevron-down -->
                        <i class="fas fa-caret-down ml-2"></i>
                    </button>
                </div>
                <div class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                    role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1" x-show=open
                    x-on:click.away="open=false">
                    <div class="py-1" role="none">
                        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                            id="menu-item-0">Account settings</a>
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                            id="menu-item-1">Support</a>
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                            id="menu-item-2">License</a>
                        <form method="POST" action="#" role="none">
                            <button type="submit" class="text-gray-700 block w-full text-left px-4 py-2 text-sm"
                                role="menuitem" tabindex="-1" id="menu-item-3">
                                Sign out
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Niveles This example requires Tailwind CSS v2.0+ -->
            <div class="relative" x-data="{open:false}">
                <div>
                    <button type="button" class="bg-white shadow h-12 px-4 rounded-lg text-gray-700 mr-2"
                        id="menu-button" aria-expanded="true" aria-haspopup="true" x-on:click="open=!open">
                        <i class="fas fa-tag mr-2"></i>
                        Niveles
                        <!-- Heroicon name: solid/chevron-down -->
                        <i class="fas fa-caret-down ml-2"></i>
                    </button>
                </div>
                <div class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                    role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1" x-show=open
                    x-on:click.away="open=false">
                    <div class="py-1" role="none">
                        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                            id="menu-item-0">Account settings</a>
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                            id="menu-item-1">Support</a>
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                            id="menu-item-2">License</a>
                        <form method="POST" action="#" role="none">
                            <button type="submit" class="text-gray-700 block w-full text-left px-4 py-2 text-sm"
                                role="menuitem" tabindex="-1" id="menu-item-3">
                                Sign out
                            </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    {{-- cursos fill --}}
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
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-8 mb-8">
        {{ $courses->links() }}
    </div>
</div>
