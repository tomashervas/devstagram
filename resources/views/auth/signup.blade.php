@extends('layouts.app')

@section('title')
    Registro
@endsection

@section('content')
    <div class="container">
        <form action="{{ route('signup') }}" method="POST" novalidate class="md:w-1/2 mx-auto bg-gray-50 p-10 rounded-lg shadow">
            @csrf
            <div class="mb-5">
                <label for="name" class="mb-2 block text-gray-500">Nombre</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" class="w-full border p-2 rounded-lg @error('name') border-red-500 @enderror" >
                @error('name')<p class="text-red-500">{{ $message }}</p>@enderror
            </div>
            <div class="mb-5">
                <label for="username" class="mb-2 block text-gray-500">Usuario</label>
                <input type="text" name="username" id="username" value="{{ old('username') }}" class="w-full border p-2 rounded-lg @error('username') border-red-500 @enderror">
                @error('username')<p class="text-red-500">{{ $message }}</p>@enderror
            </div>
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
            <div class="mb-5">
                <label for="password_confirmation" class="mb-2 block text-gray-500">Confirmar Contraseña</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="w-full border p-2 rounded-lg">
            </div>
            <input type="submit" value="Registrar" class="bg-blue-500 text-white px-4 py-2 rounded-lg" />
        </form>
    </div>
@endSection