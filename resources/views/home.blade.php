@extends('layouts/main_layout')
@section('content')

<p class="display-1 text-center">Hellow world</p>

{{-- Instrução If simples --}}
@if($phone == 100)
<h1>Primeira parte do código</h1>
@endif

{{-- Instrução IF ELSE --}}
@if($phone != 100)
    <h1>Primeria parte do código</h1>
@else
    <h1>Segunda parte do código</h1>
@endif

@endsection

{{-- instrução IF ELSEIF--}}
@if($phone < 10)
    <p>Primeiro</p>
@elseif($phone == 100)
    <p>Nota 100</p>
@else
    <p>Segundo</p>
@endif
