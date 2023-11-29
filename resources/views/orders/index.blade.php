@extends('layouts.app')

@section('title', 'Ordenes')

@section('content')
  <hgroup>
    <h1>Lista de Ordenes</h1>
    <p>Todas las ordenes realizadas al restaurante del hotel</p>
  </hgroup>
  @if (count($orders) > 0)

    @foreach ($orders as $o)
      <hgroup>
        <h3>
          <a href="{{ route('orders.show', ['order' => $o['id']]) }}">
            {{ $o->client->name }} - Orden #{{ $o['id'] }}
          </a>
        </h3>
        <p>${{ $o['order_cost'] }}</p>
      </hgroup>
    @endforeach
  @else
    <hgroup>
      <h3>Error :(</h3>
      <p>Aún no hay ordenes registradas.</p>
    </hgroup>
  @endif
  <a href="{{ route('orders.create') }}" class="contrast" role="button" style="width: 100%">Agregar </a>
@endsection
