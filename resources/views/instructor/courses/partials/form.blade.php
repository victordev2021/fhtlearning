<div class="mb-4">
    {!! Form::label('title', 'Título del curso') !!}
    {!! Form::text('title', null, ['class' => 'form-input block w-full mt-1']) !!}
</div>
<div class="mb-4">
    {!! Form::label('slug', 'Slug del curso') !!}
    {!! Form::text('slug', null, ['class' => 'form-input block w-full mt-1']) !!}
</div>
<div class="mb-4">
    {!! Form::label('subtitle', 'Subtítulo del curso') !!}
    {!! Form::text('subtitle', null, ['class' => 'form-input block w-full mt-1']) !!}
</div>
<div class="mb-4">
    {!! Form::label('description', 'Descripción del curso') !!}
    {!! Form::textarea('description', null, ['class' => 'form-input block w-full mt-1']) !!}
</div>
{{-- select controls --}}
<div class="grid grid-cols-3 gap-4">
    <div>
        {!! Form::label('category_id', 'Categoría') !!}
        {!! Form::select('category_id', $categories, null, ['class' => 'form-input']) !!}
    </div>
    <div>
        {!! Form::label('level_id', 'Niveles') !!}
        {!! Form::select('level_id', $levels, null, ['class' => 'form-input']) !!}
    </div>
    <div>
        {!! Form::label('price_id', 'Precios') !!}
        {!! Form::select('price_id', $prices, null, ['class' => 'form-input']) !!}
    </div>
</div>
<h1 class="uppercase text-2xl font-bold mt-8 mb-2">Imagen del curso</h1>
<div class="grid grid-cols-2 gap-4">
    <figure>
        @isset($course)
            <img id="picture" src="{{ Storage::url($course->image->url) }}" class="w-full h-64 bg-cover bg-center" alt="">
        @else
            <img id="picture" src="{{ asset('img/icono-galeria.jpg') }}" class="w-full h-64 object-cover object-center"
                alt="">
        @endisset
    </figure>
    <div>
        <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates,
            consequatur? Quod
            voluptas sit soluta quo temporibus quasi veniam corporis nobis.</p>
        {!! Form::file('file', ['class' => 'form-input', 'style' => 'border-radius:0', 'id' => 'file']) !!}
    </div>
</div>
