@extends('layouts.app')

@section('title', 'Editar Cliente')

@section('content')
  <form method="POST" action="{{ route('clients.update', ['client' => $client->id]) }}">
    @csrf
    @method('PUT')
    <h1>Editar un Cliente Existente</h1>

    <label for="name">Client name:</label>
    <input type="text" name="name" id="name" value="{{ $client->name }}">
    @error('name')
      <mark>{{ $message }}</mark>
    @enderror

    <label for="people_number">Number of people:</label>
    <input type="number" name="people_number" id="people_number" value="{{ $client->people_number }}">
    @error('people_number')
      <mark>{{ $message }}</mark>
    @enderror

    <label for="check_in">Fecha de ingreso:</label>
    <input type="date" name="check_in" id="check_in" value="{{ $client->check_in }}">
    @error('check_in')
      <mark>{{ $message }}</mark>
    @enderror

    <label for="check_out">Fecha de salida:</label>
    <input type="date" name="check_out" id="check_out" value="{{ $client->check_out }}">
    @error('check_out')
      <mark>{{ $message }}</mark>
    @enderror

    <label for="room_type">Tipo de habitación:</label>
    <select name="room_type" id="room_type">
      <option value="0" @if ($client->room_type == 0) selected @endif>Normal</option>
      <option value="1" @if ($client->room_type == 1) selected @endif>Premium</option>
    </select>
    @error('room_type')
      <mark>{{ $message }}</mark>
    @enderror

    <label for="cost">Costo total:</label>
    <input type="number" name="cost" id="cost" value="{{ $client->cost }}">
    @error('cost')
      <mark>{{ $message }}</mark>
    @enderror

    <label for="voucher">Voucher:</label>
    <input type="text" name="voucher" id="voucher" value="{{ $client->voucher }}">
    @error('voucher')
      <mark>{{ $message }}</mark>
    @enderror

    <button type="submit" class="contrast">Submit</button>
    <a href="{{ route('clients.show', $client->id) }}" class="secondary" role="button" style="width: 100%">Cancel</a>
  </form>
@endsection
