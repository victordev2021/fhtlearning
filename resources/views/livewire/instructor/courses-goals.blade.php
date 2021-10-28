<article>
    <h1 class="uppercase text-2xl font-bold">metas del curso</h1>
    <hr class="mt-2 mb-6">
    @foreach ($course->goals as $item)
        <article class="card mb-4">
            <div class="card-body bg-gray-100">
                @if ($goal->id == $item->id)
                    <form wire:submit.prevent='update'>
                        <input wire:model='goal.name' class="form-input w-full" type="text">
                        @error('goal.name')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </form>
                @else
                    <header class="flex justify-between">
                        <h1>{{ $item->name }}</h1>
                        <div class="">
                            <i wire:click='edit({{ $item }})'
                                class="fas fa-edit text-blue-500 hover:text-blue-400 cursor-pointer"></i>
                            <i wire:click='destroy({{ $item }})'
                                class="fas fa-trash text-red-500 hover:text-red-400 cursor-pointer ml-2"></i>
                        </div>
                    </header>
                @endif
            </div>
        </article>
    @endforeach
    <article class="card">
        <div class="card-body bg-gray-100">
            <form wire:submit.prevent='store'>
                <input wire:model='name' class="form-input" type="text" placeholder="Agregar nombre de la meta.">
                @error('name')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
                <div class="flex justify-end mt-2">
                    <button class="btn btn-primary" type="submit">Agregar meta</button>
                </div>
            </form>
        </div>
    </article>
</article>
