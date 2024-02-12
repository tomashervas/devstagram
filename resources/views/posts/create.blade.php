@extends('layouts.app')

@section('title')
    Crear nueva publicación
@endsection

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush
@section('content')
    <div class="md:flex justify-center gap-10 mx-auto p-4">
        <div class="md:w-1/2 mb-10 md:mb-0">
            <form id="dropzone" action="{{ route('images.store') }}" enctype="multipart/form-data" class="dropzone border-dashed border-2 w-full h-full min-h-72 rounded-2xl flex flex-col justify-center items-center">
                @csrf
            </form>
        </div>
        <div class="md:w-1/2">
            <form action="{{ route('posts.store') }}" method="POST" novalidate class="bg-gray-50 p-10 rounded-lg shadow">
                @csrf
                @if(session('message'))
                    <p class="text-red-500">{{ session('message ') }}</p>
                @endif
                <div class="mb-5">
                    <label for="title" class="mb-2 block text-gray-500">Título</label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}" class="w-full border p-2 rounded-lg @error('email') border-red-500 @enderror">
                    @error('title')<p class="text-red-500">{{ $message }}</p>@enderror
                </div>
                <div class="mb-5">
                    <label for="description" class="mb-2 block text-gray-500">Descripción</label>
                    <textarea name="description" id="description" class="w-full border p-2 rounded-lg @error('email') border-red-500 @enderror">{{ old('description') }}</textarea>
                    @error('description')<p class="text-red-500">{{ $message }}</p>@enderror
                </div>
                <div class="mb-5">
                    <input name="image" type="hidden" value="{{ old('image') }}"/>
                    @error('image')<p class="text-red-500">{{ $message }}</p>@enderror
                </div>
                <input type="submit" value="Publicar" class="bg-blue-500 text-white px-4 py-2 rounded-lg" />
            </form>
        </div>
    </div>


@endSection