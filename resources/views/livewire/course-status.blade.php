<div class="mt-8">
    <div class="container grid grid-cols-1 lg:grid-cols-3 gap-8">
        {{-- video --}}
        <div class="col-span-2">
            <div class="embed-responsive">
                {!! $current->iframe !!}
            </div>
            <h1 class="text-3xl font-bold text-gray-700">{{ $current->name }}</h1>
            @if ($current->description)
                <div class="text-gray-600">{{ $current->description->name }}</div>
            @endif
            <div class="flex items-center mt-4 cursor-pointer">
                <i class="fas fa-toggle-off text-2xl text-gray-600"></i>
                <p class="text-sm ml-2">Marcar esta unidad como marcada</p>
            </div>
            <div class="card mt-2">
                <div class="flex card-body text-gray-500 font-bold">
                    @if ($this->previous)
                        <a wire:click='changeLesson({{ $this->previous }})' class="cursor-pointer">Tema anterior</a>
                    @endif
                    @if ($this->next)
                        <a wire:click='changeLesson({{ $this->next }})' class="cursor-pointer ml-auto">Tema
                            siguiente</a>
                    @endif
                </div>
            </div>
            {{-- <p>Indice: {{ $this->index }}</p>
            <p>Previous: @if ($this->previous)
                    {{ $this->previous->id }}
                @endif
            </p>
            <p>Next: @if ($this->next)
                    {{ $this->next->id }}
                @endif
            </p> --}}
        </div>
        {{-- courses list --}}
        <div class="card">
            <div class="card-body">
                <h1 class="text-2xl leading-8 text-center mb-4">{{ $course->title }}</h1>
                <div class="flex items-center">
                    <figure>
                        <img class="w-12 h-12 rounded-full shadow-lg" src="{{ $course->teacher->profile_photo_url }}"
                            alt="" srcset="">
                    </figure>
                    <div class="ml-2">{{ $course->teacher->name }} <a
                            class="text-blue-500 text-sm hover:text-blue-400"
                            href="">{{ '@' . Str::slug($course->teacher->name, '') }}</a>
                    </div>
                </div>
                <p class="text-gray-600 text-sm mt-2">20% Completado</p>
                {{-- progresbar --}}
                <div class="relative pt-1">
                    <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-blue-200">
                        <div style="width:30%"
                            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-500">
                        </div>
                    </div>
                </div>
                <ul>
                    @foreach ($course->sections as $section)
                        <li class="text-gray-600 mb-4">
                            <a class="font-bold text-base inline-block mb-2" href="">{{ $section->name }}</a>
                            <ul>
                                @foreach ($section->lessons as $lesson)
                                    <li class="flex">
                                        <div class="">
                                            @if ($lesson->completed)
                                                @if ($current->id == $lesson->id)
                                                    <span
                                                        class="inline-block w-4 h-4 border-2 border-green-500 rounded-full mr-2 mt-1"></span>
                                                @else
                                                    <span
                                                        class="inline-block w-4 h-4 bg-green-500 rounded-full mr-2 mt-1"></span>
                                                @endif
                                            @else
                                                @if ($current->id == $lesson->id)

                                                    <span
                                                        class="inline-block w-4 h-4 border-2 border-gray-300 rounded-full mr-2 mt-1"></span>
                                                @else

                                                    <span
                                                        class="inline-block w-4 h-4 bg-gray-300 rounded-full mr-2 mt-1"></span>
                                                @endif
                                            @endif
                                        </div>
                                        <a class="cursor-pointer"
                                            wire:click="changeLesson({{ $lesson }})">{{ $lesson->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
