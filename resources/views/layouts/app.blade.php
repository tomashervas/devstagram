<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Devstagram @yield('title')</title>
        @vite('resources/css/app.css')
    </head>

    <body class="bg-gray-100">
        <header class="p-5 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-3xl font-black"><a href="/">Devstagram</a></h1>
                <nav class="flex gap-4 items-center">
                    @auth
                        <a class="text-gray-600" href="/login">Hola, {{ auth()->user()->username }}</a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="text-gray-600">Cerrar sesión</button>
                        </form>
                    @endauth
                    @guest
                        <a class="text-gray-600" href="/login">Login</a>
                        <a class="text-gray-600" href="{{ route('signup') }}">Registro</a>
                    @endguest
                </nav>
            </div>
        </header>
        <main class="container mx-auto mt-10">
            <h2 class="font-semibold text-center text-2xl mb-10">@yield('title')</h2>
            @yield('content')
        </main>

        <footer class="text-center p-5 text-gray-500">
            Devstagram &copy; {{ date('Y') }}
        </footer>

    </body>
</html>
  