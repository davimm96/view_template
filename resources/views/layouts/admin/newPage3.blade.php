@extends('layouts/main_layout')
@section('content')

<p class="display-1 text-center">{{$name}}</p>
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


{{-- instrução IF ELSEIF--}}
@if($phone < 10)
    <p>Primeiro</p>
@elseif($phone == 100)
    <p>Nota 100</p>
@else
    <p>Segundo</p>
@endif

{{-- switch --}}
@switch($phone)
    @case(100)
        <h1>Valor 100</h1>
        @break
    @case(200)
        <h1>Valor 200</h1>
        @break
    @case(300)
        <h1>Valor 300</h1>
        @break
    @default
        <h1>Outro!</h1>
@endswitch

{{-- se não existir --}}
@empty($phone)
    <p>Não existe</p>
@else
    <p>existe</p>
@endempty

{{-- se existe --}}
@isset($phone)
    <p>Existe</p>
@else
    <p>Não existe</p>
@endisset

{{-- se for falço --}}
@unless($phone == 100)
    <p>Ok</p>
@endunless


@endsection
