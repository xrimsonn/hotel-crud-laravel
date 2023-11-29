@extends('layouts.app')

@section('title', 'Editar Personal')

@section('content')
  <form method="POST" action="{{ route('staff.update', ['staff' => $staff->id]) }}">
    @csrf
    @method('PUT')
    <h1>Editar un Personal Existente</h1>

    <label for="name">Nombre:</label>
    <input type="text" name="name" id="name" value="{{ $staff->name }}">
    @error('name')
      <mark>{{ $message }}</mark>
    @enderror

    <label for="surname">Apellido:</label>
    <input type="text" name="surname" id="surname" value="{{ $staff->surname }}">
    @error('surname')
      <mark>{{ $message }}</mark>
    @enderror

    <label for="position">Puesto:</label>
    <input type="text" name="position" id="position" value="{{ $staff->position }}">
    @error('position')
      <mark>{{ $message }}</mark>
    @enderror

    <label for="address">Dirección:</label>
    <input type="text" name="address" id="address" value="{{ $staff->address }}">
    @error('address')
      <mark>{{ $message }}</mark>
    @enderror

    <label for="phone">Número de Celular:</label>
    <input type="tel" name="phone" id="phone" value="{{ $staff->phone }}">
    @error('phone')
      <mark>{{ $message }}</mark>
    @enderror

    <button type="submit" class="contrast">Submit</button>
    <a href="{{ route('staff.show', $staff->id) }}" class="secondary" role="button" style="width: 100%">Cancel</a>
  </form>
@endsection
