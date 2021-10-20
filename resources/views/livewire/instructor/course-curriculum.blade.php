<div class="text-gray-500 p-3">
    <x-slot name="course">
        {{ $course->slug }}
    </x-slot>
    <h1 class="uppercase text-2xl font-extrabold">Course Curriculum</h1>
    <hr class="mt-2 mb-6">
    @foreach ($course->sections as $item)
        <article class="card mb-6">
            <div class="card-body bg-gray-100">
                @if ($section->id == $item->id)
                    <form wire:submit.prevent="update">
                        <input wire:model='section.name' class="form-input"
                            placeholder="Ingrese el nombre de la sección" type="text">
                        @error('section.name')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </form>
                @else
                    <header class="flex justify-between items-center">
                        <h1 class="cursor-pointer"><strong>Section: </strong>{{ $item->name }}</h1>
                        <div>
                            <i class="fas fa-edit text-blue-500 hover:text-blue-400 cursor-pointer"
                                wire:click='edit({{ $item }})'></i>
                            <i wire:click='destroy({{ $item }})'
                                class="fas fa-eraser text-red-500 hover:text-red-400 cursor-pointer"></i>
                        </div>
                    </header>
                @endif
            </div>
        </article>
    @endforeach
    <div x-data='{open:false}'>
        <a x-show='!open' x-on:click='open=true' class="flex items-center cursor-pointer">
            <i class="far fa-plus-square text-2xl text-green-500 mr-2"></i>
            Agregar nueva sección
        </a>
        <article x-show='open' class="card">
            <div class="card-body bg-gray-100">
                <h1 class="text-xl font-bold mb-4">Agregar nueva sección</h1>
                <div class="mb-4">
                    <input wire:model='name' class="form-input w-full" placeholder="Escribe el nombre de la sección"
                        type="text">
                    @error('name')
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
