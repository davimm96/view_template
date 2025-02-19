@extends('layouts/main_layout')
@section('content')

<p class="display-1 text-center">Hellow world</p>
{{-- for --}}
@for($index = 0; $index < 5; $index++)
    <h1>{{$index}}</h1>
@endfor

{{-- foreach --}}
@foreach($cities as $city)
    <h1>{{$city}}</h1>
@endforeach

{{-- forelse, mistura de for com else--}}
@forelse($names as $name)
    <h1>{{$name}}</h1>
@empty
    <p>Names está vazio</p>
@endforelse

{{-- while --}}
@while($indice < 20)
    <p>Indice: {{$indice}}</p>
    @php
        $indice++;
    @endphp
@endwhile

{{-- usando o continue e break --}}
@for ($index = 0; $index < 10; $index++)
    {{-- continue --}}
    @if($index == 5)
        @continue
    @endif

    <p>Index: {{$index}}</p>

    {{-- break --}}
    @if($index == 7)
        @break
    @endif
@endfor

{{-- loop variable --}}
@foreach ($cities as $city)
    <h1>{{$city}}</h1>
    {{-- indice --}}
    <h3>{{$loop->index}}</h3>

    {{-- menssagem na primeira linha --}}
    @if($loop->first)
        <h3>Primeira cidade</h3>
    @endif

    {{-- menssagem na ultima linha --}}
    @if($loop->last)
        <h3>Última cidade</h3>
    @endif
@endforeach

@endsection
