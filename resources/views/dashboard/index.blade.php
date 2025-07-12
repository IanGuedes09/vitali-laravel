@extends('layouts.vitali-dashboard')

@section('title', 'Dashboard - Studio Vitali')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Bem-vindo ao Dashboard</h1>

    <p>Você está logado como <strong>{{ auth()->user()->name }}</strong> (Perfil: <strong>{{ auth()->user()->perfil }}</strong>)</p>

    <p>Aqui você pode colocar links para seus módulos, relatórios, etc.</p>

    <a href="{{ route('vitali.index') }}" class="text-blue-600 hover:underline font-semibold">
        Ir para módulo Vitali
    </a>
@endsection
