@extends('base')

@section('video')
  @include('video') 
@stop

@section('listaespera')
@foreach ($paciente as $p)

  <tr>
    <td>
      {{$p->expediente}}
    </td>
    <td>
      {{$p->nombre}}
    </td>
  </tr>

@endforeach
@stop

@section('content') 
  <h1> {{$en_turno->nombre}}
  <br>
  <small>{{$en_turno->expediente}}</small></h1>
  <h1> {{$en_turno->consultorio}}</h1>
@endsection