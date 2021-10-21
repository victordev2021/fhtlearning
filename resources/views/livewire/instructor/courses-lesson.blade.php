<div>
    @foreach ($section->lessons as $item)
        <article class="card mt-4">
            <div class="card-body">
                @if ($lesson->id == $item->id)
                    <form wire:submit.prevent='update'>
                        <div class="flex items-center">
                            <label class="w-32">Nombre: </label>
                            <input wire:model='lesson.name' class="form-input w-full" type="text">
                        </div>
                        @error('lesson.name')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                        <div class="flex items-center mt-4">
                            <label class="w-32">Plataforma: </label>
                            <select wire:model='lesson.platform_id'
                                class="mt-1 block w-1/2 py-2 px-3 border border-gray-300 bg-white rounded-full shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                @foreach ($platforms as $platform)
                                    <option value="{{ $platform->id }}">{{ $platform->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex items-center mt-4">
                            <label class="w-32">URL: </label>
                            <input wire:model='lesson.url' class="form-input w-full" type="text">
                        </div>
                        @error('lesson.url')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                        <div class="flex mt-4 justify-end">
                            <button type="button" wire:click='cancel' class="btn btn-danger">Cancelar</button>
                            <button type="submit" class="btn btn-primary ml-2">Actualizar</button>
                        </div>
                    </form>
                @else
                    <header>
                        <h1><i class="far fa-play-circle mr-1 text-blue-500"></i> Lección: {{ $item->name }}</h1>
                    </header>
                    <div>
                        <hr class="my-2">
                        <p class="text-sm">Plataforma:{{ $item->platform->name }}</p>
                        <p class="text-sm">Enlace: <a href="{{ $item->url }}" target="_blank"
                                class="text-blue-500 hover:text-blue-400">{{ $item->url }}</a></p>
                        <div class="my-2">
                            <button wire:click='edit({{ $item }})'
                                class="btn btn-primary text-sm">Editar</button>
                            <button wire:click='destroy({{ $item }})'
                                class="btn btn-danger text-sm">Eliminar</button>
                        </div>
                        <div>
                            @livewire('instructor.lesson-description', ['lesson' => $item], key($item->id))
                        </div>
                    </div>
                @endif
            </div>
        </article>
    @endforeach
    <div class="mt-4" x-data='{open:false}'>
        <a x-show='!open' x-on:click='open=true' class="flex items-center cursor-pointer">
            <i class="far fa-plus-square text-2xl text-green-500 mr-2"></i>
            Agregar nueva lección
        </a>
        <article x-show='open' class="card">
            <div class="card-body">
                <h1 class="text-xl font-bold mb-4">Agregar nueva lección</h1>
                <div class="mb-4">
                    <div class="flex items-center">
                        <label class="w-32">Nombre: </label>
                        <input wire:model='name' class="form-input w-full" type="text">
                    </div>
                    @error('name')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                    <div class="flex items-center mt-4">
                        <label class="w-32">Plataforma: </label>
                        <select wire:model='platform_id'
                            class="mt-1 block w-1/2 py-2 px-3 border border-gray-300 bg-white rounded-full shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            @foreach ($platforms as $platform)
                                <option value="{{ $platform->id }}">{{ $platform->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{ $platform_id }}
                    @error('platform_id')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                    <div class="flex items-center mt-4">
                        <label class="w-32">URL: </label>
                        <input wire:model='url' class="form-input w-full" type="text">
                    </div>
                    @error('url')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex justify-end">
                    <button x-on:click='open=false' class="btn btn-danger">Cancelar</button>
                    <button wire:click='store' class="btn btn-primary ml-3">Aceptar</button>
                </div>
            </div>
        </article>
    </div>
</div>
