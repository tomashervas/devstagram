@extends('layouts.app')

@section('title')
    Inicia sesión
@endsection

@section('content')
    <div class="container">
        <form action="{{ route('login') }}" method="POST" novalidate class="md:w-1/2 mx-auto bg-gray-50 p-10 rounded-lg shadow">
            @csrf
            @if(session('message'))
                <p class="text-red-500">{{ session('message') }}</p>
            @endif
            <div class="mb-5">
                <label for="email" class="mb-2 block text-gray-500">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" class="w-full border p-2 rounded-lg @error('email') border-red-500 @enderror">
                @error('email')<p class="text-red-500">{{ $message }}</p>@enderror
            </div>
            <div class="mb-5">
                <label for="password" class="mb-2 block text-gray-500">Contraseña</label>
                <input type="password" name="password" id="password" class="w-full border p-2 rounded-lg @error('password') border-red-500 @enderror">
                @error('password')<p class="text-red-500">{{ $message }}</p>@enderror
            </div>
            <div>
                <input type="checkbox" name="remember" id="remember" class="mb-5">
                <label for="remember" class="m-2 text-gray-500 text-sm">Recuérdame</label>
            </div>
            <input type="submit" value="Iniciar sesion" class="bg-blue-500 text-white px-4 py-2 rounded-lg" />
        </form>
    </div>
@endSection