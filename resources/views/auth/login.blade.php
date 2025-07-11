@extends('layouts.vitali')

@section('title', 'Login - Studio Vitali')

@section('content')
    <h2 class="text-2xl font-semibold mb-6 text-center text-gray-700">Acesse sua conta</h2>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('login.submit') }}">
        @csrf

        <div class="mb-4">
            <label for="email" class="block text-gray-700 mb-2 font-medium">E-mail</label>
            <input
                id="email"
                name="email"
                type="email"
                value="{{ old('email') }}"
                required
                autofocus
                class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
        </div>

        <div class="mb-4">
            <label for="password" class="block text-gray-700 mb-2 font-medium">Senha</label>
            <input
                id="password"
                name="password"
                type="password"
                required
                class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
        </div>

        <div class="mb-6 flex items-center">
            <input id="remember" type="checkbox" name="remember" class="mr-2">
            <label for="remember" class="text-gray-700 select-none">Lembrar-me</label>
        </div>

        <button
            type="submit"
            class="w-full bg-blue-600 text-white py-2 rounded font-semibold hover:bg-blue-700 transition"
        >
            Entrar
        </button>
    </form>
@endsection
