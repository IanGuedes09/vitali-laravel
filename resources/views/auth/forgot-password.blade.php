@extends('layouts.vitali')

@section('title', 'Recuperar Senha - Studio Vitali')

@section('content')
    <h2 class="text-2xl font-semibold mb-6 text-center text-gray-700">Recuperar Senha</h2>

    @if (session('status'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
            {{ session('status') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
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

        <button
            type="submit"
            class="w-full bg-blue-600 text-white py-2 rounded font-semibold hover:bg-blue-700 transition"
        >
            Enviar link para recuperação
        </button>
    </form>

    <p class="mt-6 text-center text-gray-600">
        Lembrou a senha?
        <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Entrar</a>
    </p>
@endsection
