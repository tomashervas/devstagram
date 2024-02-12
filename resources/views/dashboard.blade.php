@extends('layouts.app')

@section('title')
    Perfil: {{$user->username}}
@endsection

@section('content')
    <div class="md:flex justify-center gap-10 md:w-3/5 xl:w-1/2 mx-auto p-4">
        <div class="w-40 md:w-56 mx-auto mb-10">
            <img  src="{{asset('img/user.svg')}}" alt="user profile image">
        </div>
        <div class="text-xl gap-4 flex flex-col justify-center items-center md:items-start">
            <p>{{$user->username}}</p>
            <p class="text-base text-gray-500">Segidores</p>
            <p class="text-base text-gray-500">Siguiendo</p>
            <p class="text-base text-gray-500">Posts</p>
        </div>
    </div>
    <div>
        @foreach ($posts as $post)
        <p>{{$post->title}}</p>
            <img src="{{asset('uploads/' . $post->image)}}" class="w-36" alt="image post">
            <p>{{$post->description}}</p>
        @endforeach
    </div>


@endSection