@extends('layouts.app')

@section('title', 'Clientes')

@section('content')
  <hgroup>
    <h1>Lista de Clientes</h1>
    <p>Todos los clientes del hotel listados</p>
  </hgroup>
  @if (count($clients) > 0)

    @foreach ($clients as $c)
      <hgroup>
        <h3>
          <a href="{{ route('clients.show', ['client' => $c['id']]) }}">
            {{ $c['name'] }}
          </a>
        </h3>
        <p>Registrado: {{ $c['check_in'] }}</p>
      </hgroup>
    @endforeach
  @else
    <hgroup>
      <h3>Error :(</h3>
      <p>Aún no hay clientes registrados.</p>
    </hgroup>
  @endif
  <a href="{{ route('clients.create') }}" class="contrast" role="button" style="width: 100%">Agregar </a>
@endsection
