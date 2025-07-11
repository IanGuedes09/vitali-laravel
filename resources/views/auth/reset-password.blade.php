@extends('layouts.vitali')

@section('title', 'Redefinir Senha - Studio Vitali')

@section('content')
    <h2 class="text-2xl font-semibold mb-6 text-center text-gray-700">Redefinir Senha</h2>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div class="mb-4">
            <label for="email" class="block text-gray-700 mb-2 font-medium">E-mail</label>
            <input
                id="email"
                name="email"
                type="email"
                value="{{ old('email', $request->email) }}"
                required
                autofocus
                class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
        </div>

        <div class="mb-4">
            <label for="password" class="block text-gray-700 mb-2 font-medium">Nova Senha</label>
            <input
                id="password"
                name="password"
                type="password"
                required
                class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
        </div>

        <div class="mb-6">
            <label for="password_confirmation" class="block text-gray-700 mb-2 font-medium">Confirmar Nova Senha</label>
            <input
                id="password_confirmation"
                name="password_confirmation"
                type="password"
                required
                class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
        </div>

        <button
            type="submit"
            class="w-full bg-blue-600 text-white py-2 rounded font-semibold hover:bg-blue-700 transition"
        >
            Redefinir Senha
        </button>
    </form>
@endsection
