@extends('layouts/main_layout')
@section('content')
<h1>testeeeeeeeeeeeeeeeeeeeeeeeeee</h1>
{{-- saber o tipo de env --}}
{{-- se é do tipo procution --}}
@production
    <p>Estou em ambiente de produção</p>
@else
    <p>Não estou em produção</p>
@endproduction

{{-- se é local --}}
@env(['local', 'development'])
    <p>Estou no ambiente {{env('APP_ENV')}}</p> {{-- mostra o tipo de env setado --}}
@endenv

{{-- formulario --}}
<form action="{{route('submit2')}}" method="post">
    @csrf

    <input type="text" name="name">
    {{-- mostra erro --}}
    @error('name')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
    <br>
    <input type="text" name="country">
    {{-- mostra erro --}}
    @error('country')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror

    <button type="submit">Enviar</button>
</form>

@endsection
