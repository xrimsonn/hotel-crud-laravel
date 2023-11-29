@extends('layouts.app')

@section('title', 'Detalles del Personal')

@section('content')
  <section>
    <hgroup>
      <h1>{{ $staff['name'] }} {{ $staff['surname'] }}</h1>
      <p>{{ $staff['position'] }}</p>
    </hgroup>
    <p>
      <strong>Dirección: </strong>{{ $staff['address'] }}
      <br />
      <strong>Número de celular: </strong> {{ $staff['phone'] }}</p>
  </section>
  <a href="{{ route('staff.edit', $staff->id) }}" class="contrast" role="button" style="width: 49%">Editar</a>
  <a href="{{ route('staff.index') }}" class="secondary" role="button" style="width: 49%">Volver</a>
  <form action="{{ route('staff.destroy', $staff->id) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="outline" style="margin-top:1rem; width: 99%;">Eliminar</button>
  </form>
@endsection
