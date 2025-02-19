@extends('layouts/main_layout')
@section('content')

  {{-- Sessão --}}
  @session('name')
  <h3>A sessão tem o valor {{session('name')}}</h3>
@endsession
@endsection
