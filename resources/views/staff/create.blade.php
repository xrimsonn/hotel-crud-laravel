@extends('layouts.app')

@section('title', 'Registrar Personal')

@section('content')
  <form method="POST" action="{{ route('staff.store') }}">
    @csrf
    <h1>Insertar Nuevo Personal</h1>

    <label for="name">Nombre:</label>
    <input type="text" name="name" id="name" value="{{ old('name') }}">
    @error('name')
      <mark>{{ $message }}</mark>
    @enderror

    <label for="surname">Apellido:</label>
    <input type="text" name="surname" id="surname" value="{{ old('surname') }}">
    @error('surname')
      <mark>{{ $message }}</mark>
    @enderror

    <label for="position">Puesto:</label>
    <input type="text" name="position" id="position" value="{{ old('position') }}">
    @error('position')
      <mark>{{ $message }}</mark>
    @enderror

    <label for="address">Dirección:</label>
    <input type="text" name="address" id="address" value="{{ old('address') }}">
    @error('address')
      <mark>{{ $message }}</mark>
    @enderror

    <label for="phone">Número de Celular:</label>
    <input type="tel" name="phone" id="phone" value="{{ old('phone') }}">
    @error('phone')
      <mark>{{ $message }}</mark>
    @enderror

    <button type="submit" class="contrast">Submit</button>
    <a href="{{ route('staff.index') }}" class="secondary" role="button" style="width: 100%">Cancel</a>
  </form>
@endsection
