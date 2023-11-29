@extends('layouts.app')

@section('title', 'Detalles de la Orden')

@section('content')
  <section>
    <hgroup>
      <h1>{{ $order->client->name }} - #{{ $order['id'] }}</h1>
      <p>${{ $order['order_cost'] }}</p>
    </hgroup>
    <p>
      <strong>Platillos: </strong>{{ $order['ordered_dishes'] }}
      <br />
      <strong>Día de la orden: </strong> {{ $order['order_date'] }}</p>
  </section>
  <a href="{{ route('orders.edit', $order->id) }}" class="contrast" role="button" style="width: 49%">Editar</a>
  <a href="{{ route('orders.index') }}" class="secondary" role="button" style="width: 49%">Volver</a>
  <form action="{{ route('orders.destroy', $order->id) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="outline" style="margin-top:1rem; width: 99%;">Eliminar</button>
  </form>
@endsection
