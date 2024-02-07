@extends('layouts.app')

@section('title')
    Tu cuenta
@endsection

@section('content')
    <div class="md:flex justify-center gap-10 md:w-3/5 xl:w-1/2 mx-auto p-4">
        <div class="w-40 md:w-56 mx-auto">
            <img  src="{{asset('img/user.svg')}}" alt="user profile image">
        </div>
        <div class="text-xl">
            {{auth()->user()->name}}
        </div>
    </div>


@endSection