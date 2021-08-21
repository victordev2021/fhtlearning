<div>
    {{-- Navigate --}}
    <div class="bg-gray-200 py-4 mb-14">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex">
            <button wire:click="resetFilters" class="bg-white shadow h-12 px-4 rounded-lg text-gray-700 mr-2"><i
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
                        @foreach ($categories as $category)
                            <a wire:click="$set('category_id',{{ $category->id }})" x-on:click="open=false"
                                class="cursor-pointer text-gray-700 block px-4 py-2 text-sm hover:bg-purple-500 hover:text-white rounded"
                                role="menuitem" tabindex="-1" id="menu-item-1">{{ $category->name }}</a>
                        @endforeach
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
                        @foreach ($levels as $level)
                            <a wire:click="$set('level_id',{{ $level->id }})" x-on:click="open=false"
                                class="cur text-gray-700 block px-4 py-2 text-sm hover:bg-purple-500 hover:text-white rounded"
                                role="menuitem" tabindex="-1" id="menu-item-1">{{ $level->name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div
        class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
        @foreach ($courses as $course)
            <x-course-card :course="$course"></x-course-card>
        @endforeach
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-8 mb-8">
        {{ $courses->links() }}
    </div>
</div>
