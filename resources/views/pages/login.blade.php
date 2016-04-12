
@extends('layouts.layout')

@section('title')
    login page
@stop

@section('body')

    @include('layouts.menu')

    <div class="content">
        <div class="title">hier gaan mensen inloggen</div>
        <div class="title">{{$name}}</div>
    </div>

    @if($loginStatus == true)
        hello mate
    @else
        please register
    @endif

@stop
