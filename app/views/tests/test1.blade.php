@extends('mastertester')


@section('header')
    @parent

    This is some kind of 
    {{$greeting . " " . $sustantivo}}

@stop


@section('pagebody')
    This is another kind of 

    @foreach($greetings as $greeting)
        {{ $greeting }}
    @endforeach

    test.

@stop


@section('footer')

@stop

