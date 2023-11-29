@extends('layouts.app')

@section('title', 'Editar Orden')

@section('content')
  <form method="POST" action="{{ route('orders.update', ['order' => $order->id]) }}">
    @csrf
    @method('PUT')
    <h1>Editar una Orden Existente</h1>

    <label for="client_id">ID del Cliente:</label>
    <input type="number" min="1" name="client_id" id="client_id" value="{{ $order->client_id }}">
    @error('client_id')
      <mark>{{ $message }}</mark>
    @enderror

    <label for="order_date">Fecha:</label>
    <input type="date" name="order_date" id="order_date" value="{{ $order->order_date }}">
    @error('order_date')
      <mark>{{ $message }}</mark>
    @enderror

    <label for="order_cost">Costo Total:</label>
    <input type="number" min="0" name="order_cost" id="order_cost" value="{{ $order->order_cost }}">
    @error('order_cost')
      <mark>{{ $message }}</mark>
    @enderror

    <label for="ordered_dishes">Platillos:</label>
    <input type="text" name="ordered_dishes" id="ordered_dishes" value="{{ $order->ordered_dishes }}">
    @error('ordered_dishes')
      <mark>{{ $message }}</mark>
    @enderror

    <button type="submit" class="contrast">Submit</button>
    <a href="{{ route('orders.show', $order->id) }}" class="secondary" role="button" style="width: 100%">Cancel</a>
  </form>
@endsection
