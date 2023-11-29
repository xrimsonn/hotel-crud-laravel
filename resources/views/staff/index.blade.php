@extends('layouts.app')

@section('title', 'Personal')

@section('content')
  <hgroup>
    <h1>Lista de Personal</h1>
    <p>Todos los trabajadores del hotel listados</p>
  </hgroup>
  @if (count($staff) > 0)

    @foreach ($staff as $s)
      <hgroup>
        <h3>
          <a href="{{ route('staff.show', ['staff' => $s['id']]) }}">
            {{ $s['name'] }} {{ $s['surname'] }}
          </a>
        </h3>
        <p>{{ $s['position'] }}</p>
      </hgroup>
    @endforeach
  @else
    <hgroup>
      <h3>Error :(</h3>
      <p>Aún no hay personal registrado.</p>
    </hgroup>
  @endif
  <a href="{{ route('staff.create') }}" class="contrast" role="button" style="width: 100%">Agregar </a>
@endsection
