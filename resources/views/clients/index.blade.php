@extends('layouts.app')

@section('title', 'Clientes')

@section('content')
  <hgroup>
    <h1>Lista de Clientes</h1>
    <p>Ordenados por ID</p>
  </hgroup>
  @if (count($clients) > 0)

    @foreach ($clients as $client)
      <hgroup>
        <h3>
          <a href="{{ route('clients.show', ['client' => $client['id']]) }}">
            {{ $client['name'] }}
          </a>
        </h3>
        <p>{{ $client['check_in'] }} hasta el {{ $client['check_out'] }}</p>
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
