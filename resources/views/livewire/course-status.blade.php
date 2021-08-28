<div class="mt-8">
    <div class="container grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="col-span-2">
            {!! $current->iframe !!}
            {{ $current->iframe }}
        </div>
        <div class="card">
            <div class="card-body">
                <h1>{{ $course->title }}</h1>
                <div class="flex items-center">
                    <figure>
                        <img class="rounded-full shadow-lg" src="{{ $course->teacher->profile_photo_url }}" alt=""
                            srcset="">
                    </figure>
                    <div class="ml-2">{{ $course->teacher->name }} <a class="text-blue-500 hover:text-blue-400"
                            href="">{{ '@' . Str::slug($course->teacher->name, '') }}</a>
                    </div>
                </div>
                <ul>
                    @foreach ($course->sections as $section)
                        <li>
                            <a class="font-bold" href="">{{ $section->name }}</a>
                            <ul>
                                @foreach ($section->lessons as $lesson)
                                    <li><a href="">{{ $lesson->id }} @if ($lesson->completed)
                                                (Completado)
                                            @endif</a></li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
