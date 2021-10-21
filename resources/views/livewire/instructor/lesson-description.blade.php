<div>
    <article x-data='{open:false}' class="card">
        <div class="card-body bg-gray-100">
            <header>
                <h1 x-on:click="open=!open" class="cursor-pointer text-blue-500 hover:text-blue-400">Descripción de la
                    lección
                </h1>
            </header>
            <div x-show="open">
                <hr class="my-2">
                @if ($lesson->description)
                    <form wire:submit.prevent='update'>
                        <textarea wire:model='description.name' class="w-full rounded-md"></textarea>
                        @error('description.name')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                        <div class="flex justify-end">
                            <button wire:click='destroy' type="button" class="btn btn-danger text-sm">Eliminar</button>
                            <button type="submit" class="btn btn-primary text-sm ml-2">Actualizar</button>
                        </div>
                    </form>
                @else
                    <div>
                        <textarea wire:model='name' class="w-full rounded-md"
                            placeholder="Escriba la descripción de la lección."></textarea>
                        @error('name')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                        <div class="flex justify-end">
                            <button wire:click='store' class="btn btn-primary text-sm ml-2">Agregar</button>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </article>
</div>
