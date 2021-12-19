<section class="mt-4">
    <h1 class="text-3xl text-gray-800 mb-2">Valoración</h1>
    @can('enrolled', $course)
        <article class="my-3">
            @can('valued', $course)
                <textarea wire:model="comment" class="form-input w-full" style="border-radius: 10px;" rows="5"
                    placeholder="Ingrese una reseña del curso"></textarea>
                <div class="flex items-center mt-4">
                    <button wire:click='store' class="btn btn-primary mr-4">Votar</button>
                    <ul class="flex text-yellow-400">
                        <li class="mr-1 cursor-pointer" wire:click='$set("rating",1)'><i
                                class="fas fa-star text-{{ $rating >= 1 ? 'yellow' : 'gray' }}-400"></i>
                        </li>
                        <li class="mr-1 cursor-pointer" wire:click='$set("rating",2)'><i
                                class="fas fa-star text-{{ $rating >= 2 ? 'yellow' : 'gray' }}-400"></i>
                        </li>
                        <li class="mr-1 cursor-pointer" wire:click='$set("rating",3)'><i
                                class="fas fa-star text-{{ $rating >= 3 ? 'yellow' : 'gray' }}-400"></i>
                        </li>
                        <li class="mr-1 cursor-pointer" wire:click='$set("rating",4)'><i
                                class="fas fa-star text-{{ $rating >= 4 ? 'yellow' : 'gray' }}-400"></i>
                        </li>
                        <li class="mr-1 cursor-pointer" wire:click='$set("rating",5)'><i
                                class="fas fa-star text-{{ $rating == 5 ? 'yellow' : 'gray' }}-400"></i>
                        </li>
                    </ul>
                </div>
            @else
                <div class="lg:col-span-3" x-data="{open:true}" x-show="open">
                    <div class="relative py-3 pl-4 pr-10 leading-normal text-red-700 bg-red-100 rounded-lg" role="alert">
                        <strong>Usted ya valoró este curso!!!</strong>
                        <p>{{ session('info') }}</p>
                        <span class="absolute inset-y-0 right-0 flex items-center mr-4">
                            <svg x-on:click="open=false" class="w-4 h-4 fill-current" role="button" viewBox="0 0 20 20">
                                <path
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd" fill-rule="evenodd"></path>
                            </svg>
                        </span>
                    </div>
                </div>
            @endcan
        </article>
    @endcan
    <div class="card">
        <div class="card-body">
            <p class="text-gray-800 text-xl">{{ $course->reviews->count() }} valoraciones</p>
            @foreach ($course->reviews as $review)
                <article class="flex mb-4 text-gray-800">
                    <figure>
                        <img class="h-12 w-12 object-cover rounded-full shadow-lg"
                            src="{{ $review->user->profile_photo_url }}" alt="">
                    </figure>
                    <div class="card flex-1">
                        <div class="card-body bg-gray-100">
                            <p><b class="text-gray-500">{{ $review->user->name }}</b> <i
                                    class="fas fa-star text-yellow-300"></i> ({{ $review->rating }})</p>
                            {{ $review->comment }}
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
