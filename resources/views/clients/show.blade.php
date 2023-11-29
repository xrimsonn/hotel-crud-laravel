@extends('layouts.app')

@section('title', 'Detalles del Cliente')

@section('content')
  <section>
    <hgroup>
      <h1>{{ $client['name'] }}</h1>
      <p>Desde {{ $client['check_in'] }} hasta {{ $client['check_out'] }}</p>
    </hgroup>
    <p>
      <strong>Número de personas: </strong>{{ $client['people_number'] }}
      <br />
      <strong>Tipo de habitación: </strong> {{ $client['room_type'] ? 'Premium' : 'Normal';}}
      <br />
      <strong>Costo total: </strong>${{ $client['cost'] }}
    </p>
    <hgroup>
      <h4>Voucher:</h4>
      <pre>{{ $client['voucher'] }}</pre>
    </hgroup>
  </section>
  <a href="{{ route('clients.edit', $client->id) }}" class="contrast" role="button" style="width: 49%">Editar</a>
  <a href="{{ route('clients.index') }}" class="secondary" role="button" style="width: 49%">Volver</a>
  <form action="{{ route('clients.destroy', $client->id) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="outline" style="margin-top:1rem; width: 99%;">Eliminar</button>
  </form>
@endsection
