@extends('layouts.app')

@section('title', 'Registrar Orden')

@section('content')
  <form method="POST" action="{{ route('orders.store') }}">
    @csrf
    <h1>Insertar Nuevo Personal</h1>

    <label for="client_id">ID del Cliente:</label>
    <input type="number" min="1" name="client_id" id="client_id" value="{{ old('client_id') }}">
    @error('client_id')
      <mark>{{ $message }}</mark>
    @enderror

    <label for="order_date">Fecha:</label>
    <input type="date" name="order_date" id="order_date" value="{{ old('order_date') }}">
    @error('order_date')
      <mark>{{ $message }}</mark>
    @enderror

    <label for="order_cost">Costo Total:</label>
    <input type="number" min="0" name="order_cost" id="order_cost" value="{{ old('order_cost') }}">
    @error('order_cost')
      <mark>{{ $message }}</mark>
    @enderror

    <label for="ordered_dishes">Platillos:</label>
    <input type="text" name="ordered_dishes" id="ordered_dishes" value="{{ old('ordered_dishes') }}">
    @error('ordered_dishes')
      <mark>{{ $message }}</mark>
    @enderror

    <button type="submit" class="contrast">Submit</button>
    <a href="{{ route('orders.index') }}" class="secondary" role="button" style="width: 100%">Cancel</a>
  </form>
@endsection
